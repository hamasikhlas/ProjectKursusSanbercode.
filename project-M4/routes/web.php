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
    return view('layout.master');
});

Route::get('/admin', function () {
    return view('layout.admin');
});

Route::get('/produk/create', 'Controller@create');

//product
Route::resource('/product', ProductController::class);
//contact us
Route::resource('/contactus', ContactUsController::class);
Auth::routes();
