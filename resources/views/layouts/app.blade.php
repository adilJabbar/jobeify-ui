<?php
if (!isset($seo)) {
    $seo = (object)array('seo_title' => $siteSetting->site_name, 'seo_description' => $siteSetting->site_name, 'seo_keywords' => $siteSetting->site_name, 'seo_other' => '');
}
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="{{ (session('localeDir', 'ltr'))}}" dir="{{ (session('localeDir', 'ltr'))}}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{__($seo->seo_title) }}</title>
    <meta name="Description" content="{!! $seo->seo_description !!}">
    <meta name="Keywords" content="{!! $seo->seo_keywords !!}">
    {!! $seo->seo_other !!}
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{asset('/')}}favicon.ico">


    <!-- Bootstrap Css -->
    <link href="{{asset('/')}}theme_jobeify/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{asset('/')}}theme_jobeify/assets/css/style.css" rel="stylesheet" />

    <!-- Font-awesome  Css -->
    <link href="{{asset('/')}}theme_jobeify/assets/css/icons.css" rel="stylesheet"/>


    <!--Select2 Plugin -->
    <link href="{{asset('/')}}theme_jobeify/assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- Cookie css -->
    <link href="{{asset('/')}}theme_jobeify/assets/plugins/cookie/cookie.css" rel="stylesheet">

    <!-- Owl Theme css-->
    <link href="{{asset('/')}}theme_jobeify/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="{{asset('/')}}theme_jobeify/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!-- COLOR-SKINS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}theme_jobeify/assets/color-skins/color-skins/color10.css" />




{{--    <!-- Slider -->--}}
{{--    <link href="{{asset('/')}}js/revolution-slider/css/settings.css" rel="stylesheet">--}}
{{--    <!-- Owl carousel -->--}}
{{--    <link href="{{asset('/')}}css/owl.carousel.css" rel="stylesheet">--}}
{{--    <!-- Bootstrap -->--}}
{{--    <link href="{{asset('/')}}css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <!-- Font Awesome -->--}}
{{--    <link href="{{asset('/')}}css/font-awesome.css" rel="stylesheet">--}}
{{--    <!-- Custom Style -->--}}
{{--    <link href="{{asset('/')}}css/main.css" rel="stylesheet">--}}
    @if((session('localeDir', 'ltr') == 'rtl'))
    <!-- Rtl Style -->
    <link href="{{asset('/')}}css/rtl-style.css" rel="stylesheet">
    @endif
{{--    <link href="{{ asset('/') }}admin_assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{ asset('/') }}admin_assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{ asset('/') }}admin_assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />--}}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="{{asset('/')}}js/html5shiv.min.js"></script>
          <script src="{{asset('/')}}js/respond.min.js"></script>
        <![endif]-->
    @stack('styles')
</head>

<body class="main-body">
    @yield('content')






    <!-- Notification -->
    <a href="advanced-search.html" id="notification" ><span class="notification-text">Create Job Alert</span><i class="fa fa-bell"></i></a>

    <!-- Back to top -->
    <a href="#top" id="back-to-top" ><i class="fa fa-arrow-up"></i></a>

    <!-- JQuery js-->
    <script src="{{asset('/')}}theme_jobeify/assets/js/vendors/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="{{asset('/')}}theme_jobeify/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js"></script>
    <script src="{{asset('/')}}theme_jobeify/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

    <!--JQuery Sparkline Js-->
    <script src="{{asset('/')}}theme_jobeify/assets/js/vendors/jquery.sparkline.min.js"></script>

    <!-- Circle Progress Js-->
    <script src="{{asset('/')}}theme_jobeify/assets/js/vendors/circle-progress.min.js"></script>

    <!-- Star Rating Js-->
    <script src="{{asset('/')}}theme_jobeify/assets/plugins/rating/jquery.rating-stars.js"></script>

    <!--Counters -->
    <script src="{{asset('/')}}theme_jobeify/assets/plugins/counters/counterup.min.js"></script>
    <script src="{{asset('/')}}theme_jobeify/assets/plugins/counters/waypoints.min.js"></script>
    <script src="{{asset('/')}}theme_jobeify/assets/plugins/counters/numeric-counter.js"></script>

    <!--Owl Carousel js -->
    <script src="{{asset('/')}}theme_jobeify/assets/plugins/owl-carousel/owl.carousel.js"></script>

    <!--Horizontal Menu-->
    <script src="{{asset('/')}}theme_jobeify/assets/plugins/horizontal/horizontal-menu/horizontal.js"></script>

    <!--JQuery TouchSwipe js-->
    <script src="{{asset('/')}}theme_jobeify/assets/js/jquery.touchSwipe.min.js"></script>

    <!--Select2 js -->
    <script src="{{asset('/')}}theme_jobeify/assets/plugins/select2/select2.full.min.js"></script>
    <script src="{{asset('/')}}theme_jobeify/assets/js/select2.js"></script>

    <!-- sticky Js-->
    <script src="{{asset('/')}}theme_jobeify/assets/js/sticky.js"></script>

    <!-- Ion.RangeSlider -->
    <script src="{{asset('/')}}theme_jobeify/assets/plugins/jquery-uislider/jquery-ui.js"></script>

    <!--Showmore Js-->
    <script src="{{asset('/')}}theme_jobeify/assets/js/jquery.showmore.js"></script>
    <script src="{{asset('/')}}theme_jobeify/assets/js/showmore.js"></script>

    <!-- Cookie js -->
    <script src="{{asset('/')}}theme_jobeify/assets/plugins/cookie/jquery.ihavecookies.js"></script>
    <script src="{{asset('/')}}theme_jobeify/assets/plugins/cookie/cookie.js"></script>

    <!-- Custom scroll bar Js-->
    <script src="{{asset('/')}}theme_jobeify/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Swipe Js-->
    <script src="{{asset('/')}}theme_jobeify/assets/js/swipe.js"></script>

    <!-- Scripts Js-->
    <script src="{{asset('/')}}theme_jobeify/assets/js/scripts2.js"></script>

    <!-- Custom Js-->
    <script src="{{asset('/')}}theme_jobeify/assets/js/custom.js"></script>

    <script src="{{ asset('/') }}admin_assets/global/plugins/jquery.scrollTo.min.js" type="text/javascript"></script>

    {!! NoCaptcha::renderJs() !!}
    @stack('scripts')
    <!-- Custom js -->
    <script src="{{asset('/')}}js/script.js"></script>
    <script type="text/JavaScript">
        $(document).ready(function(){
            $(document).scrollTo('.has-error', 2000);
            });
            function showProcessingForm(btn_id){		
            $("#"+btn_id).val( 'Processing .....' );
            $("#"+btn_id).attr('disabled','disabled');		
            }
        </script>
</body>

</html>
