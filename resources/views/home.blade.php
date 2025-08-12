@extends('layouts.app')

@section('title', 'หน้าหลัก')

@section('content')

<div class="accordion" id="accordionExample">

  {{-- Administrator --}}
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
        <i class="bi bi-person-fill-gear fs-2"></i> &nbsp; Administrator (กลุ่มแผนงานยุทธศาสตร์)
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">

        <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col">
            <div class="card h-100">
              <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title">เพิ่มข้อมูล</h5>
                <p class="card-text">จัดการเพิ่มข้อมูลใหม่</p>
                <a href="#" class="btn btn-outline-secondary"><i class="bi bi-folder-plus fs-1 text-primary"></i></a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title">กำหนดสิทธิ์การใช้งาน</h5>
                <p class="card-text">จัดการสิทธิ์และบทบาทผู้ใช้งาน</p>
                <a href="#" class="btn btn-outline-secondary"><i class="bi bi bi-bag-plus fs-1 text-secondary"></i></a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title">ตรวจสอบสถานะ Timeline</h5>
                <p class="card-text">ติดตามความคืบหน้าของโครงการ</p>
                <a href="#" class="btn btn-outline-secondary"><i class="bi bi-binoculars fs-1 text-secondary"></i></a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title">ออกรายงาน (Reports)</h5>
                <p class="card-text">สร้างรายงานสรุปข้อมูล</p>
                <a href="#" class="btn btn-outline-secondary"><i class="bi bi-bar-chart-line fs-1 text-secondary"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  {{-- User --}}
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
       <i class="bi bi-person-plus-fill fs-2"></i> &nbsp;  ผู้รับผิดชอบโครงการ
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
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
      <i class="bi bi-terminal-plus fs-2"></i> &nbsp; บัญชีและการเงิน
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
