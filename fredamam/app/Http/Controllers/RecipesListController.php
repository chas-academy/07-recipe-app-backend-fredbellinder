<?php

namespace App\Http\Controllers;

use App\RecipesList;
use App\Recipe;
use Illuminate\Http\Request;
use App\Http\Resources\RecipesList as RecipesListResource;
use App\Http\Resources\Recipe as RecipeResource;

class RecipesListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_id = $request->user()->id;
        $collection = RecipesListResource::collection(RecipesList::where('user_id', $user_id)->get());
        $results = $collection->all();
        $sender=[];
        foreach ($results as $result) {
            array_push($sender, $result['recipe_id']);
        }


        $filtered = RecipeResource::collection(Recipe::whereIn('id', $sender)->get());
        $recipesForList = $filtered->all();
        return $recipesForList;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = $request->user()->id;
        
        $listItem = new RecipesList(
            [
            'user_id' => $user_id,
            'recipe_id' => $request['recipe_id'],
            // 'created_at' => now(),
            // 'created_at' => now(),
            ]
        );
        $listItem->save();

        // $collection = RecipesListResource::collection(RecipesList::where('user_id', $user_id)->get());
        // $results = $collection->all();
        // $sender=[];
        // foreach ($results as $result) {
        //     array_push($sender, $result['recipe_id']);
        // }


        // $filtered = RecipeResource::collection(Recipe::whereIn('id', $sender)->get());
        // $recipesForList = $filtered->all();
        // return $recipesForList;

        // RecipesList::where('user_id', $user_id)->all()->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RecipesList  $recipesList
     * @return \Illuminate\Http\Response
     */
    public function show(RecipesList $recipesList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RecipesList  $recipesList
     * @return \Illuminate\Http\Response
     */
    public function edit(RecipesList $recipesList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RecipesList  $recipesList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecipesList $recipesList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RecipesList  $recipesList
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $recipe_id = $request['recipe_id'];
        $user_id = $request->user()->id;

        RecipesList::where('user_id', $user_id)->where('recipe_id', $recipe_id)->delete();
    }
}
