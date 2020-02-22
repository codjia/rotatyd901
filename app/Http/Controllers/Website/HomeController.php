<?php

namespace App\Http\Controllers\Website;

use App\Blog;
use App\BlogComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){

        $blog = Blog::all();
        return view('front.home')->with('blogs',$blog);
    }
    public function  view($id)
    {
        $comment = BlogComment::where('blog_id', '=', $id)->get();
        $blog = Blog::find($id);
        //dd($blog);

       // return view('front.blogview')->with('blogs',$blog);
        return view('front.blogview', [
            'id' => $id,
            'blogs' => $blog,
            'comments'=>$comment
        ]);

    }
    public function add_comment(Request $request, $id)
    {

        if ($request->method() == 'POST') {

            $rules = [
                'comment' => 'required',
                'name' => 'required',
                'email' => 'required',
            ];

            $this->validate($request, $rules);



            $comment = new BlogComment();


            $comment->name = $request->post('name');
            $comment->comment = $request->post('comment');
            $comment->email = $request->post('email');
            $comment->blog_id = $id;
            $comment->save();


            return redirect()->back()->with('success', 'Committee Member added successfully.');
        }



        // return view('front.blogview', [ 'id' => $id,'blog' => $blog,
        // 'comments'=>$comment ]);
    }

    public function meeting_info_loc(){
        return view('front.meeting_info_and_location');
    }

    public function whoweare(){
        return view('front.whoweare');
    }

    public function history(){
        return view('front.history');
    }

    public function committee(){
        return view('front.committee');
    }

    public function committee_members(){
        return view('front.committee_members');
    }

    public function birthdays_anniversary(){
        return view('front.birthdays_anniversary');
    }

    public function downloads(){
        return view('front.downloads');
    }

    public function directory(){
        return view('front.directory');
    }

    public function directory_detail(){
        return view('front.directory_details');
    }

    public function executive_directors(){
        return view('front.executive_directors');
    }

    public function club_news(){
        return view('front.news');
    }

    public function stories(){
        return view('front.stories');
    }

    public function photo_album_category(){
        return view('front.category_photos');
    }
    public function blog(){
        return view('front.blog');
    }
    public function give(){
        return view('front.cash_donation');
    }

    public function photo_album(){
        return view('front.photos');
    }

    public function contact(){
        return view('front.contact');
    }
    public function thanks(){
        return view('front.thanks');
    }
    public function thanks_voda(){
        return view('front.thanks_voda');
    }
}
