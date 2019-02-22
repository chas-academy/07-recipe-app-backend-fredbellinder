<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(RecipesTableSeeder::class);
        factory(App\RecipeList::class, 10)->create();
        factory(App\User::class, 10)->create();
    }
}
