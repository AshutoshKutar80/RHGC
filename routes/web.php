<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $contracts = config('contracts');
    $featuredContracts = array_slice($contracts, 0, 3);
    return view('home', compact('featuredContracts'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contracts', function () {
    $contracts = config('contracts');
    return view('contracts', compact('contracts'));
})->name('contracts');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
