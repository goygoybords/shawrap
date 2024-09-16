<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('item_Code');
            $table->string('bar_code');
            $table->string('item_Description');
            $table->string('alias');
            $table->string('generic_name');
            $table->string('category');
            $table->foreignId('default_supplier_id')->references('id')->on('supplier');
            $table->decimal('cost', total: 8, places: 2);
            $table->decimal('mark_up', total: 8, places: 2);
            $table->decimal('price', total: 8, places: 2);
            $table->foreignId('unit_id')->references('id')->on('item_unit');
            $table->string('image_path');
            $table->double('reorder_quantity');
            $table->double('onhand_quantity');
            $table->boolean('is_inventory');
            $table->date('expiry_date');
            $table->string('lot_number');
            $table->string('remarks');
            $table->string('description');
            $table->boolean('is_package');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
