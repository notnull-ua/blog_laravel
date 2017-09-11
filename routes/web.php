<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', function () {
    return "Hello, world";
});
Route::get('test/{name}', "TestController@sayHello");


// this group routs  for admin panel
Route::group([
    'prefix' => 'admin',
    'namespace' => 'admin',
    'as' => 'admin.'
],
    function () {
        //this routs for admin panel
        Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
    });