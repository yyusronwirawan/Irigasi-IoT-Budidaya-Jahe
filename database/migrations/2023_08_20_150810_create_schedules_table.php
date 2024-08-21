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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id');
            $table->integer('noJadwal');
            $table->string('hari');
            $table->integer('sol_1')->default(false);
            $table->integer('sol_2')->default(false);
            $table->integer('sol_3')->default(false);
            $table->integer('sol_4')->default(false);
            $table->string('jam');
            $table->string('menit');
            $table->integer('detik')->default(0);
            $table->string('durasiMenit')->nullable();
            $table->string('durasiDetik')->nullable();
            $table->integer('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};