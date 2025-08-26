<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\GuestHouseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/logs', [BookingController::class,'index'])->name("index.logs"); //this calls the Booking Controller

// Route::get('/logs/create',[BookingController::class,'create'])->name("logs.create");

// Route::post('/logs/store',[BookingController::class,'store'])->name('logs.store');

// Route::get('/logs/show/{booking}',[BookingController::class,'show'])->name('logs.show');

// Route::get('/logs/edit/{booking}',[BookingController::class,'edit'])->name('logs.edit'); //viewing

// Route::put('/logs/update/{booking}',[BookingController::class,'update'])->name('logs.update');

// Route::delete('/logs/destroy/{booking}',[BookingController::class,'destroy'])->name('logs.destroy');


Route::controller(BookingController::class)
    ->prefix('logs')
    ->name('logs.')
    ->group(function (){
    Route::get('/', 'index')->name("index"); //this calls the Booking Controller

    Route::get('/create','create')->name("create");

    Route::post('/store','store')->name('store');

    Route::get('/show/{booking}','show')->name('show');

    Route::get('/edit/{booking}','edit')->name('edit'); //viewing

    Route::put('/update/{booking}','update')->name('update');

    Route::delete('/destroy/{booking}','destroy')->name('destroy');
});

Route::resource('guest_house', GuestHouseController::class);



