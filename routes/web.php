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
Route::get('/download{name}',[StudentController::class, 'download'])->name('download');
Route::get('/fetch{name}',[SearchController::class, 'download'])->name('fetch')->middleware('auth');
Route::get('/preview{id}',[StudentController::class, 'preview'])->name('preview');

Route::get('delete{id}', [LibrarianController::class, 'destroy'])->name('delete');
Route::get('destroy{id}', [AdminController::class, 'delete'])->name('destroy');

Route::get('public/uploads/{name}', function ($name) {
    $path = storage_path('app\\public\\uploads'.'\\'.$name);

    return response()->file($path, [
        
        'Content-Disposition' => 'inline; filename="'.$name.'"'
   ]);
});


Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/librarian', [LibrarianController::class, 'index'])->name('librarian')->middleware('librarian');



Route::get('/Browse Books', [BooksController::class, 'index'])->name('books');
Route::post('/SearchBooks', [BooksController::class, 'find'])->name('SearchBooks');

Route::get('/Browse Articles', [ArticlesController::class, 'index'])->name('articles');
Route::post('/SearchArticles', [ArticlesController::class, 'find'])->name('SearchArticles');

Route::get('/Browse Journals', [JournalController::class, 'index'])->name('journals');
Route::post('/SearchJournal', [JournalController::class, 'find'])->name('SearchJournal');


Route::get('/upload-file', [FileUploadController::class, 'createForm']);
Route::post('/upload-file', [FileUploadController::class, 'fileUpload'])->name('fileUpload');

Route::get('/Search', [SearchController::class, 'index'])->name('Search');
Route::post('/Find', [SearchController::class, 'search'])->name('Find');

