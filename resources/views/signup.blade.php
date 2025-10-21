<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <meta name="description" content="Template Content">
    <meta name="keywords" content="Template Keywords">
    <meta name="author" content="Dreamguys - DreamsChat">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="{{ env('APP_AUTHOR') }}">
	<meta name="twitter:title" content="Template Content">
	<meta name="twitter:description" content="Template Content">
	<meta name="twitter:image" content="">
	<meta name="twitter:image:alt" content="">

	<meta property="og:url" content="Template Landing Page URL">
	<meta property="og:title" content="Template Titlte">
	<meta property="og:description" content="Template Content">
	<meta property="og:image" content="">
	<meta property="og:image:secure_url" content="">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="600">

	<title>DreamsChat</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('build/img/favicon.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('build/css/bootstrap.min.css') }}">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{ asset('build/css/feather.css') }}">
   
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('build/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/plugins/fontawesome/css/all.min.css') }}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('build/plugins/swiper/swiper.min.css') }}">

    <!-- FancyBox CSS -->
    <link rel="stylesheet" href="{{ asset('build/plugins/fancybox/jquery.fancybox.min.css') }}">

    <!-- TablerIcon CSS -->
    <link rel="stylesheet" href="{{ asset('build/plugins/tabler-icons/tabler-icons.min.css') }}">

    <!-- Select CSS -->
    <link rel="stylesheet" href="{{ asset('build/plugins/select2/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('build/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('build/css/style.css') }}"></head>
    {{-- @livewireStyles --}}

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper d-block">
        <div class="container-fuild">
            <div class=" w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap login-bg1 ">
                            <div class="col-md-9 mx-auto p-4">
                                
                                <livewire:sign-up  />

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="d-lg-flex align-items-center justify-content-center position-relative d-lg-block d-none flex-wrap vh-100 overflowy-auto login-bg2 ">
                            <div class="floating-bg">
                                <img src="{{ asset('build/img/bg/circle-1.png') }}" alt="Img">
                                <img src="{{ asset('build/img/bg/circle-2.png') }}" alt="Img">
                                <img src="{{ asset('build/img/bg/emoji-01.svg') }}" alt="Img">
                                <img src="{{ asset('build/img/bg/emoji-02.svg') }}" alt="Img">
                                <img src="{{ asset('build/img/bg/emoji-03.svg') }}" alt="Img">
                                <img src="{{ asset('build/img/bg/emoji-04.svg') }}" alt="Img">
                                <img src="{{ asset('build/img/bg/right-arrow-01.svg') }}" alt="Img">
                                <img src="{{ asset('build/img/bg/right-arrow-02.svg') }}" alt="Img">
                            </div>
                            <div class="floating-avatar ">
                                <span class="avatar avatar-xl avatar-rounded border border-white">
                                    <img src="{{ asset('build/img/profiles/avatar-12.jpg') }}" alt="img">
                                </span>
                                <span class="avatar avatar-xl avatar-rounded border border-white">
                                    <img src="{{ asset('build/img/profiles/avatar-03.jpg') }}" alt="img">
                                </span>
                                <span class="avatar avatar-xl avatar-rounded border border-white">
                                    <img src="{{ asset('build/img/profiles/avatar-02.jpg') }}" alt="img">
                                </span>
                                <span class="avatar avatar-xl avatar-rounded border border-white">
                                    <img src="{{ asset('build/img/profiles/avatar-05.jpg') }}" alt="img">
                                </span>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('build/img/bg/login-bg-1.svg') }}" class="login-img" alt="Img">
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>        
    </div>
    <!-- /Main Wrapper -->
	
    <!-- jQuery -->
    <script src="{{ asset('build/js/jquery-3.7.1.min.js') }}" ></script>
            
    <!-- Bootstrap Core JS -->
    <script src="{{ asset('build/js/bootstrap.bundle.min.js') }}" ></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('build/plugins/slimscroll/jquery.slimscroll.min.js') }}" ></script>

    <!-- Swiper JS -->
    <script src="{{ asset('build/plugins/swiper/swiper.min.js') }}" ></script>

    <!-- FancyBox JS -->
    <script src="{{ asset('build/plugins/fancybox/jquery.fancybox.min.js') }}" ></script>

    <!-- Select JS -->
    <script src="{{ asset('build/plugins/select2/js/select2.min.js') }}" ></script>

    <!-- Datetimepicker JS -->
    <script src="{{ asset('build/js/moment.min.js') }}" ></script>
    <script src="{{ asset('build/js/bootstrap-datetimepicker.min.js') }}" ></script>

    <!-- Custom JS -->
    <script src="{{ asset('build/js/script.js') }}" ></script>
    {{-- @livewireScripts --}}
    {{-- <script src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="196b6cba7ff4f88955584f5c-|49" defer></script> --}}
</body>

</html>