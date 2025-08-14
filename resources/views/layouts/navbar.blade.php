
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">{{ $brand ?? '' }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <i class="{{ $iconClass ?? 'bi bi-plug' }}"></i> {{ $parent ?? 'Home' }}
          </a>
        </li>
        <!-- เพิ่ม nav item อื่น ๆ ได้ตรงนี้ -->
      </ul>

      <div class="d-flex align-items-center">
        <form class="d-flex me-2">
          <input class="form-control me-2" type="search" placeholder="{{ $labelsr ?? 'ค้นหา' }}" aria-label="Search">
          <button class="btn btn-light" type="submit">
            <i class="bi bi-search fs-5"></i>
          </button>
        </form>

        <!-- ปุ่ม Logout -->
        <a href="#" class="btn btn-warning d-flex align-items-center">
          <i class="{{ $iconlogout ?? 'bi bi-bag-x' }}"></i> Logout
        </a>
      </div>
    </div>
  </div>
</nav>
