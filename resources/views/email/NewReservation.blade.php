@extends('layouts.app-email')
@section('content')

    <h2 style="font-weight: 500;font-size: 32px;color: #fff;">Hi!</h2>
    <br>
    <p style="font-weight: 400;color: #fff;">A new reservation request is made. please login to check it out!</p>
    <br>
    <table class="table">
        <tr>
            <td>Name</td>
            <td>{{$reservation->name}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$reservation->email}}</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>{{$reservation->phone}}</td>
        </tr>
        <tr>
            <td>Ambulance Type</td>
            <td>{{$reservation->type}}</td>
        </tr>
        <tr>
            <td>Expected date</td>
            <td>{{$reservation->date}}</td>
        </tr>
        <tr>
            <td>Pickup</td>
            <td>{{$reservation->pickup}}</td>
        </tr>
        <tr>
            <td>Destination</td>
            <td>{{$reservation->destination}}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>{{$reservation->status}}</td>
        </tr>
        <tr>
            <td>Create Date</td>
            <td>{{$reservation->created_at}}</td>
        </tr>
    </table>


    <p style="font-weight: 400;color: #fff;">If you have any questions, feel free to reach out us at <a href="mailto:{{$setting->email}}">{{$setting->email}}</a> </p>
    <br>

@endsection
