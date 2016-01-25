<?php

namespace App\Api\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
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

}