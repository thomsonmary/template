<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'province_id' => 1,
            'name' => "Banda Aceh",
        ]);
        DB::table('cities')->insert([
            'province_id' => 1,
            'name' => "Langsa",
        ]);
        DB::table('cities')->insert([
            'province_id' => 1,
            'name' => "Lhokseumawe",
        ]);
        DB::table('cities')->insert([
            'province_id' => 1,
            'name' => "Meulaboh",
        ]);
        DB::table('cities')->insert([
            'province_id' => 1,
            'name' => "Sabang",
        ]);
        DB::table('cities')->insert([
            'province_id' => 1,
            'name' => "Subulussalam",
        ]);
        DB::table('cities')->insert([
            'province_id' => 1,
            'name' => "Takengon",
        ]);
        DB::table('cities')->insert([
            'province_id' => 1,
            'name' => "Bireuen",
        ]);
        DB::table('cities')->insert([
            'province_id' => 1,
            'name' => "Sigli",
        ]);
        DB::table('cities')->insert([
            'province_id' => 1,
            'name' => "Calang",
        ]);
        DB::table('cities')->insert([
            'province_id' => 2,
            'name' => "Denpasar",
        ]);
        DB::table('cities')->insert([
            'province_id' => 3,
            'name' => "Serang",
        ]);
        DB::table('cities')->insert([
            'province_id' => 3,
            'name' => "Cilegon",
        ]);
        DB::table('cities')->insert([
            'province_id' => 4,
            'name' => "Bandung",
        ]);
        DB::table('cities')->insert([
            'province_id' => 4,
            'name' => "Bekasi",
        ]);
        DB::table('cities')->insert([
            'province_id' => 5,
            'name' => "Semarang",
        ]);
        DB::table('cities')->insert([
            'province_id' => 5,
            'name' => "Surakarta",
        ]);
    }
}
