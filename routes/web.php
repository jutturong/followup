<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    // return view('about');
    return 'สวัสดีชาวโลก';
});
// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/about', [\App\Http\Controllers\PageController::class, 'about']);