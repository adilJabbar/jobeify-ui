@extends('layouts.app')

@section('content')

<!-- Header start -->

@include('includes.header')

<!-- Header end -->

<!-- Inner Page Title start -->

@include('includes.inner_page_title', ['page_title'=>__('Company Detail')])

<!-- Inner Page Title end -->



<!--User Profile-->
<section class="sptb">
    <div class="container">
        @include('flash::message')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="wideget-user">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="wideget-user-desc d-sm-flex">
                                        <div class="wideget-user-img mr-5 noborder">
                                            <a href="{{route('company.detail',$company->slug)}}">{{$company->printCompanyImage(0,0,'w-125 noborder')}}</a>

                                        </div>
                                        <div class="user-wrap wideget-user-info"> <a href="#" class="text-dark"><h4 class="font-weight-semibold mb-2">{{$company->name}}</h4></a>
                                            <h6 class="text-muted mb-1"><span class="text-dark"> {{__('Member Since')}} : </span> {{$company->created_at->format('M d, Y')}}</h6>
                                            <div class="wideget-user-rating"> <a href="#"><i class="fa fa-star text-warning"></i></a> <a href="#"><i class="fa fa-star text-warning"></i></a> <a href="#"><i class="fa fa-star text-warning"></i></a> <a href="#"><i class="fa fa-star text-warning"></i></a> <a href="#"><i class="fa fa-star-o text-warning mr-1"></i></a> <span>5 (3876 Reviews)</span> </div>
                                            <div class="wideget-user-icons mt-2">
                                                {!!$company->getSocialNetworkHtml()!!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tab-content">
                    <div>
                        <div class="wideget-user-tab">
                            <div class="tab-menu-heading">
                                <div class="tabs-menu1">
                                    <ul class="nav">
                                        <li class=""><a href="#tab-5" class="active" data-toggle="tab">Profile</a></li>
                                        <li><a href="#tab-6" data-toggle="tab" class="">My Jobs</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane active" id="tab-5">
                        <div class="card mb-0 border-0">
                            <div class="card-body">
                                <div class="profile-log-switch">

                                    @if(!Auth::user() && !Auth::guard('company')->user())
                                        <h4 class="card-title mb-4 font-weight-bold">Login to View contact details</h4>

                                        <a href="{{route('login')}}" class="btn">Login</a>
                                    @else
                                        <div class="media-heading">
                                            <h3 class="card-title mb-4 font-weight-bold">Employer Details</h3>
                                        </div>
                                    <ul class="usertab-list mb-0">
                                        <li><a href="#" class="text-dark"><span class="font-weight-semibold w100">Location :</span>  {{$company->location}}</a></li>
                                        @if(!empty($company->website))
                                        <li><a href="#" class="text-dark"><span class="font-weight-semibold w100">Website :</span> joblist.com</a></li>
                                        @endif
                                        @if(!empty($company->email))
                                        <li><a href="#" class="text-dark"><span class="font-weight-semibold w100">Email :</span> georgemestayer@Carlist.com</a></li>
                                        @endif
                                        @if(!empty($company->phone))
                                        <li><a href="#" class="text-dark"><span class="font-weight-semibold w100">Phone :</span> +125 254 3562, +124 354 3657 </a></li>
                                        @endif

                                    </ul>
                                    @endif
                                    <div class="row profie-img">
                                        <div class="col-md-12">
                                            <div class="media-heading">
                                                <h3 class="card-title mb-3 mt-5 font-weight-bold">{{__('About Company')}}</h3>
                                            </div>
                                            <p>{!! $company->description !!}</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-light-50">
                                <div class="icons">
                                    @if(Auth::check() && Auth::user()->isFavouriteCompany($company->slug))
                                        <a href="{{route('remove.from.favourite.company', $company->slug)}}" class="btn"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{__('Favourite Company')}} </a>
                                    @else
                                        <a href="{{route('add.to.favourite.company', $company->slug)}}" class="btn"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{__('Add to Favourite')}}</a>
                                    @endif
                                        <a href="javascript:;" onclick="send_message()" class="btn"><i class="fa fa-envelope" aria-hidden="true"></i> {{__('Send Message')}}</a>
                                        <a href="{{route('report.abuse.company', $company->slug)}}" class="btn btn-danger icons mb-1 mt-1" data-toggle="modal" data-target="#report"><i class="icon icon-exclamation mr-1"></i> Report Abuse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane userprof-tab" id="tab-6">
                        <!--Job listing-->
                        <div class="card mb-0 border-0">
                            <div class="card-body">
                                <div class="row">
                                    <!--Job lists-->
                                    <div class="col-12">
                                        <div class=" mb-lg-0">
                                            <div class="">
                                                <div class="item2-gl">
                                                    <div class="tab-content pt-0">
                                                        <div class="tab-pane active" id="tab-11">

                                                            @if(isset($company->jobs) && count($company->jobs))
                                                                @foreach($company->jobs as $companyJob)

                                                            <div class="card overflow-hidden br-0 overflow-hidden shadow-none">
                                                                <div class="d-md-flex">
                                                                    <div class="p-0 m-0 item-card9-img">
                                                                        <div class="item-card9-imgs">
                                                                            <a href="{{route('job.detail', [$companyJob->slug])}}"></a>

                                                                            {{$company->printCompanyImage(0,0,'h-100')}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="card overflow-hidden  border-0 box-shadow-0 border-left br-0 mb-0">
                                                                        <div class="card-body pt-0 pt-md-5">
                                                                            <div class="item-card9">
                                                                                <a href="{{route('job.detail', [$companyJob->slug])}}" class="text-dark"><h4 class="font-weight-semibold mt-1">{{$companyJob->title}}</h4></a>
                                                                                <div class="mt-2 mb-2">
                                                                                    <a href="{{route('company.detail', $company->slug)}}" class="mr-4"><span><i class="fa fa-building-o text-muted mr-1"></i> {{$company->name}}</span></a>
                                                                                    <a href="#" class="mr-4"><span><i class="fa fa-map-marker text-muted mr-1"></i> {{$companyJob->getCity('city')}}</span></a>
                                                                                    <a href="#" class="mr-4"><span><i class="fa fa fa-usd text-muted mr-1"></i>{{$companyJob->getJobShift('job_shift')}}</span></a>
                                                                                    <a href="#" class="mr-4"><span><i class="fa fa-clock-o text-muted mr-1"></i> {{$companyJob->getJobType('job_type')}}</span></a>
                                                                                    <a href="#" class="mr-4"><span><i class="fa fa-briefcase text-muted mr-1"></i> 2 Yer Exp</span></a>
                                                                                </div>
                                                                                <p class="mb-0 leading-tight">{{\Illuminate\Support\Str::limit(strip_tags($companyJob->description), 150, '...')}}</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-footer pt-3 pb-3">
                                                                            <div class="item-card9-footer d-sm-flex">
                                                                                <div class="d-flex align-items-center mb-3 mb-md-0 mt-auto posted">
                                                                                    <div>
                                                                                        <a href="profile.html" class="text-muted fs-12 mb-1">Posted by </a><span class="ml-0 fs-13"> Individual</span>
                                                                                        <small class="d-block text-default">18 Mar 2018, 12:15 AM</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ml-auto">
                                                                                    <a href="jobs.html" class="mr-3"><i class="fa fa-user text-muted mr-1"></i>HR/Admin</a>
                                                                                    <a href="jobs.html" class="mr-3"><i class="ion-checkmark-circled text-success mr-1"></i>Phone Verified</a>
                                                                                    @if($companyJob->isJobExpired())
                                                                                        <span class="jbexpire"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{__('Job is expired')}}</span>
                                                                                    @elseif(Auth::check() && Auth::user()->isAppliedOnJob($companyJob->id))
                                                                                        <a href="javascript:;" class="btn apply applied"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{__('Already Applied')}}</a>
                                                                                    @else
                                                                                        <a href="{{route('apply.job', $companyJob->slug)}}" class="btn btn-primary mt-3 mt-md-0 apply"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{__('Apply Now')}}</a>
                                                                                    @endif

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
                                                <div class="center-block text-center">
                                                    <ul class="pagination mb-5">
                                                        <li class="page-item page-prev disabled">
                                                            <a class="page-link" href="#" tabindex="-1">Prev</a>
                                                        </li>
                                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item page-next">
                                                            <a class="page-link" href="#">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Job lists-->
                                </div>
                            </div>
                        </div>
                        <!--Job Listing-->
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Onlinesletter-->
<section class="sptb bg-white border-top">
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
                        <button type="button" class="btn btn-primary btn-lg br-tr-3  br-br-3">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Onlinesletter-->


