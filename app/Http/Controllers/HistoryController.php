<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
     $post = History::All();
       // return Post::where('title','Post Two')->get();
    // $post= DB::select('select * from posts');
    //$post= Post::all();
    //$post = Post::orderBy('title','desc')->take(1)->get();
   // $post = Post::orderBy('title','desc')->paginate(1);
         return view('back.Auth.history.index')->with('history',$post);

    }
    public function create()
    {
       // if($request->method() == "POST")
       //     ddd("working");
        return view ('back.Auth.history.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
           'title'=>'required|unique:history,title',
           'body'=>'required',
           'cover_image'=>'image|nullable|max:1999'
       ]);
       //handle file upload
        if($request->hasFile('cover_image')){
            //get file name with extension
            $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
            //get just file name
            $filename=pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extention
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //filr to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //store images
            $path=$request->file('cover_image')->storeAs('/public/cover_images',$fileNameToStore);
        }else{

            $fileNameToStore='noimage.jpg';
        }
       //create hystory
       $history= new History();
       $history->title=$request->input('title');
       $history->body=$request->input('body');
    //    $post->user_id=auth()->user()->id;
       $history->cover_image=$fileNameToStore;
       $history->save();

       return redirect('D9102/admin/history')->with('success','History Created');

}

 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $history= History::find($id);
       return view('back.Auth.history.show'->with('history',$history));
    }
 /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {


        $history= History::find($id);
       return view('back.Auth.history.edit')->with('history',$history);;
    }

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

       // dd($request->route('id'));
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1999'
        ]);
        //handle file upload
         if($request->hasFile('cover_image')){
             //get file name with extension
             $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
             //get just file name
             $filename=pathinfo($fileNameWithExt, PATHINFO_FILENAME);
             //get just extention
             $extension=$request->file('cover_image')->getClientOriginalExtension();
             //filr to store
             $fileNameToStore=$filename.'_'.time().'.'.$extension;
             //store images
             $path=$request->file('cover_image')->storeAs('/public/cover_images',$fileNameToStore);
         }else{

             $fileNameToStore='noimage.jpg';
         }
        //create hystory
        $history= new History();

        History::query()->where('id','=',$request->route('id'))->update([
            'title'=>$request->input('title'),
            'body'=>$request->input('body'),
            'cover_image'=>$fileNameToStore,
        ]);

    //     $history->title=$request->input('title');
    //     $history->body=$request->input('body');
    //  //    $history->user_id=auth()->user()->id;
    //  if($request->hasFile('cover_image')){
    //     $history->cover_image=$fileNameToStore;


        //$history->save();

        return redirect('D9102/admin/history')->with('success','History Updated');

    }




}
