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

        $api->group(['prefix' => 'user'], function (Router $api) {
            $api->get('/', 'UsersController@me');
            $api->get('/classes', 'UsersController@getClassesByAuthUser');
            $api->get('/classes/activated', 'UsersController@getActivatedClassByAuthUser');
        });

    });

    $api->group(['prefix' => 'students'], function (Router $api) {
        $api->get('/', 'StudentsController@index');

        $api->group(['prefix' => '{id}'], function (Router $api) {
            $api->get('/', 'StudentsController@show');
            $api->get('/classes', 'StudentsController@getClassesByStudentId');
            $api->get('/activated_class', 'StudentsController@getActivatedClassByStudentId');
        });
    });

    $api->group(['prefix' => 'categories'], function (Router $api) {
        $api->get('/', 'CategoriesController@index');
        $api->group(['prefix' => '{id}'], function (Router $api) {
            $api->get('/', 'CategoriesController@show');
            $api->get('/articles', 'CategoriesController@getArticlesByCategoryId');
        });
    });

    $api->group(['prefix' => 'classes'], function (Router $api) {
        $api->get('/', 'ClassesController@index');

        $api->group(['prefix' => '{id}'], function (Router $api) {
            $api->get('/', 'ClassesController@show');
        });
    });
});
