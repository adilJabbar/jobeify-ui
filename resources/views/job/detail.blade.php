@extends('layouts.app')
@section('content') 
<!-- Header start --> 
@include('includes.header') 
<!-- Header end --> 
<!-- Inner Page Title start --> 
{{--@include('includes.inner_page_title', ['page_title'=>__('Job Detail')]) --}}
<!-- Inner Page Title end -->
@include('flash::message')
@include('includes.inner_top_search')


@php
$company = $job->getCompany();
@endphp


<!--Job listing-->
<section class="sptb">
    <div class="container">
        @include('flash::message')
        <div class="row">
            <div class="col-xl-8 col-lg-12 col-md-12">
                <!--Jobs Description-->
                <div class="card overflow-hidden">
                    <div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Urgent</span></div>
                    <div class="card-body h-100">
                        <div class="row">
                            <div class="col">
                                <div class="profile-pic mb-0">
                                    <div class="d-md-flex">


                                        <div class="ml-4">
                                            <a href="{{route('company.detail',$company->slug)}}" class="text-dark"><h4 class="mt-3 mb-1 fs-20 font-weight-bold">{{$company->name}}</h4></a>
                                            <div class="">
                                                <ul class="mb-0 d-flex">
                                                    <li class="mr-3"><a href="#" class="icons"><i class="si si-briefcase text-muted mr-1"></i> IT Hardware & Network Pvt ltd</a></li>
                                                    <li class="mr-3"><a href="#" class="icons"><i class="si si-location-pin text-muted mr-1"></i>{{$company->getLocation()}} </a></li>
                                                    <li class="mr-3"><a href="{{route('company.detail',$company->slug)}}" class="icons"><i class="si si-location-pin text-muted mr-1"></i>

                                                        {{App\Company::countNumJobs('company_id', $company->id)}} {{__('Current Jobs Openings')}}
                                                    </a>
                                                    </li>
                                                    <li class="mr-3"><a href="#" class="icons"><i class="si si-calendar text-muted mr-1"></i> 5 hours ago</a></li>
                                                    <li class="mr-3"><a href="#" class="icons"><i class="si si-eye text-muted mr-1"></i> 765</a></li>
                                                </ul>
                                                <div class="rating-stars d-inline-flex mb-4 mr-3 mt-2">
                                                    <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="4">
                                                    <div class="rating-stars-container mr-2">
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
                                                    </div> 4.0
                                                </div>
                                                <div class="rating-stars d-inline-flex mb-4">
                                                    <div class="rating-stars-container mr-1">
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-heart"></i>
                                                        </div>
                                                    </div> 145
                                                </div>
                                            </div>
                                            <div class="icons">

                                                @if($job->isJobExpired())
                                                    <span class="jbexpire"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{__('Job is expired')}}</span>
                                                @elseif(Auth::check() && Auth::user()->isAppliedOnJob($job->id))
                                                    <a  class="btn btn-info icons" href="javascript:;" class="btn apply applied"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{__('Already Applied')}}</a>
                                                @else
                                                    <a href="{{route('apply.job', $job->slug)}}"  class="btn btn-info icons" class="btn apply"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{__('Apply Now')}}</a>
                                                @endif

                                                <a href="#" class="btn btn-primary icons" data-toggle="modal" data-target="#contact"><i class="si si-phone mr-1"></i> Contact Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <h4 class="mb-4 card-title">{{__('Job Description')}}</h4>
                        <div class="mb-4">
                            <p>{!! $job->description !!}</p>
                        </div>
                        <h4 class="mb-4 card-title">{{__('Benefits')}}</h4>
                        <div class="mb-4">
                            <p>{!! $job->benefits !!}</p>
                        </div>
                        <h4 class="mb-4 card-title">{{__('Job Detail')}}</h4>
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="table-responsive">
                                    <table class="table row table-borderless w-100 m-0 text-nowrap ">
                                        <tbody class="col-lg-12 col-xl-6 p-0">
                                        <tr>
                                            <td class="w-150 px-0"><span class="font-weight-semibold">{{__('Type')}}</span></td> <td><span>:</span></td> <td><span> {{$job->getJobType('job_type')}}</span></td>
                                        </tr>
                                        <tr>
                                            <td class="w-150 px-0"><span class="font-weight-semibold">{{__('Shift')}}</span></td> <td><span>:</span></td> <td><span> {{$job->getJobShift('job_shift')}}</span></td>
                                        </tr>
                                        <tr>
                                            <td class="w-150 px-0"><span class="font-weight-semibold">{{__('Career Level')}}</span></td> <td><span>:</span></td> <td><span> {{$job->getCareerLevel('career_level')}}</span></td>
                                        </tr>
                                        <tr>
                                            <td class="w-150 px-0"><span class="font-weight-semibold">{{__('Positions')}}</span></td> <td><span>:</span></td> <td><span> {{$job->num_of_positions}}</span></td>
                                        </tr>
                                        <tr>
                                            <td class="w-150 px-0"><span class="font-weight-semibold"{{__('Experience')}}</span></td> <td><span>:</span></td> <td><span>{{$job->getJobExperience('job_experience')}}</span></td>
                                        </tr>
                                        </tbody>
                                        <tbody class="col-lg-12 col-xl-6 p-0">
                                        <tr>
                                            <td class="w-150 px-0"><span class="font-weight-semibold">{{__('Gender')}}</span></td> <td><span>:</span></td>{{$job->getGender('gender')}} <td><span></span></td>
                                        </tr>
                                        <tr>
                                            <td class="w-150 px-0"><span class="font-weight-semibold">{{__('Degree')}}</span></td> <td><span>:</span></td> <td><span>{{$job->getDegreeLevel('degree_level')}}</span></td>
                                        </tr>
                                        <tr>
                                            <td class="w-150 px-0"><span class="font-weight-semibold">{{__('Apply Before')}}</span></td> <td><span>:</span></td> <td><span>{{$job->expiry_date->format('M d, Y')}}</span></td>
                                        </tr>
                                        <tr>
                                            <td class="w-150 px-0"><span class="font-weight-semibold">{{__('Location')}}</span></td> <td><span>:</span></td> <td> @if((bool)$job->is_freelance)
                                                    <span>Freelance</span>
                                                @else
                                                    <span>{{$job->getLocation()}}</span>
                                                @endif</td>
                                        </tr>
                                        <tr>
                                            <td class="w-150 px-0"><span class="font-weight-semibold">Company</span></td> <td><span>:</span></td> <td><span> <a href="{{route('company.detail', $company->id)}}">{{$company->name}}</a></span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="list-id">
                            <div class="row">
                                <div class="col">
                                    <a class="mb-0">Job ID : #8976542</a>
                                </div>
                                <div class="col col-auto">
                                    Posted By <a class="mb-0 font-weight-bold">{{$company->name}}</a> / 25th Dec 2018
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-light-50">
                        <div class="icons">


                                @if($job->isJobExpired())
                                    <span class="jbexpire"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{__('Job is expired')}}</span>
                                @elseif(Auth::check() && Auth::user()->isAppliedOnJob($job->id))
                                    <a class="btn btn-success icons mt-1 mb-1" href="javascript:;" class="btn apply applied"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{__('Already Applied')}}</a>
                                @else
                                    <a href="{{route('apply.job', $job->slug)}}" class="btn btn-success icons mt-1 mb-1" class="btn apply"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{__('Apply Now')}}</a>
                                @endif




                            <a  href="{{route('email.to.friend', $job->slug)}}" class="btn btn-primary icons mt-1 mb-1"><i class="si si-share mr-1"></i> {{__('Email to Friend')}}</a>

                            @if(Auth::check() && Auth::user()->isFavouriteJob($job->slug))
                                <a href="{{route('remove.from.favourite', $job->slug)}}" class="btn btn-info icons mt-1 mb-1"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{__('Favourite Job')}} </a>
                            @else
                                <a href="{{route('add.to.favourite', $job->slug)}}" class="btn btn-info icons mt-1 mb-1"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{__('Add to Favourite')}}</a>
                            @endif

                            <a href="{{route('report.abuse', $job->slug)}}" class="btn btn-danger icons mt-1 mb-1" data-toggle="modal" data-target="#report"><i class="icon icon-exclamation mr-1"></i> {{__('Report Abuse')}}</a>
                        </div>
                    </div>
                </div>
                <!--Jobs Description-->

                <h4 class="mb-5 mt-4">{{__('Related Jobs')}}</h4>

                <!--Related Posts-->
                <div id="myCarousel2" class="owl-carousel owl-carousel-icons3">
                    @if(isset($relatedJobs) && count($relatedJobs))
                        @foreach($relatedJobs as $relatedJob)
                            <?php $relatedJobCompany = $relatedJob->getCompany(); ?>
                            @if(null !== $relatedJobCompany)

                    <div class="item">
                        <div class="card">
                            <div class="arrow-ribbon bg-purple">{{$relatedJob->getJobType('job_type')}}</div>
                            <div class="item-card7-img">
                                <div class="item-card7-imgs">
                                    <a href="{{route('job.detail', [$relatedJob->slug])}}"></a>
                                    {{$company->printCompanyImage(0,0,'cover-image')}}

                                </div>
                                <div class="item-card7-overlaytext">
{{--                                    <a href="jobs.html" class="text-white"> Jobs </a>--}}
{{--                                    <h4  class="font-weight-semibold mb-0">$389</h4>--}}
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="item-card7-desc">
                                    <a href="{{route('job.detail', [$relatedJob->slug])}}" class="text-dark"><h4 class="font-weight-semibold">{{$relatedJob->title}}</h4></a>
                                </div>
                                <div class="item-card7-text">
                                    <ul class="icon-card mb-0">
                                        <li class=""><a href="#" class="icons"><i class="si si-location-pin text-muted mr-1"></i> {{$relatedJob->getCity('city')}}</a></li>
                                        <li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 5 hours ago</a></li>
                                        <li class="mb-0"><a href="#" class="icons"><i class="si si-user text-muted mr-1"></i> {{$relatedJob->getJobShift('job_shift')}}</a></li>
                                        <li class="mb-0"><a href="#" class="icons"><i class="si si-phone text-muted mr-1"></i> 5-67987608</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                                @endif
                        @endforeach
                    @endif
                </div>
                <!--/Related Posts-->

                <!--Comments-->
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <h3 class="card-title">Rating And Reviews</h3>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="badge badge-default mb-2">5 <i class="fa fa-star"></i></div>--}}
{{--                                <div class="progress progress-md mb-4">--}}
{{--                                    <div class="progress-bar bg-success w-100">6,532</div>--}}
{{--                                </div>--}}
{{--                                <div class="badge badge-default mb-2">4 <i class="fa fa-star"></i></div>--}}
{{--                                <div class="progress progress-md mb-4">--}}
{{--                                    <div class="progress-bar bg-primary w-80">7,532</div>--}}
{{--                                </div>--}}
{{--                                <div class="badge badge-default mb-2">3 <i class="fa fa-star"></i></div>--}}
{{--                                <div class="progress progress-md mb-4">--}}
{{--                                    <div class="progress-bar bg-info w-60">3,526</div>--}}
{{--                                </div>--}}
{{--                                <div class="badge badge-default mb-2">2 <i class="fa fa-star"></i></div>--}}
{{--                                <div class="progress progress-md mb-4">--}}
{{--                                    <div class="progress-bar bg-warning w-60">485</div>--}}
{{--                                </div>--}}
{{--                                <div class="badge badge-default mb-2">1 <i class="fa fa-star"></i></div>--}}
{{--                                <div class="progress progress-md mb-0">--}}
{{--                                    <div class="progress-bar bg-danger w-20">126</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 text-center align-items-center">--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body p-0">--}}
{{--                        <div class="media mt-0 p-5">--}}
{{--                            <div class="d-flex mr-3">--}}
{{--                                <a href="#"><img class="media-object brround" alt="64x64" src="../assets/images/users/male/1.jpg"> </a>--}}
{{--                            </div>--}}
{{--                            <div class="media-body">--}}
{{--                                <h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott--}}
{{--                                    <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span>--}}
{{--                                    <span class="fs-14 ml-2"> 4.5 <i class="fa fa-star text-yellow"></i></span>--}}
{{--                                </h5>--}}
{{--                                <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 13.00  <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>--}}
{{--                                <p class="font-13  mb-2 mt-2">--}}
{{--                                    On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue--}}
{{--                                </p>--}}
{{--                                <a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>--}}
{{--                                <a href="" class="mr-2" data-toggle="modal" data-target="#Comment"><span class="">Comment</span></a>--}}
{{--                                <a href="" class="mr-2" data-toggle="modal" data-target="#report"><span class="">Report</span></a>--}}
{{--                                <div class="media mt-5">--}}
{{--                                    <div class="d-flex mr-3">--}}
{{--                                        <a href="#"> <img class="media-object brround" alt="64x64" src="../assets/images/users/female/2.jpg"> </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body">--}}
{{--                                        <h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span></h5>--}}
{{--                                        <small class="text-muted"><i class="fa fa-calendar"></i> Dec 22st  <i class=" ml-3 fa fa-clock-o"></i> 6.00  <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>--}}
{{--                                        <p class="font-13  mb-2 mt-2">--}}
{{--                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris   commodo Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur consequat.--}}
{{--                                        </p>--}}
{{--                                        <a href="" data-toggle="modal" data-target="#Comment"><span class="badge badge-default">Comment</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="media p-5 border-top mt-0">--}}
{{--                            <div class="d-flex mr-3">--}}
{{--                                <a href="#"> <img class="media-object brround" alt="64x64" src="../assets/images/users/male/3.jpg"> </a>--}}
{{--                            </div>--}}
{{--                            <div class="media-body">--}}
{{--                                <h5 class="mt-0 mb-1 font-weight-semibold">Edward--}}
{{--                                    <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span>--}}
{{--                                    <span class="fs-14 ml-2"> 4 <i class="fa fa-star text-yellow"></i></span>--}}
{{--                                </h5>--}}
{{--                                <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 16.35  <i class=" ml-3 fa fa-map-marker"></i> UK</small>--}}
{{--                                <p class="font-13  mb-2 mt-2">--}}
{{--                                    On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue--}}
{{--                                </p>--}}
{{--                                <a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>--}}
{{--                                <a href="" class="mr-2" data-toggle="modal" data-target="#Comment"><span class="">Comment</span></a>--}}
{{--                                <a href="" class="mr-2" data-toggle="modal" data-target="#report"><span class="">Report</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!--Comments-->

{{--                <div class="card mb-xl-0">--}}
{{--                    <div class="card-header">--}}
{{--                        <h3 class="card-title">Leave a reply</h3>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control" id="name1" placeholder="Your Name">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="email" class="form-control" id="email" placeholder="Email Address">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Comment"></textarea>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="btn btn-primary">Send Reply</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

            <!--Right Side Content-->
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Posted By</h3>
                    </div>
                    <div class="card-body  item-user">
                        <div class="profile-pic mb-0">
                            <a href="{{route('company.detail',$company->slug)}}">{{$company->printCompanyImage(0,0,"w-20 h-20")}}</a>

                            <div class="">
                                <a href="{{route('company.detail',$company->slug)}}" class="text-dark"><h4 class="mt-3 mb-1 font-weight-semibold">{{$company->name}}</h4></a>
{{--                                <span class="text-gray">Hr Recruiter of IT Hardware & Network Pvt ltd</span>--}}
                                <span class="text-muted">Member Since November 2008</span>
                                <h6 class="mt-2 mb-0"><a href="{{route('company.detail',$company->slug)}}" class="btn btn-primary btn-sm">See All Ads</a></h6>
                            </div>

                        </div>
                    </div>
                    <div class="card-body item-user">
                        <h4 class="mb-4 card-title">Contact Info</h4>
{{--                        <div>--}}
{{--                            <h6><span class="font-weight-semibold"><i class="fa fa-envelope mr-2 mb-2"></i></span><a href="#" class="text-body"> robert123@gmail.com</a></h6>--}}
{{--                            <h6><span class="font-weight-semibold"><i class="fa fa-phone mr-2  mb-2"></i></span><a href="#" class="text-primary"> 0-235-657-24587</a></h6>--}}
{{--                            <h6><span class="font-weight-semibold"><i class="fa fa-link mr-2 "></i></span><a href="#" class="text-primary">http://spruko.com/</a></h6>--}}
{{--                        </div>--}}
                        <div class=" item-user-icons mt-4">
                            <a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            <a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
{{--                    <div class="card-footer bg-light-50">--}}
{{--                        <div class="text-left">--}}
{{--                            <a href="#" class="btn  btn-info"><i class="fa fa-envelope"></i> Chat</a>--}}
{{--                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#contact"><i class="fa fa-user"></i> Contact Me</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Keywords</h3>
                    </div>
                    <div class="card-body product-filter-desc">
                        <div class="product-tags clearfix">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Software</a></li>
                                <li><a href="#">Hardware &amp; Network</a></li>
                                <li><a href="#">Job in USA</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Google Map')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="map-header">
                            {!!$company->map!!}
                        </div>
                    </div>
                </div>
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <h3 class="card-title">Search Jobs</h3>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" id="search-text" placeholder="What are you looking for?">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <select name="country" id="select-countries" class="form-control custom-select select2-show-search">--}}
{{--                                <option value="1" selected>All Categories</option>--}}
{{--                                <option value="1">Accountant</option>--}}
{{--                                <option value="2">IT Software</option>--}}
{{--                                <option value="3">Banking</option>--}}
{{--                                <option value="4">Finaces</option>--}}
{{--                                <option value="5">Cook/Chef</option>--}}
{{--                                <option value="6">Driveing</option>--}}
{{--                                <option value="7">HR Recruiter</option>--}}
{{--                                <option value="8">IT Hardware</option>--}}
{{--                                <option value="9">Sales</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="">--}}
{{--                            <a href="#" class="btn btn-block btn-primary">Search</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card mb-0">--}}
{{--                    <div class="card-header">--}}
{{--                        <h3 class="card-title">Similar Jobs</h3>--}}
{{--                    </div>--}}
{{--                    <div class="card-body pb-3">--}}
{{--                        <ul class="vertical-scroll">--}}
{{--                            <li class="item">--}}
{{--                                <div class="item-det card-body">--}}
{{--                                    <a href="#" class="text-dark"><h4 class="mb-2 fs-16 font-weight-semibold">Hard ware Engineer</h4></a>--}}
{{--                                    <small class="text-muted"><i class="si si-briefcase text-muted"></i> IT Hardware & Network Pvt ltd  <i class="si si-location-pin text-muted ml-3"></i> USA</small>--}}
{{--                                    <div class="icons mt-3 pb-0 ">--}}
{{--                                        <a href="#" class="btn btn-primary btn-sm icons" data-toggle="modal" data-target="#apply"> Apply</a>--}}
{{--                                        <a href="#" class="btn btn-light btn-sm icons"> View Details</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="item">--}}
{{--                                <div class="item-det card-body">--}}
{{--                                    <a href="#" class="text-dark"><h4 class="mb-2 fs-16 font-weight-semibold">Web Developer</h4></a>--}}
{{--                                    <small class="text-muted"><i class="si si-briefcase text-muted"></i> Iactorne Pvt ltd  <i class="si si-location-pin text-muted ml-3"></i> USA</small>--}}
{{--                                    <div class="icons mt-3 pb-0 ">--}}
{{--                                        <a href="#" class="btn btn-primary btn-sm icons" data-toggle="modal" data-target="#apply"> Apply</a>--}}
{{--                                        <a href="#" class="btn btn-light btn-sm icons"> View Details</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="item">--}}
{{--                                <div class="item-det card-body">--}}
{{--                                    <a href="#" class="text-dark"><h4 class="mb-2 fs-16 font-weight-semibold">Web Designer</h4></a>--}}
{{--                                    <small class="text-muted"><i class="si si-briefcase text-muted"></i> Designer Solutions  <i class="si si-location-pin text-muted ml-3"></i> USA</small>--}}
{{--                                    <div class="icons mt-3 pb-0 ">--}}
{{--                                        <a href="#" class="btn btn-primary btn-sm icons" data-toggle="modal" data-target="#apply"> Apply</a>--}}
{{--                                        <a href="#" class="btn btn-light btn-sm icons"> View Details</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="item">--}}
{{--                                <div class="item-det card-body">--}}
{{--                                    <a href="#" class="text-dark"><h4 class="mb-2 fs-16 font-weight-semibold">HR Recruiter</h4></a>--}}
{{--                                    <small class="text-muted"><i class="si si-briefcase text-muted"></i> IT Hardware & Network Pvt ltd  <i class="si si-location-pin text-muted ml-3"></i> USA</small>--}}
{{--                                    <div class="icons mt-3 pb-0 ">--}}
{{--                                        <a href="#" class="btn btn-primary btn-sm icons" data-toggle="modal" data-target="#apply"> Apply</a>--}}
{{--                                        <a href="#" class="btn btn-light btn-sm icons"> View Details</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="item">--}}
{{--                                <div class="item-det card-body">--}}
{{--                                    <a href="#" class="text-dark"><h4 class="mb-2 fs-16 font-weight-semibold">Java Developer</h4></a>--}}
{{--                                    <small class="text-muted"><i class="si si-briefcase text-muted"></i> Infrastructure Solutions  <i class="si si-location-pin text-muted ml-3"></i> USA</small>--}}
{{--                                    <div class="icons mt-3 pb-0 ">--}}
{{--                                        <a href="#" class="btn btn-primary btn-sm icons" data-toggle="modal" data-target="#apply"> Apply</a>--}}
{{--                                        <a href="#" class="btn btn-light btn-sm icons"> View Details</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <!--/Right Side Content-->
        </div>
    </div>
</section>

{{--<div class="listpgWraper">--}}
{{--    <div class="container"> --}}
{{--        @include('flash::message')--}}
{{--       --}}

{{--        <!-- Job Detail start -->--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-7"> --}}
{{--				--}}
{{--				 <!-- Job Header start -->--}}
{{--        <div class="job-header">--}}
{{--            <div class="jobinfo">--}}
{{--               --}}
{{--                        <h2>{{$job->title}} - {{$company->name}}</h2>--}}
{{--                        <div class="ptext">{{__('Date Posted')}}: {{$job->created_at->format('M d, Y')}}</div>--}}
{{--						--}}
{{--						@if(!Auth::user() && !Auth::guard('company')->user())--}}
{{--                        <a href="{{route('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> {{__('Login to View Salary')}} </a>--}}
{{--						@else--}}
{{--						@if(!(bool)$job->hide_salary)--}}
{{--                        <div class="salary">{{$job->getSalaryPeriod('salary_period')}}: <strong>{{$job->salary_from.' '.$job->salary_currency}} - {{$job->salary_to.' '.$job->salary_currency}}</strong></div>--}}
{{--                        @endif--}}
{{--						@endif--}}
{{--                    --}}
{{--            </div>--}}
{{--			--}}
{{--			<!-- Job Detail start -->--}}
{{--                <div class="jobmainreq">--}}
{{--                    <div class="jobdetail">--}}
{{--                       <h3><i class="fa fa-align-left" aria-hidden="true"></i> {{__('Job Detail')}}</h3>--}}
{{--						--}}
{{--							--}}
{{--							 <ul class="jbdetail">--}}
{{--                            <li class="row">--}}
{{--                                <div class="col-md-4 col-xs-5">{{__('Location')}}:</div>--}}
{{--                                <div class="col-md-8 col-xs-7">--}}
{{--                                    @if((bool)$job->is_freelance)--}}
{{--                                    <span>Freelance</span>--}}
{{--                                    @else--}}
{{--                                    <span>{{$job->getLocation()}}</span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="row">--}}
{{--                                <div class="col-md-4 col-xs-5">{{__('Company')}}:</div>--}}
{{--                                <div class="col-md-8 col-xs-7"><a href="{{route('company.detail', $company->id)}}">{{$company->name}}</a></div>--}}
{{--                            </li>--}}
{{--                            <li class="row">--}}
{{--                                <div class="col-md-4 col-xs-5">{{__('Type')}}:</div>--}}
{{--                                <div class="col-md-8 col-xs-7"><span class="permanent">{{$job->getJobType('job_type')}}</span></div>--}}
{{--                            </li>--}}
{{--                            <li class="row">--}}
{{--                                <div class="col-md-4 col-xs-5">{{__('Shift')}}:</div>--}}
{{--                                <div class="col-md-8 col-xs-7"><span class="freelance">{{$job->getJobShift('job_shift')}}</span></div>--}}
{{--                            </li>--}}
{{--                            <li class="row">--}}
{{--                                <div class="col-md-4 col-xs-5">{{__('Career Level')}}:</div>--}}
{{--                                <div class="col-md-8 col-xs-7"><span>{{$job->getCareerLevel('career_level')}}</span></div>--}}
{{--                            </li>--}}
{{--								<li class="row">--}}
{{--                                <div class="col-md-4 col-xs-5">{{__('Positions')}}:</div>--}}
{{--                                <div class="col-md-8 col-xs-7"><span>{{$job->num_of_positions}}</span></div>--}}
{{--                            </li>--}}
{{--                            <li class="row">--}}
{{--                                <div class="col-md-4 col-xs-5">{{__('Experience')}}:</div>--}}
{{--                                <div class="col-md-8 col-xs-7"><span>{{$job->getJobExperience('job_experience')}}</span></div>--}}
{{--                            </li>--}}
{{--                            <li class="row">--}}
{{--                                <div class="col-md-4 col-xs-5">{{__('Gender')}}:</div>--}}
{{--                                <div class="col-md-8 col-xs-7"><span>{{$job->getGender('gender')}}</span></div>--}}
{{--                            </li>--}}
{{--                            <li class="row">--}}
{{--                                <div class="col-md-4 col-xs-5">{{__('Degree')}}:</div>--}}
{{--                                <div class="col-md-8 col-xs-7"><span>{{$job->getDegreeLevel('degree_level')}}</span></div>--}}
{{--                            </li>--}}
{{--                            <li class="row">--}}
{{--                                <div class="col-md-4 col-xs-5">{{__('Apply Before')}}:</div>--}}
{{--                                <div class="col-md-8 col-xs-7"><span>{{$job->expiry_date->format('M d, Y')}}</span></div>--}}
{{--                            </li> --}}
{{--                            --}}
{{--                        </ul>--}}
{{--							--}}
{{--							--}}
{{--                       --}}
{{--                    </div>--}}
{{--                </div>--}}
{{--			--}}
{{--			<hr>--}}
{{--            <div class="jobButtons">--}}
{{--                <a href="{{route('email.to.friend', $job->slug)}}" class="btn"><i class="fa fa-envelope" aria-hidden="true"></i> {{__('Email to Friend')}}</a>--}}
{{--                @if(Auth::check() && Auth::user()->isFavouriteJob($job->slug)) <a href="{{route('remove.from.favourite', $job->slug)}}" class="btn"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{__('Favourite Job')}} </a> @else <a href="{{route('add.to.favourite', $job->slug)}}" class="btn"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{__('Add to Favourite')}}</a> @endif--}}
{{--                <a href="{{route('report.abuse', $job->slug)}}" class="btn report"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{__('Report Abuse')}}</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--				--}}
{{--				--}}
{{--				--}}
{{--                <!-- Job Description start -->--}}
{{--                <div class="job-header">--}}
{{--                    <div class="contentbox">--}}
{{--                        <h3><i class="fa fa-file-text-o" aria-hidden="true"></i> {{__('Job Description')}}</h3>--}}
{{--                        <p>{!! $job->description !!}</p>                       --}}
{{--                    </div>--}}
{{--                </div>--}}
{{--				--}}
{{--				--}}
{{--				<div class="job-header benefits">--}}
{{--                    <div class="contentbox">--}}
{{--                        <h3><i class="fa fa-file-text-o" aria-hidden="true"></i> {{__('Benefits')}}</h3>--}}
{{--                        <p>{!! $job->benefits !!}</p>                       --}}
{{--                    </div>--}}
{{--                </div>--}}
{{--				--}}
{{--				<div class="job-header">--}}
{{--                    <div class="contentbox">                        --}}
{{--                        <h3><i class="fa fa-puzzle-piece" aria-hidden="true"></i> {{__('Skills Required')}}</h3>--}}
{{--                        <ul class="skillslist">--}}
{{--                            {!!$job->getJobSkillsList()!!}--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--				--}}
{{--				--}}
{{--                <!-- Job Description end --> --}}

{{--                --}}
{{--            </div>--}}
{{--            <!-- related jobs end -->--}}

{{--            <div class="col-lg-5"> --}}
{{--				<div class="jobButtons applybox">--}}
{{--				@if($job->isJobExpired())--}}
{{--                <span class="jbexpire"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{__('Job is expired')}}</span>--}}
{{--                @elseif(Auth::check() && Auth::user()->isAppliedOnJob($job->id))--}}
{{--                <a href="javascript:;" class="btn apply applied"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{__('Already Applied')}}</a>--}}
{{--                @else--}}
{{--                <a href="{{route('apply.job', $job->slug)}}" class="btn apply"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{__('Apply Now')}}</a>--}}
{{--                @endif--}}
{{--				</div>--}}
{{--				--}}
{{--				--}}
{{--				<div class="companyinfo">--}}
{{--					<h3><i class="fa fa-building-o" aria-hidden="true"></i> {{__('Company Overview')}}</h3>--}}
{{--                            <div class="companylogo"><a href="{{route('company.detail',$company->slug)}}">{{$company->printCompanyImage()}}</a></div>--}}
{{--                            <div class="title"><a href="{{route('company.detail',$company->slug)}}">{{$company->name}}</a></div>--}}
{{--                            <div class="ptext">{{$company->getLocation()}}</div>--}}
{{--                            <div class="opening">--}}
{{--                                <a href="{{route('company.detail',$company->slug)}}">--}}
{{--                                    {{App\Company::countNumJobs('company_id', $company->id)}} {{__('Current Jobs Openings')}}--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--					<hr>--}}
{{--				<div class="companyoverview">--}}
{{--				--}}
{{--					<p>{{\Illuminate\Support\Str::limit(strip_tags($company->description), 250, '...')}} <a href="{{route('company.detail',$company->slug)}}">Read More</a></p>--}}
{{--					</div>--}}
{{--                        </div>--}}
{{--				--}}
{{--			--}}
{{--				--}}
{{--				<!-- related jobs start -->--}}
{{--                <div class="relatedJobs">--}}
{{--                    <h3>{{__('Related Jobs')}}</h3>--}}
{{--                    <ul class="searchList">--}}
{{--                        @if(isset($relatedJobs) && count($relatedJobs))--}}
{{--                        @foreach($relatedJobs as $relatedJob)--}}
{{--                        <?php $relatedJobCompany = $relatedJob->getCompany(); ?>--}}
{{--                        @if(null !== $relatedJobCompany)--}}
{{--                        <!--Job start-->--}}
{{--                        <li>--}}
{{--                           --}}
{{--                                    --}}
{{--                                    <div class="jobinfo">--}}
{{--                                        <h3><a href="{{route('job.detail', [$relatedJob->slug])}}" title="{{$relatedJob->title}}">{{$relatedJob->title}}</a></h3>--}}
{{--                                        <div class="companyName"><a href="{{route('company.detail', $relatedJobCompany->slug)}}" title="{{$relatedJobCompany->name}}">{{$relatedJobCompany->name}}</a></div>--}}
{{--										<div class="location"><span>{{$relatedJob->getCity('city')}}</span></div>--}}
{{--                                        <div class="location">--}}
{{--                                            <label class="fulltime">{{$relatedJob->getJobType('job_type')}}</label>--}}
{{--                                            <label class="partTime">{{$relatedJob->getJobShift('job_shift')}}</label> </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="clearfix"></div>--}}
{{--                                                           --}}
{{--                        </li>--}}
{{--                        <!--Job end--> --}}
{{--                        @endif--}}
{{--                        @endforeach--}}
{{--                        @endif--}}

{{--                        <!-- Job end -->--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                --}}
{{--                <!-- Google Map start -->--}}
{{--                <div class="job-header">--}}
{{--                    <div class="jobdetail">--}}
{{--                        <h3><i class="fa fa-map-marker" aria-hidden="true"></i> {{__('Google Map')}}</h3>--}}
{{--                        <div class="gmap">--}}
{{--                            {!!$company->map!!}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@include('includes.footer')
@endsection
@push('styles')
<style type="text/css">
    .view_more{display:none !important;}
</style>
@endpush
@push('scripts') 
<script>
    $(document).ready(function ($) {
        $("form").submit(function () {
            $(this).find(":input").filter(function () {
                return !this.value;
            }).attr("disabled", "disabled");
            return true;
        });
        $("form").find(":input").prop("disabled", false);

        $(".view_more_ul").each(function () {
            if ($(this).height() > 100)
            {
                $(this).css('height', 100);
                $(this).css('overflow', 'hidden');
                //alert($( this ).next());
                $(this).next().removeClass('view_more');
            }
        });



    });
</script> 
@endpush
