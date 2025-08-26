<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class GuestHouse extends Model
{
    public function bookings(){
        
        return $this->hasMany(Booking::class);
    }
}
