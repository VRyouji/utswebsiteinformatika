<?php

use Illuminate\Support\Facades\Route;

//http://127.0.0.1:8080
Route::get('/', function () {
    return view('latihan/index');//index.blade.php
});

//http://127.0.0.1:8080/latihan
Route::get('/latihan', function () {
    return view('latihan/latihan');//latihan.blade.php
});

//http://127.0.0.1:8080/latihan_dua
Route::get('/latihan_dua', function () {
    return view('Latihan/latihan2');//latihan2.blade.php
});

// layout ; layout.blade.php
Route::get('/home', function () {
    return view('latihan/home');
});

// default.blade.php
Route::get('/master', function () {
    return view('latihan/master');
});