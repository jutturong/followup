@extends('layouts.app')

@section('title', 'หน้าแรก')

{{-- @section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
@endsection --}}
{{-- @section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
@endsection --}}
{{-- @section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
@endsection --}}

@section('content')

    <div class="accordion" id="accordionExample">

         {{-- Administrator Strategic Planning Group (กลุ่มแผนงานยุทธศาสตร์) --}}
        @include('mainmenu.admin', ['menusCompo1' => $getMenusStrategic])

        {{-- ผู้รับผิดชอบโครงการ  Projectmanager --}}
        @include('mainmenu.admin', ['menusCompo1' => $projectmanage])

        {{-- บัญชีและการเงิน --}}
        @include('mainmenu.admin', ['menusCompo1' => $menusFinance])
       
         {{-- ผู้บริหาร --}}
        @include('mainmenu.admin', ['menusCompo1' => $menusExecutive])

    </div>

@endsection
