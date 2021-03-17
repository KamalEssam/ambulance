<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $records = Blog::orderBy('id','DESC')->get();
        return view('admin/blogs',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->status = $request->status;
        $blog->image = '';
        $blog->save();



        if ($request->hasFile('image')) {

            $image      = $request->file('image');
            $imageName  = 'blog_'.date('ymdhis').'.'.$image->getClientOriginalExtension();
            $path       = 'images/blog/';
            $image->move($path, $imageName);
            $imageUrl   = $path . $imageName;
            $blog->image = $imageUrl ;
        }

        $blog->save();

        return back()->withErrors('Blog Inserted Successfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //


        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->status = $request->status;
        $blog->save();



        if ($request->hasFile('image')) {

            $image      = $request->file('image');
            $imageName  = 'blog_'.date('ymdhis').'.'.$image->getClientOriginalExtension();
            $path       = 'images/blog/';
            $image->move($path, $imageName);
            $imageUrl   = $path . $imageName;
            $blog->image = $imageUrl ;
        }

        $blog->save();


        return back()->withErrors('Blog Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //


        Blog::destroy($id);


        return back()->withErrors('Blog Deleted Successfully!');
    }
}
