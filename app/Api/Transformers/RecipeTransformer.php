<?php

namespace App\Api\Transformers;

use League\Fractal\TransformerAbstract;
use App\Api\Models\Recipe;
use App\Api\Transformers\IngredientTransformer;
use App\Api\Transformers\CategoryTransformer;
use App\Api\Transformers\InstructionTransformer;
use \League\Fractal\Manager;

class RecipeTransformer extends TransformerAbstract
{
    /*protected $defaultIncludes = [
        'categories',
    ];*/
    
    public function transform(Recipe $recipe)
    {
        $fractal = new Manager();
        
        $ingredients = $recipe->ingredients;
        $categories = $recipe->categories;
        $instructions = $recipe->instructions;
        
        return [
            'id' => $recipe->id,
            'type' => 'recipe',
            'attributes' => [
                'title' => $recipe->title,
                'preparationTime' => $recipe->preparationTime,
                'cookingTime' => $recipe->cookingTime,
            ],
            'relationships' => [
                'categories' => $fractal->createData($this->collection($categories, new CategoryTransformer))->toArray(),
                'ingredients' => $fractal->createData($this->collection($ingredients, new IngredientTransformer))->toArray(),
                'instructions' => $fractal->createData($this->collection($instructions, new InstructionTransformer))->toArray(),
            ]
        ];
    }
    
    /*public function includeCategories(Recipe $recipe)
    {
        $categories = $recipe->categories;
        
        return $this->collection($categories, new CategoryTransformer);
    }*/
}