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
    return view('index');
})->name('home');

Route::get('/Search', function () {
    return view('search');
})->name('search');

Route::get('/Browse Publications', function () {
    return view('publications');
})->name('publications');

Route::get('/Browse Articles', function () {
    return view('articles');
})->name('articles');

Route::get('/Browse Books', function () {
    return view('books');
})->name('books');

Route::get('/Services & Help', function () {
    return view('services');
})->name('services');