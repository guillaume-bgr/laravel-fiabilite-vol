<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=> 'api/v1'], function () use ($router) {
    $router->get('/flight/{id}', ['uses' => 'FlightController@show']);
    $router->get('/flight', ['uses' => 'FlightController@index']);
    $router->post('/flight', ['uses' => 'FlightController@create']);
    $router->patch('/flight/{id}', ['uses' => 'FlightController@update']);
    $router->delete('/flight/{id}', ['uses' => 'FlightController@delete']);
});
