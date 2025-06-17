<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fontController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/include',[
    fontController::class,
    'include'
])->name('include');