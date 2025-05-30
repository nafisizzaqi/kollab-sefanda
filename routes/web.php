<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Models\Home;

// Halaman Login (Form)
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

// Proses Login (POST)
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

// Logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Halaman Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route resource untuk About
    Route::get('/about', [AboutController::class, 'index'])->name('pages.about.index');
    Route::get('/about/create', [AboutController::class, 'create'])->name('pages.about.create');
    Route::post('/about', [AboutController::class, 'store'])->name('pages.about.store');
    Route::get('/about/{about}/edit', [AboutController::class, 'edit'])->name('pages.about.edit');
    Route::put('/about/{about}', [AboutController::class, 'update'])->name('pages.about.update');
    Route::delete('/about/{about}', [AboutController::class, 'destroy'])->name('pages.about.destroy');

    Route::get('/gallery', [GalleryController::class, 'index'])->name('pages.gallery.index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('pages.gallery.create');
    Route::post('/gallery', [GalleryController::class, 'store'])->name('pages.gallery.store');
    Route::get('/gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name('pages.gallery.edit');
    Route::put('/gallery/{gallery}', [GalleryController::class, 'update'])->name('pages.gallery.update');
    Route::delete('/gallery/{gallery}', [GalleryController::class, 'destroy'])->name('pages.gallery.destroy');
    
    Route::get('/guru', [GuruController::class, 'index'])->name('pages.guru.index');
    Route::get('/guru/create', [GuruController::class, 'create'])->name('pages.guru.create');
    Route::post('/guru', [GuruController::class, 'store'])->name('pages.guru.store');
    Route::get('/guru/{guru}/edit', [GuruController::class, 'edit'])->name('pages.guru.edit');
    Route::put('/guru/{guru}', [GuruController::class, 'update'])->name('pages.guru.update');
    Route::delete('/guru/{guru}', [GuruController::class, 'destroy'])->name('pages.guru.destroy');
});

Route::get('/', function (){
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
require __DIR__.'/auth.php';
