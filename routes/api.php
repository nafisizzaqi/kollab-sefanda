<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GuruController;
use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\GalleryDetailController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('about', AboutController::class);
Route::resource('guru', GuruController::class);
Route::get('gallery', [GalleryController::class, 'index']);
Route::get('gallery/{slug}', [GalleryDetailController::class, 'show']);