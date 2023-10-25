<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StuntingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stunting')->insert([
            ['nik' => '6472035707221111', 'nama' => 'JANE DOES', 'jk' => 'L', 'ttl' => '2022-07-17', 'nama_orang_tua' => 'SANE DOE', 'posyandu' => 'KARTIKA I', 'alamat' => 'jl. ks tubun', 'usia_saat_ukur' => '0 Tahun - 11 Bulan - 17 Hari', 'tanggal_ukur' => '2023-07-04', 'berat' => 7.8, 'tinggi' => 67, 'lila' => 0, 'bb_u' => 'Berat Badan Normal', 'zs_bb_u' => -1.04, 'tb_u' => 'Pendek', 'zs_tb_u' => -2.54, 'bb_tb' => 'Gizi Baik', 'zs_bb_tb' => 0.39, 'naik_berat_badan' => 'N'],
        ]);
    }
}
