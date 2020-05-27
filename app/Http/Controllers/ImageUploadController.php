<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{

  public function imageUpload()

  {

      return view('imageUpload');

  }

  public function imageUploadPost()

  {
    request()->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time().'.'.request()->image->getClientOriginalExtension();

    request()->image->move(public_path('img'), $imageName);

    return back()

        ->with('success','The image has been uploaded.')

        ->with('image',$imageName);

  }
}
