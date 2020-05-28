<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use Intervention\Image\ImageManagerStatic as Image;
use ImageResize;
use Illuminate\Support\Facades\DB;


class UploadController extends Controller
{
    public function index()
    {
      $uploads = DB::table('uploads')->paginate(5);
      return view('upload.upload' , ['uploads' => $uploads]);
    }

    public function ResizeImage(Request $request)
    {
      $this->validate($request,
      [
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      $image = $request->file('image');
      $input['imagename'] = time().'.'.$image->extension();
      // get waternark
      $waterMark = public_path('img/watermark.png');


      // resize img and add watermark
      $destinationPathThumb = public_path('/thumbnail');
      $img = Image::make($image->path());
      $img->resize(150, 100, function ($constraint) {
          $constraint->aspectRatio();
      })->insert($waterMark, 'bottom-left', 5, 5)->save($destinationPathThumb.'/'. 'tn'. $input['imagename']);


      // Full size img and add watermark
      $destinationPath = public_path('/images');
      $full_image = Image::make($image->getRealPath());
      $full_image->insert($waterMark, 'bottom-left', 5, 5)->save($destinationPath . '/' . $input['imagename']);

      // store into database table
      Upload::create(['full' => $input['imagename'], 'thumbnail' => 'tn'.$input['imagename']]);

      return back()
          ->with('success', 'Image Uploaded successfully')
          ->with('imageName', $input['imagename']);

     }

     public function destroy($id)
     {
       $upload = Upload::find($id);
       $upload->delete();
       return redirect()->route('upload.index');
     }

}
