@extends('layouts.app')

@section('content') 

<!-- Header start --> 

@include('includes.header') 

<!-- Header end --> 

<!-- Inner Page Title start --> 

@include('includes.inner_page_title', ['page_title'=>__('Job Listing')]) 





@include('flash::message')

@include('includes.inner_top_search')



<!-- Inner Page Title end -->


<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12">
                <!--Job lists-->
                <div class=" mb-lg-0">
                    <div class="">
                        <div class="item2-gl">
                            <div class=" mb-0">
                                <div class="">
                                    <div class="p-5 bg-white item2-gl-nav d-flex">

                                        <h6 class="mb-0 mt-3">Showing <b>1 to {{$jobs->count()}}</b> of {{$jobs->total()}} Entries</h6>
                                        <ul class="nav item2-gl-menu mt-1 ml-auto">
                                            <li class=""><a href="#tab-11" class="active show" data-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
                                            <li><a href="#tab-12" data-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a></li>
                                        </ul>
                                        <div class="d-flex">
                                            <label class="mr-2 mt-2 mb-sm-1">Sort By:</label>
                                            <select name="item" class="form-control select2-no-search w-70">
                                                <option value="1">Relavant</option>
                                                <option value="2">Newest First</option>
                                                <option value="3">Highest Paid</option>
                                                <option value="4">Lowest Paid</option>
                                                <option value="5">High Ratings</option>
                                                <option value="6">Popular</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-11">
                                    @foreach($jobs as $job_key => $job_val)
                                        <div class="card overflow-hidden br-0 overflow-hidden">
                                            <div class="d-md-flex">
                                                <div class="p-0 m-0 item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="jobs.html"></a>
                                                        @php $company =$job_val->getCompany() @endphp

