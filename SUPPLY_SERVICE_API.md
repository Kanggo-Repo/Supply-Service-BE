# Supply Service API

Dokumen ini mencatat surface API `supply-service-be` yang sudah hidup sampai `Wave 7`.

## Kenapa tetap perlu dites sebelum Wave 8

Perlu. Alasannya:

- `Wave 1-3` sudah membentuk contract dasar supply: reference, material owner API, unit API, settings, audit/history, dan recycle bin.
- `Wave 4-7` sudah menambah store network CRUD, snapshot sync, location material availability query, store search/radius capability, dan compatibility contract untuk donor FE 1:1.
- test feature yang sudah ada memverifikasi behavior inti, tetapi tetap perlu smoke test manual/integration untuk memastikan payload, auth header, dan urutan lifecycle cocok untuk consumer nyata seperti `supply-service-fe` dan nanti `calculation-service-be`.

## Status saat ini

- automated test: `41` test hijau
- auth service: private service-to-service
- actor context: header transisi dari caller tepercaya
- base path: `/api/v1`

## Security Headers

Semua endpoint API supply saat ini memakai trusted service caller middleware.

Header wajib:

```http
X-Service-Name: supply-fe
X-Service-Token: <token sesuai env/service caller>
```

Header actor transisi yang direkomendasikan:

```http
X-Actor-Id: 123
X-Actor-Name: Nama User
X-Actor-Email: user@example.com
X-Request-Id: request-unik-opsional
```

Catatan:

- trusted callers sekarang dibaca dari [config/supply_security.php](/C:/Users/ekaga/OneDrive/Documents/Code/K-3Repo/supply-service-be/config/supply_security.php:1)
- mapping default saat ini:
  - `supply-fe` -> `SUPPLY_FE_SERVICE_TOKEN`
  - `calculation-service-be` -> `CALCULATION_SERVICE_BE_TOKEN`

## Supported Families

Family material yang sudah dikenali:

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

### Reference API

#### `GET /api/v1/reference/materials`

Query opsional:

- `families[]=brick`
- `families[]=cement`

Tujuan:

- unified read reference untuk consumer

#### `POST /api/v1/reference/materials/by-ids`

Body:

```json
{
  "items": [
    {
      "family": "brick",
      "ids": [1, 2]
    },
    {
      "family": "cement",
      "ids": [3]
    }
  ]
}
```

#### `GET /api/v1/reference/materials/filter-metadata`

Contoh:

```http
GET /api/v1/reference/materials/filter-metadata?family=brick&fields[]=brand&fields[]=form
```

#### `GET /api/v1/reference/stores`

#### `GET /api/v1/reference/stores/{storeId}/locations`

#### `GET /api/v1/reference/locations`

#### `GET /api/v1/reference/locations/{locationId}/availability`

#### `POST /api/v1/reference/locations/availability/bulk`

Body:

```json
{
  "location_ids": [1, 2, 3]
}
```

### Material Catalog API

#### `GET /api/v1/materials/{family}`

Query opsional:

- `search`
- `perPage`
- `sortBy`
- `sortDirection`
- `letter`

Contoh:

```http
GET /api/v1/materials/brick?search=alpha&sortBy=brand&sortDirection=asc&perPage=10
```

Response ringkas:

```json
{
  "data": [
    {
      "id": 1,
      "brand": "Alpha Brick",
      "type": "Roster",
      "family": "brick",
      "label": "Alpha Brick Roster"
    }
  ],
  "current_page": 1,
  "per_page": 10,
  "total": 1,
  "last_page": 1
}
```

#### `GET /api/v1/materials/{family}/{id}`

#### `POST /api/v1/materials/{family}`

Contoh body `brick`:

```json
{
  "brand": "Alpha Brick",
  "type": "Roster",
  "form": "Persegi",
  "dimension_length": 20,
  "dimension_width": 10,
  "dimension_height": 5,
  "price_per_piece": 1200
}
```

Contoh body `cement`:

