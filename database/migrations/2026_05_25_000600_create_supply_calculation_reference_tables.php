<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('brick_installation_types', function (Blueprint $table): void {
            $table->id();
            $table->string('name', 50);
            $table->string('code', 20)->unique();
            $table->text('description')->nullable();
            $table->decimal('mortar_volume_per_m2', 8, 6)->nullable();
            $table->decimal('waste_factor', 8, 6)->default(1.727273);
            $table->enum('visible_side_width', ['length', 'width', 'height']);
            $table->enum('visible_side_height', ['length', 'width', 'height']);
            $table->enum('orientation', ['horizontal_lying', 'horizontal_standing']);
            $table->decimal('bricks_per_sqm', 10, 2)->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });

        Schema::create('mortar_formulas', function (Blueprint $table): void {
            $table->id();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->decimal('cement_ratio', 10, 4);
            $table->decimal('sand_ratio', 10, 4);
            $table->decimal('water_ratio', 10, 4)->nullable();
            $table->decimal('cement_kg_per_m3', 10, 2)->nullable();
            $table->decimal('sand_m3_per_m3', 10, 4)->nullable();
            $table->decimal('water_liter_per_m3', 10, 2)->nullable();
            $table->decimal('expansion_factor', 10, 4)->default(1.0);
            $table->enum('cement_bag_type', ['40kg', '50kg', 'both'])->default('both');
            $table->boolean('is_default')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mortar_formulas');
        Schema::dropIfExists('brick_installation_types');
    }
};