{{--<div class="listpgWraper">--}}

{{--    <div class="container">--}}

{{--        @include('flash::message')--}}

{{--        <!-- Job Header start -->--}}

{{--        <div class="job-header">--}}

{{--            <div class="jobinfo">--}}

{{--                <div class="row">--}}

{{--                    <div class="col-md-8 col-sm-8">--}}

{{--                        <!-- Candidate Info -->--}}

{{--                        <div class="candidateinfo">--}}

{{--                            <div class="userPic"><a href="{{route('company.detail',$company->slug)}}">{{$company->printCompanyImage()}}</a>--}}

{{--                            </div>--}}

{{--                            <div class="title">{{$company->name}}</div>--}}

{{--                            <div class="desi">{{$company->getIndustry('industry')}}</div>--}}

{{--                            <div class="loctext"><i class="fa fa-history" aria-hidden="true"></i>--}}

{{--                                {{__('Member Since')}}, {{$company->created_at->format('M d, Y')}}</div>--}}

{{--                            <div class="loctext"><i class="fa fa-map-marker" aria-hidden="true"></i>--}}

{{--                                {{$company->location}}</div>--}}

{{--                            <div class="clearfix"></div>--}}

{{--                        </div>--}}

{{--                    </div>--}}

{{--                    <div class="col-md-4 col-sm-4">--}}

