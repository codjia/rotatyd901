<?php

namespace App\Http\Controllers\Website;

use App\Anniversary;
use Illuminate\Http\Request;
use App\Clubs;
use App\Http\Controllers\Controller;

class AnniversaryController extends Controller
{
    public function  index()
    {

        $anif = Anniversary::all();
        //dd($anif);

        return view('front.birthdays_anniversary')->with('anifs',$anif);

    }
}