```json
{
  "cement_name": "Semen Alpha Portland",
  "brand": "Alpha Cement",
  "type": "Portland",
  "package_unit": "zak",
  "package_weight_gross": 50,
  "package_weight_net": 40,
  "package_price": 72000,
  "price_unit": "kg",
  "comparison_price_per_kg": 1800
}
```

#### `PUT /api/v1/materials/{family}/{id}`

Catatan:

- payload tidak perlu full object
- hanya field yang diizinkan per family yang boleh dikirim
- field liar akan ditolak `422`

#### `DELETE /api/v1/materials/{family}/{id}`

Effect:

- soft delete
- `deleted_by` diisi dari `X-Actor-Id`
- audit log `deleted` dibuat

### Material History API

#### `GET /api/v1/materials/{family}/{id}/history`

Response ringkas:

```json
{
  "data": [
    {
      "id": 10,
      "action": "updated",
      "request_batch": "req-123",
      "edited_at": "2026-05-22T06:00:00+07:00",
      "actor": {
        "id": 1,
        "name": "Supply Operator",
        "email": "operator@example.test"
      },
      "changes": [
        {
          "field": "brand",
          "label": "Merek",
          "from": "Alpha Brick",
          "to": "Bravo Brick"
        }
      ]
    }
  ],
  "material": {
    "id": 1,
    "family": "brick",
    "label": "Bravo Brick Roster"
  }
}
```

#### `POST /api/v1/materials/{family}/{id}/history/{logId}/restore`

Effect:

- restore nilai material ke snapshot `after_values` dari log target
- action audit baru `restored` dibuat

### Recycle Bin API

#### `GET /api/v1/materials/recycle-bin`

Response ringkas:

```json
{
  "data": {
    "summary": {
      "brick": 1
    },
    "items": [
      {
        "id": 1,
        "family": "brick",
        "label": "Alpha Brick Roster",
        "deleted_at": "2026-05-22T06:00:00+07:00",
        "deleted_by": {
          "id": 1,
          "name": "Supply Operator",
          "email": "operator@example.test"
        }
      }
    ]
  }
}
```

#### `POST /api/v1/materials/recycle-bin/{family}/{id}/restore`

Effect:

- restore soft deleted material
- audit log `restored` dibuat

#### `DELETE /api/v1/materials/recycle-bin/{family}/{id}`

Effect:

- hard delete dari database

### Units API

#### `GET /api/v1/units`

Query opsional:

- `material_type`
- `sort_by`
- `sort_direction`
- `per_page`

#### `GET /api/v1/units/material-types`

#### `GET /api/v1/units/grouped`

#### `GET /api/v1/units/{id}`

#### `POST /api/v1/units`

Body:

```json
{
  "code": "sak",
  "name": "Sak",
  "package_weight": 40,
  "description": "Kemasan semen",
  "material_types": ["cement", "sand"]
}
```

#### `PUT /api/v1/units/{id}`

#### `DELETE /api/v1/units/{id}`

### Material Settings API

#### `GET /api/v1/material-settings`

#### `PUT /api/v1/material-settings`

Body:

```json
{
  "items": [
    {
      "material_type": "brick",
      "is_visible": true,
      "display_order": 0
    },
    {
      "material_type": "steel",
      "is_visible": true,
      "display_order": 4
    }
  ]
}
```

### Store Search Radius Settings API

#### `GET /api/v1/settings/store-search-radius`

Response ringkas:

```json
{
  "data": {
    "project_store_radius_default_km": 10,
    "project_store_radius_final_km": 15
  }
}
```

#### `PUT /api/v1/settings/store-search-radius`

Body:

```json
{
  "project_store_radius_default_km": 12.5,
  "project_store_radius_final_km": 18
}
```

### Store Network API

#### `GET /api/v1/stores`

Query opsional:

- `search`
- `perPage`
- `sortBy`
- `sortDirection`

#### `POST /api/v1/stores`

Body:

```json
{
  "name": "TB Supply Baru"
}
```

