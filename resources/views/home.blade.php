@extends('layouts.app')

@section('title', 'หน้าหลัก')

@section('navbar_parent', 'หน้าจัดการโครงการ')
@section('navbar_labelsr', 'ค้นหาโครงการ')

@section('content')

    <div class="accordion" id="accordionExample">

         {{-- Administrator Strategic Planning Group (กลุ่มแผนงานยุทธศาสตร์) --}}
        @include('mainmenu.mainmenu', ['menusCompo1' => $getMenusStrategic])

        {{-- ผู้รับผิดชอบโครงการ  Projectmanager --}}
        @include('mainmenu.mainmenu', ['menusCompo1' => $projectmanage])

        {{-- บัญชีและการเงิน --}}
        @include('mainmenu.mainmenu', ['menusCompo1' => $menusFinance])
       
         {{-- ผู้บริหาร --}}
        @include('mainmenu.mainmenu', ['menusCompo1' => $menusExecutive])

    </div>

@endsection
