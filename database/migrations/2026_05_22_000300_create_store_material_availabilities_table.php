<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('store_material_availabilities', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('store_location_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('materialable_id');
            $table->string('materialable_type');
            $table->timestamps();
            $table->index(['materialable_type', 'materialable_id'], 'sma_materialable_index');
            $table->unique(
                ['store_location_id', 'materialable_type', 'materialable_id'],
                'sma_location_material_unique',
            );
            $table->index(['store_location_id', 'materialable_type'], 'sma_location_type_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('store_material_availabilities');
    }
};
