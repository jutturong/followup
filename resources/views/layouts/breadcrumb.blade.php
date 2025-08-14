
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="bg-light py-2">
  <div class="container-fluid">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="#">{{ $parent ?? 'Home' }}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $page ?? 'Dashboard' }}</li>
    </ol>
  </div>
</nav>
