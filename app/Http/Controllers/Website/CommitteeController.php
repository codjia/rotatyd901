<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\CommitteeMember;
use App\Committee;
use App\Http\Controllers\Controller;

class CommitteeController extends Controller
{
    public function  index()
    {

        $committee = Committee::all();
        //dd($committee);

        return view('front.committee')->with('committees',$committee);

    }
    public function  member($id )
    {
        //dd($id);
     $member = CommitteeMember::where('committee_id',$id)->get();
        //$member = CommitteeMember::all();
        //dd($member);

        return view('front.committee_members')->with('members',$member);

    }





}
