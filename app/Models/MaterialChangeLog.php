<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class MaterialChangeLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'material_table',
        'material_id',
        'material_kind',
        'user_id',
        'request_batch',
        'action',
        'changes',
        'before_values',
        'after_values',
        'edited_at',
    ];

    protected function casts(): array
    {
        return [
            'changes' => 'array',
            'before_values' => 'array',
            'after_values' => 'array',
            'edited_at' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public static function labelForField(string $field): string
    {
        return [
            'material_name' => 'Material',
            'cat_name' => 'Nama Cat',
            'cement_name' => 'Nama Semen',
            'nat_name' => 'Nama Nat',
            'sand_name' => 'Nama Pasir',
            'type' => 'Jenis',
            'brand' => 'Merek',
            'sub_brand' => 'Sub Merek',
            'form' => 'Bentuk',
            'surface' => 'Permukaan',
            'code' => 'Kode',
            'color' => 'Warna',
            'color_code' => 'Kode Warna',
            'color_name' => 'Nama Warna',
            'package_type' => 'Tipe Kemasan',
            'package_unit' => 'Satuan Kemasan',
            'packaging' => 'Kemasan',
            'dimension_length' => 'Dimensi P',
            'dimension_length_mm' => 'Dimensi P (mm)',
            'dimension_width' => 'Dimensi L',
            'dimension_height' => 'Dimensi T',
            'dimension_thickness' => 'Ketebalan',
            'dimension_body_diameter' => 'Diameter Badan',
            'dimension_head_diameter' => 'Diameter Kepala',
            'package_volume' => 'Volume Kemasan',
            'package_weight_gross' => 'Berat Kotor',
            'package_weight_net' => 'Berat Bersih',
            'volume' => 'Volume',
            'volume_unit' => 'Satuan Volume',
            'pieces_per_package' => 'Isi per Kemasan',
            'coverage_per_package' => 'Luas per Kemasan',
            'store' => 'Toko',
            'address' => 'Alamat',
            'store_location_id' => 'Lokasi Toko',
            'price_per_piece' => 'Harga per Buah',
            'package_price' => 'Harga Kemasan',
            'purchase_price' => 'Harga Beli',
            'price_per_package' => 'Harga per Kemasan',
            'comparison_price_per_m3' => 'Harga Komparasi / M3',
            'comparison_price_per_m' => 'Harga Komparasi / M',
            'comparison_price' => 'Harga Komparasi',
            'comparison_price_per_kg' => 'Harga Komparasi / Kg',
            'comparison_price_per_m2' => 'Harga Komparasi / M2',
            'mesiu_code' => 'Kode Mesiu',
            'mesiu_size' => 'Ukuran Mesiu',
            'mesiu_content' => 'Isi Mesiu',
            'paku_code' => 'Kode Paku',
            'paku_size' => 'Ukuran Paku',
            'paku_content' => 'Isi Paku',
            'package_weight' => 'Berat Isi',
            'package_content' => 'Jumlah Isi',
            'deleted_by' => 'Dihapus Oleh',
            'photo' => 'Foto',
        ][$field] ?? Str::headline(str_replace('_id', '', $field));
    }
}
