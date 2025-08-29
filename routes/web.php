<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.home');
});

Route::get('/pencarian', function () {
    return view('client.hasil_pencarian');
});

Route::get('/detail', function () {
    return view('client.detail_kendaraan');
});

Route::get('/form-iklan', function () {
    return view('owner.form_iklan');
});

Route::get('/index', function () {
    return view('owner.index');
});

Route::get('/pengaturan', function () {
    return view('owner.pengaturan');
});


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/moderasi', function () {
        return view('admin.moderasi');
    });

    Route::get('/paket', function () {
        return view('admin.paket');
    });

    Route::get('/userlist', function () {
        return view('admin.pengguna');
    });
});
