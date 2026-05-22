<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\StoreLocation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class StoreSearchApiController extends Controller
{
    public function search(Request $request): JsonResponse
    {
        $query = trim((string) $request->query('q', ''));

        if ($query === '') {
            return response()->json([]);
        }

        $storeName = $this->parseStoreInput($query)['store_name'];

        $stores = Store::query()
            ->with('locations')
            ->where('name', 'like', '%'.$storeName.'%')
            ->orderBy('name')
            ->limit(10)
            ->get()
            ->flatMap(fn (Store $store): Collection => $this->preferredLocationsForAutocomplete($store)
                ->map(fn (StoreLocation $location): array => $this->serializeLocation($store, $location)))
            ->filter(fn (array $item): bool => str_contains(strtolower($item['display_text']), strtolower($query)))
            ->values();

        return response()->json($stores);
    }

    public function locationsByStore(Request $request): JsonResponse
    {
        $storeName = trim((string) $request->query('store', ''));
        $limit = max(1, (int) $request->query('limit', 20));

        if ($storeName === '') {
            return response()->json([]);
        }

        $store = Store::query()->where('name', $storeName)->first();

        if (! $store) {
            return response()->json([]);
        }

        $locations = $this->preferredLocationsForAutocomplete($store)
            ->take($limit)
            ->map(fn (StoreLocation $location): array => $this->serializeLocation($store, $location))
            ->values();

        return response()->json($locations);
    }

    public function allStores(Request $request): JsonResponse
    {
        $search = trim((string) $request->query('search', ''));
        $limit = max(1, (int) $request->query('limit', 20));

        $query = Store::query()->orderBy('name');

        if ($search !== '') {
            $query->where('name', 'like', '%'.$search.'%');
        }

        return response()->json(
            $query->limit($limit)->pluck('name')->unique()->values()
        );
    }

    public function addressesByStore(Request $request): JsonResponse
    {
        $storeName = trim((string) $request->query('store', ''));
        $search = trim((string) $request->query('search', ''));
        $limit = max(1, (int) $request->query('limit', 20));

        if ($storeName === '') {
            return response()->json([]);
        }

        $store = Store::query()->where('name', $storeName)->first();

        if (! $store) {
            return response()->json([]);
        }

        $addresses = $this->preferredLocationsForAutocomplete($store)
            ->map(fn (StoreLocation $location): string => trim((string) $location->resolved_address))
            ->filter()
            ->unique()
            ->values();

        if ($search !== '') {
            $addresses = $addresses
                ->filter(fn (string $address): bool => str_contains(strtolower($address), strtolower($search)))
                ->values();
        }

        return response()->json($addresses->take($limit)->values());
    }

    public function quickCreate(Request $request): JsonResponse
    {
        $input = trim((string) $request->input('input', ''));

        if ($input === '') {
            return response()->json([
                'error' => 'Input cannot be empty',
            ], 422);
        }

        $parsed = $this->parseStoreInput($input);
        $storeName = $parsed['store_name'];
        $address = $parsed['address'];

        if ($storeName === '') {
            return response()->json([
                'error' => 'Store name cannot be empty',
            ], 422);
        }

        return DB::transaction(function () use ($storeName, $address): JsonResponse {
            $store = Store::query()
                ->whereRaw('LOWER(TRIM(name)) = ?', [$this->normalizeText($storeName)])
                ->first();

            if (! $store) {
                $store = Store::query()->create([
                    'name' => $storeName,
                ]);
            }

            $candidateLocations = $this->preferredLocationsForAutocomplete($store);
            $normalizedAddress = $this->normalizeText($address);

            $location = $candidateLocations->first(function (StoreLocation $location) use ($normalizedAddress): bool {
                if ($normalizedAddress === '') {
                    return blank($location->address) && blank($location->formatted_address);
                }

                return in_array($normalizedAddress, array_filter([
                    $this->normalizeText($location->address),
                    $this->normalizeText($location->formatted_address),
                    $this->normalizeText($location->full_address),
                    $this->normalizeText($location->resolved_address),
                ]), true);
            });

            if (! $location && $normalizedAddress === '' && $candidateLocations->count() === 1) {
                $location = $candidateLocations->first();
            }

            if (! $location && $candidateLocations->count() > 1) {
                return response()->json([
                    'error' => 'Toko memiliki lebih dari satu lokasi. Pilih lokasi toko secara eksplisit.',
                    'requires_location_selection' => true,
                    'store_name' => $store->name,
                    'locations' => $candidateLocations
                        ->map(fn (StoreLocation $candidateLocation): array => $this->serializeLocation($store, $candidateLocation))
                        ->values(),
                ], 422);
            }

            if (! $location) {
                $location = $store->locations()->create([
                    'address' => $address !== '' ? $address : null,
                ]);
            }

            return response()->json([
                ...$this->serializeLocation($store, $location),
                'is_new' => $location->wasRecentlyCreated,
            ]);
        });
    }

    /**
     * @return array{store_name: string, address: string}
     */
    private function parseStoreInput(string $input): array
    {
        $parts = explode(' - ', $input, 2);

        if (count($parts) < 2) {
            $parts = [$input, ''];
        }

        return [
            'store_name' => trim($parts[0] ?? ''),
            'address' => trim($parts[1] ?? ''),
        ];
    }

    /**
     * @return Collection<int, StoreLocation>
     */
    private function preferredLocationsForAutocomplete(Store $store): Collection
    {
        $locations = $store->locations()->get();

        if ($locations->isEmpty()) {
            return $locations;
        }

        $scored = $locations->map(function (StoreLocation $location): array {
            $score = 0;

            if (filled($location->formatted_address)) {
                $score += 4;
            }

            if (filled($location->address)) {
                $score += 1;
            }

            if (filled($location->city)) {
                $score += 2;
            }

            if (filled($location->province)) {
                $score += 1;
            }

            if (is_numeric($location->latitude) && is_numeric($location->longitude)) {
                $score += 3;
            }

            return [
                'location' => $location,
                'score' => $score,
            ];
        });

        $maxScore = (int) ($scored->max('score') ?? 0);

        if ($maxScore <= 0) {
            return $locations;
        }

        return $scored
            ->filter(fn (array $entry): bool => (int) $entry['score'] === $maxScore)
            ->pluck('location')
            ->values();
    }

    /**
     * @return array<string, mixed>
     */
    private function serializeLocation(Store $store, StoreLocation $location): array
    {
        $resolvedAddress = trim((string) ($location->resolved_address ?: $location->address ?: $location->formatted_address ?: $location->full_address));

        return [
            'id' => $location->id,
            'store_id' => $store->id,
            'store_name' => $store->name,
            'address' => $location->address,
            'formatted_address' => $location->formatted_address,
            'full_address' => $location->full_address,
            'resolved_address' => $resolvedAddress,
            'display_text' => $store->name.($resolvedAddress !== '' ? ' - '.$resolvedAddress : ''),
            'is_incomplete' => blank($location->city) || blank($location->province) || blank($location->contact_phone),
        ];
    }

    private function normalizeText(mixed $value): string
    {
        $text = strtolower(trim((string) $value));

        if ($text === '') {
            return '';
        }

        return trim((string) preg_replace('/\s+/', ' ', $text));
    }
}
