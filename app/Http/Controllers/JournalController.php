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
}
