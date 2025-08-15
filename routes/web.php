<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logs', [BookingController::class,'index'])->name("index.logs"); //this calls the Booking Controller

Route::get('/logs/create',[BookingController::class,'create'])->name("logs.create");

Route::post('/logs/store',[BookingController::class,'store'])->name('logs.store');

Route::get('/logs/show/{booking}',[BookingController::class,'show'])->name('logs.show');

Route::get('/logs/edit/{booking}',[BookingController::class,'edit'])->name('logs.edit'); //viewing

Route::put('/logs/update/{booking}',[BookingController::class,'update'])->name('logs.update');

Route::delete('/logs/destroy/{booking}',[BookingController::class,'destroy'])->name('logs.destroy');



