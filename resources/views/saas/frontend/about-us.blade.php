@extends('saas.frontend.layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="breadcrumb-content">
            <h4 class="title">{{__('About Us')}}</h4>
            <ol class="breadcrumb sf-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend') }}">{{__('Home')}}</a></li>
                <li class="breadcrumb-item"><a href="#">{{__('About Us')}}</a></li>
            </ol>
        </div>
    </section>

    <!-- about us -->
    <section class="section-gap-bottom">
        <div class="container">
            <div class="aboutUs-content">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-content-wrap text-center">
                            <h4 class="title">{{ getOption('home_about_us_title') }}</h4>
                            <p class="info">{{ getOption('home_about_us_description') }}</p>
                        </div>
                    </div>
                </div>
                <div class="img bd-ra-20"><img class="w-100" src="{{ getSettingImage('home_about_us_image_one') }}" alt="" /></div>
                <div class="aboutUs-statistic-wrap"></div>
                <div class="row rg-20 justify-content-around">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="aboutUs-statistic-item">
                            <h4 class="title">{{getOption('home_about_us_counter_one_number')}}</h4>
                            <p class="info">{{ getOption('home_about_us_counter_one_title') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="aboutUs-statistic-item">
                            <h4 class="title">{{ getOption('home_about_us_counter_two_number') }}</h4>
                            <p class="info">{{ getOption('home_about_us_counter_two_title') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  -->
    <section class="aboutProperty-section bg-grey-rectangle">
        <div class="container">
            <div class="aboutProperty-content">
                <h4 class="title">{{ getOption('home_about_us_sub_title') }}</h4>
                <div class="row rg-20">
                    <div class="col-lg-12 col-12">
                        <div class="aboutProperty-img"><img src="{{ getSettingImage('home_about_us_image_two') }}" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More Features -->
    <section class="section-gap">
        <div class="container">
            <div class="moreFeatures-item-wrap">
                @foreach($advanceFeature as $data)
                    <div class="row rg-20 align-items-center">
                        <div class="col-lg-7">
                            <div class="moreFeatures-item-img"><img src="{{ $data->image }}" alt="" /></div>
                        </div>
                        <div class="col-lg-5">
                            <div class="moreFeatures-item-content">
                                <h4 class="title">{{ $data->title }}</h4>
                                <p class="info">{{ $data->summary }}</p>
                                <a href="#" class="theme-btn py-16 px-30 text-nowrap">{{__('Try for Free')}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    @if (getOption('home_testimonial_section_status', 1) == ACTIVE)
        <section class="section-gap bg-grey-rectangle overflow-hidden" data-background="assets/images/testimonial-bg.svg">
            <div class="container">
                <div class="section-content-wrap text-center">
                    <p class="sub-title">{{ getOption('home_testimonial_section_name') }}</p>
                    <h4 class="title pb-0">{{ getOption('home_testimonial_section_title') }}</h4>
                </div>
                <div class="landing-testimonial-wrap">
                    <div class="swiper ldTestiItems">
                        <div class="swiper-wrapper">
                            @foreach($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="landing-testimonial-item">
                                        <div class="top">
                                            <div class="user">
                                                <h4 class="name">{{ $testimonial->name }}</h4>
                                                <p class="degi">{{ $testimonial->designation }}</p>
                                            </div>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/icon/quotes.svg') }}" alt="{{ getOption('app_name') }}" />
                                            </div>
                                        </div>
                                        <p class="text">{{ $testimonial->comment }}</p>
                                        <ul class="ld-testi-rating">
                                            {!! reviewStar($testimonial->star) !!}
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="arrowControl">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- FAQ -->
    @if (getOption('home_faq_section_status'))
        <section class="section-gap">
            <div class="container">
                <div class="section-content-wrap text-center">
                    <p class="sub-title">{{ getOption('home_faq_section_name') }}</p>
                    <h4 class="title pb-0">{{ getOption('home_faq_section_title') }}</h4>
                </div>
                <div class="accordion zAccordion-reset zAccordion-one" id="accordionFaqZaiProty">
                    <div class="row rg-20">
                        @foreach($faqs as $index => $faq)
                            <div class="col-lg-6">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-{{ $index }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $index }}" aria-expanded="false" aria-controls="collapse-{{ $index }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse-{{ $index }}" class="accordion-collapse collapse" aria-labelledby="heading-{{ $index }}" data-bs-parent="#accordionFaqZaiProty">
                                        <div class="accordion-body">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection
