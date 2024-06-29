<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('inputs', InputController::class);
Route::resource('input', InputController::class);
