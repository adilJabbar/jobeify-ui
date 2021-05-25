
<!--Loader-->
<div id="global-loader">
    <img src="{{asset('/')}}theme_jobeify/assets/images/loader.svg" class="loader-img" alt="">
</div>

<!--Header Main-->
<div class="header-main">
    <!--Top Bar-->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-sm-4 col-7">
                    <div class="top-bar-left d-flex">
                        <div class="clearfix">
                            <ul class="socials">
                                <li>
                                    <a class="social-icon" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix">
                            <ul class="contact border-left">
                                <li class="d-lg-none">
                                    <a href="#" class="callnumber"><span><i class="fa fa-phone mr-1"></i>: +425 345 8765</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-sm-8 col-5">
                    <div class="top-bar-right">
                        <ul class="custom">
                            <li>
                                <a href="register.html" class=""><i class="fa fa-user mr-1"></i> <span>Register</span></a>
                            </li>
                            <li>
                                <a href="login.html" class=""><i class="fa fa-sign-in mr-1"></i> <span>Login</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="" data-toggle="dropdown"><i class="fa fa-home mr-1"></i><span> My Dashboard</span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a href="mydash.html" class="dropdown-item" >
                                        <i class="dropdown-icon icon icon-user"></i> My Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon icon icon-speech"></i> Inbox
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon icon icon-bell"></i> Notifications
                                    </a>
                                    <a href="mydash.html" class="dropdown-item" >
                                        <i class="dropdown-icon  icon icon-settings"></i> Account Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon icon icon-power"></i> Log out
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a href="login.html" class=""><i class="fa fa-black-tie mr-1"></i> <span>For Employer</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Top Bar-->

    <!-- Mobile Header -->
    <div class="sticky">
        <div class="horizontal-header clearfix ">
            <div class="container">
                <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                <span class="smllogo">
                    <a href="{{url('/')}}" class="logo"><img src="{{ asset('/') }}sitesetting_images/thumb/{{ $siteSetting->site_logo }}" alt="{{ $siteSetting->site_name }}" width="120" alt="img" /> </a>

                   </span>
                <a href="#" class="callusbtn bg-light"><i class="fa fa-bell text-body" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- /Mobile Header -->

    <!--Horizontal-main-->
    <div class="horizontal-main clearfix">
        <div class="horizontal-mainwrapper container clearfix">
            <div class="desktoplogo">



                    <a href="{{url('/')}}" ><img src="{{ asset('/') }}sitesetting_images/thumb/{{ $siteSetting->site_logo }}" alt="{{ $siteSetting->site_name }}" width="120" alt="img" /> </a>


            </div>
            <div class="desktoplogo-1">
                <a href="{{url('/')}}" ><img src="{{ asset('/') }}sitesetting_images/thumb/{{ $siteSetting->site_logo }}" alt="{{ $siteSetting->site_name }}" width="120" alt="img" /> </a>

            </div>
            <!--Nav-->
            <nav class="horizontalMenu clearfix d-md-flex">
                <ul class="horizontalMenu-list">
                    <li class=" {{ Request::url() == route('index') ? 'active' : '' }}"><a href="{{url('/')}}">{{__('Home')}}</a> </li>

                    @if(Auth::guard('company')->check())
                        <li class=""><a href="{{url('/job-seekers')}}" >{{__('Seekers')}}</a> </li>
                    @else
                        <li class=""><a href="{{url('/jobs')}}" >{{__('Jobs')}}</a> </li>
                    @endif
                    <li class=" {{ Request::url()}}"><a href="{{url('/companies')}}">{{__('Companies')}}</a> </li>
                    @foreach($show_in_top_menu as $top_menu) @php $cmsContent = App\CmsContent::getContentBySlug($top_menu->page_slug); @endphp
                    <li class=" {{ Request::url() == route('cms', $top_menu->page_slug) ? 'active' : '' }}"><a href="{{ route('cms', $top_menu->page_slug) }}" >{{ $cmsContent->page_title }}</a> </li>
                    @endforeach

                    <li class="{{ Request::url() == route('blogs') ? 'active' : '' }}"><a href="{{ route('blogs') }}" >{{__('Blog')}}</a> </li>
                    <li class=" {{ Request::url() == route('contact.us') ? 'active' : '' }}"><a href="{{ route('contact.us') }}" >{{__('Contact us')}}</a> </li>


                    @if(Auth::check())
                        <li class="nav-item dropdown userbtn"><a href="">{{Auth::user()->printUserImage()}}</a>
                            <ul class="dropdown-menu">
                                <li ><a href="{{route('home')}}"><i class="fa fa-tachometer" aria-hidden="true"></i> {{__('Dashboard')}}</a> </li>
                                <li ><a href="{{ route('my.profile') }}" ><i class="fa fa-user" aria-hidden="true"></i> {{__('My Profile')}}</a> </li>
                                <li ><a href="{{ route('view.public.profile', Auth::user()->id) }}" ><i class="fa fa-eye" aria-hidden="true"></i> {{__('View Public Profile')}}</a> </li>
                                <li><a href="{{ route('my.job.applications') }}" ><i class="fa fa-desktop" aria-hidden="true"></i> {{__('My Job Applications')}}</a> </li>
                                <li ><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();" ><i class="fa fa-sign-out" aria-hidden="true"></i> {{__('Logout')}}</a> </li>
                                <form id="logout-form-header" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </li>
                    @endif @if(Auth::guard('company')->check())
                        <li class=" postjob"><a href="{{route('post.job')}}" class="register">{{__('Post a job')}}</a> </li>
                        <li class=" dropdown userbtn"><a href="">{{Auth::guard('company')->user()->printCompanyImage()}}</a>
                            <ul class="dropdown-menu">
                                <li ><a href="{{route('company.home')}}" ><i class="fa fa-tachometer" aria-hidden="true"></i> {{__('Dashboard')}}</a> </li>
                                <li ><a href="{{ route('company.profile') }}" ><i class="fa fa-user" aria-hidden="true"></i> {{__('Company Profile')}}</a></li>
                                <li ><a href="{{ route('post.job') }}"><i class="fa fa-desktop" aria-hidden="true"></i> {{__('Post Job')}}</a></li>
                                <li ><a href="{{route('company.messages')}}" ><i class="fa fa-envelope-o" aria-hidden="true"></i> {{__('Company Messages')}}</a></li>
                                <li ><a href="{{ route('company.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> {{__('Logout')}}</a> </li>
                                <form id="logout-form-header1" action="{{ route('company.logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </li>
                    @endif

