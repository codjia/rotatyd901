<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;

use App\Category;
use App\Http\Controllers\Controller;
use App\Public_photo;

class PublicphotoController extends Controller
{




    public function photo()
    {
        //dd($id);
     $publicphoto = Public_photo::all();
        //$member = CommitteeMember::all();
        //dd($publicphoto);

        return view('front.public_photo')->with('publicphotos',$publicphoto);

    }





}
