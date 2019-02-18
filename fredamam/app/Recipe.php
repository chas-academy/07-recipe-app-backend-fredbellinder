<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    // protected $casts = [
    //     'uri' => 'string',
    //     'label' => 'string',
    //     'image' => 'string',
    //     'source' => 'string',
    //     'url' => 'string',
    //     'shareAs' => 'string',
    //     'yield' => 'integer',
    //     'dietLabels' => 'string',
    //     'healthLabels' => 'string',
    //     'ingredientLines' => 'string',
    //     'ingredients' => 'string',
    //     'calories' => 'float',
    // ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];


    // public $timestamps = false;
}
