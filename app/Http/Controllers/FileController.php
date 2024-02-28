<?php

namespace App\Http\Controllers;

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
    
    }
}
