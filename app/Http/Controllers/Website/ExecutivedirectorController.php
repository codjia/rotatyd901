<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Executivedirector;
use App\Http\Controllers\Controller;

class ExecutivedirectorController extends Controller
{
    public function  index()
    {

        $ced = Executivedirector::all();
        //dd($ced);

        return view('front.executive_directors')->with('ceds',$ced);

    }
}