#### `GET /api/v1/stores/{id}`

#### `PUT /api/v1/stores/{id}`

Body:

```json
{
  "name": "TB Supply Update"
}
```

Effect:

- rename store
- snapshot `store` pada material yang terhubung ikut disinkronkan

#### `DELETE /api/v1/stores/{id}`

Effect:

- delete store
- lokasi ikut hilang via cascade
- `store_location_id` material yang terhubung dilepas

### Store Locations API

#### `GET /api/v1/stores/{storeId}/locations`

#### `POST /api/v1/stores/{storeId}/locations`

Body:

```json
{
  "address": "Jl. Lokasi Baru",
  "city": "Bogor",
  "province": "Jawa Barat",
  "contact_name": "Admin Toko",
  "contact_phone": "08123456789"
}
```

#### `GET /api/v1/stores/{storeId}/locations/{locationId}`

#### `PUT /api/v1/stores/{storeId}/locations/{locationId}`

Effect:

- update lokasi
- snapshot `address` pada material yang memakai lokasi ini ikut disinkronkan

#### `DELETE /api/v1/stores/{storeId}/locations/{locationId}`

Effect:

- delete lokasi
- availability link terhapus via cascade
- `store_location_id` material yang terhubung dilepas

#### `GET /api/v1/stores/{storeId}/locations/{locationId}/materials`

Query opsional:

- `type=brick`
- `type=cement`

Response ringkas:

```json
{
  "data": [
    {
      "type": "cement",
      "label": "Semen",
      "count": 1,
      "items": [
        {
          "id": 2,
          "family": "cement",
          "label": "Cement Bravo Portland"
        }
      ]
    }
  ]
}
```

### Store Search API

#### `GET /api/v1/store-search/search?q=TB%20Search%20-%20Jl.%20Pagedangan`

#### `GET /api/v1/store-search/locations-by-store?store=TB%20Search`

Behavior:

- memilih kandidat lokasi paling lengkap untuk autocomplete

#### `GET /api/v1/store-search/all-stores?search=TB`

#### `GET /api/v1/store-search/addresses-by-store?store=TB%20Search`

#### `POST /api/v1/store-search/quick-create`

Body:

```json
{
  "input": "TB. An-An - Jl. Lokasi Baru"
}
```

Behavior:

- reuse lokasi existing bila match
- buat lokasi baru bila address baru
- kembalikan `422` + `requires_location_selection=true` bila satu toko punya lebih dari satu kandidat lokasi valid

## Minimal Smoke Test Sebelum Wave 8

Urutan yang direkomendasikan:

1. verifikasi auth gagal tanpa `X-Service-Name` dan `X-Service-Token`
2. verifikasi `GET /api/v1/reference/materials`
3. create 1 material baru
4. update material tersebut
5. lihat history material
6. restore ke log create/update tertentu
7. soft delete material
8. cek recycle bin
9. restore dari recycle bin
10. create/update/delete unit
11. read/update material settings
12. create/update/delete store
13. create/update/delete store location
14. cek location materials endpoint
15. cek store search dan quick create
16. read/update store search radius settings

Kalau semua lolos, kontrak backend supply cukup aman untuk menutup `Wave 7`.

## Panduan Testing Manual Dengan Postman

Panduan ini memakai Postman biasa, tanpa collection generator.

### 1. Jalankan service lebih dulu

Pastikan `supply-service-be` sudah jalan, misalnya:

```bash
php artisan serve
```

Default local URL yang umum dipakai:

- `http://127.0.0.1:8000`

### 2. Siapkan token trusted caller

Endpoint supply sekarang private. Jadi Postman harus mengirim header trusted service caller.

Cek konfigurasi di:

- [config/supply_security.php](/C:/Users/ekaga/OneDrive/Documents/Code/K-3Repo/supply-service-be/config/supply_security.php:1)

Yang perlu dipastikan:

- `X-Service-Name` cocok dengan caller yang didaftarkan, misalnya `supply-fe`
- `X-Service-Token` cocok dengan token env service tersebut

