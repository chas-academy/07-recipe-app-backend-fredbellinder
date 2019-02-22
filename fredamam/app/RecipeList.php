<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeList extends Model
{
    public function addToList($request)
    {
        $list = new RecipeList(
            [
            'user_id' => $request->user_id,
            'recipe_id' => $request->recipe_id
            ]
        );
    }


    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
