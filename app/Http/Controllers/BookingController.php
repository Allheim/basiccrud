<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){ //a.k.a. callback function


        // dd($bookings);
        return view('logs.index',[
            'bookings'=> Booking::all()
            
        ]);
        
    }
    
}