### 3. Buat Postman Environment

Buat environment misalnya `supply-service-local`.

Isi variable:

- `base_url` = `http://127.0.0.1:8000`
- `service_name` = `supply-fe`
- `service_token` = isi token sesuai `SUPPLY_FE_SERVICE_TOKEN`
- `actor_id` = `1`
- `actor_name` = nama user uji
- `actor_email` = email user uji
- `brick_id` = kosongkan dulu
- `history_log_id` = kosongkan dulu
- `unit_id` = kosongkan dulu

### 4. Header yang dipakai di setiap request

Masuk ke tab `Headers` di Postman dan isi:

- `X-Service-Name` = `{{service_name}}`
- `X-Service-Token` = `{{service_token}}`
- `X-Actor-Id` = `{{actor_id}}`
- `X-Actor-Name` = `{{actor_name}}`
- `X-Actor-Email` = `{{actor_email}}`

Untuk request JSON, tambahkan juga:

- `Content-Type` = `application/json`

### 5. Test auth lebih dulu

Request:

- `GET {{base_url}}/api/v1/reference/materials`

Lakukan 2 kali:

1. tanpa header trusted caller
   expected: `401`
2. dengan header trusted caller lengkap
   expected: `200`

Kalau langkah ini gagal, jangan lanjut dulu ke endpoint lain.

### 6. Test reference API

#### Materials reference

Request:

- `GET {{base_url}}/api/v1/reference/materials?families[]=brick`

Expected:

- status `200`
- response punya key `data`

#### Materials by ids

Request:

- `POST {{base_url}}/api/v1/reference/materials/by-ids`

Body `raw -> JSON`:

```json
{
  "items": [
    {
      "family": "brick",
      "ids": [1]
    }
  ]
}
```

#### Filter metadata

Request:

- `GET {{base_url}}/api/v1/reference/materials/filter-metadata?family=brick&fields[]=brand&fields[]=form`

#### Stores and locations

Request:

- `GET {{base_url}}/api/v1/reference/stores`
- `GET {{base_url}}/api/v1/reference/locations`

### 7. Test material lifecycle

#### Create material

Request:

- `POST {{base_url}}/api/v1/materials/brick`

Body:

```json
{
  "brand": "Brick Alpha",
  "type": "Roster",
  "form": "Persegi",
  "dimension_length": 20,
  "dimension_width": 10,
  "dimension_height": 5,
  "price_per_piece": 1200
}
```

Expected:

- status `201`
- response `data.id` terisi

Setelah response sukses, buka tab `Tests` dan isi:

```javascript
const json = pm.response.json();
pm.environment.set("brick_id", json.data.id);
```

#### Get detail

Request:

- `GET {{base_url}}/api/v1/materials/brick/{{brick_id}}`

#### Update material

Request:

- `PUT {{base_url}}/api/v1/materials/brick/{{brick_id}}`

Body:

```json
{
  "brand": "Brick Bravo",
  "price_per_piece": 1500
}
```

Expected:

- status `200`
- `data.brand = Brick Bravo`

#### Negative validation test

Request:

- `POST {{base_url}}/api/v1/materials/cement`

Body:

```json
{
  "brand": "Cement Alpha",
  "unknown_field": "should fail"
}
```

Expected:

- status `422`

### 8. Test material history

#### Get history

Request:

- `GET {{base_url}}/api/v1/materials/brick/{{brick_id}}/history`

Expected:

- status `200`
- ada item `created` dan `updated`

Kalau mau simpan log id pertama untuk restore, isi tab `Tests`:

```javascript
const json = pm.response.json();
pm.environment.set("history_log_id", json.data[0].id);
```

Kalau mau restore ke log yang lebih lama, pilih id yang sesuai dari response.

#### Restore history

Request:

- `POST {{base_url}}/api/v1/materials/brick/{{brick_id}}/history/{{history_log_id}}/restore`

Expected:

