<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index() {

        $files = DB::table('files')->get();
        return view('search')->with('files', $files);
    }

   
}
