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

$router->post('/auth/login', ['uses' => 'AuthController@login', 'as' => 'auth.login']);

$router->group(['middleware' => 'auth'], function () use ($router) {
    $router->post('/auth/logout', ['uses' => 'AuthController@logout', 'as' => 'auth.logout']);

    $router->get('/eselon1', ['uses' => 'Eselon1Controller@index', 'as' => 'eselon1.index']);
    $router->get('/eselon1/{eselon1_id}/satker', ['uses' => 'Eselon1Controller@satkerIndex', 'as' => 'eselon1.satker.index']);
    $router->get('/satker', ['uses' => 'SatkerController@index', 'as' => 'satker.index']);
    $router->get('/satker/{satker_id}/akun', ['uses' => 'SatkerController@akunIndex', 'as' => 'satker.akun.index']);
    $router->get('/akun', ['uses' => 'AkunController@index', 'as' => 'akun.index']);

    $router->post('/pnbp', ['uses' => 'PnbpController@store', 'as' => 'pnbp.store']);
    $router->post('/pnbp/show', ['uses' => 'PnbpController@index', 'as' => 'pnbp.index']);
});
