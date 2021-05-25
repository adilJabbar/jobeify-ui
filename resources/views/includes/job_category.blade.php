<!--Categories-->
<section class="sptb">
    <div class="container">
        <div class="section-title center-block text-center">
            <h1>Job Categories</h1>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div class="item-all-cat center-block text-center education-categories">
            <div class="row">

                @if(isset($topFunctionalAreaIds) && count($topFunctionalAreaIds)) @foreach($topFunctionalAreaIds as $functional_area_id_num_jobs)
                    <?php
                    $functionalArea = App\ FunctionalArea::where('functional_area_id', '=', $functional_area_id_num_jobs->functional_area_id)->lang()->active()->first();
                    ?> @if(null !== $functionalArea)

{{--                        <li class="col-md-4 col-sm-6"><a href="{{route('job.list', ['functional_area_id[]'=>$functionalArea->functional_area_id])}}" title="{{$functionalArea->functional_area}}">{{$functionalArea->functional_area}} <span>({{$functional_area_id_num_jobs->num_jobs}})</span></a>--}}
{{--                        </li>--}}

                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="item-all-card text-dark text-center">
                                    <a href="{{route('job.list', ['functional_area_id[]'=>$functionalArea->functional_area_id])}}" title="{{$functionalArea->functional_area}}"></a>
                                    <div class="iteam-all-icon">
                                        <img src="{{asset('/')}}theme_jobeify/assets/images/products/categories/cashier.png" class="imag-service"  title="{{$functionalArea->functional_area}}">
                                    </div>
                                    <div class="item-all-text mt-3">
                                        <h5 class="mb-0 text-body">{{$functionalArea->functional_area}} </h5>
                                    </div>
                                </div>
                            </div>

                    @endif @endforeach @endif

            </div>
            <div class="mt-4">
                <a href="#" class="btn  btn-primary">View More</a>
            </div>
        </div>
    </div>
</section>
<!--Categories-->
