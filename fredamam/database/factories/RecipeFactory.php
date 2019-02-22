<?php

use Faker\Generator as Faker;

$factory->define(
    App\Recipe::class,
    function (Faker $faker) {
        return [
            'uri' => $faker->url,
            'label' => $faker->sentence,
            'image' => $faker->url,
            'source' => $faker->url,
            'url' => $faker->url,
            'dietLabels' => $faker->text,
            'healthLabels' => $faker->text,
            'ingredientLines' => $faker->text,
            'ingredients' => $faker->text,
            'calories' => 102.8
        ];
    }
);
