@extends('saas.frontend.layouts.app')

@section('content')

    <!-- Blog details -->
    <section class="section-gap">
        <div class="container">
            <div class="blog-details-content">
                <div class="categoryTitle">
                    <p class="category">
                        <span>{{ $blogDetails->blogCategory->name }}</span>
                        <span>/</span>
                        <span>{{ \Carbon\Carbon::parse($blogDetails->publish_date)->format('F d, Y') }}</span>
                    </p>
                    <h4 class="title">{{ $blogDetails->title }}</h4>
                </div>
                <div class="img"><img src="{{ $blogDetails->image }}" alt="" /></div>
                <p>{!! $blogDetails->details !!}</p>
            </div>
        </div>
    </section>

    <!-- Related Articles -->
    <section class="section-gap-bottom">
        <div class="container">
            <div class="section-content-wrap text-center">
                <h4 class="title pb-0">Related Articles</h4>
            </div>
            <div class="row rg-20">
                @foreach($relatedBlog as $data)
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
            </div>
        </div>
    </section>

@endsection
