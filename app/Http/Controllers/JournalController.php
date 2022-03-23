<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JournalController extends Controller
{
    public function index(){
        $journals = DB::table('files')->where('type', 'Journal')->get();
        return view('journals')->with('journals', $journals);
    }

    public function find(Request $request){
        $search = $request->search;
  
        $data = DB::table('files')->where('type', 'Journal')->where('name', 'LIKE' , '%'.$search.'%')->get();
  
        return view('journals')
        ->with('journals', $data);
  
     }
}
