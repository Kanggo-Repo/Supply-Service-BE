<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stores', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('store_locations', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('store_id')->constrained()->cascadeOnDelete();
            $table->text('address')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('place_id')->nullable();
            $table->text('formatted_address')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_phone')->nullable();
            $table->timestamps();
            $table->index(['latitude', 'longitude']);
        });

        Schema::create('units', function (Blueprint $table): void {
            $table->id();
            $table->string('code', 20);
            $table->string('name', 100);
            $table->decimal('package_weight', 10, 2)->default(0);
            $table->text('description')->nullable();
            $table->timestamps();
            $table->index('code');
            $table->index('name');
        });

        Schema::create('unit_material_types', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('unit_id')->constrained()->cascadeOnDelete();
            $table->string('material_type', 50);
            $table->timestamps();
            $table->unique(['unit_id', 'material_type']);
        });

        Schema::create('material_settings', function (Blueprint $table): void {
            $table->id();
            $table->string('material_type', 50)->unique();
            $table->boolean('is_visible')->default(true);
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });

        DB::table('material_settings')->insert([
            [
                'material_type' => 'brick',
                'is_visible' => true,
                'display_order' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'material_type' => 'cat',
                'is_visible' => true,
                'display_order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'material_type' => 'cement',
                'is_visible' => true,
                'display_order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'material_type' => 'sand',
                'is_visible' => true,
                'display_order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        Schema::create('material_change_logs', function (Blueprint $table): void {
            $table->id();
            $table->string('material_table', 64);
            $table->unsignedBigInteger('material_id');
            $table->string('material_kind', 32)->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('request_batch', 64);
            $table->string('action', 20)->default('updated');
            $table->json('changes');
            $table->json('before_values')->nullable();
            $table->json('after_values')->nullable();
            $table->timestamp('edited_at');
            $table->timestamps();

            $table->index(['material_table', 'material_id', 'edited_at']);
            $table->unique(
                ['material_table', 'material_id', 'request_batch', 'action'],
                'material_change_logs_request_unique',
            );
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('material_change_logs');
        Schema::dropIfExists('material_settings');
        Schema::dropIfExists('unit_material_types');
        Schema::dropIfExists('units');
        Schema::dropIfExists('store_locations');
        Schema::dropIfExists('stores');
    }
};
