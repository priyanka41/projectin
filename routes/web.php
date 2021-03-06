<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home'); // welcome.blade.php
});

Route::view('/result', 'search'); //1. path, 2. search.blade.php

Route::view('/ad-single', 'ad-single');

Route::view('/add-listing', 'add-listing');
