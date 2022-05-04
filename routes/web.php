<?php

use Illuminate\Support\Facades\Route;

//Quando acessar "/" retornar arquivo Home                                                              
Route::get('/', function () {
    return view('measurements/home');
});

//Quando acessar "/measurements" retornar arquivo List  
Route::get('/measurements', function (){
    return view('measurements/list');
});

//Quando acessar "/measurements/new" retornar arquivo Form 
Route::get('/measurements/new', function (){
    return view('/measurements/form');
});