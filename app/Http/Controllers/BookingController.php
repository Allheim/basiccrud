<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){ //a.k.a. callback function

        // $bookings = Booking::all();
        // dd($bookings);

        return view('logs.index',[
            'bookings'=> Booking::all()
            
        ]);
        
    }
    
    public function create(){
        
        return view('logs.create');
    }

    public function store(Request $request){
        
        //$booking = new Booking;
        
        // $booking->guest_name = $request->guest_name;
        // $booking->contact = $request->contact;
        // $booking->price = $request->price;

        // $booking->guest_name = $request['guest_name'];
        // $booking->contact = $request['contact'];
        // $booking->price = $request['price'];
        // dd($request->input());

        Booking::create($request->input());

        //$booking->save();

        return redirect()->route('index.logs');

        
        // dd($request['guest_name']);
    }
    
}
