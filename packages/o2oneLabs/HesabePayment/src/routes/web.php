<?php

Route::get('contact', function(){
    return view('HesabePayment::contactform');
});


Route::post('contact', function(){
    // logic goes here
})->name('contact');