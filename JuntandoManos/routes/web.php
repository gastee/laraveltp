<?php
//misc//

Route::get('/', 'ProjectsController@index');
Route::get('/signup', 'ProjectsController@signup');
Route::get('/login', 'ProjectsController@login');
Route::get('/faq', 'HomeController@faq');
Route::get('/contact', 'HomeController@contact');


//users//

Route::get('/profile', 'ProjectsController@profile');
Route::get('/udpate/{id}', 'ProjectsController@update');



//products//

Route::get('/catalogue/index/{category?}', 'ProductsController@index');
Route::post('/catalogue/index/{category?}', 'ProductsController@search');
Route::get('/product/{id}', 'ProductsController@');
Route::get('/product/create', 'ProjectsController@create');
Route::get('/product/update/{id}', 'ProjectsController@update');



//proyectos//

Route::get('/projects', 'ProductsController@');
Route::get('/projects/{id}', 'ProductsController@');
Route::get('/projects/create', 'ProjectsController@');
Route::get('/projects/update/{id}', 'ProjectsController@');



// Route::get('/register', 'UsersController@index');
//
// Route::post('/register', 'UsersController@store');

Auth::routes();
