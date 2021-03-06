<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;


class FileUploadController extends Controller
{
    public function createForm(){
        return view('librarianDashboard');
    }

    public function fileUpload(Request $req){

        $req->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf,docx,doc,ppt,dot,docm'
        ]);

        
        $fileModel = new File;
        if ($req ->file()){
            $fileName = $req ->file->getClientOriginalName();
            $filepath = $req ->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel -> name = $req->file->getClientOriginalName();
            $fileModel -> type = $req->publication;
            $fileModel-> file_path = '/storage/' . $filepath;
            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }

    }

}
