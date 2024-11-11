<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect('/landing');
});

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});


Route::get('/how-to-use', function () {
    return view('how-to');
});

Route::get('/landing', function () {
    return view('landing');
});

// Route::get('/phoneaccount/create', [PhoneAccountController::class, 'store']);