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

Route::view('/', 'index');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/gallery', 'gallery');
Route::view('/products', 'products');
Route::view('/services', 'services');