{{--                    --}}
{{--                    <li><a href="#">My Dashboard <span class="fa fa-caret-down m-0"></span></a>--}}
{{--                        <ul class="sub-menu">--}}
{{--                            <li>--}}
{{--                                <a href="mydash.html">My Dashboard</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="myjobs.html">My Jobs</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="myfavorite.html">Favorite Jobs</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="manged.html">Manged Jobs</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="payments.html">Payments</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="orders.html"> Orders</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="settings.html"> Settings</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="tips.html">Tips</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

                    @if(!Auth::user() && !Auth::guard('company')->user())
                        <li class="nav-item"><a href="{{route('login')}}" class="nav-link">{{__('Sign in')}}</a> </li>
                        <li class="nav-item"><a href="{{route('register')}}" class="nav-link register">{{__('Register')}}</a> </li>
                    @endif
{{--                    <li class="pt-0  pb-2 mt-lg-0 create-submit-btn">--}}
{{--                        <span><a class="btn btn-secondary ad-post mt-1" href="ad-posts.html"><i class="fa fa-briefcase"></i> Submit a Job</a></span>--}}
{{--                    </li>--}}
{{--                    <li class="mt-0 pt-0  pb-5 mt-lg-0 create-resume-btn">--}}
{{--                        <span><a class="btn btn-info ad-post mt-1" href="create-resume.html"><i class="fa fa-edit"></i> Create Resume</a></span>--}}
{{--                    </li>--}}
                </ul>
            </nav>
            <!--/Nav-->
        </div>
    </div>
    <!--/Horizontal-main-->
</div>
<!--/Header Main-->



<?php /*?>@if(!Auth::user() && !Auth::guard('company')->user())
	<div class="">my dive 2</div>
@endif<?php */?>
