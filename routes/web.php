<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main');
});

Route::post('/', function (Request $request) {
    // Variable and computation block
    $roomRate = 1500;
    $checkIn = $request -> input('checkIn');
    $checkOut = $request -> input('checkOut');
    $rooms = $request -> input('rooms');
    $start = strtotime($checkIn);
    $end = strtotime($checkOut);
    $days = ($end - $start)/60/60/24;
    $fee = $rooms * $days * $roomRate;

    // Condition for number of rooms is greater than 3
    // will get a discount
    if ($rooms >= 3) {
        $discount = $fee * 0.10;
    } else {
        $discount = 0;
    }

    // Total amount operation
    $total_amount = $fee - $discount;

    $data = [
    'roomRate' => $roomRate,
    'checkIn' => $checkIn,
    'checkOut' => $checkOut,
    'rooms' => $rooms,
    'days' => $days,
    'fee' => $fee,
    'discount' => $discount,
    'total_amount' => $total_amount,
    ];


    return view('main', $data);

});
