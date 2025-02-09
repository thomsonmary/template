<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            CategoriesTableSeeder::class,
            CategoriesUsersTableSeeder::class,
            RolesTableSeeder::class,
            RoleUserSeeder::class,
            TagsTableSeeder::class,
            TemplatesTableSeeder::class,
            PermissionSeeder::class,

        ]);
    }
}
