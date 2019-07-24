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

Route::get('/home', 'HomeController@index');<
Route::get('/home/faq', 'HomeController@faq');


Route::get('/catalogue/index', function () {
    return view('front/catalogue/index');
});

// Route::get('/register', 'UsersController@index');
//
// Route::post('/register', 'UsersController@store');

Auth::routes();
