<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicationType;
use Illuminate\Support\Facades\DB;

class LibrarianController extends Controller
{
    public function index() {
        $publicationTypes = DB::table('publication_type')->get();
        $files = DB::table('files')->get();
        return view('librarianDashboard')->with('publicationTypes', $publicationTypes)->with('files', $files);
    }
}
