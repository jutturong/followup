<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Followup Project AGKKU')</title>
    
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
   
<body>

@include('layouts.navbar', [
    'brand' => 'Project-FollowUp',
    'iconClass' => 'bi bi-person-rolodex me-1 fs-3',
    'parent' => View::getSections()['navbar_parent'] ?? 'หน้าหลัก',
    'labelsr' => View::getSections()['navbar_labelsr'] ?? 'ค้นหา',
    'iconlogout' => View::hasSection('iconlogout') ? View::yieldContent('iconlogout') : null
])

{{-- breadcrumb --}}
{{-- @include('layouts.breadcrumb', [
    'parent' => View::getSections()['breadcrumb_parent'] ?? 'Home',
    'page'   => View::getSections()['breadcrumb_page'] ?? 'Dashboard'
]) --}}
{{-- Breadcrumb --}}
@include('layouts.breadcrumb', [
    'parent' => View::hasSection('breadcrumb_parent') ? View::yieldContent('breadcrumb_parent') : null,
    'page'   => View::hasSection('breadcrumb_page') ? View::yieldContent('breadcrumb_page') : null
])

    {{-- Content --}}
    <main class="container-fluid py-2">
        @yield('content')
    </main>

    {{-- Footer --}}
   {{-- @include('layouts.footer', ['brand' => View::hasSection('footer-brand') ? View::yieldContent('footer-brand') : null]) --}}

{{-- Footer --}}
@include('layouts.footer', [
    'brand' => View::hasSection('footer-brand') ? View::yieldContent('footer-brand') : null
])

</body>
</html>
