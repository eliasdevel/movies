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

$router->get('api/v1/movies', 'MovieController@index');

$router->get('api/v1/movies/{id}', 'MovieController@show');

//
$router->get('api/v1/ratings', 'RatingController@index');

$router->get('api/v1/ratings/{id}', 'RatingController@show');

$router->post('api/v1/ratings', 'RatingController@create');

$router->put('api/v1/ratings/{id}', 'RatingController@update');

$router->delete('api/v1/ratings/{id}', 'RatingController@destroy');



// $router->get('movies/{id}/details', function ($id) {
//     return $id;
// });

