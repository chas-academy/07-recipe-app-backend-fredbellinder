<?php

use Faker\Generator as Faker;

$factory->define(
    App\RecipeList::class,
    function (Faker $faker) {
        return [
            'user_id' => factory(App\User::class)->create()->id,
            'recipe_id' => factory(App\Recipe::class)->create()->id,
        ];
    }
);