- status `200`
- response message sukses
- nilai material berubah sesuai snapshot log target

### 9. Test recycle bin

#### Soft delete material

Request:

- `DELETE {{base_url}}/api/v1/materials/brick/{{brick_id}}`

Expected:

- status `200`

#### List recycle bin

Request:

- `GET {{base_url}}/api/v1/materials/recycle-bin`

Expected:

- status `200`
- material yang tadi dihapus muncul di `data.items`

#### Restore from recycle bin

Request:

- `POST {{base_url}}/api/v1/materials/recycle-bin/brick/{{brick_id}}/restore`

Expected:

- status `200`

#### Permanent delete

Kalau mau uji hard delete:

1. hapus lagi materialnya lewat endpoint delete biasa
2. lalu request:

- `DELETE {{base_url}}/api/v1/materials/recycle-bin/brick/{{brick_id}}`

Expected:

- status `200`
- material hilang permanen dari DB

### 10. Test units API

#### Create unit

Request:

- `POST {{base_url}}/api/v1/units`

Body:

```json
{
  "code": "sak",
  "name": "Sak",
  "package_weight": 40,
  "description": "Kemasan semen",
  "material_types": ["cement", "sand"]
}
```

Set `unit_id` dari response:

```javascript
const json = pm.response.json();
pm.environment.set("unit_id", json.data.id);
```

#### Read and update unit

Request:

- `GET {{base_url}}/api/v1/units`
- `GET {{base_url}}/api/v1/units/{{unit_id}}`
- `GET {{base_url}}/api/v1/units/material-types`
- `GET {{base_url}}/api/v1/units/grouped`

Update:

- `PUT {{base_url}}/api/v1/units/{{unit_id}}`

Body:

```json
{
  "code": "kg",
  "name": "Kilogram",
  "package_weight": 1,
  "description": "Kemasan kilogram",
  "material_types": ["cat"]
}
```

Delete:

- `DELETE {{base_url}}/api/v1/units/{{unit_id}}`

### 11. Test material settings API

#### Read settings

Request:

- `GET {{base_url}}/api/v1/material-settings`

#### Update settings

Request:

- `PUT {{base_url}}/api/v1/material-settings`

Body:

```json
{
  "items": [
    {
      "material_type": "brick",
      "is_visible": true,
      "display_order": 0
    },
    {
      "material_type": "steel",
      "is_visible": true,
      "display_order": 4
    }
  ]
}
```

Expected:

- status `200`
- response `message` sukses

### 12. Test store network API

#### Create store

Request:

- `POST {{base_url}}/api/v1/stores`

Body:

```json
{
  "name": "TB Supply Postman"
}
```

Set `store_id` dari response:

```javascript
const json = pm.response.json();
pm.environment.set("store_id", json.data.id);
```

#### Create location

Request:

- `POST {{base_url}}/api/v1/stores/{{store_id}}/locations`

Body:

```json
{
  "address": "Jl. Supply Postman No. 1",
  "city": "Bogor",
  "province": "Jawa Barat"
}
```

Set `location_id` dari response:

```javascript
const json = pm.response.json();
pm.environment.set("location_id", json.data.id);
```

#### Read and update store/location

Request:

- `GET {{base_url}}/api/v1/stores`
- `GET {{base_url}}/api/v1/stores/{{store_id}}`
- `PUT {{base_url}}/api/v1/stores/{{store_id}}`
- `GET {{base_url}}/api/v1/stores/{{store_id}}/locations`
- `GET {{base_url}}/api/v1/stores/{{store_id}}/locations/{{location_id}}`
- `PUT {{base_url}}/api/v1/stores/{{store_id}}/locations/{{location_id}}`

Contoh body update location:

```json
{
  "address": "Jl. Supply Postman No. 99",
  "city": "Depok",
  "province": "Jawa Barat"
}
```

#### Location materials

Request:

- `GET {{base_url}}/api/v1/stores/{{store_id}}/locations/{{location_id}}/materials`
- `GET {{base_url}}/api/v1/stores/{{store_id}}/locations/{{location_id}}/materials?type=brick`

