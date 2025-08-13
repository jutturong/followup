<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Followup Project AGKKU')</title>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet"> --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}"> --}}

</head>

<body>

    {{-- Header --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Project Followup</a>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
            aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="bi bi-geo-alt-fill fs-3"></i> หน้าหลัก
                    </a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="ค้นหา">
                <button class="btn btn-light" type="submit">
                    <i class="bi bi-person-bounding-box fs-5"></i>
                </button>
            </form>
        </div>
    </div>
</nav>

<!-- Breadcrumb section -->
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="bg-light py-2">
    <div class="container-fluid">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
    </div>
</nav>


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
