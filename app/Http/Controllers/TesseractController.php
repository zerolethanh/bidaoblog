<?php

namespace App\Http\Controllers;

use Faker\Provider\Uuid;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TesseractController extends Controller
{
    //
    public function showUploadImageForm()
    {
        return view('tesseract.form');
    }

    public function saveImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'image'
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
//        $this->validate($request, ['image' => 'image']);

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $path = Storage::cloud()->putFileAs('tesseract', $image, Str::random(5) . '_' . $image->getClientOriginalName(), 'public');

            return view('tesseract.form')->with([
                's3url' => Storage::cloud()->url($path)
            ]);
        }
        return back();
    }
}
