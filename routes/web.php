<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomecareController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

// Route ke halaman utama aplikasi
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('homepage');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/login', function () {
    return view('login'); 
})->name('login');
Route::get('/register', function () {
    return view('register'); 
})->name('register');
Route::get('/reservasi', function () {
    return view('reservasi');
})->name('reservasi');
Route::get('/reservasi2', function () {
    return view('reservasi2');
})->name('reservasi2');



// Route untuk submit form
Route::post('/reservasi/submit', function () {
    // Logika submit, misalnya menyimpan data ke database
    return redirect()->route('home'); // Contoh redirect
})->name('reservasi.submit');

// Route untuk memproses login
Route::post('/login', function (\Illuminate\Http\Request $request) {
    // Validasi sederhana (bisa diganti dengan autentikasi Laravel)
    $validated = $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    // Dummy check (username dan password)
    if ($validated['username'] === 'admin' && $validated['password'] === 'kalisari') {
        // Jika login berhasil, redirect ke halaman admin
        return redirect()->route('admin');
    }

    // Jika gagal, kembali ke halaman login dengan error
    return back()->withErrors(['error' => 'Invalid username or password']);
})->name('login.process');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

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