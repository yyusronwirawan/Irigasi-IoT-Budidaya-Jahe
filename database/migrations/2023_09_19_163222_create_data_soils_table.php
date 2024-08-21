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
        Schema::create('data_soils', function (Blueprint $table) {
            $table->id();
            $table->float('temp_1')->nullable();
            $table->float('temp_2')->nullable();
            $table->integer('hum_1')->nullable();
            $table->integer('hum_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_soils');
    }
};