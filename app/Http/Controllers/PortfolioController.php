<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $records = Portfolio::orderBy('id','DESC')->get();
        return view('admin/portfolio',compact('records'));
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


        $blog = new Portfolio();
        $blog->name = $request->name;
        $blog->type = $request->type;
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

        return back()->withErrors('Portfolio Inserted Successfully!');
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




        $blog = Portfolio::find($id);
        $blog->name = $request->name;
        $blog->type = $request->type;
        $blog->content = $request->content;
        $blog->status = $request->status;
        $blog->save();



        if ($request->hasFile('image')) {

            $image      = $request->file('image');
            $imageName  = 'portfolio_'.date('ymdhis').'.'.$image->getClientOriginalExtension();
            $path       = 'images/portfolio/';
            $image->move($path, $imageName);
            $imageUrl   = $path . $imageName;
            $blog->image = $imageUrl ;
        }

        $blog->save();

        return back()->withErrors('Portfolio Updated Successfully!');
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

        Portfolio::destroy($id);


        return back()->withErrors('Portfolio Deleted Successfully!');


    }
}
