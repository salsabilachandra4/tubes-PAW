<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('login');
});

// user
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/home/list-kost', function(){
    return view('pages.list-kost');
});
Route::get('/home/detail', function () {
    return view('pages.detail');
});

// admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/tambah-data', function () {
    return view('admin.tambah-data');
});
Route::get('/admin/detail-data', function () {
    return view('admin.detail-data');
});
Route::get('/admin/edit-data', function () {
    return view('admin.edit-data');
});
