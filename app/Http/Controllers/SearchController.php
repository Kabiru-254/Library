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

    public function download(Request $request, $name) {
        $files = DB::table('files')->get();
        $path = storage_path('app/public/uploads/'.$name);
        return response()->download($path)->with('files', $files);

    
    }
   
}
