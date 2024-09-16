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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username')->unique();
            $table->string('password');
            $table->foreignId('user_type')->references('id')->on('user_type');
            $table->string('type');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('status'); // 0 == not active, 1 == active
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
