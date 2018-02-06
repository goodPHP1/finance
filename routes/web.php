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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('/index/index');
});

Route::any('index/{action}', function(App\Http\Controllers\IndexController $index, $action){
    return $index->$action();
});

Route::any('login/{action}', function(App\Http\Controllers\LoginController $index, $action){
    return $index->$action();
});

Route::any('invest/{action}', function(App\Http\Controllers\InvestController $index, $action){
    return $index->$action();
});

Route::any('my/{action}', function(App\Http\Controllers\MyController $index, $action){
    return $index->$action();
});