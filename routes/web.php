<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/home/detail', function () {
    return view('pages.detail');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
