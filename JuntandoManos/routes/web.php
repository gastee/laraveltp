<?php
//misc//

Route::get('/', 'ProjectsController@index');
Route::get('/signup', 'ProjectsController@signup');
Route::get('/login', 'ProjectsController@login');
Route::get('/faq', 'HomeController@faq');
Route::get('/contact', 'HomeController@contact');


//users//

Route::get('/profile', 'UsersController@profile');
Route::put('/users/update/{id}', 'UsersController@update')->name('usersUpdate');


//products//

Route::get('/catalogue/index/{category?}', 'ProductsController@index');
Route::post('/catalogue/index/{category?}', 'ProductsController@search');
Route::get('/product/{id}', 'ProductsController@');
Route::get('/product/create', 'ProductsController@create');
Route::get('/product/update/{id}', 'ProductsController@update');



//proyectos//

Route::get('/projects', 'ProjectsController@');
Route::get('/projects/{id}', 'ProjectsController@');
Route::get('/projects/create', 'ProjectsController@');
Route::get('/projects/update/{id}', 'ProjectsController@');



// Route::get('/register', 'UsersController@index');
//
// Route::post('/register', 'UsersController@store');

Auth::routes();

Route::get("/home", function () {
  return redirect("/");
});
