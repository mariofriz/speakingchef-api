<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->welcome();
});

$api = app('Dingo\Api\Routing\Router');

$api->group(['version' => 'v1', 'namespace' => 'App\Api\Controllers'], function($api){
    $api->get('recipes/', 'RecipesController@index');
    $api->get('recipes/{recipe}', 'RecipesController@show');
});
