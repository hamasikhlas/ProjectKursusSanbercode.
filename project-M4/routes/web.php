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

<<<<<<< HEAD
Route::get('/', function () {
    return view('auth.login');
});
=======
>>>>>>> e6063a1623e4c7fa95ecc64902ac8260efad2904

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layout.master');
});

Route::group(['middleware' => ['auth']], function () {
    
    
    Route::get('/admin', function () {
        return view('layout.admin');
    });
    
    // Route::get('/produk/create', 'Controller@create');
    Route::get('/produk_categories', 'CategoriesController@index');
    Route::get('/produk_categories/create', 'CategoriesController@create');
    Route::post('/produk_categories', 'CategoriesController@store');
    Route::delete('/produk_categories/{id}', 'CategoriesController@destroy');
    Route::get('/produk_categories/{id}', 'CategoriesController@edit');
    Route::put('produk_categories/{id}', 'CategoriesController@update');
    Route::get('/profil', 'ProfilController@index');
    Route::post('/profil', 'ProfilController@store');
    Route::put('/profil/{id}', 'ProfilController@update');
    Route::get('/profil/lengkapi', 'ProfilController@lengkapi');
    Route::get('/home', 'HomeController@index')->name('home');
});

<<<<<<< HEAD


Auth::routes();


=======
Route::get('/produk/create', 'Controller@create');

//product
Route::resource('/product', ProductController::class);
//contact us
Route::resource('/contactus', ContactUsController::class);
Auth::routes();
>>>>>>> e6063a1623e4c7fa95ecc64902ac8260efad2904
