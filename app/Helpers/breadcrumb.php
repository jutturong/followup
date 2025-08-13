<?php

if (!function_exists('autoBreadcrumb')) {
    function autoBreadcrumb()
    {
        $routeName = \Illuminate\Support\Facades\Route::currentRouteName();
        $segments = explode('.', $routeName); // แยกชื่อ route ตาม dot notation
        $html = '<li class="breadcrumb-item"><a href="' . route('home') . '">Home</a></li>';

        foreach ($segments as $key => $segment) {
            if ($key == count($segments) - 1) {
                $html .= '<li class="breadcrumb-item active" aria-current="page">' . ucfirst($segment) . '</li>';
            } else {
                $url = route(implode('.', array_slice($segments, 0, $key + 1)));
                $html .= '<li class="breadcrumb-item"><a href="' . $url . '">' . ucfirst($segment) . '</a></li>';
            }
        }
        return $html;
    }
}