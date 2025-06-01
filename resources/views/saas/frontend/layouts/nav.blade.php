<div class="ld-header-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-6">
                <a href="{{ route('frontend') }}" class="ld-header-logo"><img src="{{ getSettingImage('app_logo') }}" alt="{{ getOption('app_name') }}" /></a>
            </div>
            <div class="col-xxl-7 col-xl-6 col-lg-6 col-6">
                <nav class="navbar navbar-expand-lg p-0">
                    <button class="navbar-toggler menu-navbar-toggler bd-c-black-color ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse menu-navbar-collapse offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <button type="button" class="d-lg-none w-30 h-30 p-0 rounded-circle bg-white border-0 position-absolute top-10 right-10" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-times"></i></button>
                        <ul class="navbar-nav menu-navbar-nav justify-content-center flex-wrap cg-28 rg-10 w-100">
                            @if (isAddonInstalled('PROTYLISTING') > 0)
                                @if (getOption('LISTING_STATUS', 0) == ACTIVE)
                                    <li class="nav-item">
                                        <a class="nav-link nav-link fs-16 fw-400 lh-27 text-para-text p-0 {{ request()->is('properties') || request()->is('properties/*') ? 'active' : '' }}"
                                           href="{{ route('listings') }}">{{ __('Properties') }}
                                        </a>
                                    </li>
                                @endif
                            @endif
                            <li class="nav-item"><a class="nav-link fs-16 fw-400 lh-27 text-para-text p-0" href="{{ route('feature') }}">{{__('Features')}}</a></li>
                            <li class="nav-item"><a class="nav-link fs-16 fw-400 lh-27 text-para-text p-0" href="{{ url('') }}#priceSection">{{__('Pricing')}}</a></li>
                            <li class="nav-item"><a class="nav-link fs-16 fw-400 lh-27 text-para-text p-0" href="{{ route('blog-list') }}">{{__('Blogs')}}</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link fs-16 fw-400 lh-27 text-para-text p-0 dropdown-toggle menu-dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('Resource')}}</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('about-us') }}">{{__('About Us')}}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('contact-us') }}">{{__('Contact Us')}}</a></li>
                                </ul>
                            </li>
                            <li class="nav-item d-lg-none"><a class="nav-link fs-16 fw-400 lh-27 text-para-text p-0" href="#">{{__('Log In')}}</a></li>
                            <li class="nav-item d-lg-none"><a class="nav-link fs-16 fw-400 lh-27 text-para-text p-0" href="#">{{__('Start Free Trial')}}</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-4 d-none d-lg-block text-end">
                <div class="d-flex align-items-center justify-content-end g-10">
                    @auth
                        @if (auth()->user()->role == USER_ROLE_ADMIN)
                            <a href="{{ route('admin.dashboard') }}"
                               class="theme-btn py-16 px-30"><span>{{ __('Dashboard') }}</span></a>
                        @elseif (auth()->user()->role == USER_ROLE_OWNER)
                            <a href="{{ route('owner.dashboard') }}"
                               class="theme-btn py-16 px-30"><span>{{ __('Dashboard') }}</span></a>
                        @elseif (auth()->user()->role == USER_ROLE_TENANT)
                            <a href="{{ route('tenant.dashboard') }}"
                               class="theme-btn py-16 px-30"><span>{{ __('Dashboard') }}</span></a>
                        @elseif (auth()->user()->role == USER_ROLE_MAINTAINER)
                            <a href="{{ route('maintainer.dashboard') }}"
                               class="theme-btn py-16 px-30"><span>{{ __('Dashboard') }}</span></a>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="theme-btn py-16 px-30 text-nowrap"><span>{{ __('Sign In') }}</span></a>
                    @endauth
                    <a href="{{ route('owner.register.form') }}" class="theme-btn py-16 px-30 text-nowrap">{{__('Start Free Trial')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
