@extends('saas.frontend.layouts.app')
@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="breadcrumb-content">
            <h4 class="title">{{__('Feature')}}</h4>
            <ol class="breadcrumb sf-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend') }}">{{__('Home')}}</a></li>
                <li class="breadcrumb-item"><a href="#">{{__('feature')}}</a></li>
            </ol>
        </div>
    </section>

    <!-- Features list -->
    <section class="section-gap-bottom section-gap-features">
        <div class="container">
            <div class="row rg-20">
                @foreach($advanceFeature as $data)
                    <div class="col-lg-4">
                        <div class="features-listItem">
                            <div class="img"><img src="{{ $data->image }}" alt="" /></div>
                            <div class="content">
                                <h4 class="title">{{ $data->title }}</h4>
                                <p class="info">{{ $data->summary }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ -->
    @if (getOption('home_faq_section_status'))
        <section class="section-gap-bottom">
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
