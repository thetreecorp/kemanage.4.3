<!-- desktop -->
<div class='top-bar'>
    <div class="container-fluid">
        <div class="container">
            <div class="row pt-2">
                <div class="col-9 left-side">

                    <ul class="nav flex-nowrap topbar_system">

                        @for($y=0;$y < count($top_menu);$y++)
                            <div class="toooltip">
                                <li style="z-index:{{count($top_menu)-$y}};"> @if($top_menu[$y]['custom'] == 1) {!!$top_menu[$y]['icon'] !!} @else <i class="{{$top_menu[$y]['icon']}}" ></i> @endif {{$top_menu[$y]['label']}}</li>
                                <div class="toooltip-content">
                                    <p>{{$top_menu[$y]['sub_title']}}</p>
                                </div>
                            </div>
                        @endfor
                        {{-- <div class="toooltip">
                            <li><i class="kem-top-header-logo-kemedar-reit"></i>  Other Systems</li>
                            <div class="toooltip-content bg-grey">
                                <div class="accordion">
                                    @for($i = 0; $i < count($other_menu);$i++)
                                        <div class="accordion-box ">
                                            <div class="header"><span>@if($other_menu[$i]['custom'] == 1) {!!$other_menu[$i]['icon'] !!} @else <i class="{{$other_menu[$i]['icon']}}"></i> @endif <label>{{$other_menu[$i]['label']}} </label></span><span><i class="fas fa-chevron-down"></i></span></div>
                                            <div class="content">
                                                <p>{{$other_menu[$i]['sub_title']}}</p>
                                                <div class="content-buttons">
                                                    <button class="android"><i class="fab fa-android"></i> Download MiniApp</button>
                                                    <button class="visit"><i class="fas fa-eye"></i> Homepage</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div> --}}
                        <div class="toooltip">
                            <li><i class="kem-top-header-logo-kemedar-reit"></i>  Other Systems</li>
                            <div class="toooltip-content">
                                <div class="main-box">
                                    <div class="main-item">
                                        <div class="other-grid-menu">
                                            <div class="item accordion-list">
                                                <div class="mini-box ">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="item accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="item accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="item accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="item accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="item accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-item child-accordion">
                                        <div class="title">
                                            Title 1
                                        </div>
                                        <div class="other-grid-menu">
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>

                                                </div> --}}
                                            </div>
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>

                                                </div> --}}
                                            </div>
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>

                                                </div> --}}
                                            </div>
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>

                                                </div> --}}
                                            </div>
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>

                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="main-item sub-child-accordion">
                                            <div class="title">
                                                Child Title 1
                                            </div>
                                            <div class="other-grid-menu">
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="box-dropdown">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div>

                                                    </div> --}}
                                                </div>
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="box-dropdown">
                                                        {{-- <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div> --}}
                                                        <div class="other-grid-menu">
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="box-dropdown">
                                                        {{-- <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div> --}}
                                                        <div class="other-grid-menu">
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-item sub-child-accordion">
                                            <div class="title">
                                                Child Title 2
                                            </div>
                                            <div class="other-grid-menu">
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="box-dropdown">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div>

                                                    </div> --}}
                                                </div>
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="box-dropdown">
                                                        {{-- <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div> --}}
                                                        <div class="other-grid-menu">
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="box-dropdown">
                                                        {{-- <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div> --}}
                                                        <div class="other-grid-menu">
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-item child-accordion">
                                        <div class="title">
                                            Title 2
                                        </div>
                                        <div class="other-grid-menu">
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>

                                                </div> --}}
                                            </div>
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>

                                                </div> --}}
                                            </div>
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>

                                                </div> --}}
                                            </div>
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>

                                                </div> --}}
                                            </div>
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>

                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="main-item sub-child-accordion">
                                            <div class="title">
                                                Child Title 1
                                            </div>
                                            <div class="other-grid-menu">
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="box-dropdown">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div>

                                                    </div> --}}
                                                </div>
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="box-dropdown">
                                                        {{-- <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div> --}}
                                                        <div class="other-grid-menu">
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="box-dropdown">
                                                        {{-- <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div> --}}
                                                        <div class="other-grid-menu">
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-item sub-child-accordion">
                                            <div class="title">
                                                Child Title 2
                                            </div>
                                            <div class="other-grid-menu">
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="box-dropdown">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div>

                                                    </div> --}}
                                                </div>
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="box-dropdown">
                                                        {{-- <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div> --}}
                                                        <div class="other-grid-menu">
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="box-dropdown">
                                                        {{-- <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div> --}}
                                                        <div class="other-grid-menu">
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-item child-accordion">
                                        <div class="title">
                                            Title 3
                                        </div>
                                        <div class="other-grid-menu">
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>

                                                </div> --}}
                                            </div>
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>

                                                </div> --}}
                                            </div>
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>

                                                </div> --}}
                                            </div>
                                            <div class="item sub-accordion-list">
                                                <div class="mini-box">
                                                    <div class="icon">
                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                    </div>
                                                    <div class="text">
                                                        text
                                                    </div>
                                                    <div class="down-arrow">
                                                        <i class="fal fa-chevron-double-down"></i>
                                                    </div>
                                                </div>
                                                {{-- <div class="box-dropdown">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                    </p>
                                                    <div class="content-buttons">
                                                        <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                        <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                    </div>

                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="main-item sub-child-accordion">
                                            <div class="title">
                                                Child Title 1
                                            </div>
                                            <div class="other-grid-menu">
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="box-dropdown">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div>

                                                    </div> --}}
                                                </div>
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="box-dropdown">
                                                        {{-- <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div> --}}
                                                        <div class="other-grid-menu">
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="box-dropdown">
                                                        {{-- <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div> --}}
                                                        <div class="other-grid-menu">
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-item sub-child-accordion">
                                            <div class="title">
                                                Child Title 2
                                            </div>
                                            <div class="other-grid-menu">
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="box-dropdown">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div>

                                                    </div> --}}
                                                </div>
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="box-dropdown">
                                                        {{-- <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div> --}}
                                                        <div class="other-grid-menu">
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="mini-box">
                                                        <div class="icon">
                                                            <i class="kem-top-header-logo-kemedar-reit"></i>
                                                        </div>
                                                        <div class="text">
                                                            text
                                                        </div>
                                                        <div class="down-arrow">
                                                            <i class="fal fa-chevron-double-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="box-dropdown">
                                                        {{-- <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor odio accusantium voluptas officia eum impedit, itaque eveniet est? Suscipit provident, eum vel modi nobis iusto eveniet magni voluptate ipsum magnam.
                                                        </p>
                                                        <div class="content-buttons">
                                                            <button><span><i class="fab fa-android"></i></span><span>Download MiniApp</span></button>
                                                            <button><span><i class="fas fa-eye"></i> </span><span>Homepage</span></button>
                                                        </div> --}}
                                                        <div class="other-grid-menu">
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="mini-box">
                                                                    <div class="icon">
                                                                        <i class="kem-top-header-logo-kemedar-reit"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        text
                                                                    </div>
                                                                    <div class="down-arrow">
                                                                        <i class="fal fa-chevron-double-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="col-3 right-side">
                    <ul class="nav">
                        <div class="toooltip">
                            <li><i class="fal fa-flag"></i></li>
                            <div class="toooltip-content">
                                <ul class="countries">
                                    @for ($j = 0 ; $j < count($cont); $j++)
                                        <li>{{$cont[$j]['name']}}</li>
                                        <ul class='states'>
                                            @for ($q = 0; $q < count($cont[$j]['country']); $q++)
                                                <li class="active" data-code="{{$cont[$j]['country'][$q]['code']}}" data-currency="{{$cont[$j]['country'][$q]['currency']}}"><span class="count-flag"><img src="{{asset('sso_common/country-flags-main/png100px').'/'.$cont[$j]['country'][$q]['code'].'.png'}}" alt="" /></span><span>{{$cont[$j]['country'][$q]['name']}}</span></li>
                                            @endfor
                                        </ul>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <div class="toooltip">
                            <li><i class="fal fa-language"></i></li>
                            <div class="toooltip-content">
                                <ul class="languages">
                                    @for ($i=0;$i< count($lang);$i++)
                                        <li id={{$lang[$i]['id']}} data-code={{$lang[$i]['code']}} class="active"><span class="lang-flag"><img class="img-fluid" src="{{asset('sso_common/language-flags/png100px').'/'.$lang[$i]['code'].'.png'}}" width="20px" alt=""></span>{{$lang[$i]['name']}}</li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <div class="toooltip" x-data="{ open: false }">
                            <li><i @click="open = ! open" class="fal fa-dollar-sign"></i></li>
                            <div class="toooltip-click-content">
                                <div x-show="open" @click.outside="open = false" class="currenies">
                                    <div class="currency">
                                        <div class="title"><span>Currency</span></div>
                                        <form action="#" method="POST">
                                            @csrf
                                            <select class="currencies" name="currency" id="currency">
                                                @for ($i=0;$i< count($curr);$i++)
                                                    <option id={{$curr[$i]['id']}} data-code={{$curr[$i]['code']}} value="{{$curr[$i]['name']}}">{{$curr[$i]['name']}} ({{$curr[$i]['symbol']}})</option>
                                                @endfor
                                            </select>
                                            <button type="submit">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @for($i = 0; $i < count($user); $i++)
                            <div class='toooltip'>
                                <li><i class="{{$user[$i]['icon']}}"></i></li>
                                <div class="toooltip-content">

                                    <div class="grid-menu {{$user[$i]['class']}}">
                                        <p class="label-top">{{$user[$i]['label']}} </p>
                                        @for($j = 0; $j < count($user[$i]['child']); $j++)
                                            <div class="sub-toooltip">
                                                <div class="items">
                                                    <a href="{{$user[$i]['child'][$j]['link']}}">
                                                        {{-- <span class="{{$user[$i]['child'][$j]['class']}} popup2"></span> --}}
                                                        <i class="{{$user[$i]['child'][$j]['icon']}} icon-top-submenu"></i>
                                                        <span>{{$user[$i]['child'][$j]['label']}}</span>
                                                    </a>
                                                </div>
                                                @if(!empty($user[$i]['child'][$j]['child']))
                                                    <div class="sub-toooltip-content">
                                                        <p class="label-top">{{$user[$i]['child'][$j]['label']}}</p>
                                                        <ul>
                                                            @for($v=0;$v < count($user[$i]['child'][$j]['child']);$v++)
                                                                <li><a href="#"><span class="{{$user[$i]['child'][$j]['child'][$v]['icon']}} me-2 icon-top-submenu"></span>{{$user[$i]['child'][$j]['child'][$v]['label']}}</a></li>
                                                            @endfor
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        @endfor

                        @if(request()->is('sidebar'))
                            <div class="toooltip">
                                <li><div class="avatar"><img src="{{asset('sso_common/images/avatar.png')}}" alt="profile-image"></div></li>
                                <div class="toooltip-content">
                                    <div class="user-dropdown">
                                        <ul>
                                            <li><a href="/owner"> <i class="fal fa-home"></i> Dashboard</a></li>
                                            <li><a href="#"><i class="fal fa-user"></i> Profile</a></li>
                                            <li><a href="#"><i class="fal fa-sliders-v"></i> Settings</a></li>
                                            <li><a href="{{ route('logout') }}"><i class="fal fa-sign-out"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @else
                            <li><a href="https://ssoserver.dev2.kemedar.com/sso-login?redirect_uri={{ base64_encode(env('APP_URL')) }}"><i class="fal fa-sign-in"></i></a></li>
                            <li><a href="https://ssoserver.dev2.kemedar.com/sso-register"><i class="fal fa-user-plus"></i></a></li>
                        @endif
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
                    <div class="toooltip">
                        <li><i class="fal fa-flag"></i></li>
                        <div class="toooltip-content">
                            <ul class="countries">
                                @for ($j = 0 ; $j < count($cont); $j++)
                                    <li>{{$cont[$j]['name']}}</li>
                                    <ul class='states'>
                                        @for ($q = 0; $q < count($cont[$j]['country']); $q++)
                                            <li class="active" data-code="{{$cont[$j]['country'][$q]['code']}}" data-currency="{{$cont[$j]['country'][$q]['currency']}}"><span class="count-flag"><img src="{{asset('sso_common/country-flags-main/png250px').'/'.$cont[$j]['country'][$q]['code'].'.png'}}" alt="" /></span><span>{{$cont[$j]['country'][$q]['name']}}</span></li>
                                        @endfor
                                    </ul>
                                @endfor
                            </ul>
                        </div>
                    </div>
                    <div class="toooltip">
                        <li><i class="fal fa-language"></i></li>
                        <div class="toooltip-content">
                            <ul class="languages">
                                @for ($i=0;$i< count($lang);$i++)
                                    <li id={{$lang[$i]['id']}} data-code={{$lang[$i]['code']}} class="active"><span class="lang-flag"><img class="img-fluid" src="{{asset('sso_common/country-flags-main/png250px').'/'.$lang[$i]['code'].'.png'}}" width="20px" alt=""></span>{{$lang[$i]['name']}}</li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                    <div class="toooltip">
                        <li><i class="fal fa-dollar-sign"></i></li>
                        <div class="toooltip-content">
                            <div class="currenies">
                                <div class="currency">
                                    <div class="title"><span>Currency</span> <span class="curr-close"><i class="fal fa-times-circle"></i></span></div>
                                    <form action="#" method="POST">
                                        @csrf
                                        <select class="currencies" name="currency" id="currency">
                                            @for ($i=0;$i< count($curr);$i++)
                                                <option id={{$curr[$i]['id']}} data-code={{$curr[$i]['code']}} value="{{$curr[$i]['name']}}">{{$curr[$i]['name']}} ({{$curr[$i]['symbol']}})</option>
                                            @endfor
                                        </select>
                                        <button type="submit">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @for($i = 0; $i < count($user); $i++)

                        <div class="toooltip">
                            <li><i class="{{$user[$i]['icon']}}"></i> </li>
                            <div class="toooltip-content">
                                <div class="grid-menu">
                                    <!-- grid menu content here-->
                                    @for($j = 0; $j < count($user[$i]['child']); $j++)
                                        <div class="items">
                                            <span class="{{$user[$i]['child'][$j]['icon']}}"></span>
                                            <span>{{$user[$i]['child'][$j]['label']}}</span>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    @endfor
                    {{-- <li><i class="fal fa-info-circle"></i></li>
                    <li><i class="fal fa-phone-square-alt"></i></li> --}}
                    <li><i class="fal fa-video"></i></li>
                    <li><i class="fal fa-sign-in"></i></li>
                    <li><i class="fal fa-user-plus"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div>