{{--                        <!-- Candidate Contact -->--}}

{{--						@if(!Auth::user() && !Auth::guard('company')->user())--}}

{{--							<h5>Login to View contact details</h5>--}}

{{--							<a href="{{route('login')}}" class="btn">Login</a>--}}

{{--						@else--}}

{{--                        <div class="candidateinfo">--}}

{{--                            @if(!empty($company->phone))--}}

{{--                            <div class="loctext"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{$company->phone}}">{{$company->phone}}</a></div>--}}

{{--                            @endif--}}

{{--                            @if(!empty($company->email))--}}

{{--                            <div class="loctext"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:{{$company->email}}">{{$company->email}}</a></div>--}}

{{--                            @endif--}}

{{--                            @if(!empty($company->website))--}}

{{--                            <div class="loctext"><i class="fa fa-globe" aria-hidden="true"></i> <a href="{{$company->website}}" target="_blank">{{$company->website}}</a></div>--}}

{{--                            @endif--}}

{{--                            <div class="cadsocial"> {!!$company->getSocialNetworkHtml()!!} </div>--}}

{{--                        </div>						--}}

{{--						@endif--}}

{{--						--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}



{{--            <!-- Buttons -->--}}

{{--            <div class="jobButtons"> @if(Auth::check() && Auth::user()->isFavouriteCompany($company->slug)) <a--}}

{{--                    href="{{route('remove.from.favourite.company', $company->slug)}}" class="btn"><i--}}

{{--                        class="fa fa-floppy-o" aria-hidden="true"></i> {{__('Favourite Company')}} </a> @else <a--}}

{{--                    href="{{route('add.to.favourite.company', $company->slug)}}" class="btn"><i class="fa fa-floppy-o"--}}

{{--                        aria-hidden="true"></i> {{__('Add to Favourite')}}</a> @endif <a--}}

{{--                    href="{{route('report.abuse.company', $company->slug)}}" class="btn report"><i--}}

{{--                        class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{__('Report Abuse')}}</a> <a--}}

{{--                    href="javascript:;" onclick="send_message()" class="btn"><i class="fa fa-envelope"--}}

{{--                        aria-hidden="true"></i> {{__('Send Message')}}</a> </div>--}}

{{--        </div>--}}



{{--        <!-- Job Detail start -->--}}

{{--        <div class="row">--}}

{{--            <div class="col-md-8">--}}

{{--                <!-- About Employee start -->--}}

{{--                <div class="job-header">--}}

{{--                    <div class="contentbox">--}}

{{--                        <h3>{{__('About Company')}}</h3>--}}

{{--                        <p>{!! $company->description !!}</p>--}}

{{--                    </div>--}}

{{--                </div>--}}



{{--                <!-- Opening Jobs start -->--}}

{{--                <div class="relatedJobs">--}}

{{--                    <h3>{{__('Job Openings')}}</h3>--}}

{{--                    <ul class="searchList">--}}

{{--                        @if(isset($company->jobs) && count($company->jobs))--}}

{{--                        @foreach($company->jobs as $companyJob)--}}

{{--                        <!--Job start-->--}}

{{--                        <li>--}}

{{--                            <div class="row">--}}

{{--                                <div class="col-md-8 col-sm-8">--}}

{{--                                    <div class="jobimg"><a href="{{route('job.detail', [$companyJob->slug])}}"--}}

{{--                                            title="{{$companyJob->title}}"> {{$company->printCompanyImage()}} </a></div>--}}

{{--                                    <div class="jobinfo">--}}

{{--                                        <h3><a href="{{route('job.detail', [$companyJob->slug])}}"--}}

{{--                                                title="{{$companyJob->title}}">{{$companyJob->title}}</a></h3>--}}

{{--                                        <div class="companyName"><a href="{{route('company.detail', $company->slug)}}"--}}

{{--                                                title="{{$company->name}}">{{$company->name}}</a></div>--}}

{{--                                        <div class="location">--}}

{{--                                            <label class="fulltime"--}}

{{--                                                title="{{$companyJob->getJobType('job_type')}}">{{$companyJob->getJobType('job_type')}}</label>--}}

{{--                                            <label class="partTime"--}}

{{--                                                title="{{$companyJob->getJobShift('job_shift')}}">{{$companyJob->getJobShift('job_shift')}}</label>--}}

{{--                                            - <span>{{$companyJob->getCity('city')}}</span></div>--}}

{{--                                    </div>--}}

{{--                                    <div class="clearfix"></div>--}}

{{--                                </div>--}}

{{--                                <div class="col-md-4 col-sm-4">--}}

{{--                                    <div class="listbtn"><a--}}

{{--                                            href="{{route('job.detail', [$companyJob->slug])}}">{{__('View Detail')}}</a>--}}

{{--                                    </div>--}}

{{--                                </div>--}}

{{--                            </div>--}}

{{--                            <p>{{\Illuminate\Support\Str::limit(strip_tags($companyJob->description), 150, '...')}}</p>--}}

{{--                        </li>--}}

{{--                        <!--Job end-->--}}

{{--                        @endforeach--}}

{{--                        @endif--}}



{{--                        <!-- Job end -->--}}

{{--                    </ul>--}}

{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="col-md-4">--}}

{{--                <!-- Company Detail start -->--}}

{{--                <div class="job-header">--}}

{{--                    <div class="jobdetail">--}}

{{--                        <h3>{{__('Company Detail')}}</h3>--}}

{{--                        <ul class="jbdetail">--}}

{{--                            <li class="row">--}}

{{--                                <div class="col-md-6 col-xs-6">{{__('Is Email Verified')}}</div>--}}

{{--                                <div class="col-md-6 col-xs-6"><span>{{((bool)$company->verified)? 'Yes':'No'}}</span>--}}

{{--                                </div>--}}

{{--                            </li>--}}

{{--                            <li class="row">--}}

{{--                                <div class="col-md-6 col-xs-6">{{__('Total Employees')}}</div>--}}

{{--                                <div class="col-md-6 col-xs-6"><span>{{$company->no_of_employees}}</span></div>--}}

{{--                            </li>--}}

{{--                            <li class="row">--}}

{{--                                <div class="col-md-6 col-xs-6">{{__('Established In')}}</div>--}}

{{--                                <div class="col-md-6 col-xs-6"><span>{{$company->established_in}}</span></div>--}}

{{--                            </li>--}}

{{--                            <li class="row">--}}

{{--                                <div class="col-md-6 col-xs-6">{{__('Current jobs')}}</div>--}}

{{--                                <div class="col-md-6 col-xs-6">--}}

{{--                                    <span>{{$company->countNumJobs('company_id',$company->id)}}</span></div>--}}

{{--                            </li>--}}

{{--                        </ul>--}}

{{--                    </div>--}}

{{--                </div>--}}



{{--                <!-- Google Map start -->--}}

{{--                <div class="job-header">--}}

{{--                    <div class="jobdetail">--}}
{{--                        <iframe src="https://maps.google.it/maps?q={{urlencode(strip_tags($company->map))}}&output=embed" allowfullscreen></iframe>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}

{{--</div>--}}

<!-- Modal -->

<div class="modal fade" id="sendmessage" role="dialog">

    <div class="modal-dialog">



        <!-- Modal content-->

        <div class="modal-content">

            <form action="" id="send-form">

                @csrf

                <input type="hidden" name="company_id" id="company_id" value="{{$company->id}}">

                <div class="modal-header">                    

                    <h4 class="modal-title">Send Message</h4>

					<button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>

                <div class="modal-body">

                    <div class="form-group">

                        <textarea class="form-control" name="message" id="message" cols="10" rows="7"></textarea>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

            </form>

        </div>



    </div>

</div>

@include('includes.footer')

@endsection

@push('styles')

<style type="text/css">

.formrow iframe {

    height: 78px;

}

</style>

@endpush

@push('scripts')

<script type="text/javascript">

$(document).ready(function() {

    $(document).on('click', '#send_company_message', function() {

        var postData = $('#send-company-message-form').serialize();

        $.ajax({

            type: 'POST',

            url: "{{ route('contact.company.message.send') }}",

            data: postData,

            //dataType: 'json',

            success: function(data) {

                response = JSON.parse(data);

                var res = response.success;

                if (res == 'success') {

                    var errorString = '<div role="alert" class="alert alert-success">' +

                        response.message + '</div>';

                    $('#alert_messages').html(errorString);

                    $('#send-company-message-form').hide('slow');

                    $(document).scrollTo('.alert', 2000);

                } else {

                    var errorString = '<div class="alert alert-danger" role="alert"><ul>';

                    response = JSON.parse(data);

                    $.each(response, function(index, value) {

                        errorString += '<li>' + value + '</li>';

                    });

                    errorString += '</ul></div>';

                    $('#alert_messages').html(errorString);

                    $(document).scrollTo('.alert', 2000);

                }

            },

        });

    });

});



function send_message() {

    const el = document.createElement('div')

    el.innerHTML =

        "Please <a class='btn' href='{{route('login')}}' onclick='set_session()'>log in</a> as a Canidate and try again."

    @if(Auth::check())

    $('#sendmessage').modal('show');

    @else

    swal({

        title: "You are not Loged in",

        content: el,

        icon: "error",

        button: "OK",

    });

    @endif

}

if ($("#send-form").length > 0) {

    $("#send-form").validate({

        validateHiddenInputs: true,

        ignore: "",



        rules: {

            message: {

                required: true,

                maxlength: 5000

            },

        },

        messages: {



            message: {

                required: "Message is required",

            }



        },

        submitHandler: function(form) {

            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });

            @if(null !== (Auth::user()))

            $.ajax({

                url: "{{route('submit-message')}}",

                type: "POST",

                data: $('#send-form').serialize(),

                success: function(response) {

                    $("#send-form").trigger("reset");

                    $('#sendmessage').modal('hide');

                    swal({

                        title: "Success",

                        text: response["msg"],

                        icon: "success",

                        button: "OK",

                    });

                }

            });

            @endif

        }

    })

}

</script>

@endpush
