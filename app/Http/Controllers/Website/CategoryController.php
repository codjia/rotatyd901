<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;

use App\Category;
use App\Http\Controllers\Controller;
use App\Photo;

class CategoryController extends Controller
{



    public function memberlogin(){
        return view('front.memberlogin');

    }



    public function  index(Request $request)
    {
        if($request->username=='rotary' && $request->password=='password'){
             $category = Category::all();
        //dd('matches');

         return view('front.category_photos')->with('categories',$category);

        }else{


            return view('front.memberlogin');

        }



    }
    public function photo($id)
    {
        //dd($id);
     $photo = Photo::where('category_id',$id)->get();
        //$member = CommitteeMember::all();
        //dd($member);

        return view('front.photos')->with('photos',$photo);

    }





}
