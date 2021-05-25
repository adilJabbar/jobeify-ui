<!--Footer Section-->
<section class="main-footer">
    {!! $siteSetting->above_footer_ad !!}
    <footer class="bg-dark text-white cover-image" data-image-src="../assets/images/banners/banner3.jpg">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12">
                        <h6>{{__('Quick Links')}}</h6>
                        <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <ul class="list-unstyled mb-0">









                            <li><a href="{{ route('index') }}">{{__('Home')}}</a></li>
                            <li><a href="{{ route('contact.us') }}">{{__('Contact Us')}}</a></li>
                            <li class="postad"><a href="{{ route('post.job') }}">{{__('Post a Job')}}</a></li>
                            <li><a href="{{ route('faq') }}">{{__('FAQs')}}</a></li>
                            @foreach($show_in_footer_menu as $footer_menu)
                                @php
                                    $cmsContent = App\CmsContent::getContentBySlug($footer_menu->page_slug);
                                @endphp

                                <li class="{{ Request::url() == route('cms', $footer_menu->page_slug) ? 'active' : '' }}"><a href="{{ route('cms', $footer_menu->page_slug) }}">{{ $cmsContent->page_title }}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <h6>{{__('Jobs By Functional Area')}}</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <ul class="list-unstyled mb-0">
                            @php
                                $functionalAreas = App\FunctionalArea::getUsingFunctionalAreas(10);
                            @endphp
                            @foreach($functionalAreas as $functionalArea)
                                <li><a href="{{ route('job.list', ['functional_area_id[]'=>$functionalArea->functional_area_id]) }}">{{$functionalArea->functional_area}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <h6>{{__('Jobs By Industry')}}</h6>
                        <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <ul class="list-unstyled mb-0">
                            @php
                                $industries = App\Industry::getUsingIndustries(10);
                            @endphp
                            @foreach($industries as $industry)
                                <li><a href="{{ route('job.list', ['industry_id[]'=>$industry->industry_id]) }}">{{$industry->industry}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <h6>{{__('Contact Us')}}</h6>
                        <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <div class="address">{{ $siteSetting->site_street_address }}</div>
                        <div class="email"> <a href="mailto:{{ $siteSetting->mail_to_address }}">{{ $siteSetting->mail_to_address }}</a> </div>
                        <div class="phone"> <a href="tel:{{ $siteSetting->site_phone_primary }}">{{ $siteSetting->site_phone_primary }}</a></div>
                        <!-- Social Icons -->
                        <div class="social">@include('includes.footer_social')</div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <h6 class="mb-2">Subscribe</h6>
                        <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <div class="input-group w-100">
                            <input type="text" class="form-control  border" placeholder="Email">
                            <div class="input-group-append ">
                                <button type="button" class="btn btn-primary "> Subscribe </button>
                            </div>
                        </div>
                        <h6 class="mb-2 mt-5">Payments</h6>
                        <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <div class="paylogos"><img src="{{asset('/')}}images/payment-icons.png" alt="" /></div>
                        <ul class="payments mb-0">

                            <li>
                                <a href="javascript:;" class="payments-icon"><i class="fa fa-cc-amex" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="javascript:;" class="payments-icon"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="javascript:;" class="payments-icon"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="javascript:;" class="payments-icon"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="javascript:;" class="payments-icon"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-white-50 border-top p-0">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-8 col-sm-12  mt-2 mb-2 text-left ">
                        Copyright © 2021 <a href="index.html" class="fs-14 text-white">rejoin</a>. Designed by <a href="spruko.com" class="fs-14 text-white">Spruko</a> All rights reserved.
                    </div>
                    <div class="col-lg-4 col-sm-12 ml-auto mb-2 mt-2 d-none d-lg-block">
                        <ul class="social mb-0">
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-rss"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-youtube"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-white p-0 border-top">
            <div class="container">
                <div class="p-2 text-center footer-links">
                    <a href="#" class="btn btn-link">How It Works</a>
                    <a href="#" class="btn btn-link">About Us</a>
                    <a href="#" class="btn btn-link">Pricing</a>
                    <a href="#" class="btn btn-link">Ads Categories</a>
                    <a href="#" class="btn btn-link">Privacy Policy</a>
                    <a href="#" class="btn btn-link">Terms Of Conditions</a>
                    <a href="#" class="btn btn-link">Blog</a>
                    <a href="#" class="btn btn-link">Contact Us</a>
                    <a href="#" class="btn btn-link">Premium Ad</a>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--Footer Section-->


<!--Footer-->
{{--<div class="largebanner shadow3">--}}
{{--<div class="adin">--}}
{{--{!! $siteSetting->above_footer_ad !!}--}}
{{--</div>--}}
{{--<div class="clearfix"></div>--}}
{{--</div>--}}


{{--<div class="footerWrap"> --}}
{{--    <div class="container">--}}
{{--        <div class="row"> --}}

{{--            <!--Quick Links-->--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <h5>{{__('Quick Links')}}</h5>--}}
{{--                <!--Quick Links menu Start-->--}}
{{--                <ul class="quicklinks">--}}
{{--                    <li><a href="{{ route('index') }}">{{__('Home')}}</a></li>--}}
{{--                    <li><a href="{{ route('contact.us') }}">{{__('Contact Us')}}</a></li>--}}
{{--                    <li class="postad"><a href="{{ route('post.job') }}">{{__('Post a Job')}}</a></li>--}}
{{--                    <li><a href="{{ route('faq') }}">{{__('FAQs')}}</a></li>--}}
{{--                    @foreach($show_in_footer_menu as $footer_menu)--}}
{{--                    @php--}}
{{--                    $cmsContent = App\CmsContent::getContentBySlug($footer_menu->page_slug);--}}
{{--                    @endphp--}}

{{--                    <li class="{{ Request::url() == route('cms', $footer_menu->page_slug) ? 'active' : '' }}"><a href="{{ route('cms', $footer_menu->page_slug) }}">{{ $cmsContent->page_title }}</a></li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!--Quick Links menu end-->--}}

{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <h5>{{__('Jobs By Functional Area')}}</h5>--}}
{{--                <!--Quick Links menu Start-->--}}
{{--                <ul class="quicklinks">--}}
{{--                    @php--}}
{{--                    $functionalAreas = App\FunctionalArea::getUsingFunctionalAreas(10);--}}
{{--                    @endphp--}}
{{--                    @foreach($functionalAreas as $functionalArea)--}}
{{--                    <li><a href="{{ route('job.list', ['functional_area_id[]'=>$functionalArea->functional_area_id]) }}">{{$functionalArea->functional_area}}</a></li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--            <!--Jobs By Industry-->--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <h5>{{__('Jobs By Industry')}}</h5>--}}
{{--                <!--Industry menu Start-->--}}
{{--                <ul class="quicklinks">--}}
{{--                    @php--}}
{{--                    $industries = App\Industry::getUsingIndustries(10);--}}
{{--                    @endphp--}}
{{--                    @foreach($industries as $industry)--}}
{{--                    <li><a href="{{ route('job.list', ['industry_id[]'=>$industry->industry_id]) }}">{{$industry->industry}}</a></li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--                <!--Industry menu End-->--}}
{{--                <div class="clear"></div>--}}
{{--            </div>--}}

{{--            <!--About Us-->--}}
{{--            <div class="col-md-3 col-sm-12">--}}
{{--                <h5>{{__('Contact Us')}}</h5>--}}
{{--                <div class="address">{{ $siteSetting->site_street_address }}</div>--}}
{{--                <div class="email"> <a href="mailto:{{ $siteSetting->mail_to_address }}">{{ $siteSetting->mail_to_address }}</a> </div>--}}
{{--                <div class="phone"> <a href="tel:{{ $siteSetting->site_phone_primary }}">{{ $siteSetting->site_phone_primary }}</a></div>--}}
{{--                <!-- Social Icons -->--}}
{{--                <div class="social">@include('includes.footer_social')</div>--}}
{{--                <!-- Social Icons end --> --}}

{{--            </div>--}}
{{--            <!--About us End--> --}}


{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!--Footer end--> --}}
{{--<!--Copyright-->--}}
{{--<div class="copyright">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="bttxt">{{__('Copyright')}} &copy; {{date('Y')}} {{ $siteSetting->site_name }}. {{__('All Rights Reserved')}}. {{__('Design by')}}: <a href="{{url('/')}}http://graphicriver.net/user/ecreativesol" target="_blank">eCreativeSolutions</a></div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="paylogos"><img src="{{asset('/')}}images/payment-icons.png" alt="" /></div>	--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}
