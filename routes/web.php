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
    return $router->app->version();
});

$router->post(
    '/auth/login',
    [
        'uses' => 'AuthController@login'
    ]
);

$router->group(['prefix' => 'authors'], function () use ($router) {

    $router->get('/', [
        'middleware' => 'auth:api',
        'as'  => 'authors.index',
        'uses'=> 'AuthorController@index'
    ]);

    $router->get('/{author}', [
        'as'  => 'authors.show',
        'uses'=> 'AuthorController@show'
    ]);

    $router->post('/', [
        'as'  => 'authors.store',
        'uses'=> 'AuthorController@store'
    ]);

    $router->put('{author}', [
        'as'  => 'authors.update',
        'uses'=> 'AuthorController@update'
    ]);

    $router->delete('{author}', [
        'as'  => 'authors.destroy',
        'uses'=> 'AuthorController@destroy'
    ]);
});

$router->group(['prefix' => 'articles'], function () use ($router) {
    $router->get('/', [
        'as'  => 'articles.index',
        'uses'=> 'ArticleController@index'
    ]);

    $router->put('{article}', [
        'as'  => 'articles.update',
        'uses'=> 'ArticleController@update'
    ]);

    $router->get('/{article}', [
        'as'  => 'articles.show',
        'uses'=> 'ArticleController@show'
    ]);

    $router->post('/', [
        'as'  => 'articles.store',
        'uses'=> 'ArticleController@store'
    ]);

    $router->patch('{article}', [
        'as'  => 'articles.update',
        'uses'=> 'ArticleController@update'
    ]);

    $router->delete('{article}', [
        'as'  => 'articles.destroy',
        'uses'=> 'ArticleController@destroy'
    ]);
});


