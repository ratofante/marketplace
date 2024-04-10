<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/product', function() {
    return view('product');
});

Route::get('/brand', function() {
    return view('brand');
});

Route::get('/category', function() {
    return view('category');
});

Route::get('/favorites', function() {
    return view('favorites');

});

Route::get('/likes', function() {
    return view('likes');
});

Route::get('/faq', function() {
    return view('faq');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/404', function() {
    return view('404');
});



Route::get('/welcome', function () {
    return view('welcome');
});

