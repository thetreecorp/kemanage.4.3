@extends('saas.frontend.layouts.app')
@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="breadcrumb-content">
            <h4 class="title">{{__('Contact Us')}}</h4>
            <ol class="breadcrumb sf-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend') }}">{{__('Home')}}</a></li>
                <li class="breadcrumb-item"><a href="#">{{__('Contact Us')}}</a></li>
            </ol>
        </div>
    </section>

    <!-- Contact Us content -->
    <section class="section-gap section-gap-alt contactUs-section">
        <div class="container">
            <div class="contactUs-content">
                <form class="ajax mt-5" action="{{ route('contact.message.store') }}" method="POST"
                      data-handler="getShowMessage">
                    @csrf
                    <div class="row">
                            <div class="col-md-6">
                            <label for="firstName" class="zForm-label">{{__('First Name')}} <span class="text-danger"> *</span></label>
                            <input type="text" id="firstName" name="first_name" class="zForm-control" placeholder="{{__('First name')}}" />
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="zForm-label">{{__('Last Name')}} <span class="text-danger"> *</span></label>
                            <input type="text" id="lastName" name="last_name" class="zForm-control" placeholder="{{__('Last name')}}" />
                        </div>
                        <div class="col-md-6">
                            <label for="contactUsEmail" class="zForm-label">{{__('Email')}} <span class="text-danger"> *</span></label>
                            <input type="email" id="contactUsEmail" name="email" class="zForm-control" placeholder="{{__('Enter your email')}}" />
                        </div>
                        <div class="col-md-6">
                            <label for="phoneNumber" class="zForm-label">{{__('Phone Number')}} <span class="text-danger"> *</span></label>
                            <input type="number" id="phoneNumber" name="phone" class="zForm-control" placeholder="+1 234 5678" />
                        </div>
                        <div class="col-md-12">
                            <label for="subjectContactUs" class="zForm-label">{{__('Subject')}} <span class="text-danger"> *</span></label>
                            <input type="text" id="subjectContactUs" name="subject" class="zForm-control" placeholder="{{__('Enter your subject')}}" />
                        </div>
                        <div class="col-md-12">
                            <label for="messageContactUs" class="zForm-label">{{__('Message')}} <span class="text-danger"> *</span></label>
                            <textarea id="messageContactUs" class="zForm-control" name="message" placeholder="{{__('Leave your message')}}"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="theme-btn py-16 px-30">{{__('Send Now')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
