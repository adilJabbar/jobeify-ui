<!--latest Jobs-->
<section class="sptb bg-white border-top">
    <div class="container">
        <div class="section-title center-block text-center">
            <h1>{{__('Latest')}} <span>{{__('Jobs')}}</span></h1>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div class="panel panel-primary">
            <div class="">
                <div class="tabs-menu ">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs jobs-tabs mb-6">
                        <li class=""><a href="#index1" class="active show" data-toggle="tab">All</a></li>
                        <li><a href="#index2" data-toggle="tab" class="">Full Time Jobs</a></li>
                        <li><a href="#index3" data-toggle="tab" class="">Part Time Jobs</a></li>
                        <li><a href="#index4" data-toggle="tab" class="">Work From Home Jobs</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="index1">
                        <div class="row">
                            @if(isset($latestJobs) && count($latestJobs))
                                @foreach($latestJobs as $latestJob)
                                    <?php $company = $latestJob->getCompany(); ?>
                                    @if(null !== $company)
                                         <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="{{route('job.detail', [$latestJob->slug])}}" class="text-dark"><h4 class="font-weight-semibold">{{$latestJob->title}}</h4></a>
                                            </div>
                                            <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                        </div>
                                    </div>
                                    <div class="card-body py-2">
                                        <a href="mr-4" class="icons font-weight-semibold text-body"><i class="fa fa-usd  text-muted mr-1"></i> 10,000-20,000</a>
                                        <a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>{{$latestJob->getJobType('job_type')}}</a>
                                    </div>
                                    <div class="card-body py-2">
                                        <div class="d-flex align-items-center mt-auto">

                                            {{$company->printCompanyImage(0,0,'avatar brround avatar-md mr-2')}}

                                            <div>

                                                <a href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}" class="text-default fs-13">{{$company->name}}</a>
                                                <small class="d-block text-muted">2 days ago</small>
                                            </div>
                                            <div class="ml-auto text-muted">
                                                <a  href="{{route('job.detail', [$latestJob->slug])}}" class="btn btn-sm btn-secondary text-white">See Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   @endif
                                @endforeach
                            @endif

                        </div>
                    </div>
                    <div class="tab-pane" id="index2">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="jobs.html" class="text-dark"><h4 class="font-weight-semibold">Wanted Best Chefs</h4></a>
                                            </div>
                                            <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                        </div>
                                    </div>
                                    <div class="card-body py-2">
                                        <a href="mr-4" class="icons font-weight-semibold text-body"><i class="fa fa-usd  text-muted mr-1"></i> 10,000-20,000</a>
                                        <a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Full Time Job</a>
                                    </div>
                                    <div class="card-body py-2">
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="../assets/images/products/logo/img1.jpg" class="avatar brround avatar-md mr-2" alt="avatar-img">
                                            <div>
                                                <a href="profile.html" class="text-default fs-13">G Technicals Solutions</a>
                                                <small class="d-block text-muted">2 days ago</small>
                                            </div>
                                            <div class="ml-auto text-muted">
                                                <a href="jobs.html" class="btn btn-sm btn-secondary text-white">See Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="jobs.html" class="text-dark"><h4 class="font-weight-semibold">Data Entry Jobs</h4></a>
                                            </div>
                                            <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                        </div>
                                    </div>
                                    <div class="card-body py-2">
                                        <a href="mr-4" class="icons font-weight-semibold text-body"><i class="fa fa-usd  text-muted mr-1"></i> 10,000-15,000</a>
                                        <a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Full Time Job</a>
                                    </div>
                                    <div class="card-body py-2">
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="../assets/images/products/logo/img2.jpg" class="avatar brround avatar-md mr-2" alt="avatar-img">
                                            <div>
                                                <a href="profile.html" class="text-default">Rosita Chatmon</a>
                                                <small class="d-block text-muted">2 days ago</small>
                                            </div>
                                            <div class="ml-auto text-muted">
                                                <a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="jobs.html" class="text-dark"><h4 class="font-weight-semibold">HR Recruiter Jobs</h4></a>
                                            </div>
                                            <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                        </div>
                                    </div>
                                    <div class="card-body py-2">
                                        <a href="mr-4" class="icons font-weight-semibold text-body"><i class="fa fa-usd  text-muted mr-1"></i> 30,000-40,000</a>
                                        <a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Full Time Job</a>
                                    </div>
                                    <div class="card-body py-2">
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="../assets/images/products/logo/img3.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
                                            <div>
                                                <a href="profile.html" class="text-default">Aracely Bashore</a>
                                                <small class="d-block text-muted">5 days ago</small>
                                            </div>
                                            <div class="ml-auto text-muted">
                                                <a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="index3">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Free</span></div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="jobs.html" class="text-dark"><h4 class="font-weight-semibold">Wanted to Drivers</h4></a>
                                            </div>
                                            <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                        </div>
                                    </div>
                                    <div class="card-body py-2">
                                        <a href="mr-4" class="icons font-weight-semibold text-body"><i class="fa fa-usd  text-muted mr-1"></i> 20,000-25,000</a>
                                        <a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Full Time Job</a>
                                    </div>
                                    <div class="card-body py-2">
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="../assets/images/products/logo/img4.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
                                            <div>
                                                <a href="profile.html" class="text-default">Joanne Nash</a>
                                                <small class="d-block text-muted">4 days ago</small>
                                            </div>
                                            <div class="ml-auto text-muted">
                                                <a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="jobs.html" class="text-dark"><h4 class="font-weight-semibold">Sales Executive Jobs</h4></a>
                                            </div>
                                            <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                        </div>
                                    </div>
                                    <div class="card-body py-2">
                                        <a href="mr-4" class="icons font-weight-semibold text-body"><i class="fa fa-usd  text-muted mr-1"></i> 10,000-15,000</a>
                                        <a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Part Time Job</a>
                                    </div>
                                    <div class="card-body py-2">
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="../assets/images/products/logo/img5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
                                            <div>
                                                <a href="profile.html" class="text-default">Rosita Chatmon</a>
                                                <small class="d-block text-muted">2 days ago</small>
                                            </div>
                                            <div class="ml-auto text-muted">
                                                <a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="jobs.html" class="text-dark"><h4 class="font-weight-semibold">Telecaller Jobs</h4></a>
                                            </div>
                                            <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                        </div>
                                    </div>
                                    <div class="card-body py-2">
                                        <a href="mr-4" class="icons font-weight-semibold text-body"><i class="fa fa-usd  text-muted mr-1"></i> 15,000-20,000</a>
                                        <a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Part Time Job</a>
                                    </div>
                                    <div class="card-body py-2">
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="../assets/images/products/logo/img6.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
                                            <div>
                                                <a href="profile.html" class="text-default">Loyd Nolf</a>
                                                <small class="d-block text-muted">3 days ago</small>
                                            </div>
                                            <div class="ml-auto text-muted">
                                                <a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="index4">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="jobs.html" class="text-dark"><h4 class="font-weight-semibold">Telecaller Jobs</h4></a>
                                            </div>
                                            <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                        </div>
                                    </div>
                                    <div class="card-body py-2">
                                        <a href="mr-4" class="icons font-weight-semibold text-body"><i class="fa fa-usd  text-muted mr-1"></i> 15,000-20,000</a>
                                        <a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Part Time Job</a>
                                    </div>
                                    <div class="card-body py-2">
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="../assets/images/products/logo/img6.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
                                            <div>
                                                <a href="profile.html" class="text-default">Loyd Nolf</a>
                                                <small class="d-block text-muted">3 days ago</small>
                                            </div>
                                            <div class="ml-auto text-muted">
                                                <a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route('job.list')}}" class="btn  btn-primary ">{{__('View All Latest Jobs')}}</a>
            </div>
        </div>
    </div>
