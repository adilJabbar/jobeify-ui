<!--section-->
<section class="sptb">
    <div class="container">
        <div class="section-title center-block text-center">
            <h2>{{__('Featured')}} <span>{{__('Companies')}}</span></h2>

            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div id="feature-carousel" class="owl-carousel owl-carousel-icons">
            @if(isset($topCompanyIds) && count($topCompanyIds))
                @foreach($topCompanyIds as $company_id_num_jobs)
                    <?php
                    $company = App\Company::where('id', '=', $company_id_num_jobs->company_id)->active()->first();
                    if (null !== $company) {
                    ?>
                        <div class="item">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="d-md-flex">
                                        {{$company->printCompanyImage(0,0,'w-25 h-25 mr-3')}}
{{--                                        <img src="../assets/images/products/logo/logo1.jpg" class="w-25 h-25 mr-3" alt="user">--}}
                                        <div class="mt-5">
                                            <a class="text-body" href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}">
                                                <h4 class="fs-16 font-weight-semibold">{{$company->name}}</h4></a>
{{--                                            <div class="rating-stars d-inline-flex">--}}
{{--                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">--}}
{{--                                                <div class="rating-stars-container mr-2">--}}
{{--                                                    <div class="rating-star sm">--}}
{{--                                                        <i class="fa fa-star"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="rating-star sm">--}}
{{--                                                        <i class="fa fa-star"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="rating-star sm">--}}
{{--                                                        <i class="fa fa-star"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="rating-star sm">--}}
{{--                                                        <i class="fa fa-star"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="rating-star sm">--}}
{{--                                                        <i class="fa fa-star"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div> (758 Reviews)--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="card">--}}
{{--                                <div class="card-body p-3">--}}
{{--                                    <div class="d-md-flex">--}}
{{--                                        <img src="../assets/images/products/logo/logo2.jpg" class="w-25 h-25 mr-3" alt="user">--}}
{{--                                        <div class="mt-5">--}}
{{--                                            <a class="text-body" href="company-details.html"><h4 class="fs-16 font-weight-semibold">Infratech Pvt Ltd </h4></a>--}}
{{--                                            <div class="rating-stars d-inline-flex">--}}
{{--                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="5">--}}
{{--                                                <div class="rating-stars-container mr-2">--}}
{{--                                                    <div class="rating-star sm">--}}
{{--                                                        <i class="fa fa-star"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="rating-star sm">--}}
{{--                                                        <i class="fa fa-star"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="rating-star sm">--}}
{{--                                                        <i class="fa fa-star"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="rating-star sm">--}}
{{--                                                        <i class="fa fa-star"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="rating-star sm">--}}
{{--                                                        <i class="fa fa-star"></i>--}}
{{--                                                    </div>--}}
{{--                                                </div> (657 Reviews)--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    <?php
                    }
                    ?>
                @endforeach
            @endif

        </div>
    </div>
</section>
<!--/section-->


{{--<div class="section">--}}
{{--    <div class="container"> --}}
{{--        <!-- title start -->--}}
{{--        <div class="titleTop">            --}}
{{--            <h3>{{__('Featured')}} <span>{{__('Companies')}}</span></h3>--}}
{{--        </div>--}}
{{--        <!-- title end -->--}}

{{--        <ul class="employerList owl-carousel">--}}
{{--            <!--employer-->--}}
{{--            @if(isset($topCompanyIds) && count($topCompanyIds))--}}
{{--            @foreach($topCompanyIds as $company_id_num_jobs)--}}
{{--            <?php--}}
{{--            $company = App\Company::where('id', '=', $company_id_num_jobs->company_id)->active()->first();--}}
{{--            if (null !== $company) {--}}
{{--                ?>--}}
{{--                <li class="item" data-toggle="tooltip" data-placement="bottom" title="{{$company->name}}" data-original-title="{{$company->name}}">--}}
{{--					<div class="empint">--}}
{{--					<a href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}">{{$company->printCompanyImage()}}</a>			--}}
{{--					--}}
{{--					</div>--}}
{{--			</li>--}}
{{--                <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            @endforeach--}}
{{--            @endif--}}
{{--        </ul>--}}

{{--    </div> --}}
{{--	--}}
{{--	--}}
{{--	<div class="largebanner shadow3">--}}
{{--<div class="adin">--}}
{{--{!! $siteSetting->index_page_below_top_employes_ad !!}--}}
{{--</div>--}}
{{--<div class="clearfix"></div>--}}
{{--{--</div>--}}

{{--	--}}
{{--	--}}
{{--</div>--}}


