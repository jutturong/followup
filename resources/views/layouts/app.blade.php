<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Followup Project AGKKU')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}"> --}}

</head>
<body>

    {{-- Header --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Followup Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#">หน้าหลัก</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">โครงการ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">รายงาน</a></li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="ค้นหา">
                    <button class="btn btn-light" type="submit">ค้นหา</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main class="container-fluid py-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-dark text-light py-3 mt-4">
        <div class="container text-center">
            <small>&copy; {{ date('Y') }} Followup Project AGKKU. All rights reserved.</small>
        </div>
    </footer>

</body>
</html>