</section>
<!--/Latest Jobs-->


{{--<div class="section">--}}
{{--    <div class="container"> --}}
{{--        <!-- title start -->--}}
{{--        <div class="titleTop">--}}
{{--            <h3>{{__('Latest')}} <span>{{__('Jobs')}}</span></h3>--}}
{{--        </div>--}}
{{--        <!-- title end -->--}}

{{--        <ul class="jobslist newjbox row">--}}
{{--            @if(isset($latestJobs) && count($latestJobs))--}}
{{--            @foreach($latestJobs as $latestJob)--}}
{{--            <?php $company = $latestJob->getCompany(); ?>--}}
{{--            @if(null !== $company)--}}
{{--            <!--Job start-->--}}
{{--            <li class="col-md-4">--}}
{{--                <div class="jobint">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-3 col-sm-3">--}}
{{--                            <a href="{{route('job.detail', [$latestJob->slug])}}" title="{{$latestJob->title}}">--}}
{{--                                {{$company->printCompanyImage()}}--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-9 col-sm-9">--}}
{{--                            <h4><a href="{{route('job.detail', [$latestJob->slug])}}" title="{{$latestJob->title}}">{{$latestJob->title}}</a></h4>--}}
{{--                            <div class="company"><a href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}">{{$company->name}}</a> - <span>{{$latestJob->getCity('city')}}</span></div>--}}
{{--                            <div class="jobloc">--}}
{{--                                <label class="fulltime" title="{{$latestJob->getJobType('job_type')}}">{{$latestJob->getJobType('job_type')}}</label> </div>--}}
{{--                        </div>                       --}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <!--Job end--> --}}
{{--            @endif--}}
{{--            @endforeach--}}
{{--            @endif--}}
{{--        </ul>--}}
{{--        <!--view button-->--}}
{{--        <div class="viewallbtn"><a href="{{route('job.list')}}">{{__('View All Latest Jobs')}}</a></div>--}}
{{--        <!--view button end--> --}}
{{--    </div>--}}
{{--</div>--}}
