<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    //
    public function index()
    {
        return view('upload.form');
    }

    public function save()
    {
        $avatar = request()->file('avatar');
        $path = Storage::cloud()->putFileAs('avatars', $avatar, $avatar->getClientOriginalName(), 'public');

        return view('upload.form', [
            's3url' => Storage::cloud()->url($path)
        ]);
    }
}
