<?php
//misc//

Route::get('/', 'HomeController@index');
Route::get('/signup', 'UsersController@signup');
Route::get('/login', 'UsersController@login');
Route::get('/faq', 'HomeController@faq');
Route::get('/contact', 'HomeController@contact');


//users//

Route::get('/profile', 'UsersController@profile')->middleware('auth');
Route::put('/users/update/{id}', 'UsersController@update')->name('usersUpdate')->middleware('auth');


//products//

Route::get('/catalogue/index/{category?}', 'ProductsController@index')->middleware('auth');
Route::post('/catalogue/index/{category?}', 'ProductsController@search')->middleware('auth');
Route::get('/catalogue/donaciones/{category?}', 'ProductsController@donacindex')->middleware('auth');
Route::post('/catalogue/donaciones/{category?}', 'ProductsController@donacsearch')->middleware('auth');
Route::get('/product/create/{id?}', 'ProductsController@create')->middleware('auth');
Route::post('/product/create/{id?}', 'ProductsController@store')->middleware('auth');
Route::get('/product/org-create', 'ProductsController@orgcreate')->middleware('auth');
Route::post('/product/org-create', 'ProductsController@orgstore')->middleware('auth');
Route::get('/product/{id}', 'ProductsController@show')->middleware('auth');
Route::put('/product/{id}/edit', 'ProductsController@update')->name('ProductUpdate')->middleware('auth');
Route::get('/product/{id}/edit', 'ProductsController@edit')->middleware('auth'); // Formulario para editar



//proyectos//

Route::get('/projects', 'ProjectsController@index')->middleware('auth');
Route::post('/projects', 'ProjectsController@search')->middleware('auth');
Route::get('/projects/{id}', 'ProjectsController@show')->middleware('auth');
Route::get('/projects/create', 'ProjectsController@')->middleware('auth');
Route::get('/projects/update/{id}', 'ProjectsController@')->middleware('auth');



// Route::get('/register', 'UsersController@index');
//
// Route::post('/register', 'UsersController@store');

Auth::routes();

// Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get("/home", function () {
  return redirect("/");
});
