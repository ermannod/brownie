<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage.hp');
});

Route::get('upload', 'UploadController@index');
Route::post('image-upload', 'UploadController@ResizeImage')->name('image.upload.post');
Route::resource('upload' , 'UploadController');

Auth::routes(['register' => false]);
