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
        Schema::create('customer', function (Blueprint $table) {

            $table->id();
            $table->string('customer');
            $table->string('address');
            $table->string('contact_person');
            $table->string('contact_number');
            $table->decimal('credit_limit', total: 8, places: 2);
            $table->foreign('term_id')->references('id')->on('terms');
            $table->string('tin');
            //columns for reward/gifts purposes
            $table->boolean('with_reward'); 
            $table->string('reward_number');
            $table->string('reward_conversion');
            $table->string('customer_code');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
