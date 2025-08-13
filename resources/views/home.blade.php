@extends('layouts.app')

@section('title', 'หน้าหลัก')

@section('content')

    <div class="accordion" id="accordionExample">

         {{-- Administrator Strategic Planning Group (กลุ่มแผนงานยุทธศาสตร์) --}}
        @include('mainmenu.admin', ['menusCompo1' => $menusCompo1])

        {{-- ผู้รับผิดชอบโครงการ  Projectmanager --}}
        @include('mainmenu.admin', ['menusCompo1' => $projectmanage])

        {{-- บัญชีและการเงิน --}}
        @include('mainmenu.admin', ['menusCompo1' => $menusFinance])
       
         {{-- ผู้บริหาร --}}
        @include('mainmenu.admin', ['menusCompo1' => $menusExecutive])

    </div>

@endsection
