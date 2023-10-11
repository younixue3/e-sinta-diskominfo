<?php

namespace Database\Seeders;

use App\Models\Bantuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BantuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bantuan')->insert([
            ['name' => 'PBI-JK'],
            ['name' => 'PBI-JK']
        ]);
    }
}
