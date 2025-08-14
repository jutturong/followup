@extends('layouts.app')

@section('title', 'หน้าหลัก')

@section('navbar_parent', 'Home')
@section('navbar_labelsr', 'ค้นหาโครงการ')
@section('iconlogout', 'bi bi-person-x-fill me-2 fs-3')

@section('breadcrumb_parent', 'หน้าแรก')
@section('breadcrumb_page', 'เมนูหลัก')

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

@section('footer-brand', 'หน่วยโสตและสารสนเทศ Audiovisual and Information Technology Unit ห้อง 8013 โทร 45303')