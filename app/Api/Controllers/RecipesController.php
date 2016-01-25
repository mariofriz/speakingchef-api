<?php

namespace App\Api\Controllers;

use App\Api\Models\Recipe;
use App\Api\Transformers\RecipeTransformer;

class RecipesController extends ApiController
{
    public function index()
    {
        $recipes = Recipe::with('ingredients', 'instructions', 'categories')->get();

        return $this->response->collection($recipes, new RecipeTransformer);
    }
    
    public function show($id)
    {
        $recipe = Recipe::with('ingredients', 'instructions', 'categories')->find($id);

        return $this->response->item($recipe, new RecipeTransformer);
    }
    
    public function search()
    {
        
    }
}