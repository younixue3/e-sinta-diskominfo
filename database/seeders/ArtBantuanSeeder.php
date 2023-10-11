<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtBantuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('art_bantuan')->insert([
            ['id_art' => 1, 'id_bantuan' => 1],
            ['id_art' => 1, 'id_bantuan' => 2],
            ['id_art' => 2, 'id_bantuan' => 1],
        ]);
    }
}
