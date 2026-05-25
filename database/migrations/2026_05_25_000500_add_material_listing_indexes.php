<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $this->addListingIndexes('bricks', hasBrand: true, hasType: true);
        $this->addListingIndexes('cements', hasBrand: true, hasType: true);
        $this->addListingIndexes('sands', hasBrand: true, hasType: true);
        $this->addListingIndexes('cats', hasBrand: true, hasType: true);
        $this->addListingIndexes('ceramics', hasBrand: true, hasType: true);
        $this->addListingIndexes('nats', hasBrand: true, hasType: true);
        $this->addListingIndexes('steels', hasBrand: true, hasType: true);
        $this->addListingIndexes('kasa_gypsums', hasBrand: true, hasType: true);
        $this->addListingIndexes('paku_tembaks', hasBrand: true, hasType: true);
        $this->addListingIndexes('pakus', hasBrand: true, hasType: true);
    }

    public function down(): void
    {
        $this->dropListingIndexes('bricks', hasBrand: true, hasType: true);
        $this->dropListingIndexes('cements', hasBrand: true, hasType: true);
        $this->dropListingIndexes('sands', hasBrand: true, hasType: true);
        $this->dropListingIndexes('cats', hasBrand: true, hasType: true);
        $this->dropListingIndexes('ceramics', hasBrand: true, hasType: true);
        $this->dropListingIndexes('nats', hasBrand: true, hasType: true);
        $this->dropListingIndexes('steels', hasBrand: true, hasType: true);
        $this->dropListingIndexes('kasa_gypsums', hasBrand: true, hasType: true);
        $this->dropListingIndexes('paku_tembaks', hasBrand: true, hasType: true);
        $this->dropListingIndexes('pakus', hasBrand: true, hasType: true);
    }

    private function addListingIndexes(string $tableName, bool $hasBrand, bool $hasType): void
    {
        Schema::table($tableName, function (Blueprint $table) use ($tableName, $hasBrand, $hasType): void {
            if ($hasBrand) {
                $table->index(['deleted_at', 'brand'], "idx_{$tableName}_deleted_at_brand");
            }

            if ($hasType) {
                $table->index(['deleted_at', 'type'], "idx_{$tableName}_deleted_at_type");
            }

            $table->index(['deleted_at', 'updated_at'], "idx_{$tableName}_deleted_at_updated_at");
        });
    }

    private function dropListingIndexes(string $tableName, bool $hasBrand, bool $hasType): void
    {
        Schema::table($tableName, function (Blueprint $table) use ($tableName, $hasBrand, $hasType): void {
            if ($hasBrand) {
                $table->dropIndex("idx_{$tableName}_deleted_at_brand");
            }

            if ($hasType) {
                $table->dropIndex("idx_{$tableName}_deleted_at_type");
            }

            $table->dropIndex("idx_{$tableName}_deleted_at_updated_at");
        });
    }
};
