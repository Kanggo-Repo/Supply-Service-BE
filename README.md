# Supply Service BE

`Supply Service BE` adalah backend owner untuk domain material, unit, store, store location, recycle bin material, material history, dan store search radius. Repo ini juga menjadi source reference supply untuk `calculation-service-be` dan sebagai owner API utama bagi `supply-service-fe`.

## Tanggung Jawab Utama

- CRUD catalog material per family
- history perubahan material dan restore dari history
- recycle bin material dan permanent delete
- CRUD unit material
- visibility dan order material settings
- CRUD store dan store location
- store search dan quick create
- store search radius setting
- sidebar summary dan dashboard summary untuk service lain
- menyediakan unified reference API untuk consumer lain

## Posisi Dalam Arsitektur

```text
supply-service-fe
  -> supply-service-be

platform-service-be
  -> supply-service-be (dashboard summary, store sidebar summary)

calculation-service-be
  -> supply-service-be (reference materials, stores, locations, formulas)
```

## Auth dan Security Model

Repo ini adalah **private service-to-service API**.

Tidak ada auth end-user browser langsung ke repo ini. Semua caller harus mengirim header trusted service.

### Trusted Caller Headers

- `X-Service-Name`
- `X-Service-Token`

### Actor Context Headers

Disarankan diteruskan oleh FE atau upstream service:

- `X-Actor-Id`
- `X-Actor-Name`
- `X-Actor-Email`
- `X-Request-Id`

Konfigurasi allowlist caller ada di [config/supply_security.php](./config/supply_security.php).

Caller yang saat ini disiapkan:

- `supply-fe`
- `calculation-fe`
- `calculation-service-be`
- `platform-service-fe`
- `platform-service-be`

## Domain Material Families

Family material yang didukung saat ini:

- `brick`
- `cement`
- `sand`
- `cat`
- `ceramic`
- `nat`
- `steel`
- `kasa_gypsum`
- `paku_tembak`
- `paku`

## API Surface

Base path utama adalah `/api/v1`.

### Health dan Debug

- `GET /api/v1/health`
- `GET /api/v1/health/json`
- `GET /api/v1/debug/sentry` di `local` dan `testing`

### Reference API

Prefix: `/api/v1/reference`

- `GET /materials`
- `POST /materials/by-ids`
- `GET /materials/filter-metadata`
- `GET /stores`
- `GET /stores/{storeId}/locations`
- `GET /locations`
- `POST /locations/availability/bulk`
- `GET /locations/{locationId}/availability`
- `GET /brick-installation-types`
- `GET /mortar-formulas`

### Dashboard dan Sidebar Signals

- `GET /api/v1/dashboard-summary`
- `GET /api/v1/materials/summary`
- `GET /api/v1/stores/sidebar-summary`

### Material Catalog

- `GET /api/v1/materials/{family}`
- `POST /api/v1/materials/{family}`
- `GET /api/v1/materials/{family}/{id}`
- `PUT /api/v1/materials/{family}/{id}`
- `DELETE /api/v1/materials/{family}/{id}`

### Material History

- `GET /api/v1/materials/{family}/{id}/history`
- `POST /api/v1/materials/{family}/{id}/history/{logId}/restore`

### Recycle Bin

- `GET /api/v1/materials/recycle-bin`
- `POST /api/v1/materials/recycle-bin/{family}/{id}/restore`
- `DELETE /api/v1/materials/recycle-bin/{family}/{id}`

### Units

- `GET /api/v1/units/material-types`
- `GET /api/v1/units/grouped`
- `GET /api/v1/units`
- `GET /api/v1/units/{id}`
- `POST /api/v1/units`
- `PUT /api/v1/units/{id}`
- `DELETE /api/v1/units/{id}`

### Material Settings

- `GET /api/v1/material-settings`
- `PUT /api/v1/material-settings`

### Store Search Radius

- `GET /api/v1/settings/store-search-radius`
- `PUT /api/v1/settings/store-search-radius`

### Store dan Store Location

