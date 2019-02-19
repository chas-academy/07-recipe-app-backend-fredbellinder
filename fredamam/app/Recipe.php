<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $casts = [
    //     'uri' => 'string',
    //     'label' => 'string',
    //     'image' => 'string',
    //     'source' => 'string',
    //     'url' => 'string',
    //     'shareAs' => 'string',
    //     'yield' => 'integer',
        'dietLabels' => 'array',
        'healthLabels' => 'array',
        'ingredientLines' => 'array',
        'ingredients' => 'array',
    //     'calories' => 'float',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];


    // public $timestamps = false;
}
