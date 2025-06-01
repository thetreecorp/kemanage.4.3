<!--=======================================
        All Css Style link
        ===========================================-->

<!-- Bootstrap core CSS -->
<link href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/libs/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">

<!-- Custom fonts for this template -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

<!-- Animate Css-->
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/libs/owl-carousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libs/owl-carousel/owl.theme.default.min.css') }}">


{{-- css layouts --}}
 <!-- link -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- font awesome css -->
    <link href="{{ asset('fontawesome-pro/css/all.min.css') }}" rel="stylesheet" />
    <!-- font awesome js-->
    <script src="{{ asset('fontawesome-pro/js/all.min.js') }}"></script>
    <!-- kemedar Icons -->
    <link rel="stylesheet" href="{{ asset('fonts/kemeder-icons.css') }}" />
    <!-- kemedar icons mobile -->
    {{-- <link rel="stylesheet" href="{{asset('fonts/index.e5d789a3.css')}}" /> --}}
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />

    <!-- mobile stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/media.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/kemedar-mobile.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/leftsidebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/ncss.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

    <!-- jquery -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>

        <!-- scrollbar css -->
    {{-- <!-- <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}"> --> --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.css"
        integrity="sha512-xlddSVZtsRE3eIgHezgaKXDhUrdkIZGMeAFrvlpkK0k5Udv19fTPmZFdQapBJnKZyAQtlr3WXEM3Lf4tsrHvSA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.js"
        integrity="sha512-5AcaBUUUU/lxSEeEcruOIghqABnXF8TWqdIDXBZ2SNEtrTGvD408W/ShtKZf0JNjQUfOiRBJP+yHk6Ab2eFw3Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<script src="//unpkg.com/alpinejs" defer></script>

    <link href="{{ asset('css/leftsidebar.css') }}" rel="stylesheet">


	@if ($alignment == 'rtl')
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

		<link rel="stylesheet" href="{{ asset('css/rtl-style.css') }}">

		<script src="{{ asset('js/rtl-script.js') }}" defer></script>

		@if (\Request::route()->getName() == 'sidebar.page')
		<script>
			$(document).ready(function()
			{
				setTimeout(function(){
					$('div[style*="left: -1000px"]').css({'left':0,'right':-1000});
				},500);
			});
		 </script>
		 @endif
	@else
		<link rel="stylesheet" href="{{ asset('css/ltr-style.css') }}">

		<script src="{{ asset('js/ltr-script.js') }}" defer></script>
	@endif
    <!-- javascript -->
    <script src="{{ asset('js/javascript.js') }}"></script>

<!-- Icons -->
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">
<link href="{{ asset('/') }}frontend/assets/css/swiper.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">

<!-- Custom styles for this template -->
<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

<!-- Responsive Css-->
<link href="{{ asset('assets/scss/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
<style>
    :root {
        @if (getOption('website_color_mode', 0) == ACTIVE)
        --primary-color: {{ getOption('website_primary_color', '#3686FC') }};
        --secondary-color: {{ getOption('website_secondary_color', '#8253FB') }};
        --button-primary-color: {{ getOption('button_primary_color', '#3686FC') }};
        --button-hover-color: {{ getOption('button_hover_color', '#0063E6') }};
        @else
         --primary-color: #3686FC;
        --secondary-color: #160E4D;
        --button-primary-color: #3686FC;
        --button-hover-color: #0063E6;
    @endif
    }
</style>
@stack('style')
