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
        Schema::create('art_bantuan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_art');
            $table->foreign('id_art')->references('id')->on('art');
            $table->unsignedBigInteger('id_bantuan');
            $table->foreign('id_bantuan')->references('id')->on('bantuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bantuan');
    }
};
