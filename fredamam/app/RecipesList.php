<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipesList extends Model
{
    protected $casts = [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    protected $fillable = [
            'user_id',
            'recipe_id',

        ];
    protected $hidden = [
            'created_at',
            'updated_at'
        ];
    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
