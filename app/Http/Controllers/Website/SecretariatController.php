<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Secretariat;

class ClubController extends Controller
{
    public function  index()
    {

        $secretariat = Secretariat::all();
        //dd($club);

        return view('front.secretariat')->with('secretariats',$secretariat);

    }
}
