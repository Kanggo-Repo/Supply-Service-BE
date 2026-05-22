<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materials', function (Blueprint $table): void {
            $table->id();
            $table->string('material_name')->nullable();
            $table->string('type')->nullable();
            $table->string('photo')->nullable();
            $table->string('brand')->nullable();
            $table->string('sub_brand')->nullable();
            $table->string('code')->nullable();
            $table->string('color')->nullable();
            $table->string('form')->nullable();
            $table->string('package_unit')->nullable();
            $table->decimal('package_weight_gross', 10, 2)->nullable();
            $table->decimal('package_weight_net', 10, 2)->nullable();
            $table->decimal('package_volume', 30, 15)->nullable();
            $table->string('store')->nullable();
            $table->text('address')->nullable();
            $table->string('short_address')->nullable();
            $table->foreignId('store_location_id')->nullable()->constrained('store_locations')->nullOnDelete();
            $table->decimal('package_price', 15, 2)->nullable();
            $table->string('price_unit')->nullable();
            $table->decimal('comparison_price_per_kg', 15, 2)->nullable();
            $table->timestamps();
            $this->addSoftDeleteAuditColumns($table, 'materials');
        });

        Schema::create('bricks', function (Blueprint $table): void {
            $table->id();
            $table->string('material_name')->default('Bata');
            $table->string('type')->nullable();
            $table->string('photo')->nullable();
            $table->string('brand')->nullable();
            $table->string('form')->nullable();
            $table->decimal('dimension_length', 10, 2)->nullable();
            $table->decimal('dimension_width', 10, 2)->nullable();
            $table->decimal('dimension_height', 10, 2)->nullable();
            $table->decimal('package_volume', 30, 15)->nullable();
            $table->string('store')->nullable();
            $table->text('address')->nullable();
            $table->string('short_address')->nullable();
            $table->foreignId('store_location_id')->nullable()->constrained('store_locations')->nullOnDelete();
            $table->decimal('price_per_piece', 15, 2)->nullable();
            $table->decimal('comparison_price_per_m3', 15, 2)->nullable();
            $table->string('package_type')->default('eceran');
            $table->timestamps();
            $this->addSoftDeleteAuditColumns($table, 'bricks');

            $table->index('brand', 'idx_bricks_brand');
            $table->index('type', 'idx_bricks_type');
            $table->index('price_per_piece', 'idx_bricks_price_per_piece');
            $table->index(['brand', 'type'], 'idx_bricks_brand_type');
        });

        Schema::create('cements', function (Blueprint $table): void {
            $table->id();
            $table->string('cement_name')->nullable();
            $table->string('type')->nullable();
            $table->string('photo')->nullable();
            $table->string('brand')->nullable();
            $table->string('sub_brand')->nullable();
            $table->string('code')->nullable();
            $table->string('color')->nullable();
            $table->string('package_unit')->nullable();
            $table->decimal('package_weight_gross', 10, 2)->nullable();
            $table->decimal('package_weight_net', 10, 2)->nullable();
            $table->decimal('package_volume', 30, 15)->nullable();
            $table->string('store')->nullable();
            $table->text('address')->nullable();
            $table->string('short_address')->nullable();
            $table->foreignId('store_location_id')->nullable()->constrained('store_locations')->nullOnDelete();
            $table->decimal('package_price', 15, 2)->nullable();
            $table->string('price_unit')->nullable();
            $table->decimal('comparison_price_per_kg', 15, 2)->nullable();
            $table->string('material_kind')->default('cement');
            $table->string('nat_name')->nullable();
            $table->timestamps();
            $this->addSoftDeleteAuditColumns($table, 'cements');

            $table->index('brand', 'idx_cements_brand');
            $table->index('type', 'idx_cements_type');
            $table->index('package_price', 'idx_cements_package_price');
            $table->index('package_weight_net', 'idx_cements_package_weight_net');
            $table->index(['brand', 'type'], 'idx_cements_brand_type');
            $table->index('material_kind', 'idx_cements_material_kind');
        });

        Schema::create('sands', function (Blueprint $table): void {
            $table->id();
            $table->string('sand_name')->nullable();
            $table->string('type')->nullable();
            $table->string('photo')->nullable();
            $table->string('brand')->nullable();
            $table->string('package_unit')->nullable();
            $table->decimal('package_weight_gross', 10, 2)->nullable();
            $table->decimal('package_weight_net', 10, 2)->nullable();
            $table->decimal('dimension_length', 10, 2)->nullable();
            $table->decimal('dimension_width', 10, 2)->nullable();
            $table->decimal('dimension_height', 10, 2)->nullable();
            $table->decimal('package_volume', 30, 15)->nullable();
            $table->string('store')->nullable();
            $table->text('address')->nullable();
            $table->string('short_address')->nullable();
            $table->foreignId('store_location_id')->nullable()->constrained('store_locations')->nullOnDelete();
            $table->decimal('package_price', 15, 2)->nullable();
            $table->decimal('comparison_price_per_m3', 15, 2)->nullable();
            $table->timestamps();
            $this->addSoftDeleteAuditColumns($table, 'sands');

            $table->index('brand', 'idx_sands_brand');
            $table->index('type', 'idx_sands_type');
            $table->index('package_price', 'idx_sands_package_price');
            $table->index('comparison_price_per_m3', 'idx_sands_comparison_price_per_m3');
            $table->index(['brand', 'type'], 'idx_sands_brand_type');
        });

        Schema::create('cats', function (Blueprint $table): void {
            $table->id();
            $table->string('cat_name');
            $table->string('type')->nullable();
            $table->string('photo')->nullable();
            $table->string('brand')->nullable();
            $table->string('sub_brand')->nullable();
            $table->string('color_code')->nullable();
            $table->string('color_name')->nullable();
            $table->string('form')->nullable();
            $table->string('package_unit')->nullable();
            $table->decimal('package_weight_gross', 10, 2)->nullable();
            $table->decimal('package_weight_net', 10, 2)->nullable();
            $table->decimal('volume', 10, 2)->nullable();
            $table->string('volume_unit')->nullable();
            $table->string('store')->nullable();
            $table->text('address')->nullable();
            $table->string('short_address')->nullable();
            $table->foreignId('store_location_id')->nullable()->constrained('store_locations')->nullOnDelete();
            $table->decimal('purchase_price', 15, 2)->nullable();
            $table->string('price_unit')->nullable();
            $table->decimal('comparison_price_per_kg', 15, 2)->nullable();
            $table->timestamps();
            $this->addSoftDeleteAuditColumns($table, 'cats');

            $table->index('brand', 'idx_cats_brand');
            $table->index('purchase_price', 'idx_cats_purchase_price');
            $table->index('color_name', 'idx_cats_color_name');
            $table->index(['brand', 'color_name'], 'idx_cats_brand_color_name');
        });

        Schema::create('ceramics', function (Blueprint $table): void {
            $table->id();
            $table->string('material_name')->default('Keramik');
            $table->string('type')->nullable();
            $table->string('photo')->nullable();
            $table->string('brand')->nullable();
            $table->string('sub_brand')->nullable();
            $table->string('code')->nullable();
            $table->string('color')->nullable();
            $table->string('form')->nullable();
            $table->decimal('dimension_length', 10, 2)->nullable();
            $table->decimal('dimension_width', 10, 2)->nullable();
            $table->decimal('dimension_thickness', 10, 2)->nullable();
            $table->string('packaging')->nullable();
            $table->integer('pieces_per_package')->nullable();
            $table->decimal('coverage_per_package', 10, 4)->nullable();
            $table->string('surface')->nullable();
            $table->string('store')->nullable();
            $table->text('address')->nullable();
            $table->foreignId('store_location_id')->nullable()->constrained('store_locations')->nullOnDelete();
            $table->decimal('price_per_package', 15, 2)->nullable();
            $table->decimal('comparison_price_per_m2', 15, 2)->nullable();
            $table->timestamps();
            $this->addSoftDeleteAuditColumns($table, 'ceramics');
        });

        Schema::create('nats', function (Blueprint $table): void {
            $table->id();
            $table->string('nat_name')->nullable();
            $table->string('type')->nullable();
            $table->string('photo')->nullable();
            $table->string('brand')->nullable();
            $table->string('sub_brand')->nullable();
            $table->string('code')->nullable();
            $table->string('color')->nullable();
            $table->string('package_unit')->nullable();
            $table->decimal('package_weight_gross', 10, 2)->nullable();
            $table->decimal('package_weight_net', 10, 2)->nullable();
            $table->decimal('package_volume', 30, 15)->nullable();
            $table->string('store')->nullable();
            $table->text('address')->nullable();
            $table->foreignId('store_location_id')->nullable()->constrained('store_locations')->nullOnDelete();
            $table->decimal('package_price', 15, 2)->nullable();
            $table->string('price_unit')->nullable();
            $table->decimal('comparison_price_per_kg', 15, 2)->nullable();
            $table->timestamps();
            $this->addSoftDeleteAuditColumns($table, 'nats');

            $table->index(['brand', 'code'], 'idx_nats_brand_code');
        });

        Schema::create('steels', function (Blueprint $table): void {
            $table->id();
            $table->string('material_name')->default('Besi');
            $table->string('type')->nullable();
            $table->string('brand')->nullable();
            $table->string('quality')->nullable();
            $table->string('term')->nullable();
            $table->string('form')->nullable();
            $table->decimal('dimension_length', 15, 4)->nullable();
            $table->decimal('dimension_width', 15, 4)->nullable();
            $table->decimal('dimension_height', 15, 4)->nullable();
            $table->decimal('dimension_thickness', 15, 4)->nullable();
            $table->decimal('package_volume', 30, 15)->nullable();
            $table->string('store')->nullable();
            $table->text('address')->nullable();
            $table->foreignId('store_location_id')->nullable()->constrained('store_locations')->nullOnDelete();
            $table->string('package_unit')->nullable();
            $table->decimal('package_price', 15, 2)->nullable();
            $table->decimal('comparison_price_per_m3', 15, 2)->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
            $this->addSoftDeleteAuditColumns($table, 'steels');

            $table->index('brand', 'idx_steels_brand');
            $table->index('type', 'idx_steels_type');
            $table->index('package_price', 'idx_steels_package_price');
            $table->index('store_location_id', 'idx_steels_store_location_id');
        });

        Schema::create('kasa_gypsums', function (Blueprint $table): void {
            $table->id();
            $table->string('material_name')->default('Kasa Gypsum');
            $table->string('type')->nullable();
            $table->string('brand')->nullable();
            $table->decimal('dimension_length', 15, 4)->nullable();
            $table->decimal('dimension_width', 15, 4)->nullable();
            $table->string('store')->nullable();
            $table->text('address')->nullable();
            $table->foreignId('store_location_id')->nullable()->constrained('store_locations')->nullOnDelete();
            $table->string('package_unit')->nullable();
            $table->decimal('package_price', 15, 2)->nullable();
            $table->decimal('comparison_price_per_m', 15, 2)->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
            $this->addSoftDeleteAuditColumns($table, 'kasa_gypsums');

            $table->index('brand', 'idx_kasa_gypsums_brand');
            $table->index('type', 'idx_kasa_gypsums_type');
            $table->index('package_price', 'idx_kasa_gypsums_package_price');
            $table->index('store_location_id', 'idx_kasa_gypsums_store_location_id');
        });

        Schema::create('paku_tembaks', function (Blueprint $table): void {
            $table->id();
            $table->string('material_name')->default('Paku Tembak');
            $table->string('type')->nullable();
            $table->string('brand')->nullable();
            $table->string('package_unit')->nullable();
            $table->string('mesiu_code')->nullable();
            $table->string('mesiu_size')->nullable();
            $table->decimal('mesiu_content', 15, 4)->nullable();
            $table->string('paku_code')->nullable();
            $table->string('paku_size')->nullable();
            $table->decimal('paku_content', 15, 4)->nullable();
            $table->string('store')->nullable();
            $table->text('address')->nullable();
            $table->foreignId('store_location_id')->nullable()->constrained('store_locations')->nullOnDelete();
            $table->decimal('package_price', 15, 2)->nullable();
            $table->decimal('comparison_price', 15, 2)->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
            $this->addSoftDeleteAuditColumns($table, 'paku_tembaks');

            $table->index('type', 'idx_paku_tembaks_type');
            $table->index('brand', 'idx_paku_tembaks_brand');
            $table->index('package_unit', 'idx_paku_tembaks_package_unit');
            $table->index('store_location_id', 'idx_paku_tembaks_store_location_id');
            $table->index('package_price', 'idx_paku_tembaks_package_price');
        });

        Schema::create('pakus', function (Blueprint $table): void {
            $table->id();
            $table->string('material_name')->default('Paku');
            $table->string('type')->nullable();
            $table->string('brand')->nullable();
            $table->decimal('dimension_length', 15, 4)->nullable();
            $table->decimal('dimension_length_mm', 15, 4)->nullable();
            $table->decimal('dimension_body_diameter', 15, 4)->nullable();
            $table->decimal('dimension_head_diameter', 15, 4)->nullable();
            $table->string('color')->nullable();
            $table->string('package_unit')->nullable();
            $table->decimal('package_weight', 15, 4)->nullable();
            $table->decimal('package_content', 15, 4)->nullable();
            $table->string('store')->nullable();
            $table->text('address')->nullable();
            $table->foreignId('store_location_id')->nullable()->constrained('store_locations')->nullOnDelete();
            $table->decimal('package_price', 15, 2)->nullable();
            $table->decimal('comparison_price', 15, 2)->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
            $this->addSoftDeleteAuditColumns($table, 'pakus');

            $table->index('type', 'idx_pakus_type');
            $table->index('brand', 'idx_pakus_brand');
            $table->index('package_unit', 'idx_pakus_package_unit');
            $table->index('store_location_id', 'idx_pakus_store_location_id');
            $table->index('package_price', 'idx_pakus_package_price');
        });
    }

    public function down(): void
    {
        foreach (array_reverse($this->materialTables()) as $tableName) {
            Schema::dropIfExists($tableName);
        }
    }

    private function addSoftDeleteAuditColumns(Blueprint $table, string $tableName): void
    {
        $table->softDeletes();
        $table->unsignedBigInteger('deleted_by')->nullable();
        $table->foreign('deleted_by')->references('id')->on('users')->nullOnDelete();
        $table->index('deleted_at', "idx_{$tableName}_deleted_at");
        $table->index('deleted_by', "idx_{$tableName}_deleted_by");
    }

    /**
     * @return list<string>
     */
    private function materialTables(): array
    {
        return [
            'materials',
            'bricks',
            'cements',
            'sands',
            'cats',
            'ceramics',
            'nats',
            'steels',
            'kasa_gypsums',
            'paku_tembaks',
            'pakus',
        ];
    }
};
