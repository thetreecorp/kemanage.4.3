<style>
    .popup2 {
        position: relative;

    }

    .popup-content2 {
        position: absolute;
        right: 0;
        /* Add any additional styling you need for the popup content */
    }
    .popup-content-new {
        display: none;
        background-color:#e5e7eb;
        padding: 20px;
        border-radius: 1rem;
        box-shadow:0 0 10px 0 rgba(0,0,0,0.1);
        width:200px;
    }
    .items.popup2:hover .popup-content-new {
        display: block;
        z-index: 100;
    }
    .popup-content-new {
        position: absolute;
        left: 0px !important;
        margin-top: 5px;

    }
    .items.popup2 a.parent_anchor{
        position: relative;
    }

    .nav-bar-bottom .popup-content  *{
        color: #000!important;
        font-size: 11px!important;
    }

    .nav-bar-bottom .popup-content .icon-top-submenu {
        font-size: 15px!important;
        color: #c02127 !important;
    }
</style>

<div class="bottom-bar">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <span>
                    All rights reserved to KEMEDAR &copy; CORPORATION 2014
                </span>
            </div>
            <div class="col-auto">
                <div class="nav-bar-bottom">
                    <ul>
                        @if($menuBottom)
                        @foreach($menuBottom as $bottom)
                            <div class="popup ">
                                    <?php
                                    $str = $bottom['label'];
                                    $words =explode('_', $str);
                                    $firstWord = $words[0];
                                    ?>
                                <li><a href="#">{{ $str }}</a></li>
                                <div class="popup-content {{$bottom['class']}}">
                                    <div class="find-button">
                                        <button>{{$str}}</button>
                                    </div>
                                    <div class="items-grid {{$bottom['class']}}">
                                        @if($bottom['child'])
                                        @foreach($bottom['child'] as $child)

                                            <div class="items popup2"><a href="{{ linkSSO($child['link']) }}" target="_{{$child['target']}}" class="parent_anchor"><span class="{{ $child['icon'] }} icon-top-submenu "></span><span>{{ $child['label'];}}</span>

                                                    @if(!empty($child['child']) )

                                                        <div class="popup-content-new">
                                                            <div class="inner-grid">
                                                                <div class="find-button">
                                                                    <button>{{$child['label'];}}</button>
                                                                </div>
                                                                 @foreach($child['child'] as $sub)
                                                                    <div class="inner-submenu">
                                                                        <div class="items">
                                                                            <a href="{{ linkSSO($sub['link']) }}" target="_{{$sub['target']}}">
                                                                                <span class="{{$sub['icon']}} icon-top-submenu"></span>

                                                                                <span class="text-dark">{{$sub['label']}}</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>

                                                        </div>
                                                    @endif
                                                </a>

                                            </div>
                                        @endforeach
                                        @endif
                                    </div>

                                    <div class="bottom-image"></div>
                                </div>
                            </div>

                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  mobile fixed bottom bar -->
<div class="mobile-bottom-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class='mobile-nav' >

                    @for($i = 0; $i < count($menuBottomMobile); $i ++)
                        <div class="toooltip">
                            <li x-data="{open{{$i}}: false}">
                                <a @click="open{{$i}} = ! open{{$i}}" herf="#">

                                    <i class="{{$menuBottomMobile[$i]['icon']}}"></i>

                                    {{-- <img src="{{asset('sso_common/images/new/find.png')}}" alt="" class="w-[30px] h-[30px]"> --}}

                                    <span>{{$menuBottomMobile[$i]['label']}}</span></a>
                                @if(sizeof($menuBottomMobile[$i]['child']))
                                    <div class="toooltip-content" x-show="open{{$i}}" @click.outside="open{{$i}} = false" style="display:none">
                                        <div class="button">
                                            <button>{{$menuBottomMobile[$i]['label']}}</button>
                                            <span class="close" @click="open{{$i}} = ! open{{$i}}"><i class="fa fa-times"></i></span>
                                        </div>

                                        <ul>
                                            @for($j = 0; $j < count($menuBottomMobile[$i]['child']); $j++)
                                                <li>
                                                    <a href="{{$menuBottomMobile[$i]['child'][$j]['link']}}">
                                                        <span class="footer-icon {{$menuBottomMobile[$i]['child'][$j]['icon']}}"></span>
                                                        <span>{{$menuBottomMobile[$i]['child'][$j]['label']}}</span>
                                                    </a>
                                                    @if(sizeof($menuBottomMobile[$i]['child'][$j]['child']))
                                                        <div class="toooltip-content">
                                                            <div class="button">
                                                                <button>{{$menuBottomMobile[$i]['child'][$j]['label']}}</button>
                                                                <span class="close"><i class="fal fa-times"></i></span>
                                                            </div>

                                                            <ul>
                                                                @for($k = 0; $k < count($menuBottomMobile[$i]['child'][$j]['child']); $k++)
                                                                    <li>
                                                                        <a href="{{$menuBottomMobile[$i]['child'][$j]['child'][$k]['link']}}" target="{{$menuBottomMobile[$i]['child'][$j]['child'][$k]['target']}}">
                                                                            <span class="footer-icon {{$menuBottomMobile[$i]['child'][$j]['child'][$k]['icon']}}"></span>
                                                                            <span>{{$menuBottomMobile[$i]['child'][$j]['child'][$k]['label']}}</span>
                                                                        </a>
                                                                    </li>
                                                                @endfor
                                                            </ul>
                                                        </div>
                                                        @endif
                                                        </a>
                                                </li>
                                            @endfor
                                        </ul>
                                    </div>
                                @endif
                            </li>
                        </div>
                    @endfor
                </ul>
            </div>
        </div>
    </div>
</div>
