<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApprovePhotosController extends Controller
{
    //
    public function ApproveMyPhotos()
    {
        $photoId = $_GET['ImageId'];

        DB::table('photogallery')->where('photoId',$photoId)->update(['photoIsApproved'=>true]);

        return redirect('ApprovePhotos');
    }
}
