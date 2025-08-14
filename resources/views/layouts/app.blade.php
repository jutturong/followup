<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Followup Project AGKKU')</title>
    
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
   
<body>

{{-- navbar --}}
{{-- @include('layouts.navbar',['brand' => 'Project-FollowUp','iconClass' => 'bi bi-check2-square fs-3','parent' => 'หน้าหลัก','labelsr'=>'ค้นหา']) --}}
{{-- navbar --}}
@include('layouts.navbar', [
    'brand' => 'Project-FollowUp',
    'iconClass' => 'bi bi-check2-square fs-3',
    'parent' => View::getSections()['navbar_parent'] ?? 'หน้าหลัก',
    'labelsr' => View::getSections()['navbar_labelsr'] ?? 'ค้นหา'
])


<!-- Breadcrumb -->
@include('layouts.breadcrumb', ['parent' => 'Home', 'page' => 'Dashboard'])


    {{-- Content --}}
    <main class="container-fluid py-2">
        @yield('content')
    </main>

    {{-- Footer --}}
    {{-- <footer class="bg-dark text-light py-2 mt-2">
        <div class="container text-center">
            <small>&copy; {{ date('Y') }} Followup Project AGKKU. All rights reserved.</small>
        </div>
    </footer> --}}
    @include('layouts.footer',['brand' => 'หน่วยโสตและสารสนเทศ Audiovisual and Information Technology Unit ห้อง 8013 , โทร 45303'])

    {{-- Scripts --}}

</body>
</html>
