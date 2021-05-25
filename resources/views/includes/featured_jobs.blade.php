<!--Featured Jobs-->
<section class="sptb bg-white">
    <div class="container" id="container1">
        <div class="section-title center-block text-center">
            <h1>{{__('Featured')}} <span>{{__('Jobs')}}</span></h1>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div class="row">
            <?php $is_right= false; ?>
            @if(isset($featuredJobs) && count($featuredJobs))
                @foreach($featuredJobs as $featuredJob)
                    <?php $company = $featuredJob->getCompany(); ?>
                    @if(null !== $company)
                        @if(!$is_right)
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">

                <div class="card overflow-hidden">
                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                    <div class="card-body">
                        <div class="item-det row">
                            <div class="col-md-9">

                                <a href="{{route('job.detail', [$featuredJob->slug])}}" title="{{$featuredJob->title}}" class="text-dark"><h4 class="mb-2 fs-16 font-weight-semibold">{{$featuredJob->title}} <span class="badge badge-danger fs-12">{{$featuredJob->getJobType('job_type')}}</span></h4></a>
                                <div class="">
                                    <ul class="mb-0 d-flex">
                                        <li class="mr-5"><a  href="{{route('company.detail', $company->slug)}}" class="icons" title="{{$company->name}}"><i class="si si-briefcase text-muted mr-1"></i>{{$company->name}}</a></li>
                                        <li class="mr-5"><a href="{{route('job.detail', [$featuredJob->slug])}}" class="icons"><i class="si si-location-pin text-muted mr-1"></i>  {{$featuredJob->getCity('city')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-auto">
                                <div class="icons mt-3 mt-sm-0 pb-0">

                                    <a href="{{route('job.detail', [$featuredJob->slug])}}" class="btn  btn-primary mt-2 float-md-right"> {{__('View Detail')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
                            <?php $is_right=true;?>
                            @else

            <div class="col-xl-6">


                <div class="card overflow-hidden">
                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                    <div class="card-body">
                        <div class="item-det row">
                            <div class="col-md-9">

                                <a href="{{route('job.detail', [$featuredJob->slug])}}" title="{{$featuredJob->title}}" class="text-dark"><h4 class="mb-2 fs-16 font-weight-semibold">{{$featuredJob->title}} <span class="badge badge-danger fs-12">{{$featuredJob->getJobType('job_type')}}</span></h4></a>
                                <div class="">
                                    <ul class="mb-0 d-flex">
                                        <li class="mr-5"><a  href="{{route('company.detail', $company->slug)}}" class="icons" title="{{$company->name}}"><i class="si si-briefcase text-muted mr-1"></i>{{$company->name}}</a></li>
                                        <li class="mr-5"><a href="{{route('job.detail', [$featuredJob->slug])}}" class="icons"><i class="si si-location-pin text-muted mr-1"></i>  {{$featuredJob->getCity('city')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-auto">
                                <div class="icons mt-3 mt-sm-0 pb-0">

                                    <a href="{{route('job.detail', [$featuredJob->slug])}}" class="btn  btn-primary mt-2 float-md-right"> {{__('View Detail')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                <?php $is_right=false;?>
                            @endif
                        @endif
                @endforeach
            @endif
        </div>
    </div>
</section>
<!--/Featured Jobs-->

{{--<div class="section">--}}
{{--    <div class="container"> --}}
{{--        <!-- title start -->--}}
{{--        <div class="titleTop">--}}
{{--            <h3>{{__('Featured')}} <span>{{__('Jobs')}}</span></h3>--}}
{{--        </div>--}}
{{--        <!-- title end --> --}}

{{--        <!--Featured Job start-->--}}
{{--        <ul class="jobslist row">--}}
{{--            @if(isset($featuredJobs) && count($featuredJobs))--}}
{{--            @foreach($featuredJobs as $featuredJob)--}}
{{--            <?php $company = $featuredJob->getCompany(); ?>--}}
{{--            @if(null !== $company)--}}
{{--            <!--Job start-->--}}
{{--            <li class="col-md-6">--}}
{{--                <div class="jobint">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-2 col-md-2">--}}
{{--                            <a href="{{route('job.detail', [$featuredJob->slug])}}" title="{{$featuredJob->title}}">--}}
{{--                                {{$company->printCompanyImage()}}--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-7 col-md-7">--}}
{{--                            <h4><a href="{{route('job.detail', [$featuredJob->slug])}}" title="{{$featuredJob->title}}">{{$featuredJob->title}}</a></h4>--}}
{{--                            <div class="company"><a href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}">{{$company->name}}</a></div>--}}
{{--                            <div class="jobloc">--}}
{{--                                <label class="fulltime" title="{{$featuredJob->getJobType('job_type')}}">{{$featuredJob->getJobType('job_type')}}</label> - <span>{{$featuredJob->getCity('city')}}</span></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-md-3"><a href="{{route('job.detail', [$featuredJob->slug])}}" class="applybtn">{{__('View Detail')}}</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <!--Job end--> --}}
{{--            @endif--}}
{{--            @endforeach--}}
{{--            @endif--}}

{{--        </ul>--}}
{{--        <!--Featured Job end--> --}}

{{--        <!--button start-->--}}
{{--        <div class="viewallbtn"><a href="{{route('job.list', ['is_featured'=>1])}}">{{__('View All Featured Jobs')}}</a></div>--}}
{{--        <!--button end--> --}}
{{--    </div>--}}
{{--</div>--}}
