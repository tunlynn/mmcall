<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PhoneAccountController;

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});


Route::get('/how-to-use', function () {
    return view('how-to');
});

Route::get('/test', [HomeController::class, 'test']);

// Route::get('/phoneaccount/create', [PhoneAccountController::class, 'store']);