<?php

use Illuminate\Http\Request;
use Dingo\Api\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api->version('v1', [
    'namespace' => 'App\Api\Controllers',
    'middleware' => ['api']
], function (Router $api) {

    $api->group(['middleware' => ['auth:api']], function (Router $api) {

        $api->get('user', ['as' => 'user', 'uses' => 'UsersController@me']);

    });

    $api->group(['prefix' => 'categories'], function (Router $api) {
        $api->get('/', 'CategoriesController@index');
        $api->group(['prefix' => '{id}'], function (Router $api) {
            $api->get('/', 'CategoriesController@show');
            $api->get('/articles', 'CategoriesController@getArticlesViaCategory');
        });
    });
});
