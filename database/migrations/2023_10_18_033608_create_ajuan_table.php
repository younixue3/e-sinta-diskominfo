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
        Schema::create('ajuan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_art')->nullable();
            $table->foreign('id_art')->references('id')->on('art');
            $table->unsignedBigInteger('id_stunting')->nullable();
            $table->foreign('id_stunting')->references('id')->on('stunting');
            $table->text('isi');
            $table->text('kk');
            $table->text('ktp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ajuan');
    }
};
