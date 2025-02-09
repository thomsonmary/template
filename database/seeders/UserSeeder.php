<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "si Administrator",
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'level' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => "si redaksi",
            'email' => 'redaksi@redaksi.com',
            'password' => Hash::make('12345678'),
            'level' => 'redaksi'
        ]);
        DB::table('users')->insert([
            'name' => "si kontributor",
            'email' => 'kontributor@kontributor.com',
            'password' => Hash::make('12345678'),
            'level' => 'kontributor'
        ]);
        DB::table('users')->insert([
            'name' => "si tamu",
            'email' => 'tamu@tamu.com',
            'password' => Hash::make('12345678'),
            'level' => 'tamu'
        ]);
    }
}
