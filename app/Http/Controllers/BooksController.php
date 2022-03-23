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

    public function find(Request $request){
        $search = $request->search;
  
        $data = DB::table('files')->where('type', 'Book')->where('name', 'LIKE' , '%'.$search.'%')->get();
  
        return view('books')
        ->with('books', $data);
  
     }
}
