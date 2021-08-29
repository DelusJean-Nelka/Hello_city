<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('pages/home');
});


Route::get('pages/about-us', function(){
    return view('pages/about');
});