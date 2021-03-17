<?php

namespace App\Http\Controllers;

use App\Inquery;
use Illuminate\Http\Request;

class InqueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $records = Inquery::orderBy('id','DESC')->get();

        return view('admin.inquery',compact('records'));
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
    }

    public function InquerySubmit(Request $request)
    {

        $this->validate($request,[
            'subject'=>'required',
            'message'=>'required',
            'email'=>'required',
            'name'=>'required',
        ]);
        $inquery =new Inquery();
        $inquery->name =$request->name;
        $inquery->email =$request->email;
        $inquery->message =$request->message;
        $inquery->subject =$request->subject;
        $inquery->save();

        return back()->withSuccess('Inquery Submitted Successfully!');
    }
}
