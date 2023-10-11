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
        Schema::create('art', function (Blueprint $table) {
            $table->id();
            $table->string('idbdt', 25);
            $table->string('idartbdt', 25);
            $table->string('nama', 80);
            $table->boolean('status_miskin')->default(false);
            $table->enum('bpjs', [1,2,3])->default(2);
            // 1. Memiliki BPJS
            // 2. Tidak Memiliki BPJS
            // 3. NIK Tidak Valid
            $table->string('nik', 25);
            $table->string('kk', 25);
            $table->text('alamat');
            $table->text('kecamatan');
            $table->text('kelurahan');
            $table->string('sls', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('art');
    }
};
