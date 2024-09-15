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
        Schema::create('discount_list', function (Blueprint $table)
        {
            $table->id();
            $table->string("discount" , length: 30);
            $table->decimal('discount_rate', total: 8, places: 2);
            $table->boolean("is_date_scheduled");
            $table->dateTime("date_start");
            $table->dateTime("date_end");
            $table->boolean("is_time_scheduled");
            $table->dateTime("time_start");
            $table->dateTime("time_end");
            $table->boolean("day_mon");
            $table->boolean("day_tue");
            $table->boolean("day_wed");
            $table->boolean("day_thu");
            $table->boolean("day_fri");
            $table->boolean("day_sat");
            $table->boolean("day_sun");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount_list');
    }
};
