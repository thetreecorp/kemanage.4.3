<style>
    .content-buttons {
        font-family: 'Lato' !important;
        font-size: 11px;
    }
</style>


<div class="nav-bar">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <div class="leftside d-flex flex-row align-items-center justify-content-start">
                    <!-- main logo  -->
                    <div class="main-logo">
                        <a href="#">
                            <img src="{{ asset('images/app-logo.png') }}" alt="kemanage-logo" />
                        </a>
                    </div>
                    <!-- primary menu  -->
                    <div class="primary-menu">
                       <ul class="navbar-nav menu-navbar-nav justify-content-center flex-row cg-28 rg-10 w-100">
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
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-auto " x-data="{ open: false }" style="position: relative;">
                <div>
                    <img src="{{ asset('images/beta.png') }}" alt="beta version" style="height: 2.5rem;" />
                </div>

                <div class="toooltip-content row py-4 px-2" x-show="open" @click.outside="open = false"
                    style="display: none; border-radius: 10px; width: 950px; height:275px; transform: translateX(-75%); background: #e5e7eb;position: absolute; font-size: 1rem;">
                    <div class="col-md-4">
                        <div class="border-2 grid grid-cols-1 rounded-md w-[300px]">
                            <div class="text-center p-2" style="height: 60px">
                                <div>kemedar proptech realstate marketplace Arabic video</div>
                            </div>
                            <div class="p-2">
                                <a class="btn btn-primary video-btn" data-bs-toggle="modal"
                                    data-src="https://www.youtube.com/embed/qpO5Q_YfiEM" data-bs-target="#myModal">
                                    <img src="https://laravel-kemedar.dev2.kemedar.com/kemedar/assets/images/first-tumbnail.webp"
                                        alt="" class="rounded-lg" style="width: 200px;">
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border-2 grid grid-cols-1 rounded-md w-[300px]">
                            <div class="text-center p-2" style="height: 60px">
                                <div>kemedar proptech realstate marketplace English video</div>
                            </div>
                            <div class="p-2">
                                <a class="btn btn-primary video-btn" data-bs-toggle="modal"
                                    data-src="https://www.youtube.com/embed/qpO5Q_YfiEM" data-bs-target="#myModal">
                                    <img src="https://laravel-kemedar.dev2.kemedar.com/kemedar/assets/images/second-tumbnail.webp"
                                        alt="" class="rounded-lg" style="width: 200px;">
                                </a>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border-2 grid grid-cols-1 rounded-md w-[300px]">
                            <div class="text-center p-2 " style="height: 60px">
                                <div>kemedar the best is yet to come</div>
                            </div>
                            <div class="p-2">
                                <a class="btn btn-primary video-btn" data-bs-toggle="modal"
                                    data-src="https://www.youtube.com/embed/QCvCW9hSvXY" data-bs-target="#myModal">
                                    <img src="https://laravel-kemedar.dev2.kemedar.com/kemedar/assets/images/thirdnew_thmbnail.jpg"
                                        alt="" class="rounded-lg" style="width: 200px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    {{--                            </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>



<!-- mobile navigation bar -->
<div class="m-nav-bar">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-row justify-content-between align-items-center">
                <div class="left-side d-flex flex-row justify-content-start align-items-center">
                    <div class="left-menu">
                        <button class="modal-button-left" data-toggle="modal">
                            {{-- <i class="far fa-bars"></i> --}}
                            <svg class="svg-inline--fa fa-bars fa-w-14" aria-hidden="true" focusable="false"
                                data-prefix="far" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z">
                                </path>
                            </svg>

                        </button>
                    </div>
                    <div class="main-logo flex items-end">
                        <!-- mobile main logo -->
                        <a href="{{ url('/') }}"><img src="{{ asset('images/app-logo.png') }}"
                                alt="kemanage-logo" /></a>
                        <span class="modal-button"><svg class="svg-inline--fa fa-chevron-down fa-w-14"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                                </path>
                            </svg></span>
                    </div>
                </div>
                <div class="right-side d-flex flex-row justify-content-end align-items-center">
                    <div class="dark-toggle d-inline-block">
                        {{--                        <button class="border border-0 bg-transparent outline-none shadow-none"><i --}}
                        {{--                                class="fad fa-moon"></i></button> --}}
                    </div>
                    <div>
                        <img src="{{ asset('images/beta.png') }}" alt="beta version" class="h-7" />
                    </div>
                    <div class="right-menu d-inline-block">
                        <button class="main-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight">

                            <svg class="svg-inline--fa fa-bars fa-w-14" aria-hidden="true" focusable="false"
                                data-prefix="far" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z">
                                </path>
                            </svg>
                        </button>

                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasRightLabel"> </h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas">
                                </button>
                            </div>
                            <div class="offcanvas-body">

              <ul class="justify-content-center flex-wrap cg-28 rg-10 w-100">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- mobile model -->
