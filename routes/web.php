<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/department', function () {
    return view('department');
})->name('department');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/doctor', function () {
    return view('doctor');
})->name('doctor');