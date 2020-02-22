<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Blog;
use App\BlogComment;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function  index()
    {

        $blog = Blog::all();
        // dd($blog);

        return view('front.blog')->with('blogs',$blog);

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

    // public function comments(Request $request, $id)
    // {


    //     $comment = BlogComment::where('blog_id', '=', $id)->get();

    //     $blog =Blog::find($id);



    //     return view('committee_members.index', [

    //         'title' => 'Blog',
    //         'id' => $id,
    //         'blog' => $blog
    //     ]);
    // }

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


            return redirect()->back()->with('success', 'Comments Submitted successfully.');
        }



        // return view('front.blogview', [ 'id' => $id,'blog' => $blog,
        // 'comments'=>$comment ]);
    }

}