#### Delete location and store

Request:

- `DELETE {{base_url}}/api/v1/stores/{{store_id}}/locations/{{location_id}}`
- `DELETE {{base_url}}/api/v1/stores/{{store_id}}`

### 13. Test store search API

#### All stores

- `GET {{base_url}}/api/v1/store-search/all-stores?search=TB`

#### Locations by store

- `GET {{base_url}}/api/v1/store-search/locations-by-store?store=TB%20Supply%20Postman`

#### Addresses by store

- `GET {{base_url}}/api/v1/store-search/addresses-by-store?store=TB%20Supply%20Postman`

#### Search autocomplete

- `GET {{base_url}}/api/v1/store-search/search?q=TB%20Supply%20Postman%20-%20Jl.`

#### Quick create

- `POST {{base_url}}/api/v1/store-search/quick-create`

Body:

```json
{
  "input": "TB. An-An - Jl. Lokasi Baru"
}
```

### 14. Test store search radius settings API

#### Read settings

Request:

- `GET {{base_url}}/api/v1/settings/store-search-radius`

#### Update settings

Request:

- `PUT {{base_url}}/api/v1/settings/store-search-radius`

Body:

```json
{
  "project_store_radius_default_km": 12.5,
  "project_store_radius_final_km": 18
}
```

### 15. Checklist lulus manual test

Manual test dianggap cukup aman kalau poin berikut lolos:

- trusted caller auth bekerja
- reference API merespons normal
- create/update/detail/delete material berjalan
- history bisa dibaca
- restore history berjalan
- recycle bin list/restore/force delete berjalan
- create/update/delete unit berjalan
- material settings read/write berjalan
- store create/update/delete berjalan
- store location create/update/delete berjalan
- location materials endpoint merespons grouping material
- store search dan quick create berjalan
- store search radius settings read/write berjalan

## Contoh Curl

Set env shell:

```bash
export SUPPLY_BASE_URL=http://127.0.0.1:8000
export SUPPLY_SERVICE_NAME=supply-fe
export SUPPLY_SERVICE_TOKEN=your-token
export ACTOR_ID=1
export ACTOR_NAME="Supply Operator"
export ACTOR_EMAIL="operator@example.test"
```

Contoh request:

```bash
curl "$SUPPLY_BASE_URL/api/v1/reference/materials?families[]=brick" \
  -H "X-Service-Name: $SUPPLY_SERVICE_NAME" \
  -H "X-Service-Token: $SUPPLY_SERVICE_TOKEN" \
  -H "X-Actor-Id: $ACTOR_ID" \
  -H "X-Actor-Name: $ACTOR_NAME" \
  -H "X-Actor-Email: $ACTOR_EMAIL"
```

Contoh create brick:

```bash
curl -X POST "$SUPPLY_BASE_URL/api/v1/materials/brick" \
  -H "Content-Type: application/json" \
  -H "X-Service-Name: $SUPPLY_SERVICE_NAME" \
  -H "X-Service-Token: $SUPPLY_SERVICE_TOKEN" \
  -H "X-Actor-Id: $ACTOR_ID" \
  -H "X-Actor-Name: $ACTOR_NAME" \
  -H "X-Actor-Email: $ACTOR_EMAIL" \
  -d '{
    "brand": "Brick Alpha",
    "type": "Roster",
    "form": "Persegi",
    "dimension_length": 20,
    "dimension_width": 10,
    "dimension_height": 5,
    "price_per_piece": 1200
  }'
```

## Catatan Penting

- dokumentasi ini menggambarkan surface yang sudah aktif sekarang, belum final blueprint akhir
- auth user final tetap menuju `IdP + SSO`; header actor di sini hanyalah mekanisme transisi
- family `nat` saat ini masih disupport di API, walaupun roadmap jangka panjang tetap perlu keputusan akhir soal model merge `nat` vs `cement.material_kind`
