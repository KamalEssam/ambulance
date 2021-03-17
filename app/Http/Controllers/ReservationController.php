<?php

namespace App\Http\Controllers;

use App\Mail\NewReservation;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $records = Reservation::orderBy('created_at','DESC')->get();

        return view('admin.reservation',compact('records'));
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
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'date'=>'required',
            'pickup'=>'required',
            'destination'=>'required',
            'type'=>'required',
        ]);

        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->date = $request->date;
        $reservation->pickup = $request->pickup;
        $reservation->destination = $request->destination;
        $reservation->type = $request->type;
        $reservation->save();
        try{


            Mail::to(setting()->email)->send(new NewReservation($reservation));
        }catch(\Exception $e){
            //
        }

        return back()->withSuccess('Thanks for requesting for a reservation. We will reach to you soon!');
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
        $reservation = Reservation::find($id);
        /*$this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'date'=>'required',
            'pickup'=>'required',
            'destination'=>'required',
            'type'=>'required',
        ]);

        $reservation = Reservation::find($id);
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->date = $request->date;
        $reservation->pickup = $request->pickup;
        $reservation->destination = $request->destination;
        $reservation->type = $request->type;*/
        $reservation->status = $request->status;
        $reservation->save();

        return back()->withSuccess('Reservation modified successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation::destroy($id);

        return back()->withSuccess('Reservation removed successfully!');
    }
}
