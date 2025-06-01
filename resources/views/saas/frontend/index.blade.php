@extends('saas.frontend.layouts.app')

@section('content')
    <!-- Hero Banner -->
    @if(getOption('home_hero_section_status',1) == ACTIVE)
        <section class="heroBanner-section" data-background="{{ asset('assets/images/heroBanner-bg.png') }}">
            <div class="container">
                <div class="heroBanner-content">
                    <div class="left pb-30">
                        <h4 class="title">{{ getOption('home_hero_title') }}</h4>
                        <p class="info">{{ getOption('home_hero_summery') }}</p>
                        <a href="{{ route('owner.register.form') }}" class="theme-btn py-16 px-30 text-nowrap">{{__('Start Free Trial')}}</a>
                    </div>
                    <div class="right"><img src="{{ getSettingImage('home_hero_image') }}" alt="" /></div>
                </div>
            </div>
        </section>
    @endif

    <!-- Features -->
    @if (getOption('home_amazing_feature_section_status', 1) == ACTIVE)
        <section class="features-section">
            <div class="features-section-wrap">
                <div class="container">
                    <div class="section-content-wrap text-center">
                        <p class="sub-title text-white">{{ getOption('home_amazing_features_name') }}</p>
                        <h4 class="title text-white pb-0">{{ getOption('home_amazing_features_title') }}</h4>
                    </div>
                    <div class="row rg-20 align-items-center">
                        <div class="col-lg-4">
                            @if(isset($features[0]))
                                <div class="features-item">
                                    <div class="wrap-inner">
                                        <div class="wrap">
                                            <div class="icon"><img src="{{ $features[0]->icon }}" alt="" /></div>
                                            <h4 class="title">{{ $features[0]->title }}</h4>
                                            <p class="info">{{ $features[0]->summary }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex flex-column flex-md-row flex-lg-column g-24">
                                @if(isset($features[1]))
                                    <div class="features-item">
                                        <div class="wrap-inner">
                                            <div class="wrap">
                                                <div class="icon"><img src="{{ $features[1]->icon }}" alt="" /></div>
                                                <h4 class="title">{{ $features[1]->title }}</h4>
                                                <p class="info">{{ $features[1]->summary }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if(isset($features[2]))
                                    <div class="features-item">
                                        <div class="wrap-inner">
                                            <div class="wrap">
                                                <div class="icon"><img src="{{ $features[2]->icon }}" alt="" /></div>
                                                <h4 class="title">{{ $features[2]->title }}</h4>
                                                <p class="info">{{ $features[2]->summary }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        @if(isset($features[3]))
                            <div class="col-lg-4">
                                <div class="features-item">
                                    <div class="wrap-inner">
                                        <div class="wrap">
                                            <div class="icon"><img src="{{ $features[3]->icon }}" alt="" /></div>
                                            <h4 class="title">{{ $features[3]->title }}</h4>
                                            <p class="info">{{ $features[3]->summary }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Advance Features -->
    @if(getOption('home_advance_feature_section_status',1) == ACTIVE)
        <section class="section-gap">
            <div class="container">
                <div class="section-content-wrap text-center">
                    <p class="sub-title">{{ getOption('home_advance_feature_section_name') }}</p>
                    <h4 class="title pb-0">{{ getOption('home_advance_feature_section_title') }}</h4>
                </div>
                <div class="moreFeatures-item-wrap">
                    @foreach($corePages as $data)
                        <div class="row rg-20 align-items-center">
                            <div class="col-lg-7">
                                <div class="moreFeatures-item-img"><img src="{{ $data->image }}" alt="" /></div>
                            </div>
                            <div class="col-lg-5">
                                <div class="moreFeatures-item-content">
                                    <h4 class="title">{{ $data->title }}</h4>
                                    <p class="info">{{ $data->summary }}</p>
                                    <a href="{{ route('login') }}" class="theme-btn py-16 px-30 text-nowrap">{{__('Start Free trail')}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- Pricing -->
    @if (getOption('home_pricing_section_status', 1) == ACTIVE)
        <section class="pricing-section" id="priceSection">
            <div class="container">
                <div class="pricing-section-content">
                    <div class="section-content-wrap text-center">
                        <p class="sub-title text-white">{{ getOption('home_price_section_name') }}</p>
                        <h4 class="title text-white pb-0">{{ getOption('home_price_section_title') }}</h4>
                    </div>
                    <div class="row rg-20">
                        @foreach($packages as $package)
                            <div class="col-lg-4 col-md-6">
                                <form action="{{ route('owner.subscription.index') }}" method="GET">
                                    <input type="hidden" name="id" value="{{ $package->id }}">
                                    <input type="hidden" class="plan_type" name="duration_type" value="1">
                                    <div class="price-plan-one {{ $package->is_default == 1 ? 'active' : '' }}">
                                        <div class="info-content">
                                            <h4 class="title">{{ $package->name }}</h4>
                                            <p class="info">{{ $package->description }}</p>
                                        </div>
                                        <div class="price-list">
                                            <p class="price zPrice-plan-monthly d-block">
                                                <span>{{ currencyPrice($package->monthly_price) }}</span>/ {{__('monthly')}}
                                            </p>
                                            <p class="price zPrice-plan-annually d-none">
                                                <span>{{currencyPrice($package->yearly_price)}}</span>/ yearly</p>
                                            @if (in_array($package->type, [PACKAGE_TYPE_PROPERTY, PACKAGE_TYPE_UNIT, PACKAGE_TYPE_TENANT]))
                                                <p class="font-13 font-medium price-monthly per_monthly_price  d-none">
                                                    {{ currencyPrice($package->per_monthly_price) }}*1={{ $package->per_monthly_price * 1 }}
                                                </p>
                                                <p
                                                    class="font-13 font-medium d-none price-yearly per_yearly_price  d-none">
                                                    {{ currencyPrice($package->per_yearly_price) }}*1={{ $package->per_yearly_price * 1 }}
                                                </p>
                                            @endif
                                            <div class="list-wrap">
                                                <h4 class="title">{{__('What’s included')}}:</h4>
                                                <ul class="list">
                                                    @if (in_array($package->type, [PACKAGE_TYPE_PROPERTY, PACKAGE_TYPE_UNIT, PACKAGE_TYPE_TENANT]))
                                                        @if ($package->type == PACKAGE_TYPE_PROPERTY)
                                                            <li class="item">
                                                                <div class="icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                         height="22" viewBox="0 0 22 22" fill="none">
                                                                        <circle cx="11" cy="11" r="11" fill="#E9F2FF"/>
                                                                        <path
                                                                            d="M7.41764 12.6664L8.98407 13.8412C9.41276 14.1628 10.0187 14.0892 10.358 13.6745L15.001 7.99976"
                                                                            stroke="#3686FC" stroke-width="1.4"
                                                                            stroke-linecap="round"/>
                                                                    </svg>
                                                                </div>
                                                                <p class="text">{{ __('Add ' . currencyPrice($package->per_monthly_price) . ' Per Properties') }}</p>
                                                            </li>
                                                        @elseif ($package->type == PACKAGE_TYPE_UNIT)
                                                            <li class="item">
                                                                <div class="icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                         height="22" viewBox="0 0 22 22" fill="none">
                                                                        <circle cx="11" cy="11" r="11" fill="#E9F2FF"/>
                                                                        <path
                                                                            d="M7.41764 12.6664L8.98407 13.8412C9.41276 14.1628 10.0187 14.0892 10.358 13.6745L15.001 7.99976"
                                                                            stroke="#3686FC" stroke-width="1.4"
                                                                            stroke-linecap="round"/>
                                                                    </svg>
                                                                </div>
                                                                <p class="text">{{ __('Add ' . currencyPrice($package->per_monthly_price) . ' Per Units') }}</p>
                                                            </li>
                                                        @elseif ($package->type == PACKAGE_TYPE_TENANT)
                                                            <li class="item">
                                                                <div class="icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                         height="22" viewBox="0 0 22 22" fill="none">
                                                                        <circle cx="11" cy="11" r="11" fill="#E9F2FF"/>
                                                                        <path
                                                                            d="M7.41764 12.6664L8.98407 13.8412C9.41276 14.1628 10.0187 14.0892 10.358 13.6745L15.001 7.99976"
                                                                            stroke="#3686FC" stroke-width="1.4"
                                                                            stroke-linecap="round"/>
                                                                    </svg>
                                                                </div>
                                                                <p class="text">{{ __('Add ' . currencyPrice($package->per_monthly_price) . ' Per Tenants') }}</p>
                                                            </li>
                                                        @endif
                                                    @endif
                                                    <li class="item">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                                 viewBox="0 0 22 22" fill="none">
                                                                <circle cx="11" cy="11" r="11" fill="#E9F2FF"/>
                                                                <path
                                                                    d="M7.41764 12.6664L8.98407 13.8412C9.41276 14.1628 10.0187 14.0892 10.358 13.6745L15.001 7.99976"
                                                                    stroke="#3686FC" stroke-width="1.4"
                                                                    stroke-linecap="round"/>
                                                            </svg>
                                                        </div>
                                                        <p class="text"> {{ $package->max_property == -1 ? __('Add Unlimited Properties') : __('Add ' . $package->max_property . ' Properties') }}</p>
                                                    </li>
                                                    <li class="item">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                                 viewBox="0 0 22 22" fill="none">
                                                                <circle cx="11" cy="11" r="11" fill="#E9F2FF"/>
                                                                <path
                                                                    d="M7.41764 12.6664L8.98407 13.8412C9.41276 14.1628 10.0187 14.0892 10.358 13.6745L15.001 7.99976"
                                                                    stroke="#3686FC" stroke-width="1.4"
                                                                    stroke-linecap="round"/>
                                                            </svg>
                                                        </div>
                                                        <p class="text">{{ $package->max_unit == -1 ? __('Add Unlimited Units') : __('Add ' . $package->max_unit . ' Units') }}</p>
                                                    </li>
                                                    <li class="item">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                                 viewBox="0 0 22 22" fill="none">
                                                                <circle cx="11" cy="11" r="11" fill="#E9F2FF"/>
                                                                <path
                                                                    d="M7.41764 12.6664L8.98407 13.8412C9.41276 14.1628 10.0187 14.0892 10.358 13.6745L15.001 7.99976"
                                                                    stroke="#3686FC" stroke-width="1.4"
                                                                    stroke-linecap="round"/>
                                                            </svg>
                                                        </div>
                                                        <p class="text">{{ $package->max_maintainer == -1 ? __('Add Unlimited Maintainers') : __('Add ' . $package->max_maintainer . ' Maintainers') }}</p>
                                                    </li>
                                                    <li class="item">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                                 viewBox="0 0 22 22" fill="none">
                                                                <circle cx="11" cy="11" r="11" fill="#E9F2FF"/>
                                                                <path
                                                                    d="M7.41764 12.6664L8.98407 13.8412C9.41276 14.1628 10.0187 14.0892 10.358 13.6745L15.001 7.99976"
                                                                    stroke="#3686FC" stroke-width="1.4"
                                                                    stroke-linecap="round"/>
                                                            </svg>
                                                        </div>
                                                        <p class="text">{{ $package->max_invoice == -1 ? __('Add Unlimited Invoices') : __('Add ' . $package->max_invoice . ' Invoices') }}</p>
                                                    </li>
                                                    <li class="item">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                                 viewBox="0 0 22 22" fill="none">
                                                                <circle cx="11" cy="11" r="11" fill="#E9F2FF"/>
                                                                <path
                                                                    d="M7.41764 12.6664L8.98407 13.8412C9.41276 14.1628 10.0187 14.0892 10.358 13.6745L15.001 7.99976"
                                                                    stroke="#3686FC" stroke-width="1.4"
                                                                    stroke-linecap="round"/>
                                                            </svg>
                                                        </div>
                                                        <p class="text">{{ $package->max_auto_invoice == -1 ? __('Unlimited Auto Invoices Generate') : __($package->max_auto_invoice . ' Auto Invoices Generate') }}</p>
                                                    </li>
                                                    @if ($package->ticket_support == 1)
                                                        <li class="item">
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                                    <circle cx="11" cy="11" r="11" fill="#E9F2FF" />
                                                                    <path d="M7.41764 12.6664L8.98407 13.8412C9.41276 14.1628 10.0187 14.0892 10.358 13.6745L15.001 7.99976" stroke="#3686FC" stroke-width="1.4" stroke-linecap="round" />
                                                                </svg>
                                                            </div>
                                                            <p class="text">{{ __('Ticket Support') }}</p>
                                                        </li>
                                                    @endif
                                                    @if ($package->notice_support == 1)
                                                        <li class="item">
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                                    <circle cx="11" cy="11" r="11" fill="#E9F2FF" />
                                                                    <path d="M7.41764 12.6664L8.98407 13.8412C9.41276 14.1628 10.0187 14.0892 10.358 13.6745L15.001 7.99976" stroke="#3686FC" stroke-width="1.4" stroke-linecap="round" />
                                                                </svg>
                                                            </div>
                                                            <p class="text">{{ __('Notice Support') }}</p>
                                                        </li>
                                                    @endif
                                                    @foreach (json_decode($package->others) ?? [] as $other)
                                                        <li class="item">
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                                    <circle cx="11" cy="11" r="11" fill="#E9F2FF" />
                                                                    <path d="M7.41764 12.6664L8.98407 13.8412C9.41276 14.1628 10.0187 14.0892 10.358 13.6745L15.001 7.99976" stroke="#3686FC" stroke-width="1.4" stroke-linecap="round" />
                                                                </svg>
                                                            </div>
                                                            <p class="text">{{ __($other) }} </p>
                                                        </li>
                                                    @endforeach
                                                    @if (in_array($package->type, [PACKAGE_TYPE_PROPERTY, PACKAGE_TYPE_UNIT, PACKAGE_TYPE_TENANT]))
                                                        <li class="d-flex align-items-center d-none">
                                                            <div class="input-group">
                                                                <input type="number" min="0"
                                                                       step="any"
                                                                       class="form-control rounded-0 rounded-start quantity"
                                                                       name="quantity" value="1"
                                                                       placeholder="{{ __('Quantity') }}">
                                                                <p class="text">{{ __('Quantity') }}</p>
                                                            </div>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                            @if(auth()->check() && auth()->user()->role == USER_ROLE_OWNER)
                                                <button type="submit" class="link border-0" title="{{ __('Subscribe Now') }}">{{ __('Subscribe Now') }}</button>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- Our Process -->
    @if (getOption('home_how_it_word_section_status', 1) == ACTIVE)
        <section class="section-gap" id="howItWork">
            <div class="container">
                <div class="section-content-wrap text-center">
                    <p class="sub-title">{{ getOption('home_how_it_word_section_name') }}</p>
                    <h4 class="title pb-0">{{ getOption('home_how_it_word_section_title') }}</h4>
                </div>
                <div class="row rg-20">
                    @foreach($howItWorks as $key => $data)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="ourProcess-item">
                                <p class="sub-title">({{__('Step')}} {{ $key + 1 }})</p>
                                <h4 class="title">{{ $data->title }}</h4>
                                <p class="info">{{ $data->summary }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- Testimonial -->
    @if (getOption('home_testimonial_section_status', 1) == ACTIVE)
        <section class="section-gap bg-grey-rectangle overflow-hidden" data-background="{{ asset('assets/images/testimonial-bg.svg') }}" id="testimonialSection">
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
        <section class="section-gap" id="faqs">
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

@push('script')
    <script src="{{ asset('assets/js/custom/frontend-index.js') }}"></script>
@endpush
