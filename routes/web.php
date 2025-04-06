<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('public_site.layouts.home');
});

Route::get('/about_us', function () {
    return view('public_site.layouts.about_us');
});
Route::get('/shop', function () {
    return view('public_site.layouts.shop');
});
Route::get('/blog', function () {
    return view('public_site.layouts.blog');
});
Route::get('/contact', function () {
    return view('public_site.layouts.contact');
});