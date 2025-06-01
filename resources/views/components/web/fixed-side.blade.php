<style>
    .side-popup-content *{
        font-size: 11px!important;
    }
    .side-popup-content .icon-top-submenu{
        font-size: 15px!important;
    }
</style>

<div class="fixed-sidebar">
    <div class="bar">
        <ul>
            <li><a href="#"><i class="far fa-exchange"></i></a></li>
            <div class="side-popup">
                <li><a href="#"><i class="fas fa-home"></i></a></li>
                <div class="side-popup-content">
                    {{--@if(isset($allsystems))
                        <ul>
                            @foreach($allsystems as $system)
                                <div class="sub-side-popup">
                                    <li><a href="{{$system['link']}}"><span class="{{$system['icon']}} icon-top-submenu"></span>{{$system['label']}}</a></li>

                                </div>
                            @endforeach
                        </ul>
                    @endif--}}
                </div>
            </div>
            <div class="side-popup">
                <li><a href="#"><i class="fal fa-bars"></i></a></li>
                <div class="side-popup-content">
                    @if(isset($sidenav))
                        <ul>
                            @foreach($sidenav as $side)
                                <div class="sub-side-popup">
                                    <li><a href="#"><span class="{{$side['icon']}} icon-top-submenu"></span>{{$side['label']}}</a></li>
                                    @if($side['child'] != '')
                                        <div class="sub-side-popup-content">
                                            <ul>
                                                @foreach($side['child'] as $subside)
                                                    <div class="sub-side-popup-3">
                                                        <li><a href="{{ linkSSO($subside['link'])}}" target="{{$subside['target']}}"><span class="{{$subside['icon']}} icon-top-submenu"></span>{{$subside['label']}}</a></li>
                                                        @if($subside['child'] != '')
                                                            <div class="sub-side-popup-content-3">
                                                                <ul>
                                                                    @foreach($subside['child'] as $sbbside)
                                                                        <li><a href="{{linkSSO($sbbside['link'])}}" target="{{$sbbside['target']}}"><span class="{{$sbbside['icon']}} icon-top-submenu"></span>{{$sbbside['label']}}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    </div>

                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <li><a href="#"><i class="fal fa-search"></i></a></li>
            <li><a href="#"><i class="fal fa-envelope"></i></a></li>
            <div class="side-popup">
                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                <div class="side-popup-content">
                    <ul>
                        <div class="sub-side-popup">
                            <li><a href="#">Register</a></li>
                            <div class="sub-side-popup-content">
                                <ul>
                                    <li><a href="#">Owner & Buyer</a></li>
                                    <li><a href="#">Real Estate agent or developer</a></li>
                                    <li><a href="#">Handyman or specialist</a></li>
                                    <li><a href="#">Local Partners</a></li>
                                    <li><a href="#">International partners</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sub-side-popup">
                            <li><a href="#">Search</a></li>
                            <div class="sub-side-popup-content">
                                <ul>
                                    <li><a href="#">Owner & Buyer</a></li>
                                    <li><a href="#">Real Estate agent or developer</a></li>
                                    <li><a href="#">Handyman or specialist</a></li>
                                    <li><a href="#">Local Partners</a></li>
                                    <li><a href="#">International partners</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sub-side-popup">
                            <li><a href="#">Add</a></li>
                            <div class="sub-side-popup-content">
                                <ul>
                                    <li><a href="#">Owner & Buyer</a></li>
                                    <li><a href="#">Real Estate agent or developer</a></li>
                                    <li><a href="#">Handyman or specialist</a></li>
                                    <li><a href="#">Local Partners</a></li>
                                    <li><a href="#">International partners</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sub-side-popup">
                            <li><a href="#">do</a></li>
                            <div class="sub-side-popup-content">
                                <ul>
                                    <li><a href="#">Owner & Buyer</a></li>
                                    <li><a href="#">Real Estate agent or developer</a></li>
                                    <li><a href="#">Handyman or specialist</a></li>
                                    <li><a href="#">Local Partners</a></li>
                                    <li><a href="#">International partners</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </ul>
        {{--        <ul class="social-media">--}}
        {{--            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
        {{--            <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
        {{--            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
        {{--            <li><a href="#"><i class="fab fa-instagram"></i></a></li>--}}
        {{--        </ul>--}}
    </div>
</div>
