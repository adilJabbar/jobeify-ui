@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('Blog')])
<!-- Inner Page Title end -->

<!--Job listing-->
<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <!--Job lists-->
                <div class="row">
                    @if(null!==($blogs))
                        <?php
                        $count = 1;
                        ?>
                        @foreach($blogs as $blog)
                            <?php
                            $cate_ids = explode(",", $blog->cate_id);
                            $data = DB::table('blog_categories')->whereIn('id', $cate_ids)->get();
                            $cate_array = array();
                            foreach ($data as $cat) {
                                $cate_array[] = "<a href='" . url('/blog/category/') . "/" . $cat->slug . "'>$cat->heading</a>";
                            }
                            ?>
{{--                                <div class="postmeta">Category : {!!implode(', ',$cate_array)!!}--}}
{{--                                </div>--}}{{--          for category--}}
{{--                                {{dd($blog)}}--}}
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="ribbon ribbon-top-left text-warning"><span class="bg-warning">featured</span></div>
                                        <div class="row no-gutters blog-list">
                                            <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="item7-card-img">
                                                    <a href="{{url('jobs')}}"></a>
                                                    {{$blog->printBlogImage()}}
                                                    <div class="item7-card-text">
                                                        <span class="badge badge-warning">Jobs</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-12 col-md-12">
                                                <div class="card-body">
                                                    <div class="item7-card-desc d-flex mb-1">
                                                        <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>@php echo date_format($blog->created_at,"M:d:y");  @endphp </a>
                                                        <a href="#"><i class="fa fa-user text-muted mr-2"></i>Nissy Sten</a>
                                                        <div class="ml-auto">
                                                            <a class="mr-0"  href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-dark"><h4 class="font-weight-semibold mb-3">{{$blog->heading}}</h4></a>
                                                    <p class="mb-1">{!! \Illuminate\Support\Str::limit($blog->content, $limit = 150, $end = '...') !!}
                                                    </p>
                                                    <a href="#" class="btn btn-primary btn-sm mt-4">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <?php $count++; ?>
                        @endforeach
                    @endif




                </div>

                @php
                    $total=$blogs->total();
                    $per_page=$blogs->perPage();
                    $pages= ceil($total/$per_page);
                    $current_page=$blogs->currentPage();

                @endphp


                <div class="center-block text-center">
                    <ul class="pagination mb-5 mb-lg-0">

                        <li class="page-item page-prev {{($current_page==1)?'disabled':''}}">
                            <a class="page-link" href=" /jobs-list?page={{$current_page-1}}" tabindex="-1">Prev</a>
                        </li>
                        @for($i=1;$i<=$pages; $i++)
                            <li class="page-item {{($current_page==$i)?'active':''}}"><a class="page-link" href="/blogs?page={{$i}}">{{$i}}</a></li>
                        @endfor
                        <li class="page-item page-next {{($current_page==$pages)?'disabled':''}}">
                            <a class="page-link" href="/jobs-list?page={{$current_page+1}}">Next</a>
                        </li>

                    </ul>
                </div>



                <!--/Job lists-->
            </div>

            <!--Right Side Content-->
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control br-tl-3  br-bl-3" placeholder="Search">
                            <div class="input-group-append ">
                                <button type="button" class="btn btn-primary br-tr-3  br-br-3">
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
                    <div class="card-body p-0">
                        <div class="list-catergory">
                            <div class="item-list">
                                <ul class="list-group mb-0">
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-building bg-primary text-primary"></i> Java Developers
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">14</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-snowflake-o bg-success text-success"></i>Sales Executive
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">63</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-dribbble bg-info text-info"></i> IT Hardware
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">25</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-phone bg-warning text-warning"></i> Customercare
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">74</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-laptop bg-danger text-danger"></i> IT Software
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">18</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-car bg-blue text-blue"></i> Automobiles
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">32</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item border-bottom-0">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-pencil-square  bg-secondary text-pink"></i> Web Developer
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">08</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Jobs</h3>
                    </div>
                    <div class="card-body">
                        <div class="product-tags clearfix">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Web Developer</a></li>
                                <li><a href="#">IT Software</a></li>
                                <li><a href="#">IT Hardware</a></li>
                                <li><a href="#">Accountant</a></li>
                                <li><a href="#">Sales Executives</a></li>
                                <li><a href="#">HR Recruiter</a></li>
                                <li><a href="#">Drivers</a></li>
                                <li><a href="#">Teachers/Lecturers</a></li>
                                <li><a href="#">Delivery Boys</a></li>
                                <li><a href="#">Chef</a></li>
                                <li><a href="#" class="mb-0">Customer Support(BPO)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-header">
                        <h3 class="card-title">Blog Authors</h3>
                    </div>
                    <div class="card-body p-0">
                        <ul class="vertical-scroll">
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="../assets/images/users/female/18.jpg" alt="image" class="avatar brround  mr-2">
                                        <a href="#" class="time-title p-0 leading-normal mt-2">Boris	Nash <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ml-auto">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 16</span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 36</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="../assets/images/users/female/10.jpg" alt="image" class="avatar brround  mr-2">
                                        <a href="#" class="time-title p-0 leading-normal mt-2">Lorean Mccants <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ml-auto">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 43</span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 23</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="../assets/images/users/male/18.jpg" alt="image" class="avatar brround  mr-2">
                                        <a href="#" class="time-title p-0 leading-normal mt-2">Dewitt Hennessey <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ml-auto">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 34</span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 12</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="../assets/images/users/male/8.jpg" alt="image" class="avatar brround  mr-2">
                                        <a href="#" class="time-title p-0 leading-normal mt-2">Archie Overturf <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ml-auto">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 12</span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="../assets/images/users/female/21.jpg" alt="image" class="avatar brround  mr-2">
                                        <a href="#" class="time-title p-0 leading-normal mt-2">Barbra Flegle <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ml-auto">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 21</span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/Right Side Content-->
        </div>
    </div>
</section>
<!--All Listing-->

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




@include('includes.footer')
@endsection
@push('styles')
<style>
.plus-minus-input {
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.plus-minus-input .input-group-field {
    text-align: center;
    margin-left: 0.5rem;
    margin-right: 0.5rem;
    padding: 0rem;
}

.plus-minus-input .input-group-field::-webkit-inner-spin-button,
.plus-minus-input .input-group-field ::-webkit-outer-spin-button {
    -webkit-appearance: none;
    appearance: none;
}

.plus-minus-input .input-group-button .circle {
    border-radius: 50%;
    padding: 0.25em 0.8em;
}
</style>
@endpush
@push('scripts')
@include('includes.immediate_available_btn')
<script>
</script>
@endpush