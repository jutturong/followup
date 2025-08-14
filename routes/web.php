<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/logout', [HomeController::class, 'index']);
// Route::get('/hello', function () {
//     // return view('about');
//     return 'สวัสดีชาวโลก';
// });

// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/about', [\App\Http\Controllers\PageController::class, 'about']);