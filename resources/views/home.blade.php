@extends('layouts.app')

@section('title', 'หน้าหลัก')

@section('content')

    <div class="accordion" id="accordionExample">

        {{-- Administrator Strategic Planning Group (กลุ่มแผนงานยุทธศาสตร์)
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                    <i class="bi bi-database-fill-gear fs-2"></i> &nbsp; {{ $menusCompo1['group'] }}
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <div class="row row-cols-1 row-cols-md-4 g-3">
                        @foreach ($menusCompo1['menus'] as $menu)
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body text-center d-flex flex-column align-items-center">
                                        <div class="icon-wrapper mt-2 mb-3">
                                            <a href="{{ $menu['url'] }}" class="btn btn-outline-{{ $menu['color'] }}">
                                                <i class="bi {{ $menu['icon'] }} fs-1"></i>
                                            </a>
                                        </div>
                                        <h5 class="card-title">{{ $menu['title'] }}</h5>
                                        <p class="card-text">{{ $menu['text'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- เรียกเมนู admin --}}
        @include('mainmenu.admin', ['menusCompo1' => $menusCompo1])

        {{-- User --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo">
                    <i class="bi bi-person-plus-fill fs-2"></i> &nbsp; ผู้รับผิดชอบโครงการ
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    เนื้อหาสำหรับผู้ใช้
                </div>
            </div>
        </div>

        {{-- บัญชีและการเงิน --}}
        <div class="accordion-item">
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
        </div>

    </div>

@endsection
