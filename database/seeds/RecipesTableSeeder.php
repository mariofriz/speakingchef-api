<?php

use Illuminate\Database\Seeder;
use App\Api\Models\Recipe;
use App\Api\Models\Category;
use App\Api\Models\Instruction;
use App\Api\Models\Ingredient;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Recipe::class, 50)->create()->each(function($recipe) {
            $recipe->categories()->save(factory(Category::class)->make());
            $recipe->ingredients()->save(factory(Ingredient::class)->make(), array('quantity' => '50g'));
            $recipe->instructions()->save(factory(Instruction::class)->make());
        });
    }
}
