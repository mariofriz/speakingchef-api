<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Api\Models\Recipe::class, function ($faker) {
    return [
        'id' => $faker->uuid,
        'title' => $faker->sentence(5),
        'preparationTime' => $faker->randomDigitNotNull(),
        'cookingTime' => $faker->randomDigitNotNull(),
    ];
});

$factory->define(App\Api\Models\Category::class, function ($faker) {
    return [
        'id' => $faker->uuid,
        'title' => $faker->sentence(5),
    ];
});

$factory->define(App\Api\Models\Instruction::class, function ($faker) {
    return [
        'id' => $faker->uuid,
        'order' => $faker->randomDigitNotNull(),
        'description' => $faker->sentence(6),
    ];
});

$factory->define(App\Api\Models\Ingredient::class, function ($faker) {
    return [
        'id' => $faker->uuid,
        'title' => $faker->sentence(5),
    ];
});
