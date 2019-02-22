<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Recipe extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'recipe' => [
                'id' => $this->id,
                'uri' => $this->uri,
                'label' => $this->label,
                'image' => $this->image,
                'source' => $this->source,
                'url' => $this->url,
                'shareAs' => $this->shareAs,
                'yield' => $this->yield,
                'dietLabels' => $this->dietLabels,
                'healthLabels' => $this->healthLabels,
                'ingredientLines' => $this->ingredientLines,
                'ingredients' => $this->ingredients,
                'calories' => $this->calories,
                'totalTime' => $this->totalTime,
            ]
           ];
    }
}
