<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('file/create');
    }

    public function store(Request $request)
    {
        $maxFileSize = env('MAX_FILE_SIZE');
        $request->validate([
            'file' => 'required|file|max:' .$maxFileSize
        ]);

        $userFile = $request->file('file');
        $fileName = Str::slug($userFile->getClientOriginalName());
        $filePath = $userFile->storeAs('uploads', $fileName);

        $file = new File();
        $file->filename = $fileName;
        $file->path = $filePath;
        $file->filesize = $userFile->getSize();
        $file->mime = $userFile->getMimeType();
        $file->save();
    }
}
