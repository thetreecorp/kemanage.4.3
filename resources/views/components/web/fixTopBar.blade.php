<!-- desktop -->
@php
        $selectedLanguage = session('language_code', 'en');
@endphp
<style>
        .sessionborder {
        border: #c02127 solid 2px !important;
    }
</style>
<div class='top-bar'>
    <div class="container-fluid">
        <div class="container">
            <div class="row pt-2">
                <div class="col-9 left-side">

                    <ul class="nav flex-nowrap topbar_system">
                        @if($top_menu)
                            @foreach($top_menu as $key => $topmenu)
                                <div class="toooltip">
                                    <li style="z-index:{{count($top_menu)-$key}};">
                                        <a href="{{ linkSSO($topmenu['link']) }}" target="_{{$topmenu['target']}}">@if($topmenu['custom'] == 1) {!!$topmenu['icon'] !!} @else <i class="{{$topmenu['icon']}}" ></i> @endif {{$topmenu['label']}}</a>
                                    </li>
                                    <div class="toooltip-content p-3">
                                        <p class="text-xs">{{$topmenu['sub_title']}}</p>
                                    </div>
                                </div>

                            @endforeach
                        @endif
                        <div class="toooltip">

                            <li><i class="fa fa-th"></i> {{ __('Other Systems') }}</li>
                            <div class="toooltip-content bg-grey">

                                <div class="scrollbar-inner">
                                    <div class="otherSystem">
                                        @if($other_menu)
                                            @foreach($other_menu as $othermenu)
                                                @if($othermenu['child'] == null)
                                                    <div class="box-item font-roboto">

                                                        <a  @if($othermenu['target'] == 'blank') target="_blank" @endif href="{{ linkSSO($othermenu['link']) }}">
                                                            <div class="icons">@if($othermenu['custom'] == 1) {!!$othermenu['icon'] !!} @else <i class="{{$othermenu['icon']}}"></i> @endif </div>
                                                            <div class="name">{{$othermenu['label']}} </div>
                                                        </a>
                                                        <div class="box-dropdown px-3">
                                                            <p class="text-xs">
                                                                {{$othermenu['sub_title']}}
                                                            </p>
                                                            <div class="content-buttons mt-2">
                                                                <button><span><i class="fab fa-android"></i></span>{{ __('Download MiniApp') }}</button>
                                                                <button><a href="{{ linkSSO($othermenu['link']) }}" target="_{{ $othermenu['target']}}"><span><i class="fas fa-eye"></i> </span>{{ __('Homepage') }}</a></button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endif
                                                @if($othermenu['child'] != null)
                                                    <h3>{{ $othermenu['label']}}</h3>
                                                    @foreach($othermenu['child'] as $sublevel1)
                                                        <div class="box-item top font-roboto">

                                                            <a @if($sublevel1['target'] == 'blank') target="_blank" @endif href="{{ linkSSO($sublevel1['link'])}}">
                                                                <div class="icons">@if($sublevel1['custom'] == 1) {!!$sublevel1['icon'] !!} @else <i class="{{$sublevel1['icon']}}"></i> @endif </div>
                                                                <div class="name">{{$sublevel1['label']}} </div>
                                                            </a>

                                                            <div class="box-dropdown px-3">
                                                                <p class="text-xs">
                                                                    {{$sublevel1['sub_title']}}
                                                                </p>
                                                                <div class="content-buttons mt-2">
                                                                    <button><span><i class="fab fa-android"></i></span>{{ __('Download MiniApp') }}</button>
                                                                    <button><a href="{{ linkSSO($sublevel1['link']) }}" target="_{{ $sublevel1['target']}}"><span><i class="fas fa-eye"></i> </span>{{ __('Homepage') }}</a></button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    @endforeach
                                                @endif

                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="col-3 right-side">
                    <ul class="nav">
                        <div class="toooltip modal-button-desktop">
                            <li><i class="fas fa-bars"></i></li>
                        </div>
                        <div class="toooltip">
                            <li><i class="kem-top-header-icons-flag"></i></li>
                            <div class="toooltip-content">
                                <ul class="countries">
                                    @if($countriesTop)
                                        @foreach($countriesTop as $country)
                                            <li>{{ __($country['name']) }}</li>
                                            <ul class='states'>
                                                @if($country['country'])
                                                @foreach($country['country'] as $cout)
                                                    <li class="{{($cout['code'] == session('country_code')) ? 'sessionborder' : ''}}">
                                                        <a href="{{ route('country.change', $cout['code']) }}">
                                                            <span class="flex gap-2">
                                                                <span class="count-flag"><img src="{{asset('country-flags-main/png100px').'/'.$cout['code'].'.png'}}" alt="" /></span>
                                                                <span>{{ __($cout['name']) }}</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="toooltip">
                            <li><i class="kem-top-header-icons-translate"></i></li>
                            <div class="toooltip-content">
                                <ul class="languages">
                                    @if($languages)
                                        @foreach($languages as $lang)
                                        <li class="{{ $lang['code'] == session('language_code') ? 'sessionborder' : '' }}">
                                            <a href="{{ route('language-Chanage', $lang['code']) }}">
                                                <span class="flex">
                                                    <span class="lang-flag">
                                                        <img class="img-fluid" src="{{asset('language-flags/png100px').'/'.$lang['code'].'.png'}}" width="30px" alt="">
                                                    </span>
                                                    <span>{{$lang['name']}}</span>
                                                </span>
                                            </a>
                                        </li>
                                        @endforeach

                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="toooltip" x-data="{ open: false }">
                            <li>
                                <i @click="open = ! open" class="kem-top-header-icons-dollar-symbol"></i>
                            </li>
                            <div class="toooltip-click-content" style="z-index: 9999; width: 300px;">
                                <div x-show="open" @click.outside="open = false" class="currenies">
                                    <div class="currency">
                                        <div class="title">
                                            <span>{{ __('Currency') }}</span>
                                        </div>
                                        <form action="{{ route('currency-Chanage') }}" method="POST">
                                            @csrf
                                            @php
                                                $sortedCurrencies = collect($currencies)
                                                    ->sortByDesc(function ($item) {
                                                        return $item['name'] === session('currency_code') ? 1 : 0;
                                                    })
                                                    ->values();
                                            @endphp
                                            <select class="currencies" name="currency" id="currency">
                                                @foreach ($sortedCurrencies as $currency)
                                                    <option id="currency-{{ $currency['id'] }}"
                                                        data-code="{{ $currency['code'] }}"
                                                        value="{{ $currency['name'] }}">
                                                        {{ $currency['name'] }} ({{ $currency['symbol'] }})
                                                    </option>
                                                @endforeach
                                            </select>
                                            <button type="submit">{{ __('Save') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if($bft_AB)
                            @foreach($bft_AB as $bftab)
                            <div class='toooltip'>
                                <li><i class="{{$bftab['icon']}}"></i></li>
                                <div class="toooltip-content">

                                    <div class="grid-menu {{$bftab['class']}}">
                                        <p class="label-top">{{$bftab['label']}} </p>
                                        @if($bftab['child'])
                                            @foreach($bftab['child'] as $bfsub)

                                                <div class="sub-toooltip">
                                                    <div class="items">
                                                        <a class="text-black" target="_{{$bfsub['target']}}" href="{{linkSSO($bfsub['link'])}}">
                                                            <i class="{{$bfsub['icon']}} icon-top-submenu"></i>
                                                            {{$bfsub['label']}}
                                                        </a>
                                                    </div>
                                                    @if(!empty($bfsub['child']))
                                                        <div class="sub-toooltip-content">
                                                            <p class="label-top">{{$bfsub['label']}}</p>
                                                            <ul>
                                                                @foreach($bfsub['child'] as $sub)

                                                                    <li><a class="text-black" target="_{{ $sub['target'] }}" href="{{ linkSSO($sub['link']) }}"><span class="{{$sub['icon']}} me-2 icon-top-submenu"></span>{{$sub['label']}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                            </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif

                        @auth
                            <div class="toooltip">
                                <li>
                                    <div class="avatar">
                                        @if (Auth::user()->avatar_image != '')
                                        <img src=" {{ Auth::user()->avatar_image }}" alt="user avatar">
                                    @else
                                        <span
                                            class="flex items-center bg-white justify-center h-8 w-8 rounded-full">{{ substr(Auth::user()->name, 0, 1) }}</span>
                                    @endif
                                    </div>
                                </li>
                                <div class="toooltip-content">
                                    <div class="user-dropdown">
                                        <ul>
                                            <li><a href="{{ route('admin.dashboard') }}"> <i class="fa fa-home" style="color:#c02127"></i> Dashboard</a></li>
                                            {{-- <li><a href="{{ route('manager.profile.index') }}"><i class="fa fa-user"></i> {{_('Profile')}}</a></li> --}}

                                                    <a href="{{ route('logout') }}" class="dropdown-item"
                                                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                                    <i class="fas fa-sign-out-alt" style="color:#c02127"></i>
                                                    <span style="color: black;"> Logout </span>
                                                </a>
                                                <form id="frm-logout" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    {{ csrf_field() }}
                                                </form>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endauth

                        @guest
                            <li><a class="text-white"
                                    href="https://sso.kemedar.com/sso-login?redirect_uri={{ base64_encode(config('app.url')) }}"><i
                                        class="kem-top-header-icons-log-in"></i></a></li>
                            <li><a class="text-white"
                                    href="https://sso.kemedar.com/sso-register?redirect_uri={{ base64_encode(config('app.url')) }}"><i
                                        class="kem-top-header-icons-signup"></i></a></li>

                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- mobile -->
<div class="m-top-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class='top-nav'>
                    <div class="toooltip" x-data="{ open: false }">

                        <li><i @click="open = ! open" class="kem-top-header-icons-flag"></i></li>
                        <div class="toooltip-content toooltip-left toooltip-flag" x-show="open" @click.outside="open = false" style="display: none">
                            <ul class="countries">
                                @if($countries)
                                    @foreach($countries as $con)
                                        <li>{{$con['name']}}</li>
                                        <ul class='states'>
                                            @if($con['country'])
                                                @foreach($con['country'] as $country)
                                                    <li class="{{($country['code'] == session('country_code')) ? 'sessionborder' : ''}}" data-code="{{$country['code']}}" data-currency="{{$country['currency']}}">
                                                        <a href="{{ route('country.change', $country['code']) }}">
                                                        <span class="count-flag"><img src="{{asset('country-flags-main/png100px').'/'.$country['code'].'.png'}}" alt="" /></span>
                                                        <span>{{$country['name']}}</span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="toooltip" x-data="{ openl: false }">
                        <li><i @click="openl = ! openl" class="kem-top-header-icons-translate"></i></li>
                        <div class="toooltip-content toooltip-left toooltip-languages" x-show="openl" @click.outside="openl = false" style="display: none">
                            <ul class="languages">
                                @if($languages)
                                    @foreach($languages as $lan)
                                        <li id={{$lan['id']}} data-code={{$lan['code']}} class="{{ $lan['code'] == session('language_code') ? 'sessionborder' : '' }}">
                                            <a href="{{ route('language-Chanage', $lan['code']) }}">
                                            <span class="lang-flag"><img class="img-fluid" src="{{asset('language-flags/png100px').'/'.$lan['code'].'.png'}}" width="20px" alt=""></span>{{$lan['name']}}
                                            </a>
                                        </li>
                                    @endforeach

                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="toooltip" x-data="{ openl: false }">
                        <li><i @click="openl = ! openl" class="kem-top-header-icons-dollar-symbol"></i></li>
                        <div class="toooltip-content toooltip-center-currency" x-show="openl" @click.outside="openl = false" style="display: none;transform: translateX(-30%);">
                            <div class="currenies">
                                <div class="currency">
                                    <div class="title"><span>Currency</span></div>
                                    <form action="#" method="POST">
                                        @csrf
                                        <select class="currencies" name="currency" id="currency">
                                            @if($currencies)
                                            @foreach($currencies as $currency)
                                                <option id={{$currency['id']}} data-code={{ $currency['code']}} value="{{$currency['name']}}">{{$currency['name']}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <button type="submit">Save</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    @if($bft_AB)
                        @foreach($bft_AB as $key => $us)

                            <div class="toooltip" x-data="{ open: false }">
                                <li><i @click="open = ! open" class="{{$us['icon']}}"></i> </li>
                                <div x-show="open" @click.outside="open = false" style="display: none">

                                    <!-- grid menu content here-->
                                    @if($us['child'])
                                        @if($us['class'] == 'column-3')
                                            <div class="bg-columm-3 toooltip-content toooltip-center-sceen">
                                                <div class="grid-menu">
                                                    <p class="label-top">{{ $us['label'] }}</p>

                                                    @foreach($us['child'] as $child)
                                                        <div class="sub-toooltip">
                                                            <div class="items">
                                                                <a class="text-black"  href="{{linkSSO($child['link'])}}">
                                                                <span class="icon-top-submenu {{$child['icon']}}"></span>
                                                                <span>{{ $child['label']}}</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @else

                                            <div class="toooltip-content toooltip-center toooltip-link-{{++$key}}">
                                                <div class="menu">
                                                    <p class="label-top">{{ $us['label'] }}</p>

                                                    @foreach($us['child'] as $child)

                                                        <div class="item">
                                                            <a href="{{ $child['link']}}"><span class="icon-top-submenu {{$child['icon']}}"></span></a>
                                                            @if (!empty($child['child']))
                                                                <span>{{ $child['label']}}</span>
                                                                <button class="btn btn-toggle align-items-center rounded"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#home-collapse-{{ $child['id'] }}"
                                                                        aria-expanded="false">

                                                                    <i class="fa fa-caret-down"></i>
                                                                </button>
                                                            @else
                                                                <span>{{ $child['label']}}</span>
                                                            @endif

                                                            @if(!empty($child['child']))
                                                                <div class="collapse relative-position ml-3" style="margin-left: 10px" id="home-collapse-{{$child['id']}}">
                                                                    <div class="menu">
                                                                        {{--                                                                            <p class="label-top m-2">{{ $child['label'] }}</p>--}}

                                                                        @foreach($child['child'] as $chChild)

                                                                            <div class="item">
                                                                                <a class="text-black"  href="{{linkSSO($chChild['link'])}}">
                                                                                <span class="icon-top-submenu {{$chChild['icon']}}"></span>
                                                                                <span >{{ $chChild['label']}}</span>
                                                                                </a>
                                                                            </div>

                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @endif

                                                        </div>

                                                    @endforeach
                                                </div>
                                            </div>

                                        @endif
                                    @endif

                                </div>
                            </div>
                        @endforeach
                    @endif
                    {{-- <li><i class="fal fa-info-circle"></i></li>
                    <li><i class="fal fa-phone-square-alt"></i></li> --}}
                    <li>
                        <a href="https://kemodoo.com/video-gallery">
                            <svg class="svg-inline--fa fa-video fa-w-18" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="video" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M543.9 96c-6.2 0-12.5 1.8-18.2 5.7L416 171.6v-59.8c0-26.4-23.2-47.8-51.8-47.8H51.8C23.2 64 0 85.4 0 111.8v288.4C0 426.6 23.2 448 51.8 448h312.4c28.6 0 51.8-21.4 51.8-47.8v-59.8l109.6 69.9c5.7 4 12.1 5.7 18.2 5.7 16.6 0 32.1-13 32.1-31.5v-257c.1-18.5-15.4-31.5-32-31.5zM384 400.2c0 8.6-9.1 15.8-19.8 15.8H51.8c-10.7 0-19.8-7.2-19.8-15.8V111.8c0-8.6 9.1-15.8 19.8-15.8h312.4c10.7 0 19.8 7.2 19.8 15.8v288.4zm160-15.7l-1.2-1.3L416 302.4v-92.9L544 128v256.5z"></path></svg>
                        </a>
                    </li>
                    {{-- <div class="toooltip" x-data="{ open: false }">

                        <li>

                            <svg @click="open = ! open" class="svg-inline--fa fa-video fa-w-18" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="video" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M543.9 96c-6.2 0-12.5 1.8-18.2 5.7L416 171.6v-59.8c0-26.4-23.2-47.8-51.8-47.8H51.8C23.2 64 0 85.4 0 111.8v288.4C0 426.6 23.2 448 51.8 448h312.4c28.6 0 51.8-21.4 51.8-47.8v-59.8l109.6 69.9c5.7 4 12.1 5.7 18.2 5.7 16.6 0 32.1-13 32.1-31.5v-257c.1-18.5-15.4-31.5-32-31.5zM384 400.2c0 8.6-9.1 15.8-19.8 15.8H51.8c-10.7 0-19.8-7.2-19.8-15.8V111.8c0-8.6 9.1-15.8 19.8-15.8h312.4c10.7 0 19.8 7.2 19.8 15.8v288.4zm160-15.7l-1.2-1.3L416 302.4v-92.9L544 128v256.5z"></path></svg>

                        </li>
                        <div class="toooltip-content" x-show="open" @click.outside="open = false" style="display: none; left: 0;transform: translateX(-75%);background: #e5e7eb; border-radius: 10px">

                            <div>
                                <div class="border-2 grid grid-cols-1 rounded-md w-[300px]">
                                    <div class="text-center p-2 h-[60px]">
                                        <div>{{ __('kemedar proptech realstate marketplace Arabic video') }}</div>
                                    </div>
                                    <div class="p-2">
                                        <a class="btn btn-primary video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/qpO5Q_YfiEM" data-bs-target="#myModal">
                                            <img src="{{asset('kemedar/assets/images/first-tumbnail.webp') }}" alt="" class="rounded-lg">
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="border-2 grid grid-cols-1 rounded-md w-[300px]">
                                    <div class="text-center p-2 h-[60px]">
                                        <div>{{ __('kemedar proptech realstate marketplace English video') }}</div>
                                    </div>
                                    <div class="p-2">
                                        <a class="btn btn-primary video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/qpO5Q_YfiEM" data-bs-target="#myModal">
                                            <img src="{{ asset('kemedar/assets/images/second-tumbnail.webp') }}" alt="" class="rounded-lg">
                                        </a>

                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="border-2 grid grid-cols-1 rounded-md w-[300px]">
                                    <div class="text-center p-2 h-[60px]">
                                        <div>{{ __('kemedar the best is yet to come') }}</div>
                                    </div>
                                    <div class="p-2">
                                        <a class="btn btn-primary video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/QCvCW9hSvXY" data-bs-target="#myModal">
                                            <img src="{{ asset('kemedar/assets/images/thirdnew_thmbnail.jpg') }}" alt="" class="rounded-lg">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> --}}
                    @auth
                        <li><a href="{{ route('logout') }}">
                            {{-- <i class="fal fa-sign-out"></i> --}}

                            <svg class="svg-inline--fa fa-sign-out fa-w-16" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="sign-out" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M48 64h132c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H48c-8.8 0-16 7.2-16 16v288c0 8.8 7.2 16 16 16h132c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48zm279 19.5l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l132 131.4H172c-6.6 0-12 5.4-12 12v10c0 6.6 5.4 12 12 12h279.9L320 404.4c-4.7 4.7-4.7 12.3 0 17l7.1 7.1c4.7 4.7 12.3 4.7 17 0l164.5-164c4.7-4.7 4.7-12.3 0-17L344 83.5c-4.7-4.7-12.3-4.7-17 0z"></path></svg>
                        </a></li>
                    @endauth
                    @guest
                        <li><a
                                href="https://sso.kemedar.com/sso-login?redirect_uri={{ base64_encode(config('app.url')) }}"><i
                                    class="fal fa-sign-in text-dark"></i></a></li>
                        <li><a
                                href="https://sso.kemedar.com/sso-register?redirect_uri={{ base64_encode(config('app.url')) }}"><i
                                    class="fal fa-user-plus text-dark"></i></a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</div>


{{--                         <div class="toooltip">
                            <li><i class="kem-top-header-icons-translate"></i></li>
                            <div class="toooltip-content">
                                <ul class="languages">
                                    @if($languages)
                                        @foreach($languages as $lang)
                                        <li class="{{($lang['code'] == session('locale')) ? 'active' : ''}}">
                                            <a href="">
                                                <span class="flex">
                                                    <span class="lang-flag">
                                                        <img class="img-fluid" src="{{asset('language-flags/png100px').'/'.$lang['code'].'.png'}}" width="30px" alt="">
                                                    </span>
                                                    <span>{{$lang['name']}}</span>
                                                </span>
                                            </a>
                                        </li>
                                        @endforeach

                                    @endif
                                </ul>
                            </div>
                        </div> --}}

