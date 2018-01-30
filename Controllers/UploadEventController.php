<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class UploadEventController extends Controller
{
    //
    public function UploadMyEvents()
    {
        if(Input::hasFile('fileToUpload'))
        {
            $file = Input::file('fileToUpload');
            $destination='images/PoetryEvents';
            $extension= $file->getClientOriginalExtension();
            $filename = str_random(12).".{$extension}";
            $upload_success= $file->move($destination,$filename);
            $photopath="images/PoetryEvents/".$filename;
            $EvtName = $_POST['name'];
            $EvtVenue = $_POST['venue'];
            $EvtDatTime = $_POST['datetime'];

            $data=array(
                'eventName' => $EvtName,
                'eventVenue' => $EvtVenue,
                'eventDateTime' => $EvtDatTime,
                'photopath' => $photopath,
            );
            DB::table('events')->insert($data);
            return redirect('AddEvent');
        }
    }
}