{{--                                                        ../assets/images/products/logo/img1.jpg--}}
                                                        {{$company->printCompanyImage()}}
{{--                                                        <img src="{{asset('/')}}assets/images/products/logo/img1.jpg" alt="img" class="h-100">--}}
                                                    </div>
                                                </div>
                                                <div class="card overflow-hidden  border-0 box-shadow-0 border-left br-0 mb-0">
                                                    <div class="card-body pt-0 pt-md-5">
                                                        <div class="item-card9">
                                                            <a href="{{url('job/'.$job_val->slug)}}" class="text-dark"><h4 class="font-weight-semibold mt-1">{{$job_val->title}}</h4></a>
                                                            <div class="mt-2 mb-2">
                                                                <a href="#" class="mr-4"><span><i class="fa fa-building-o text-muted mr-1"></i> Pro.Meet</span></a>
                                                                <a href="#" class="mr-4"><span><i class="fa fa-map-marker text-muted mr-1"></i> Bromley</span></a>
                                                                <a href="#" class="mr-4"><span><i class="fa fa fa-usd text-muted mr-1"></i> {{$job_val->salary_from}} - {{$job_val->salary_to}}</span></a>
                                                                <a href="#" class="mr-4"><span><i class="fa fa-clock-o text-muted mr-1"></i> Full Time</span></a>
                                                                <a href="#" class="mr-4"><span><i class="fa fa-briefcase text-muted mr-1"></i> 2 Yer Exp</span></a>
                                                            </div>
                                                            <p class="mb-0 leading-tight">{{$job_val->description}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pt-3 pb-3">
                                                        <div class="item-card9-footer d-flex">
                                                            <div class="d-flex align-items-center mb-3 mb-md-0 mt-auto posted">
                                                                <div>
                                                                    <a href="profile.html" class="text-muted fs-12 mb-1">Posted by </a><span class="ml-1 fs-13"> Individual</span>
                                                                    <small class="d-block text-default">18 Mar 2018, 12:15 AM</small>
                                                                </div>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="jobs.html" class="mr-3"><i class="fa fa-user text-muted mr-1"></i>HR/Admin</a>
                                                                <a href="jobs.html" class="mr-3"><i class="ion-checkmark-circled text-success mr-1"></i>Phone Verified</a>
                                                                <a href="jobs.html" class="btn btn-primary mt-3 mt-sm-0"> Apply Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach


                                </div>
                                <div class="tab-pane" id="tab-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img border-bottom">
                                                    <div class="item-card9-imgs">
                                                        <a href="jobs.html"></a>
                                                        <img src="../assets/images/products/logo/img1.jpg" alt="img" class="h-100">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a href="jobs.html" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">HR Executive Jobs</h4></a>
                                                        <ul class="icon-card mb-0 mt-1">
                                                            <li class=""><a href="#" class="icons"><i class="fa fa-building-o text-muted mr-1"></i> Pro.Meet</a></li>
                                                            <li><a href="#" class="icons"><i class="fa fa-map-marker text-muted mr-1"></i> Bromley</a></li>
                                                            <li class="mb-0"><a href="#" class="icons"><i class="fa fa-usd text-muted mr-1"></i>  15,000-20,000</a></li>
                                                            <li class="mb-0"><a href="#" class="icons"><i class="fa fa-clock-o text-muted mr-1"></i> Full Time</a></li>
                                                        </ul>
                                                        <p class="mb-0 mt-2">Ut enim ad minima veniamq nostrum exerci ullam orisin suscipit laboriosam</p>
                                                    </div>
                                                </div>
                                                <div class="card-body p-3 pl-5 pr-5">
                                                    <a href="mr-4" class="icons"><i class="fa fa-user text-muted mr-1"></i> HR/Admin</a>
                                                    <a class="float-right"><i class="ion-checkmark-circled text-success mr-1"></i> Phone Verified</a>
                                                </div>
                                                <div class="card-footer pt-3 pb-3">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="btn-block">
                                                            <a href="jobs.html" class="btn btn-block btn-primary"> Apply Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img border-bottom">
                                                    <div class="item-card9-imgs">
                                                        <a href="jobs.html"></a>
                                                        <img src="../assets/images/products/logo/img2.jpg" alt="img" class="h-100">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a href="jobs.html" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">Required Web Designer</h4></a>
                                                        <ul class="icon-card mb-0 mt-1">
                                                            <li class=""><a href="#" class="icons"><i class="fa fa-building-o text-muted mr-1"></i> Infratech Ltd </a></li>
                                                            <li><a href="#" class="icons"><i class="fa fa-map-marker text-muted mr-1"></i> Antegria</a></li>
                                                            <li class="mb-0"><a href="#" class="icons"><i class="fa fa-usd text-muted mr-1"></i>   15,000-20,000</a></li>
                                                            <li class="mb-0"><a href="#" class="icons"><i class="fa fa-clock-o text-muted mr-1"></i>  Full Time</a></li>
                                                        </ul>
                                                        <p class="mb-0 mt-2">Ut enim ad minima veniamq nostrum exerci ullam orisin suscipit laboriosam</p>
                                                    </div>
                                                </div>
                                                <div class="card-body p-3 pl-5 pr-5">
                                                    <a href="mr-4" class="icons"><i class="fa fa-user text-muted mr-1"></i>Web Design</a>
                                                    <a class="float-right"><i class="ion-checkmark-circled text-success mr-1"></i> Phone Verified</a>
                                                </div>
                                                <div class="card-footer pt-3 pb-3">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="btn-block">
                                                            <a href="jobs.html" class="btn btn-block btn-primary"> Apply Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img border-bottom">
                                                    <div class="item-card9-imgs">
                                                        <a href="jobs.html"></a>
                                                        <img src="../assets/images/products/logo/img3.jpg" alt="img" class="h-100">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a href="jobs.html" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">Customer Care Jobs</h4></a>
                                                        <ul class="icon-card mb-0 mt-1">
                                                            <li class=""><a href="#" class="icons"><i class="fa fa-building-o text-muted mr-1"></i> Genius Tech</a></li>
                                                            <li><a href="#" class="icons"><i class="fa fa-map-marker text-muted mr-1"></i> Bartovia</a></li>
                                                            <li class="mb-0"><a href="#" class="icons"><i class="fa fa-usd text-muted mr-1"></i> 10,000-15,000</a></li>
                                                            <li class="mb-0"><a href="#" class="icons"><i class="fa fa-clock-o text-muted mr-1"></i> Part Time</a></li>
                                                        </ul>
                                                        <p class="mb-0 mt-2">Ut enim ad minima veniamq nostrum exerci ullam orisin suscipit laboriosam</p>
                                                    </div>
                                                </div>
                                                <div class="card-body p-3 pl-5 pr-5">
                                                    <a href="mr-4" class="icons"><i class="fa fa-user text-muted mr-1"></i> BPO</a>
                                                    <a class="float-right"><i class="ion-checkmark-circled text-success mr-1"></i> Phone Verified</a>
                                                </div>
                                                <div class="card-footer pt-3 pb-3">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="btn-block">
                                                            <a href="jobs.html" class="btn btn-block btn-primary"> Apply Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img border-bottom">
                                                    <div class="item-card9-imgs">
                                                        <a href="jobs.html"></a>
                                                        <img src="../assets/images/products/logo/img4.jpg" alt="img" class="h-100">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a href="jobs.html" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">Accountant Jobs</h4></a>
                                                        <ul class="icon-card mb-0 mt-1">
                                                            <li class=""><a href="#" class="icons"><i class="fa fa-building-o text-muted mr-1"></i> Alpha Solution</a></li>
                                                            <li><a href="#" class="icons"><i class="fa fa-map-marker text-muted mr-1"></i> Carpania</a></li>
                                                            <li class="mb-0"><a href="#" class="icons"><i class="fa fa-usd text-muted mr-1"></i>    30,000-40,000</a></li>
                                                            <li class="mb-0"><a href="#" class="icons"><i class="fa fa-clock-o text-muted mr-1"></i>  Full Time</a></li>
                                                        </ul>
                                                        <p class="mb-0 mt-2">Ut enim ad minima veniamq nostrum exerci ullam orisin suscipit laboriosam</p>
                                                    </div>
                                                </div>
                                                <div class="card-body p-3 pl-5 pr-5">
                                                    <a href="mr-4" class="icons"><i class="fa fa-user text-muted mr-1"></i>Accounts</a>
                                                    <a class="float-right"><i class="ion-checkmark-circled text-success mr-1"></i> Phone Verified</a>
                                                </div>
                                                <div class="card-footer pt-3 pb-3">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="btn-block">
                                                            <a href="jobs.html" class="btn btn-block btn-primary"> Apply Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img border-bottom">
                                                    <div class="item-card9-imgs">
                                                        <a href="jobs.html"></a>
                                                        <img src="../assets/images/products/logo/img5.jpg" alt="img" class="h-100">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a href="jobs.html" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">Sales Executive Jobs</h4></a>
                                                        <ul class="icon-card mb-0 mt-1">
                                                            <li class=""><a href="#" class="icons"><i class="fa fa-building-o text-muted mr-1"></i>  Flowtech</a></li>
                                                            <li><a href="#" class="icons"><i class="fa fa-map-marker text-muted mr-1"></i> Deltora</a></li>
                                                            <li class="mb-0"><a href="#" class="icons"><i class="fa fa-usd text-muted mr-1"></i> 10,000-15,000</a></li>
                                                            <li class="mb-0"><a href="#" class="icons"><i class="fa fa-clock-o text-muted mr-1"></i>  Full Time</a></li>
                                                        </ul>
                                                        <p class="mb-0 mt-2">Ut enim ad minima veniamq nostrum exerci ullam orisin suscipit laboriosam</p>
                                                    </div>
                                                </div>
                                                <div class="card-body p-3 pl-5 pr-5">
                                                    <a href="mr-4" class="icons"><i class="fa fa-user text-muted mr-1"></i> BPO</a>
                                                    <a class="float-right"><i class="ion-checkmark-circled text-success mr-1"></i> Phone Verified</a>
                                                </div>
                                                <div class="card-footer pt-3 pb-3">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="btn-block">
                                                            <a href="jobs.html" class="btn btn-block btn-primary"> Apply Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img border-bottom">
                                                    <div class="item-card9-imgs">
                                                        <a href="jobs.html"></a>
                                                        <img src="../assets/images/products/logo/img6.jpg" alt="img" class="h-100">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a href="jobs.html" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">Hard ware Engineer Jobs</h4></a>
                                                        <ul class="icon-card mb-0 mt-1">
                                                            <li class=""><a href="#" class="icons"><i class="fa fa-building-o text-muted mr-1"></i> Hard Tch Ltd</a></li>
                                                            <li><a href="#" class="icons"><i class="fa fa-map-marker text-muted mr-1"></i> Estoccia</a></li>
                                                            <li class="mb-0"><a href="#" class="icons"><i class="fa fa-usd text-muted mr-1"></i> 20,000-30,000</a></li>
                                                            <li class="mb-0"><a href="#" class="icons"><i class="fa fa-clock-o text-muted mr-1"></i>  Full Time</a></li>
                                                        </ul>
                                                        <p class="mb-0 mt-2">Ut enim ad minima veniamq nostrum exerci ullam orisin suscipit laboriosam</p>
                                                    </div>
                                                </div>
                                                <div class="card-body p-3 pl-5 pr-5">
                                                    <a href="mr-4" class="icons"><i class="fa fa-user text-muted mr-1"></i> IT Hardware</a>
                                                    <a class="float-right"><i class="ion-checkmark-circled text-success mr-1"></i> Phone Verified</a>
                                                </div>
                                                <div class="card-footer pt-3 pb-3">
                                                    <div class="item-card9-footer d-flex">
                                                        <div class="btn-block">
                                                            <a href="jobs.html" class="btn btn-block btn-primary"> Apply Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @php
                            $total=$jobs->total();
                            $per_page=$jobs->perPage();
                            $pages= ceil($total/$per_page);
                            $current_page=$jobs->currentPage();

                        @endphp


                        <div class="center-block text-center">
                            <ul class="pagination mb-5 mb-lg-0">

                                <li class="page-item page-prev {{($current_page==1)?'disabled':''}}">
                                    <a class="page-link" href=" /jobs-list?page={{$current_page-1}}" tabindex="-1">Prev</a>
                                </li>
                                @for($i=1;$i<=$pages; $i++)
                                    <li class="page-item {{($current_page==$i)?'active':''}}"><a class="page-link" href="/jobs-list?page={{$i}}">{{$i}}</a></li>
                                @endfor
                                <li class="page-item page-next {{($current_page==$pages)?'disabled':''}}">
                                    <a class="page-link" href="/jobs-list?page={{$current_page+1}}">Next</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!--/Job lists-->
            </div>

            <!--Right Side Content-->
            <div class="col-xl-3 col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control br-tl-3 br-bl-3" placeholder="Search">
                            <div class="input-group-append ">
                                <button type="button" class="btn btn-primary br-tr-3 br-br-3">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categories</h3>
                    </div>
                    <form action="{{url('jobs')}}" method="get">
                    <div class="card-body">
                        <div class="" id="container">
                            <div class="filter-product-checkboxs">

                                @foreach($functionalAreas as $functionalAreaKey => $functionalArea)
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" name="functional_area_id[]" value="{{$functionalAreaKey}}">
                                        <span class="custom-control-label">
												<a href="#" class="text-dark">{{$functionalArea}}<span class="label label-secondary float-right">14</span></a>
											</span>
                                    </label>
                                @endforeach

                            </div>

                        </div>
                    </div>
                    <div class="card-header border-top">
                        <h3 class="card-title">Salary Range</h3>
                    </div>
                    <div class="card-body">
                        <h6>
                            <label for="price">Salary Range:</label>
                            <input class="pricee" type="text" id="price" value="">
                        </h6>
                        <div id="mySlider"></div>
                    </div>
                    <div class="card-header border-top">
                        <h3 class="card-title">Job Type</h3>
                    </div>
                    <div class="card-body">
                        <div class="filter-product-checkboxs">
                            @foreach($jobTypes as $jobType_key => $jobType_val)
                                <label class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" name="job_type_id[]" value="{{$jobType_key}}">
                                    <span class="custom-control-label">
											{{$jobType_val}}
										</span>
                                </label>
                            @endforeach

                        </div>
                    </div>
                    <div class="card-header border-top">
                        <h3 class="card-title">Posted By</h3>
                    </div>
                    <div class="card-body">
                        <div class="filter-product-checkboxs">
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                                <span class="custom-control-label">
											Management
										</span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
                                <span class="custom-control-label">
											Individual
										</span>
                            </label>
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
                                <span class="custom-control-label">
											HR
										</span>
                            </label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-warning btn-block">Apply Filter</button>
{{--                        <a href="#" class="btn btn-warning btn-block">Apply Filter</a>--}}
                    </form>
                </div>
                <div class="card mb-0">
                    <div class="card-header">
                        <h3 class="card-title">Shares</h3>
                    </div>
                    <div class="card-body product-filter-desc">
                        <div class="product-filter-icons text-center">
                            <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            <a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                            <a href="#" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Right Side Content-->
        </div>
    </div>
</section>









@include('includes.footer')

@endsection

@push('styles')

<style type="text/css">

    .searchList li .jobimg {

        min-height: 80px;

    }

    .hide_vm_ul{

        height:100px;

        overflow:hidden;

    }

    .hide_vm{

        display:none !important;

    }

    .view_more{

        cursor:pointer;

    }

</style>

@endpush

@push('scripts') 

<script>

    $('.btn-job-alert').on('click', function() {

        $('#show_alert').modal('show');

    })

     $(document).ready(function ($) {
        $("#search-job-list").submit(function () {
            $(this).find(":input").filter(function () {
                return !this.value;
            }).attr("disabled", "disabled");
            return true;
        });



        $("#search-job-list").find(":input").prop("disabled", false);



        $(".view_more_ul").each(function () {

            if ($(this).height() > 100)

            {

                $(this).addClass('hide_vm_ul');

                $(this).next().removeClass('hide_vm');

            }

        });

        $('.view_more').on('click', function (e) {

            e.preventDefault();

            $(this).prev().removeClass('hide_vm_ul');

            $(this).addClass('hide_vm');

        });



    });

    if ($("#submit_alert").length > 0) {

    $("#submit_alert").validate({



        rules: {

            email: {

                required: true,

                maxlength: 5000,

                email: true

            }

        },

        messages: {

            email: {

                required: "Email is required",

            }



        },

        submitHandler: function(form) {

            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });

            $.ajax({

                url: "{{route('subscribe.alert')}}",

                type: "GET",

                data: $('#submit_alert').serialize(),

                success: function(response) {

                    $("#submit_alert").trigger("reset");

                    $('#show_alert').modal('hide');

                    swal({

                        title: "Success",

                        text: response["msg"],

                        icon: "success",

                        button: "OK",

                    });

                }

            });

        }

    })

}

</script>

@include('includes.country_state_city_js')

@endpush