<?php

namespace App\Api\Models;

use Illuminate\Database\Eloquent\Model;
use App\Api\Models\Instruction;
use App\Api\Models\Ingredient;
use App\Api\Models\Category;

class Recipe extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * Indicates if the model should force an auto-incrementeing id.
     *
     * @var bool
     */
    public $incrementing = false;
    
    public function instructions() 
    {
        return $this->hasMany(Instruction::class);
    }
    
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipe_ingredient')->withPivot('quantity');
    }
    
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'recipe_category');
    }

}
