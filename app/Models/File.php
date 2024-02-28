<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'size',
        'mime_type'
    ];

    protected $hidden = [
        'path'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function store()
    {

    }

    public function download()
    {
        return response()->download(storage_path('placeholder'), $this->path);
    }

    public function delete()
    {
        Storage::delete($this->path);
        $this->delete();
    }


}
