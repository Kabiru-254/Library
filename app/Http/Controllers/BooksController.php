<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index(){
        $books = DB::table('files')->where('type', 'Book')->get();
        return view('books')->with('books', $books);
    }
}
