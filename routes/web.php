<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;

Route::get('/', function () {
    return redirect()->route('classes.index');
});

Route::resource('classes', ClassController::class);