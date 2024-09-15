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
        Schema::create('supplier', function (Blueprint $table) {
            $table->id();
            $table->string('supplier');
            $table->string('address');
            $table->string('contact_person');
            $table->string('telephone_number', length: 15);
            $table->string('cellphone_number', length: 15);
            $table->string('fax_number', length: 15);
            $table->foreignId('term_id')->references('id')->on('terms');
            $table->string('tin');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier');
    }
};
