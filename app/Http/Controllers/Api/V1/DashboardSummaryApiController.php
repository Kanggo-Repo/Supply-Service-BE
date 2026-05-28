<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Brick;
use App\Models\Cat;
use App\Models\Cement;
use App\Models\Ceramic;
use App\Models\Nat;
use App\Models\Sand;
use App\Models\Store;
use App\Models\Unit;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

class DashboardSummaryApiController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $materialCounts = [
            'brick' => Brick::query()->count(),
            'cat' => Cat::query()->count(),
            'cement' => Cement::query()->count(),
            'nat' => Nat::query()->count(),
            'sand' => Sand::query()->count(),
            'ceramic' => Ceramic::query()->count(),
        ];

        return response()->json([
            'data' => [
                'material_count' => array_sum($materialCounts),
                'unit_count' => Unit::query()->count(),
                'store_count' => Store::query()->count(),
                'chart_data' => [
                    'labels' => ['Bata', 'Cat', 'Semen', 'Nat', 'Pasir', 'Keramik'],
                    'data' => [
                        $materialCounts['brick'],
                        $materialCounts['cat'],
                        $materialCounts['cement'],
                        $materialCounts['nat'],
                        $materialCounts['sand'],
                        $materialCounts['ceramic'],
                    ],
                ],
                'recent_activities' => $this->recentActivities()
                    ->sortByDesc('created_at')
                    ->take(5)
                    ->values()
                    ->map(fn (object $activity): array => [
                        'name' => $activity->name,
                        'category' => $activity->category,
                        'category_color' => $activity->category_color,
                        'created_at_human' => $activity->created_at_human,
                    ])
                    ->all(),
            ],
        ]);
    }

    private function recentActivities(): Collection
    {
        return collect()
            ->concat($this->recentBricks())
            ->concat($this->recentCats())
            ->concat($this->recentCements())
            ->concat($this->recentNats())
            ->concat($this->recentSands())
            ->concat($this->recentCeramics());
    }

    private function recentBricks(): Collection
    {
        return Brick::query()
            ->latest()
            ->take(3)
            ->get()
            ->map(fn (Brick $item): object => (object) [
                'name' => trim("{$item->brand} {$item->type}"),
                'category' => 'Bata',
                'category_color' => 'danger',
                'created_at' => $item->created_at,
                'created_at_human' => optional($item->created_at)?->diffForHumans(),
            ]);
    }

    private function recentCats(): Collection
    {
        return Cat::query()
            ->latest()
            ->take(3)
            ->get()
            ->map(fn (Cat $item): object => (object) [
                'name' => trim("{$item->brand} {$item->color_name}"),
                'category' => 'Cat',
                'category_color' => 'info',
                'created_at' => $item->created_at,
                'created_at_human' => optional($item->created_at)?->diffForHumans(),
            ]);
    }

    private function recentCements(): Collection
    {
        return Cement::query()
            ->latest()
            ->take(3)
            ->get()
            ->map(fn (Cement $item): object => (object) [
                'name' => trim("{$item->brand} {$item->type}"),
                'category' => 'Semen',
                'category_color' => 'secondary',
                'created_at' => $item->created_at,
                'created_at_human' => optional($item->created_at)?->diffForHumans(),
            ]);
    }

    private function recentNats(): Collection
    {
        return Nat::query()
            ->latest()
            ->take(3)
            ->get()
            ->map(fn (Nat $item): object => (object) [
                'name' => trim("{$item->brand} {$item->nat_name}"),
                'category' => 'Nat',
                'category_color' => 'dark',
                'created_at' => $item->created_at,
                'created_at_human' => optional($item->created_at)?->diffForHumans(),
            ]);
    }

    private function recentSands(): Collection
    {
        return Sand::query()
            ->latest()
            ->take(3)
            ->get()
            ->map(fn (Sand $item): object => (object) [
                'name' => trim("{$item->brand} {$item->type}"),
                'category' => 'Pasir',
                'category_color' => 'warning',
                'created_at' => $item->created_at,
                'created_at_human' => optional($item->created_at)?->diffForHumans(),
            ]);
    }

    private function recentCeramics(): Collection
    {
        return Ceramic::query()
            ->latest()
            ->take(3)
            ->get()
            ->map(fn (Ceramic $item): object => (object) [
                'name' => trim("{$item->brand} {$item->type}"),
                'category' => 'Keramik',
                'category_color' => 'primary',
                'created_at' => $item->created_at,
                'created_at_human' => optional($item->created_at)?->diffForHumans(),
            ]);
    }
}
