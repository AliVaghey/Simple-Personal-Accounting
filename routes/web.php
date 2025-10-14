<?php

use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');



Route::middleware('auth')->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('transactions', 'transactions')->name('transactions');
    Route::view('tags', 'tags')->name('tags');
    Route::view('statistics', 'statistics')->name('statistics');

});

require __DIR__.'/auth.php';
