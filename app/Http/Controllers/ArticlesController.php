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
}
