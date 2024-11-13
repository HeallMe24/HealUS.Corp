<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Landing halaman Route
Route::get('/', function () {
    if (Auth::check()) {
        // melanjutkan ke hal berikut berdasarkan role jika user sudah di autentikasi
        return Auth::user()->role === 'admin' ? redirect('/dashboard') : redirect('/home');
    }
    // Ke Halaman Landing jika tidak ter autentikasi
    return view('landing'); 
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('info');
})->name('info');


// Dashboard untuk Admin
Route::get('/dashboard', function (MessageController $controller) {
    if (Auth::check() && Auth::user()->role === 'admin') {
        // Panggil method index() dari MessageController dan kirim pesan ke view
        return $controller->index();
    }
    return redirect('/home');
})->middleware(['auth', 'verified'])->name('dashboard');

// Middleware untuk (Profile, Articles, and Gallery)
Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/users', [ProfileController::class, 'index'])->name('users');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    // Article Routes
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::get('/articles/table', [ArticleController::class, 'table'])->name('articles.table');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::post('/articles/{article}/like', [ArticleController::class, 'like'])->name('articles.like');
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');

    // Gallery Routes
    Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries.create');
    Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries.store');
    Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
    Route::get('/galleries/table', [GalleryController::class, 'table'])->name('galleries.table');
    Route::get('/galleries/{gallery}/edit', [GalleryController::class, 'edit'])->name('galleries.edit');
    Route::put('/galleries/{gallery}', [GalleryController::class, 'update'])->name('galleries.update');
    Route::delete('/galleries/{gallery}', [GalleryController::class, 'destroy'])->name('galleries.destroy');
});

// Route untuk mengirim pesan
Route::post('/send-message', [MessageController::class, 'store'])->name('messages.store');

// Include Authentication routes (login, register, etc.)
require __DIR__.'/auth.php';
