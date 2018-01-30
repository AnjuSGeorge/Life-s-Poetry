<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class UploadPhotoController extends Controller
{
    //
    public function UploadMyPhotos()
    {
               if(Input::hasFile('fileToUpload'))
               {
                   $file = Input::file('fileToUpload');
                   $destination='images/gallery';
                   $extension= $file->getClientOriginalExtension();
                    $filename = str_random(12).".{$extension}";
                    $upload_success= $file->move($destination,$filename);
                   $UserId = Auth::user()->id;
                   $photopath="images/gallery/".$filename;
                   $data=array(
                       'UserId' => $UserId,
                       'photoPath' => $photopath,
                   );
                   DB::table('photogallery')->insert($data);
                   return redirect('gallery');
               }
    }
}