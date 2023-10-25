<?php

namespace Database\Seeders;

use App\Models\Art;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('art')->insert([
            [
                'id' => 3733,
                'idbdt' => '6472.0500.0400.0211.',
                'idartbdt' => '6472.0500.0400.0211.04.',
                'nama' => 'PANE DOE',
                'status_miskin' => true,
                'bpjs' => 3,
                'bantuan' => 1,
                'jenis_bantuan' => "PBI-JK",
                'nik' => '6472.0341.1198.1111.',
                'kk' => '6472.0318.1107.5517.',
                'alamat' => 'JL. KULINTANG GG. CIPARI',
                'kecamatan' => 'Samarinda Ulu',
                'kelurahan' => 'Dadi Mulya',
                'sls' => 'RT 038'
            ],
        ]);
    }
}
