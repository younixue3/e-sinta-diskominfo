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
                'idbdt' => '6472.0500.0400.0279.',
                'idartbdt' => '6472.0500.0400.0279.04.',
                'nama' => 'AISAH',
                'status_miskin' => true,
                'bpjs' => 3,
                'nik' => '6472.0341.1198.0002.',
                'kk' => '6472.0318.1107.5517.',
                'alamat' => 'JL. KULINTANG GG. CIPARI',
                'kecamatan' => 'Samarinda Ulu',
                'kelurahan' => 'Dadi Mulya',
                'sls' => 'RT 038'
            ],
            [
                'idbdt' => '6472.0500.0400.1138.',
                'idartbdt' => '6472.0500.0400.1138.01.',
                'nama' => 'A MUH DHOFAR',
                'status_miskin' => true,
                'bpjs' => 2,
                'nik' => '6472.0316.0876.0007.',
                'kk' => '6472.0316.1210.0021.',
                'alamat' => 'JL KS TUBUN GG WIRATIRTA',
                'kecamatan' => 'Samarinda Ulu',
                'kelurahan' => 'Dadi Mulya',
                'sls' => 'RT 025'
            ],
            [
                'idbdt' => '6472.0500.0400.0316.',
                'idartbdt' => '6472.0500.0400.0316.01.',
                'nama' => 'AAN MUNANDIR',
                'status_miskin' => false,
                'bpjs' => 1,
                'nik' => '6472.0307.0676.0005.',
                'kk' => '6472.0318.1107.5401.',
                'alamat' => 'JL. PERNIAGAAN GG. RAHMAD',
                'kecamatan' => 'Samarinda Ulu',
                'kelurahan' => 'Dadi Mulya',
                'sls' => 'RT 037'
            ],
        ]);
    }
}
