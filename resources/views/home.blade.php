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
        {{-- <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree">
                    <i class="bi bi-coin fs-2"></i> &nbsp; บัญชีและการเงิน
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                    เนื้อหาสำหรับบัญชีและการเงิน
                </div>
            </div>
        </div> --}}
         {{-- ผู้บริหาร --}}
        @include('mainmenu.admin', ['menusCompo1' => $menusExecutive])

    </div>

@endsection
