<!--Sliders Section-->
<div>
	<div class="cover-image sptb-1 bg-background" data-image-src="../assets/images/banners/banner1.jpg">
		<div class="header-text1 mb-0">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
						<div class="text-center text-white ">
							<h1 ><span class="font-weight-bold">16,25,365</span> Jobs Available In Hyderabad</h1>
						</div>
						<form action="{{route('job.list')}}" method="get">
						<div class=" search-background">
							<div class="form row no-gutters">
								<div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
									<input type="text" name="search" value="{{Request::get('search', '')}}" class="form-control input-lg border-right-0 br-tr-md-0 br-br-md-0" placeholder="{{__('Enter Skills, job title or Location')}}" />
								</div>

								<div class="col-xl-2 col-lg-3 col-md-12 mb-0">
									<button type="submit" class="btn btn-lg btn-block btn-secondary br-bl-0 br-tl-0"><i class="fa fa-search" aria-hidden="true"></i> {{__('Search Jobs')}}</button>

								</div>
							</div>
						</div>
						</form>

					</div>
				</div>
			</div>
		</div><!-- /header-text -->
	</div>
</div>
<!--/Sliders Section-->

<!--BreadCrumb-->
<div class="bg-white border-bottom">
	<div class="container">
		<div class="page-header">
			<h4 class="page-title">Jobs</h4>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Categories</a></li>
				<li class="breadcrumb-item active" aria-current="page">Jobs</li>
			</ol>
		</div>
	</div>
</div>
<!--/BreadCrumb-->

{{--<form action="{{route('job.list')}}" method="get">--}}
{{--	<!-- Page Title start -->--}}
{{--	<div class="pageSearch">--}}
{{--<div class="container">--}}
{{--				<div class="searchform">--}}
{{--					<div class="row">--}}
{{--						<div class="col-lg-9">--}}
{{--							<input type="text" name="search" value="{{Request::get('search', '')}}" class="form-control" placeholder="{{__('Enter Skills, job title or Location')}}" />--}}
{{--						</div>--}}

{{--						<div class="col-lg-3">--}}
{{--							<button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i> {{__('Search Jobs')}}</button>--}}
{{--						</div>--}}

{{--					</div>--}}
{{--				</div>--}}
{{--</div>--}}
{{--	</div>--}}
{{--	<!-- Page Title end -->--}}
{{--</form>--}}
