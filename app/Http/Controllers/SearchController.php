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
    public function search(Request $request){
        $search = $request->search;
       
        $data = DB::table('files')->where('name', 'LIKE' , '%'.$search.'%')->get();
    

        return view('search')
        ->with('files', $data);
    }
   
}
