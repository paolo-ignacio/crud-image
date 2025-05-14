<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', [RegisterController::class, 'loginForm'])->name('login');
Route::post('login', [RegisterController::class, 'login']);


Route::get('registration', [RegisterController::class, 'registrationForm'])->name('registration');
Route::post('registration', [RegisterController::class, 'registration']);
Route::post('logout', [RegisterController::class, 'logout'])->name('logout');

Route::post('delete/{id}', [AccountController::class, 'destroy'])->name('delete');
Route::get('edit/{id}', [AccountController::class, 'edit'])->name('edit');
Route::post('edit/{id}', [AccountController::class, 'update']);
Route::resource('accounts', AccountController::class);
Route::middleware('auth')->get('accounts', function() {
    return view('account.index');
    
});

Route::get('receipt', [RegisterController::class, 'receipt']);