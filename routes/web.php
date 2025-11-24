<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

// Redirect root "/" ke halaman_home
Route::get('/', function () {
    return redirect()->route('halaman_home');
});

// Halaman Home
Route::get('/halaman_home', function () {
    return view('pages.home');
})->name('halaman_home');

// Halaman Tentang (Hanya alias, akan redirect ke home#tentang-kami)
// Route ini tetap dipertahankan untuk memastikan request()->is('tentang') di tempat lain tetap aman
Route::get('/tentang', function () {
    return redirect()->route('halaman_home');
})->name('tentang');

// Halaman Register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Halaman Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::middleware(['auth'])->group(function () {
    // GET: Menampilkan form (Create atau Edit)
    Route::get('/data-member', [MemberController::class, 'create'])->name('member.create');

    // POST: Menyimpan atau memperbarui data
    Route::post('/data-member', [MemberController::class, 'store'])->name('member.store');
});
