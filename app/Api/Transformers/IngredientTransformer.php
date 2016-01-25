<?php

namespace App\Api\Transformers;

use League\Fractal\TransformerAbstract;
use App\Api\Models\Ingredient;

class IngredientTransformer extends TransformerAbstract
{

    public function transform(Ingredient $ingredient)
    {
        return [
            'id' => $ingredient->id,
            'type' => 'ingredient',
            'attributes' => [
                'title' => $ingredient->title,
                'quantity' => $ingredient->pivot->quantity,
            ],
        ];
    }
    
}