<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => "admin",
        ]);
        DB::table('roles')->insert([
            'role' => "redaksi",
        ]);
        DB::table('roles')->insert([
            'role' => "kontributor",
        ]);
        DB::table('roles')->insert([
            'role' => "tamu",
        ]);
    }
}
