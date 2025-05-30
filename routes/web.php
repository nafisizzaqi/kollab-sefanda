<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/frontend', function () {
    return view('frontend.index');
});
Route::get('/karya', function () {
    return view('frontend.karya');
});
Route::get('/prestasi', function () {
    return view('frontend.prestasi');
});
Route::get('/tablemanner', function () {
    return view('frontend.Tablemanner');
});
Route::get('/tefa', function () {
    return view('frontend.tefa');
});
Route::get('/teams', function () {
    return view('frontend.teams');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('products', \App\Http\Controllers\ProductController::class);