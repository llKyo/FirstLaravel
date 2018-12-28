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

Route::get('/', function () {
    return "hola mundo";
});

Route::get('/zacatac', "MainController@index");
Route::get("/zacatac/create", "MainController@create");
Route::post("/zacatac/store", "MainController@store");
Route::get("/zacatac/disco/{id}", "MainController@get");
