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
            ['nik' => '6472035707220000', 'nama' => 'SAYYIDA TUNA', 'jk' => 'P', 'ttl' => '2022-07-17', 'nama_orang_tua' => 'siti naruti', 'posyandu' => 'KARTIKA I', 'alamat' => 'jl. ks tubun', 'usia_saat_ukur' => '0 Tahun - 11 Bulan - 17 Hari', 'tanggal_ukur' => '2023-07-04', 'berat' => 7.8, 'tinggi' => 67, 'lila' => 0, 'bb_u' => 'Berat Badan Normal', 'zs_bb_u' => -1.04, 'tb_u' => 'Pendek', 'zs_tb_u' => -2.54, 'bb_tb' => 'Gizi Baik', 'zs_bb_tb' => 0.39, 'naik_berat_badan' => 'N'],
            ['nik' => '6472035302220000', 'nama' => 'KANAYA', 'jk' => 'P', 'ttl' => '2022-02-13', 'nama_orang_tua' => 'JOHAN', 'posyandu' => 'KARTIKA I', 'alamat' => 'jl. ks tubun', 'usia_saat_ukur' => '1 Tahun - 4 Bulan - 19 Hari', 'tanggal_ukur' => '2023-07-04', 'berat' => 8.9, 'tinggi' => 72, 'lila' => 0, 'bb_u' => 'Berat Badan Normal', 'zs_bb_u' => -0.91, 'tb_u' => 'Pendek', 'zs_tb_u' => -2.57, 'bb_tb' => 'Gizi Baik', 'zs_bb_tb' => 0.42, 'naik_berat_badan' => 'N'],
            ['nik' => '6472032211200000', 'nama' => 'KALLEN ELISEO SANTOSO', 'jk' => 'L', 'ttl' => '2022-11-22', 'nama_orang_tua' => 'sigit santoso', 'posyandu' => 'PALAPA', 'alamat' => 'jl. w. sudirohusodo', 'usia_saat_ukur' => '0 Tahun - 7 Bulan - 26 Hari', 'tanggal_ukur' => '2023-07-20', 'berat' => 6.3, 'tinggi' => 64, 'lila' => 0, 'bb_u' => 'Kurang', 'zs_bb_u' => -2.79, 'tb_u' => 'Pendek', 'zs_tb_u' => -2.92, 'bb_tb' => 'Gizi Baik', 'zs_bb_tb' => -1.35, 'naik_berat_badan' => 'T'],
        ]);
    }
}
