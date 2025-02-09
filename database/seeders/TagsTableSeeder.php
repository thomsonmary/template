<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert(['nama_tag' => 'Web Programming']);
        DB::table('tags')->insert(['nama_tag' => 'Database']);
        DB::table('tags')->insert(['nama_tag' => 'Framework']);
        DB::table('tags')->insert(['nama_tag' => 'Software']);
        DB::table('tags')->insert(['nama_tag' => 'Hardware']);
        DB::table('tags')->insert(['nama_tag' => 'Laravel']);
        DB::table('tags')->insert(['nama_tag' => 'PHP Native']);
        DB::table('tags')->insert(['nama_tag' => 'Code Igniter']);
        DB::table('tags')->insert(['nama_tag' => 'CSS & HTML']);
    }
}
