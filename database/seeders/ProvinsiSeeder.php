<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            'name' => "Aceh",
        ]);
        DB::table('provinces')->insert([
            'name' => "Bali",
        ]);
        DB::table('provinces')->insert([
            'name' => "Banten",
        ]);
        DB::table('provinces')->insert([
            'name' => "Jawa Barat",
        ]);
        DB::table('provinces')->insert([
            'name' => "Jawa Tengah",
        ]);
    }
}
