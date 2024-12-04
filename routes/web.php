<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/coba', function () {
    return view('master');
});

Route::get('/cobarekap', function () {
    return view('rekap');
});

Route::get('/cihuy', function () {
    return view('pengunjung');
});

