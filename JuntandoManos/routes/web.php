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

Route::get('/', 'ProjectsController@index');
Route::get('/signup', 'ProjectsController@signup');
Route::get('/login', 'ProjectsController@login');
Route::get('/faq', 'ProjectsController@login');


//user//
Route::get('/contact', 'ProjectsController@contact');
Route::get('/profile', 'ProjectsController@profile');
Route::get('/udpate', 'ProjectsController@update');


Route::get('/udpate', 'ProjectsController@update');
Route::get('/udpate', 'ProjectsController@update');





Route::get('/catalogue/index/{category?}', 'ProductsController@index');
Route::post('/catalogue/index/{category?}', 'ProductsController@search');

// Route::get('/register', 'UsersController@index');
//
// Route::post('/register', 'UsersController@store');

Auth::routes();
