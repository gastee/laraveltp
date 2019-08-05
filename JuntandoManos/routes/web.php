<?php
//misc//

Route::get('/', 'HomeController@index');
Route::get('/signup', 'UsersController@signup');
Route::get('/login', 'UsersController@login');
Route::get('/faq', 'HomeController@faq');
Route::get('/contact', 'HomeController@contact');


//users//

Route::get('/profile', 'UsersController@profile');
Route::put('/users/update/{id}', 'UsersController@update')->name('usersUpdate');


//products//

Route::get('/catalogue/index/{category?}', 'ProductsController@index');
Route::post('/catalogue/index/{category?}', 'ProductsController@search');
Route::get('/product/create/{project?}/{category?}/{name?}', 'ProductsController@create');
Route::post('/product/create/{project?}/{category?}/{name?}', 'ProductsController@store');
Route::get('/product/{id}', 'ProductsController@show');
Route::put('/product/update/{id}', 'ProductsController@update');
Route::get('/product/{id}/edit', 'ProductsController@edit'); // Formulario para editar



//proyectos//

Route::get('/projects/{id}', 'ProjectsController@index');
Route::get('/projects/create', 'ProjectsController@');
Route::get('/projects/update/{id}', 'ProjectsController@');



// Route::get('/register', 'UsersController@index');
//
// Route::post('/register', 'UsersController@store');

Auth::routes();

Route::get("/home", function () {
  return redirect("/");
});
