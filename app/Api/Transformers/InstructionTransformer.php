<?php

namespace App\Api\Transformers;

use League\Fractal\TransformerAbstract;
use App\Api\Models\Instruction;

class InstructionTransformer extends TransformerAbstract
{

    public function transform(Instruction $instruction)
    {
        return [
            'id' => $instruction->id,
            'type' => 'instruction',
            'attributes' => [
                'order' => $instruction->order,
                'description' => $instruction->description,
            ],
        ];
    }
    
}