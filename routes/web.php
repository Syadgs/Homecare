<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('homepage');
});


// Route untuk halaman login
Route::get('/login', function () {
    return view('login'); // Pastikan file view login.blade.php sudah dibuat
})->name('login');

// Route untuk memproses login
Route::post('/login', function (\Illuminate\Http\Request $request) {
    // Validasi sederhana (bisa diganti dengan autentikasi Laravel)
    $validated = $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    // Dummy check (username dan password)
    if ($validated['username'] === 'admin' && $validated['password'] === 'kalisari') {
        // Jika login berhasil, redirect ke homepage
        return redirect()->route('homepage');
    }

    // Jika gagal, kembali ke halaman login dengan error
    return back()->withErrors(['error' => 'Invalid username or password']);
})->name('login.process');

// Route untuk homepage
Route::get('/homepage', function () {
    return view('homepage'); // Pastikan file view homepage.blade.php sudah dibuat
})->name('homepage');



// Route untuk halaman registrasi
Route::get('/register', function () {
    return view('register'); // Nama view: register.blade.php
})->name('register');

// Route untuk proses registrasi (opsional)
Route::post('/register', function (\Illuminate\Http\Request $request) {
    // Validasi dan simpan data (dummy)
    $validated = $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    // Simpan ke database (contoh dengan model User)
    \App\Models\User::create([
        'name' => $validated['username'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']),
    ]);

    return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan login.');
})->name('register.process');