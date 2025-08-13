<div class="accordion-item">
    <h2 class="accordion-header" id="heading{{ $menusCompo1['id'] }}">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $menusCompo1['id'] }}">
            <i class="{{ $menusCompo1['iconGroup'] }}"></i> &nbsp; {{ $menusCompo1['group'] }}
        </button>
    </h2>
    <div id="collapse{{ $menusCompo1['id'] }}" class="accordion-collapse collapse show" aria-labelledby="heading{{ $menusCompo1['id'] }}">
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
</div>
