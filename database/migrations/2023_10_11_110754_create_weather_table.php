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
        Schema::create('weather', function (Blueprint $table) {
            $table->id();
            $table->float('suhuUdara')->nullable();
            $table->string('probabilitas')->nullable();
            $table->integer('kelembapanUdara')->nullable();
            $table->float('intensitasCahaya')->nullable();
            $table->float('curahHujan')->nullable();
            $table->float('kecepatanAngin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weather');
    }
};