<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GuestHouse;


class Booking extends Model
{
    protected $fillable = ['guest_name','contact','price'];

    public function guest_house(){
        
        return $this->belongsTo(GuestHouse::class);
    }
}