<div class="system-modal" style="width: 80vw; top: 10vh;left: 10vw;height: auto;">
    <span class="close-modal" style="top: 5px;left: auto;right: 20px;z-index: 999"><svg
            class="svg-inline--fa fa-times fa-w-10" aria-hidden="true" focusable="false" data-prefix="far"
            data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
            data-fa-i2svg="">
            <path fill="currentColor"
                d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z">
            </path>
        </svg></span>
    <div class="side-bar p-2" style="width: 100%;height:70vh;background: #e5e7eb; border-radius: 10px">
        <div class="title">
            <h4>{{ __('All Systems') }}</h4>
        </div>
        <div class="accordion">
            @for ($i = 0; $i < count($other_menu); $i++)
                <div class="accordion-box">
                    <div class="header" style="padding-left: 20px">

                        @if ($other_menu[$i]['custom'] == 1)
                            {!! $other_menu[$i]['icon'] !!}

                            {{-- invoking html via api restricted --}}

                            <span class="kem-kemessenger"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span><span class="path5"></span></span>
                        @else
                            <span><i class="text-danger {!! $other_menu[$i]['icon'] !!}"></i>
                        @endif
                        <span><b>{{ $other_menu[$i]['label'] }}</b> </span></span><span style="padding-left: 10px">
                            <svg class="svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="chevron-down" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                                </path>
                            </svg></span>
                    </div>
                    <div class="content pl-2">
                        <p>{{ $other_menu[$i]['sub_title'] }}</p>
                        <div class="content-buttons mt-2 flex flex-col gap-1">
                            <button class="android text-start"><i class="fab fa-android"></i>
                                {{ __('Download MiniApp') }}</button>
                            <button class="visit text-start"
                                onclick="window.location.href='{{ $other_menu[$i]['link'] }}'"><i
                                    class="fas fa-eye"></i> {{ __('Homepage') }}</button>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
{{-- <div class="main-menu-modal" style="width: 80vw; top: 10vh;left: 10vw;height: auto;"> --}}
{{--    <span class="close-main-modal" style="top: 5px;left: auto;right: 20px;z-index: 999"><svg class="svg-inline--fa fa-times fa-w-10" aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"></path></svg></span> --}}
{{--    <div class="side-bar p-2" style="width: 100%;height:70vh;background: #e5e7eb; border-radius: 10px"> --}}
{{--        --}}{{-- <div class="title"> --}}
{{--            <h4 class="text-center">{{translate("navbar.menu")}}</h4> --}}
{{--        </div> --}}
{{--        <nav class="navbar navbar-expand-lg navbar-light"> --}}
{{--            <div class="container-fluid mt-5"> --}}
{{--                <div class="collapse navbar-collapse" id="navbarNavDropdown"> --}}
{{--                    <ul class="navbar-nav"> --}}
{{--                        <li class="nav-item"><a class="nav-link active" href="">{{ __('Home') }}</a></li> --}}
{{--                        <li class="nav-item"><a class="nav-link" href="">{{ __('Contact') }}</a></li> --}}
{{--                    </ul> --}}
{{--                </div> --}}
{{--            </div> --}}
{{--        </nav> --}}
{{--    </div> --}}
{{-- </div> --}}
