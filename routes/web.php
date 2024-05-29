<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/services/invoice',[ServicesController::class,'invoice']);