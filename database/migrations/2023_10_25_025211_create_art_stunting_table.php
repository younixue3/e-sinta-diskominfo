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
        Schema::create('art_stunting', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_art');
            $table->foreign('id_art')->references('id')->on('art');
            $table->unsignedBigInteger('id_stunting');
            $table->foreign('id_stunting')->references('id')->on('stunting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('art_stunting');
    }
};
