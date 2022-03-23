<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
   public function index() {
        $articles = DB::table('files')->where('type', 'Article')->get();
        return view('articles')->with('articles', $articles);
   }

   public function find(Request $request){
      $search = $request->search;

      $data = DB::table('files')->where('type', 'Article')->where('name', 'LIKE' , '%'.$search.'%')->get();

      return view('articles')
      ->with('articles', $data);

   }
}
