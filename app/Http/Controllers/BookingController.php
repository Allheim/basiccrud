<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateBookingRequest;

class BookingController extends Controller
{
    public function index(){ //a.k.a. callback function

        // $bookings = Booking::all();
        // dd($bookings);
        


        return view('logs.index',[
            'bookings'=> Booking::with('guest_house')->orderBy('created_at','desc')->paginate(2)
        ]);
        
    }
    
    public function create(){
        
        return view('logs.create');
    }

    public function store(ValidateBookingRequest $request){
        
        //$booking = new Booking;
        
        // $booking->guest_name = $request->guest_name;
        // $booking->contact = $request->contact;
        // $booking->price = $request->price;

        // $booking->guest_name = $request['guest_name'];
        // $booking->contact = $request['contact'];
        // $booking->price = $request['price'];
        // dd($request->input());


        $booking = Booking::create($request->validated());

        //$booking->save();
        $message = ' has been created successfully';
        return redirect()->route('index.logs')->with('success', $booking['guest_name'] . $message);

        
        // dd($request['guest_name']);
    }

    public function show(Booking $booking){
        
        // $bookingNotArray =  Booking::findOrFail($id);

        return view('logs.show', compact('booking'));




        // $booking = $bookingNotArray->toArray();
        // $keys = array_keys($booking);

        // $value = ['booking'=>$booking,
        //          'keys'=>$keys];

        // return view('logs.show', $value);
    }

    public function edit(Booking $booking){

        return view('logs.edit', compact('booking'));
    }

    public function update(ValidateBookingRequest $request, Booking $booking){

        $booking->update($request->validated());
        // dd($request->all());
        //return view('logs.update', compact('booking'));
        $message = " has been successfully updated";
        return redirect()->route('logs.edit',$booking['id'])->with('success',$booking['guest_name'] . $message);
    }

    public function destroy(Booking $booking){
        $booking->delete();

        $message = " has been successfully deleted";
        return redirect()->route('index.logs')->with('success',$booking['guest_name'] . $message);
    }
    
}
