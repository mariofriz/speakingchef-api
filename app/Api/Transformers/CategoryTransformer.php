<?php

namespace App\Api\Transformers;

use League\Fractal\TransformerAbstract;
use App\Api\Models\Category;

class CategoryTransformer extends TransformerAbstract
{

    public function transform(Category $category)
    {
        return [
            'id' => $category->id,
            'type' => 'category',
            'attributes' => [
                'title' => $category->title,
            ],
        ];
    }
    
}