<?php

use Illuminate\Database\Seeder;
use App\Recipe;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Recipes::class, 20)->create();

        DB::table('recipes')->delete();
        $json = File::get('database/data/recipes.json');
        $data = json_decode($json, true);
        $datamapped = $data['hits'];
        foreach ($datamapped as $obj) {
            Recipe::create(
                array(
                'uri' => $obj['recipe']['uri'],
                'label' => $obj['recipe']['label'],
                'image' => $obj['recipe']['image'],
                'source' => $obj['recipe']['source'],
                'url' => $obj['recipe']['url'],
                'shareAs' => $obj['recipe']['shareAs'],
                'yield' => $obj['recipe']['yield'],
                'dietLabels' => $obj['recipe']['dietLabels'],
                'healthLabels' => $obj['recipe']['healthLabels'],
                'ingredientLines' => $obj['recipe']['ingredientLines'],
                'ingredients' => $obj['recipe']['ingredients'],
                'calories' => $obj['recipe']['calories'],
                'totalTime' => $obj['recipe']['totalTime'],

                )
            );
        }
    }
}
