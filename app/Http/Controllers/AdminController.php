<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){

        $users = DB::table('users')->get();
        return view('adminDashboard')->with('users', $users);
    }

    public function delete($id){
        $users = DB::table('users')->get();
        DB::delete('DELETE FROM users WHERE id = ?', [$id]);
        return \App::make('redirect')->back()->with('users', $users);
    }
}