- `GET /api/v1/stores`
- `POST /api/v1/stores`
- `GET /api/v1/stores/{id}`
- `PUT /api/v1/stores/{id}`
- `DELETE /api/v1/stores/{id}`
- `GET /api/v1/stores/{storeId}/locations`
- `POST /api/v1/stores/{storeId}/locations`
- `GET /api/v1/stores/{storeId}/locations/{locationId}`
- `PUT /api/v1/stores/{storeId}/locations/{locationId}`
- `DELETE /api/v1/stores/{storeId}/locations/{locationId}`
- `GET /api/v1/stores/{storeId}/locations/{locationId}/materials`

### Store Search

- `GET /api/v1/store-search/search`
- `GET /api/v1/store-search/locations-by-store`
- `GET /api/v1/store-search/all-stores`
- `GET /api/v1/store-search/addresses-by-store`
- `POST /api/v1/store-search/quick-create`

## Dokumentasi API Detail

Lihat dokumen berikut untuk payload, contoh request, dan smoke test manual yang lebih rinci:

- [SUPPLY_SERVICE_API.md](./SUPPLY_SERVICE_API.md)

Dokumen itu mencakup:

- contract endpoint
- contoh payload family material
- alur testing Postman
- curl examples
- smoke test checklist

## Konfigurasi Environment Penting

Salin `.env.example` menjadi `.env`, lalu isi minimal grup berikut.

### App dan Data Store

- `APP_NAME`
- `APP_ENV`
- `APP_DEBUG`
- `APP_URL`
- `DB_*`
- `REDIS_*`

### Trusted Callers

- `SUPPLY_SERVICE_TOKEN`
- `CALCULATION_SERVICE_TOKEN`
- `PLATFORM_SERVICE_TOKEN`

### Observability

- `SENTRY_*`
- `TELESCOPE_*`
- `HEALTH_*`

## Local Development Setup

### Prasyarat

- PHP 8.3+
- Composer
- Node.js dan npm
- MySQL atau MariaDB
- Redis

### Instalasi

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```

### Menjalankan Aplikasi

```bash
composer run dev
```

Atau manual:

```bash
php artisan serve --host=127.0.0.1 --port=8008
php artisan queue:listen --tries=1
npm run dev
```

## Development Commands

```bash
php artisan test
composer analyse
composer quality
vendor/bin/pint
npm run build
```

## Testing Strategy

Fokus test utama:

- trusted caller auth
- reference API
- material catalog
- history dan restore
- recycle bin
- units API
- material settings
- store network
- store search radius
- dashboard summary
- Sentry / Telescope / health baseline

## Observability dan Operations

Repo ini sudah memiliki baseline berikut:

- **PHPStan + Larastan**
- **Spatie Laravel Health**
- **Sentry**
- **Laravel Telescope**
- **request correlation** dengan `X-Request-Id`

## Docker dan Deploy

Artefak deploy yang tersedia:

- `compose.yml`
- `compose.staging.yml`
- `compose.production.yml`
- `Dockerfile`
- `Dockerfile.production`
- `.dockerignore`
- `docker/entrypoint.sh`

Pola production:

- multi-stage build
- `php-fpm`
- `queue`
- `scheduler`
- blue/green app service
- external network `frontend` dan `backend`

## CI

Workflow `.github/workflows/ci.yml` mencakup:

- `vendor/bin/pint --test`
- `composer analyse`
- `php artisan test`
- validasi compose

## Struktur Folder Penting

- `app/Http/Controllers/Api/V1` seluruh surface API supply
- `app/Models` material family models, store, location, unit, audit/history
- `app/Services` logic family parsing, summary, sync snapshot, search helpers
- `config/supply_security.php` trusted caller allowlist

## Troubleshooting

### 401 dari hampir semua endpoint

Cek:

- `X-Service-Name`
- `X-Service-Token`
- env token trusted caller
- `config/supply_security.php`

### Store atau location snapshot tidak ikut sinkron

Cek logic update store / location dan event audit di Telescope.

### Calculation service gagal ambil reference supply

Cek:

- `CALCULATION_SERVICE_TOKEN`
- base URL supply dari calculation backend
- health endpoint supply

## Related Repositories

- `supply-service-fe`
- `platform-service-be`
- `calculation-service-be`