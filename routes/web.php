<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjobController;

Route::get('/jobs', [ajobController::class,'showAllAjobs']);
// Route::get('/admin', [ajobController::class,'index']);
// Route::get('/admin', [ajobController::class,'create']);



Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('admin', AjobController::class);

