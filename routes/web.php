<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logs', [BookingController::class,'index'])->name("index.logs"); //this calls the Booking Controller


