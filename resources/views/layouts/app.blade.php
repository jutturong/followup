<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Project Followup AGKKU')</title>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet"> --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}"> --}}

</head>

<body>
    {{-- Header --}}
    @include('layouts.header')   

    <!-- Breadcrumb section -->
     {{-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="bg-light py-2">
        <div class="container-fluid">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </div>
    </nav>  --}}
     @section('breadcrumb')
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="bg-light py-2">
            <div class="container-fluid">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">เมนูปัจจุบัน</li>
                    {{-- {!! autoBreadcrumb() !!} --}}
                </ol>
            </div>
        </nav>
    @show

    <!-- Breadcrumb section -->
{{-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="bg-light py-2">
    <div class="container-fluid">
        <ol class="breadcrumb mb-0">
            @yield('breadcrumb', '')
        </ol>
    </div>
</nav> --}}


    {{-- Content --}}
    <main class="container-fluid py-2">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-dark text-light py-2 mt-2">
        <div class="container text-center">
            <small>&copy; {{ date('Y') }} Project Followup AGKKU. All rights reserved.</small>
        </div>
    </footer>
</body>

</html>
