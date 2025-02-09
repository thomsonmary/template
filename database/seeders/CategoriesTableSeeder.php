<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create([
            'nama_kategori' => 'Video News',
            'slug_kategori' => 'video-news'
        ]);
        Categorie::create([
            'nama_kategori' => 'Laravel Framework',
            'slug_kategori' => 'laravel-framework'
        ]);
        Categorie::create([
            'nama_kategori' => 'SQL Scripting',
            'slug_kategori' => 'sql-scripting'
        ]);
        Categorie::create([
            'nama_kategori' => 'Technology',
            'slug_kategori' => 'technology'
        ]);
        Categorie::create([
            'nama_kategori' => 'PHP Native',
            'slug_kategori' => 'php-native'
        ]);
        Categorie::create([
            'nama_kategori' => 'Database',
            'slug_kategori' => 'database'
        ]);
        Categorie::create([
            'nama_kategori' => 'Hardware',
            'slug_kategori' => 'hardware'
        ]);
        Categorie::create([
            'nama_kategori' => 'Web Developer',
            'slug_kategori' => 'web-developer'
        ]);
    }
}
