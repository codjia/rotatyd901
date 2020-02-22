<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\District_leaders;
use App\Http\Controllers\Controller;

class District_leaderController extends Controller
{
    public function  index()
    {

        $leader = District_leaders::all();
       //dd($leader);

        return view('front.district_leaders')->with('leaders',$leader);

    }
}
