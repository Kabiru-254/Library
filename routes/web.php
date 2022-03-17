<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\ArticlesController;

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


Route::get('/Services & Help', function () {
    return view('services');
})->name('services');

Route::get('/Database Connection', function () {
    return view('test');
})->name('test');

Auth::routes();


Route::get('/student',[StudentController::class, 'index'])->name('student')->middleware('student');
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/librarian', [LibrarianController::class, 'index'])->name('librarian')->middleware('librarian');



Route::get('/Browse Books', [BooksController::class, 'index'])->name('books');
Route::get('/Browse Articles', [ArticlesController::class, 'index'])->name('articles');
Route::get('/Browse Journals', [JournalController::class, 'index'])->name('journals');


Route::get('/upload-file', [FileUploadController::class, 'createForm']);
Route::post('/upload-file', [FileUploadController::class, 'fileUpload'])->name('fileUpload');

Route::get('/Search', [SearchController::class, 'index'])->name('Search');
Route::post('/Find', [SearchController::class, 'search'])->name('Find');

