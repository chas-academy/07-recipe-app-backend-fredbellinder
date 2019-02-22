<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipesList extends Model
{
    public function recipes()
    {
        return $this->belongsTo(Recipe::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
