<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda.beranda');
});

// admin
Route::get('/admin', function (){
    return view('admin.mahasiswa.index');
});