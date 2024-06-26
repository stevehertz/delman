<div class="container-fluid nav-bar">
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg py-4">
            <a href="{{ route('home') }}" class="navbar-brand">
                <span class="text-primary fw-bold mb-0">
                    <img src="{{ asset('img/logo/main-logo.png') }}" alt="{{ config('app.name') }}" width="120">
                </span>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}">
                        @lang('navs.frontend.home')
                    </a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }}">
                        @lang('navs.frontend.about')
                    </a>
                    <a href="{{ route('services') }}"
                        class="nav-item nav-link {{ Route::is('services') ? 'active' : '' }}">
                        @lang('navs.frontend.services')
                    </a>
                    <a href="{{ route('contact') }}"
                        class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">
                        @lang('navs.frontend.contact')
                    </a>
                </div>
                {{-- <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex"
                    data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i>
                </button> --}}
                <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill" target="_blank">
                    @lang('buttons.auth.login')
                </a>
            </div>
        </nav>
    </div>
</div>
