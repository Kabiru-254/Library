<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\File;
use Illuminate\Support\Facades\URL;

class StudentController extends Controller
{
    public function index() {
        $files = DB::table('files')->get();
        return view('studentDashboard')->with('files', $files);
    }

    public function download(Request $request, $name) {

    $path = storage_path('app/public/uploads/'.$name);
    return response()->download($path);

    }

    public function preview($id){
        $previewData = File::find($id);
        $path = storage_path('app\public\uploads');
        return view('trial', compact('previewData'))->with('path', $path);
      
    }

}
