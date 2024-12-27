<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;


// Route::get('/', function () {
//     return view('home');
// });



Route::get('/riwayatkunjungan', [TamuController::class, 'index'])->name('pengunjung');

Route::get('/', [TamuController::class, 'tamu'])->name('home');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/regis', [LoginController::class, 'regis'])->name('regis');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('regisuser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/insertdata', [TamuController::class, 'insertdata'])->name('insertdata');

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/homepage', function () {
    return view('master');
});

Route::get('/statistikkunjungan', function () {
    return view('rekap');
});

// Route::get('/regis', function () {
//     return view('regis');
// });

// Route::get('/cihuy', function () {
//     return view('pengunjung');
// });

// Route::get('/popup', function () {
//     return view('popup');
// });