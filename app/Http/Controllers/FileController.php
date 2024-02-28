<?php

namespace App\Http\Controllers;

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

        if ($request->file('file')->getSize() > env('MAX_FILE_SIZE')) {
            echo 'request size: ' .$request->file('file')->getSize();
            echo '<br>';
            echo 'leap size: ' .env('MAX_FILE_SIZE');
            echo '<br>bigger';
        } else {
            echo 'request size: ' .$request->file('file')->getSize();
            echo '<br>';
            echo 'leap size: ' .env('MAX_FILE_SIZE');
            echo '<br>smaller';
        }
    }
}
