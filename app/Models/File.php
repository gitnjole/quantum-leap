<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename',
        'mime',
        'path',
        'filesize'
    ];

    protected $hidden = [
        'path'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
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
