@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end --> 
<!-- Inner Page Title start -->
{{--@include('includes.inner_page_title', ['page_title'=>$cmsContent->page_title])--}}
<!-- Inner Page Title end -->
    @if($cmsContent->page_title=='About Us')
        <!--Breadcrumb-->
        <section>
            <div class="bannerimg cover-image bg-background3 sptb-2" data-image-src="../assets/images/banners/banner2.jpg">
                <div class="header-text mb-0">
                    <div class="container">
                        <div class="text-center text-white ">
                            <h1 class="">About Us</h1>
                            <ol class="breadcrumb text-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/Breadcrumb-->

        <!--How to work-->
        <section class="sptb bg-white">
            <div class="container">
                <div class="section-title center-block text-center">
                    <h2>How It Works?</h2>
                    <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="">
                            <div class="mb-lg-0 mb-4">
                                <div class="service-card text-center">
                                    <div class="bg-light icon-bg icon-service text-purple about">
                                        <img src="../assets/images/products/about/megaphone.png" alt="img">
                                    </div>
                                    <div class="servic-data mt-3">
                                        <h4 class="font-weight-semibold mb-2">Create Account</h4>
                                        <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="">
                            <div class="mb-lg-0 mb-4">
                                <div class="service-card text-center">
                                    <div class="bg-light icon-bg icon-service text-purple about">
                                        <img src="../assets/images/products/about/employees.png" alt="img">
                                    </div>
                                    <div class="servic-data mt-3">
                                        <h4 class="font-weight-semibold mb-2">Register</h4>
                                        <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="">
                            <div class="mb-sm-0 mb-4">
                                <div class="service-card text-center">
                                    <div class="bg-light icon-bg icon-service text-purple about">
                                        <img src="../assets/images/products/about/pencil.png" alt="img">
                                    </div>
                                    <div class="servic-data mt-3">
                                        <h4 class="font-weight-semibold mb-2">Search Jobs</h4>
                                        <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="">
                            <div class="">
                                <div class="service-card text-center">
                                    <div class="bg-light icon-bg icon-service text-purple about">
                                        <img src="../assets/images/products/about/coins.png" alt="img">
                                    </div>
                                    <div class="servic-data mt-3">
                                        <h4 class="font-weight-semibold mb-2">Save & Apply</h4>
                                        <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/How to work-->

        <!--post section-->
        <section>
            <div class="cover-image sptb bg-background-color" data-image-src="../assets/images/banners/banner4.jpg">
                <div class="content-text mb-0">
                    <div class="container">
                        <div class="text-center text-white section-title pb-0">
                            <h2 class="mb-2 display-5">Let's Update Your Skills with Our Training Professionals...</h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="mt-5">
                                <a href="ad-posts.html" class="btn btn-secondary">Free Post Ad</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/post section-->

        <!--Top Companies-->
        <section class="sptb">
            <div class="container">
                <div class="section-title center-block text-center">
                    <h1>Top Companies</h1>
                    <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                </div>
                <div id="company-carousel1" class="owl-carousel owl-carousel-icons4">
                    <div class="item">
                        <div class="card mb-0">
                            <div class="card-body">
                                <img src="../assets/images/clients/1.png" alt="company1">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card mb-0">
                            <div class="card-body">
                                <img src="../assets/images/clients/2.png" alt="company2">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card mb-0">
                            <div class="card-body">
                                <img src="../assets/images/clients/3.png" alt="company3">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card mb-0">
                            <div class="card-body">
                                <img src="../assets/images/clients/4.png" alt="company4">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card mb-0">
                            <div class="card-body">
                                <img src="../assets/images/clients/5.png" alt="company5">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card mb-0">
                            <div class="card-body">
                                <img src="../assets/images/clients/6.png" alt="company6">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card mb-0">
                            <div class="card-body">
                                <img src="../assets/images/clients/7.png" alt="company7">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card mb-0">
                            <div class="card-body">
                                <img src="../assets/images/clients/8.png" alt="company8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/Top Companies-->

        <!--section-->
        <section class="sptb bg-white">
            <div class="container">
                <div class="section-title center-block text-center">
                    <h2>Why Choose Us?</h2>
                    <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                </div>
                <div class="row ">
                    <div class="col-md-6 col-lg-4 features">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <div class="feature">
                                    <h3 class="font-weight-bold">Job Security</h3>
                                    <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 features">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <div class="feature">
                                    <h3 class="font-weight-bold"> All Jobs Notifications Available</h3>
                                    <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 features">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <div class="feature">
                                    <h3 class="font-weight-bold">Recruitment Services</h3>
                                    <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 features">
                        <div class="card mb-lg-0 bg-light">
                            <div class="card-body text-center">
                                <div class="feature">
                                    <h3 class="font-weight-bold">100% Job Assistance</h3>
                                    <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 features">
                        <div class="card mb-lg-0 mb-md-0 bg-light">
                            <div class="card-body text-center">
                                <div class="feature">
                                    <h3 class="font-weight-bold">User Friendly</h3>
                                    <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 features">
                        <div class="card mb-0 bg-light">
                            <div class="card-body text-center">
                                <div class="feature">
                                    <h3 class="font-weight-bold">24/7 Support</h3>
                                    <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/section-->

        <!--Statistics-->
        <section>
            <div class="about-1 cover-image bg-background-color" data-image-src="../assets/images/banners/banner5.jpg">
                <div class="content-text mb-0 text-white info">
                    <div class="container">
                        <div class="row text-center no-gutters">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-status md-mb-0 sptb bg-black-transparent-1 mt-5 mt-md-0 mt-5 mt-md-0">
                                    <div class="counter-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <h5>Members</h5>
                                    <h2 class="counter mb-0">2569</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-status status-1 md-mb-0 sptb bg-black-transparent-2">
                                    <div class="counter-icon text-warning">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                    <h5>Jobs</h5>
                                    <h2 class="counter mb-0">1765</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-status status md-mb-0 sptb bg-black-transparent-1">
                                    <div class="counter-icon text-primary">
                                        <i class="fa fa-building-o"></i>
                                    </div>
                                    <h5>Companies</h5>
                                    <h2 class="counter mb-0">846</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-status status sptb bg-black-transparent-2 mb-5 mb-md-0">
                                    <div class="counter-icon text-success">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <h5>Happy Customers</h5>
                                    <h2 class="counter mb-0">7253</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/Statistics-->

        <!--section-->
        <section class="sptb bg-white">
            <div class="container">
                <div class="section-title center-block text-center">
                    <h2>Testimonials</h2>
                    <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card mb-lg-0">
                            <div class="card-body">
                                <div class="team-section text-center">
                                    <div class="team-img">
                                        <img src="../assets/images/users/male/1.jpg" class="img-thumbnail rounded-circle alt=" alt="">
                                    </div>
                                    <h4 class="font-weight-bold dark-grey-text mt-4">Tracey	Poole</h4>
                                    <h6 class="text-muted mb-3">Web Offlineer</h6>
                                    <p class="font-weight-normal dark-grey-text">
                                        <i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae.</p>
                                    <div class="text-warning">
                                        <i class="fa fa-star"> </i>
                                        <i class="fa fa-star"> </i>
                                        <i class="fa fa-star"> </i>
                                        <i class="fa fa-star"> </i>
                                        <i class="fa fa-star-half-full"> </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card mb-lg-0">
                            <div class="card-body">
                                <div class="team-section text-center">
                                    <div class="team-img">
                                        <img src="../assets/images/users/female/1.jpg" class="img-thumbnail rounded-circle alt=" alt="">
                                    </div>
                                    <h4 class="font-weight-bold dark-grey-text mt-4">Harry	Walker</h4>
                                    <h6 class="text-muted mb-3">Web Developer</h6>
                                    <p class="font-weight-normal dark-grey-text">
                                        <i class="fa fa-quote-left pr-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam quis nostrum  corporis suscipit.</p>
                                    <div class="text-warning">
                                        <i class="fa fa-star"> </i>
                                        <i class="fa fa-star"> </i>
                                        <i class="fa fa-star"> </i>
                                        <i class="fa fa-star"> </i>
                                        <i class="fa fa-star"> </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="team-section text-center">
                                    <div class="team-img">
                                        <img src="../assets/images/users/male/2.jpg" class="img-thumbnail rounded-circle alt=" alt="">
                                    </div>
                                    <h4 class="font-weight-bold dark-grey-text mt-4">Paul White</h4>
                                    <h6 class="text-muted mb-3">Photographer</h6>
                                    <p class="font-weight-normal dark-grey-text">
                                        <i class="fa fa-quote-left pr-2"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                                    <div class="text-warning">
                                        <i class="fa fa-star"> </i>
                                        <i class="fa fa-star"> </i>
                                        <i class="fa fa-star"> </i>
                                        <i class="fa fa-star"> </i>
                                        <i class="fa fa-star-o"> </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/section-->

        <!-- Onlinesletter-->
        <section class="sptb border-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-xl-6 col-md-12">
                        <div class="sub-newsletter">
                            <h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Subscribe To Our Onlinesletter</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-6 col-md-12">
                        <div class="input-group sub-input mt-1">
                            <input type="text" class="form-control input-lg " placeholder="Enter your Email">
                            <div class="input-group-append ">
                                <button type="button" class="btn btn-primary  btn-lg br-tr-3  br-br-3">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/Onlinesletter-->

    @endif

{{--<div class="about-wraper">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <h2>{{$cmsContent->page_title}}</h2>--}}
{{--                <p>{!! $cmsContent->page_content !!}</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-3"></div>--}}
{{--            <div class="col-md-6">{!! $siteSetting->cms_page_ad !!}</div>--}}
{{--            <div class="col-md-3"></div>--}}
{{--        </div>--}}
{{--    </div>  --}}
{{--</div>--}}
@include('includes.footer')
@endsection
