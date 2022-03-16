<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index() {
        $files = DB::table('files')->get();
        return view('studentDashboard')->with('files', $files);
    }
}
