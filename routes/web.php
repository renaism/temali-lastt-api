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


$router->get('options', 'OptionController@getAll');
$router->post('result', 'OptionController@getResult');
$router->post('result/pdf', 'OptionController@getResultPDF');
$router->get('testPDF-31459', 'OptionController@testPDF');
$router->get('test-31459', 'OptionController@test');