<?php

use Illuminate\Http\Response;

$router->get('/', function () use ($router) {
  return response()->json([
    'version' => $router->app->version(),
    'environment' => $router->app->environment()
  ])->setStatusCode(200)->header('Content-Type', 'JSON');
});

$router->group(['prefix' => 'v{version}','namespace' => 'App\Http\Controllers\v{version}'], function($router)
{
  $router->group(['prefix' => 'user'], function($router)
  {
    $router->get('/', 'UserController@index');
    $router->get('{id}', 'UserController@show');
    $router->post('/', 'UserController@create');
    $router->put('{id}', 'UserController@update');
    $router->patch('{id}', 'UserController@update');
    $router->delete('{id}', 'UserController@delete');
  });
  $router->post('/profile', 'ProfileController@create');
});


