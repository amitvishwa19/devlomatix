<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Devcomm\DevcommAdminController;


Route::get('/',[DevcommAdminController::class,'dashboard'])->name('devcomm.dashboard');