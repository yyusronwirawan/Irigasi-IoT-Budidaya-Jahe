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
        Schema::create('manuals', function (Blueprint $table) {
            $table->id();
            $table->string('device')->unique();
            $table->string('slug')->unique();
            $table->boolean('pompa')->default(false);
            $table->boolean('sol_1')->default(false);
            $table->boolean('sol_2')->default(false);
            $table->boolean('sol_3')->default(false);
            $table->boolean('sol_4')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manuals');
    }
};