<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Clubs;
use App\Http\Controllers\Controller;

class ClubController extends Controller
{
    public function  index()
    {

        $club = Clubs::all();
        //dd($club);

        return view('front.clubs_details')->with('clubs',$club);

    }
}
