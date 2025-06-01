@extends('saas.frontend.layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="breadcrumb-content">
            <h4 class="title">{{__('Blogs')}}</h4>
            <ol class="breadcrumb sf-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend') }}">{{__('Home')}}</a></li>
                <li class="breadcrumb-item"><a href="#">{{__('Blogs')}}</a></li>
            </ol>
        </div>
    </section>

    <!-- Blog list -->
    <section class="section-gap-bottom section-gap-alt">
        <div class="container">
            <div class="blogList-wrap">
                <div class="row">
                    @foreach($blogData as $data)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <a href="{{ route('blog-details',$data->slug) }}" class="img"><img src="{{ $data->image }}" alt="" /></a>
                                <div class="content">
                                    <p class="category">
                                        <span>{{ $data->blogCategory->name }}</span>
                                        <span>/</span>
                                        <span>{{ \Carbon\Carbon::parse($data->publish_date)->format('F d, Y') }}</span>
                                    </p>
                                    <a href="{{ route('blog-details',$data->slug) }}" class="title">{{ $data->title }}</a>
                                </div>
                                <div class="d-inline-block">
                                    <a href="{{ route('blog-details',$data->slug) }}" class="link">{{__('Read More')}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        {{ $blogData->links('saas.frontend.layouts.partial.common_pagination')}}
                </div>
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
