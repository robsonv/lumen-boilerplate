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

$router->get('/', function () use ($router) {
    return redirect('api/documentation');
});

$router->group(['prefix' => 'api/v1'], function () use ($router) {

    // Collabotors Endpoints
    $router->group(['prefix' => 'collaborators'], function () use ($router) {

        $router->get('/{id}', 'CollaboratorController@get');
        $router->get('/', 'CollaboratorController@list');
        $router->post('/', 'CollaboratorController@create');
        $router->delete('/{id}', 'CollaboratorController@delete');
    });
});
