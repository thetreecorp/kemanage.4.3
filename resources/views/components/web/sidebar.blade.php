<div class="sidebar-main">
    <div class="company-logo">
        <div class="logo-image">
            <a href="#">
                <img src="{{asset('images/kemedar.png')}}" alt="company-logo"  class="img-fluid"/>
            </a>
        </div>
        <div class="title">
            Kemedar
        </div>
    </div>
    <div class="bar">
        @if($sidebars)
        @foreach($sidebars as $sidebar)
            <div class="list">
                <div class="list-button">
                    <span class="icon">
                        <a href="#">@if($sidebar['custom'] ==1) {!!$sidebar['icon']!!} @else <i class="{{$sidebar['icon']}}"></i> @endif</a>
                    </span>
                    <span class="nav-label">
                        {{$sidebar['label']}}
                    </span>
                </div>
                @if(!empty($sidebar['child']))
                <div class="nav-dropdown level-1">
                    <div class="nav-close">
                        <i class="fal fa-times"></i>
                    </div>
                    <ul class="subnav">
                        @foreach($sidebar['child'] as $subsidebar)
                        <li class="nav-item">
                            <a href="{{ linkSSO($subsidebar['link'])}}" target="_{{ $subsidebar['target'] }}" class="sub-button"><span class="{{$subsidebar['icon']}} icons"></span><span>{{$subsidebar['label']}}</span> @if(!empty($subsidebar['child']))<span class="right-arrow"><i class="far fa-chevron-right"></i></span>@endif</a>
                            @if(!empty($subsidebar['child']))
                            <div class="sub-nav-dropdown">

                                <ul class="subnav">
                                    @foreach($subsidebar['child'] as $subchild)
                                        <li class="nav-item"><a href="{{ linkSSO($subchild['link'])}}" target="_{{$subchild['target']}}"><span class="{{$subchild['icon']}} icons"></span><span>{{$subchild['label']}}</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        @endforeach
        @endif
        @if($othersidebar)
            @foreach($othersidebar as $sb)
            <div class="list">
                <div class="list-button">
                    <span class="icon">
                        <a href="#">@if($sb['custom'] ==1) {!!$sb['icon']!!} @else <i class="{{$sb['icon']}}"></i> @endif</a>
                    </span>
                    <span class="nav-label">
                        {{$sb['label']}}
                    </span>
                </div>
                @if(!empty($sb['child']))
                <div class="nav-dropdown level-1">
                    <div class="nav-close">
                        <i class="fal fa-times"></i>
                    </div>
                    <ul class="subnav">
                        @foreach($sb['child'] as $level1)
                        <li class="nav-item">
                            <a href="{{ linkSSO($level1['link']) }}" target="_{{$level1['target']}}" class="sub-button"><span class="{{$level1['icon']}} icons"></span><span>{{$level1['label']}}</span> @if(!empty($level1['child']))<span class="right-arrow"><i class="far fa-chevron-right"></i></span>@endif</a>
                            @if(!empty($level1['child']))
                            <div class="sub-nav-dropdown">
                                <ul class="subnav">
                                    @foreach($level1['child'] as $level2)
                                        <li class="nav-item"><a @if($level2['target'] == 'blank') target="_blank" @endif href="{{ linkSSO($level2['link'])}}"><span class="{{$level2['icon']}} icons"></span><span>{{$level2['label']}}</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            @endforeach
        @endif
    </div>
</div>
<!-- End Sidebar -->
