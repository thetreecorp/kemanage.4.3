<!-- Start Footer -->
<section class="footer-section">
    <div class="container">
        <div class="footer-top">
            <div class="row rg-20 justify-content-center justify-content-lg-between">
                <div class="col-lg-5 col-md-6">
                    <a href="{{ route('frontend') }}" class="footer-logo"><img src="{{ getSettingImage('app_logo_white') }}" alt="{{ getOption('app_name') }}" /></a>
                    <p class="footer-info">{{ getOption('app_footer_text') }}</p>
                    <ul class="footer-social">
                        <li>
                            <a href="{{ getOption('facebook_url') }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="{{ getOption('twitter_url') }}" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="{{ getOption('linkedin_url') }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="{{ getOption('skype_url') }}" target="_blank"><i class="fa-brands fa-skype"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <div class="row rg-20 justify-content-between">
                        <div class="col-xl-auto col-sm-4 col-6">
                            <h4 class="footer-menu-title">{{__('Pages')}}</h4>
                            <ul class="footer-menu">
                                <li><a href="{{ route('frontend') }}" class="link">{{__('Home')}}</a></li>
                                <li><a href="{{ route('about-us') }}" class="link">{{__('About Us')}}</a></li>
                                <li><a href="{{ route('feature') }}" class="link">{{__('Features')}}</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-auto col-sm-4 col-6">
                            <h4 class="footer-menu-title">{{__('Others')}}</h4>
                            <ul class="footer-menu">
                                <li><a href="{{ url('')}}#priceSection" class="link">{{__('Pricing')}}</a></li>
                                <li><a href="{{ url('') }}#testimonialSection" class="link">{{__('Testimonial')}}</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-auto col-sm-4 col-6">
                            <h4 class="footer-menu-title">{{__('Support')}}</h4>
                            <ul class="footer-menu">
                                <li><a href="{{ url('') }}#faqs" class="link">{{__('FAQs')}}</a></li>
                                <li><a href="{{ url('') }}#howItWork" class="link">{{__('How it Works')}}</a></li>
                                <li><a href="" class="link">{{__('Contact Us')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row rg-20 justify-content-between align-items-center flex-column-reverse flex-md-row">
                <div class="col-lg-6 col-md-5 col-xxl-auto order-md-0">
                    <p class="text text-center text-md-start">{{ getOption('app_copyright') }} <a href="{{ route('frontend') }}" class="link">{{ getOption('app_developed_by') }}</a></p>
                </div>
                <div class="col-lg-6 col-md-7 col-xxl-auto order-md-1">
                    <ul class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-end align-items-center g-17">
                        <li>
                            <a href="{{ route('terms-conditions') }}" class="fs-17 fw-400 lh-27 text-white-80">{{__('Terms & Conditions')}}</a>
                        </li>
                        <li>
                            <a href="{{ route('privacy-policy') }}" class="fs-17 fw-400 lh-27 text-white-80">{{__('Privacy Policy')}}</a>
                        </li>
                        <li>
                            <a href="{{ route('cookie-policy') }}" class="fs-17 fw-400 lh-27 text-white-80">{{__('Cookie Policy')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Footer -->
