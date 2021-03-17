<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function dashboard()
    {
        $total_reservation=  Reservation::where('status','checked')->count();
        $total_pending_reservation=  Reservation::where('status','pending')->count();
        $total_pending_inquiry=  Reservation::where('status','pending')->count();
        return view('admin.dashboard',compact('total_pending_inquiry','total_pending_reservation','total_reservation'));
    }
}
