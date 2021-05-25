<!--Testimonials-->
<section class="sptb position-relative pattern">
    <div class="container">
        <div class="section-title center-block text-center">
            <h1 class="text-white position-relative">{{__('Testimonials')}}</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
                    @if(isset($testimonials) && count($testimonials))
                        @foreach($testimonials as $testimonial)
                            <div class="item text-center">
                                <div class="row">
                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                        <div class="testimonia">
                                            <p class="text-white-80">
                                                <i class="fa fa-quote-left text-white-80"></i> {{$testimonial->testimonial}}
                                            </p>
                                            <h3 class="title">{{$testimonial->testimonial_by}}</h3>
                                            <span class="post">{{$testimonial->company}}</span>
                                            <div class="rating-stars">
                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
                                                <div class="rating-stars-container">
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-controls clickable">
                                                <div class="owl-pagination">
                                                    <div class="owl-page active">
                                                        <span class=""></span>
                                                    </div>
                                                    <div class="owl-page ">
                                                        <span class=""></span>
                                                    </div>
                                                    <div class="owl-page">
                                                        <span class=""></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Testimonials-->


{{--<div class="section testimonialwrap">--}}
{{--    <div class="container"> --}}
{{--        <!-- title start -->--}}
{{--        <div class="titleTop">--}}
{{--            <div class="subtitle">{{__('Testimonials')}}</div>--}}
{{--            <h3>{{__('Success')}} <span>{{__('Stories')}}</span></h3>--}}
{{--        </div>--}}
{{--        <!-- title end -->--}}

{{--        <ul class="testimonialsList owl-carousel">--}}
{{--            @if(isset($testimonials) && count($testimonials))--}}
{{--            @foreach($testimonials as $testimonial)--}}
{{--            <li class="item">        --}}
{{--                <div class="ratinguser">--}}
{{--					<i class="fa fa-star" aria-hidden="true"></i>--}}
{{--					<i class="fa fa-star" aria-hidden="true"></i>--}}
{{--					<i class="fa fa-star" aria-hidden="true"></i>--}}
{{--					<i class="fa fa-star" aria-hidden="true"></i>--}}
{{--					<i class="fa fa-star" aria-hidden="true"></i>--}}
{{--				</div>--}}
{{--                <div class="clientname">{{$testimonial->testimonial_by}}</div>--}}
{{--				 <div class="clientinfo">{{$testimonial->company}}</div>--}}
{{--                <p>"{{$testimonial->testimonial}}"</p>--}}
{{--               --}}
{{--            </li>--}}
{{--            @endforeach--}}
{{--            @endif--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
