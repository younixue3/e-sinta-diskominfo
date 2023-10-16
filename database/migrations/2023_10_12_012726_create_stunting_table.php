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
        Schema::create('stunting', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 25);
            $table->string('nama', 80);
            $table->enum('jk', ['L', 'P']);
            $table->date('ttl');
            $table->string('nama_orang_tua', 80);
            $table->string('posyandu', 80);
            $table->text('alamat');
            $table->text('usia_saat_ukur');
            $table->date('tanggal_ukur');
            $table->float('berat');
            $table->float('tinggi');
            $table->float('lila');
            $table->text('bb_u');
            $table->float('zs_bb_u');
            $table->text('tb_u');
            $table->float('zs_tb_u');
            $table->text('bb_tb');
            $table->float('zs_bb_tb');
            $table->enum('naik_berat_badan', ['N', 'T']);
            $table->float('pmt_diterima')->nullable(true);
            $table->integer('jml_vit_a')->nullable(true);
            $table->string('KPSP', 5)->nullable(true);
            $table->string('KIA', 5)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stunting');
    }
};
