<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FromvalidationController;


Route::resource('/form', FromvalidationController::class);
