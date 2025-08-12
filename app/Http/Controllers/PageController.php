<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function hello()
    {
        // return view('about');
        return 'สวัสดีชาวโลก';
    }
    public function about()
    {
        return view('about');
    }
}