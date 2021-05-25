<!--Blogs-->
<section class="sptb bg-white">
    <div class="container">
        <div class="section-title center-block text-center">
            <h1>{{__('Latest')}} <span>{{__('Blogs')}}</span></h1>
            <p>{{__('Here You Can See')}}</p>
        </div>
        <div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons">
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
                        <div class="item">
                <div class="card mb-0">
                    <div class="item7-card-img">
                        <a href="#"></a>
                        @if(null!==($blog->image) && $blog->image!="")

                            <img src="{{asset('uploads/blogs/'.$blog->image)}}"
                                 alt="{{$blog->heading}}" class="cover-image">
                        @else
                            <img src="{{asset('images/blog/1.jpg')}}"
                                 alt="{{$blog->heading}}" class="cover-image">
                        @endif

                    </div>
                    <div class="card-body p-4">
                        <div class="item7-card-desc d-flex mb-2">
                            <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Dec-03-2018</a>
                            <div class="ml-auto">
                                <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
                            </div>
                        </div>
                        <a href="{{route('blog-detail',$blog->slug)}}" class="text-dark"><h4 class="font-weight-semibold">{{$blog->heading}}</h4></a>
                        <p>{!! \Illuminate\Support\Str::limit($blog->content, $limit = 150, $end = '...') !!} </p>
                        <div class="d-flex align-items-center pt-2 mt-auto">
                            <img src="../assets/images/users/male/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
                            <div>
                                <a href="profile.html" class="text-default">Joanne Nash</a>
                                <small class="d-block text-muted">1 day ago</small>
                            </div>
                            <div class="ml-auto text-muted">
                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <?php $count++; ?>
                    @endforeach
            @endif
        </div>
        <!--view button-->
        <div class="viewallbtn"><a href="{{route('blogs')}}">{{__('View All Blog Posts')}}</a></div>
        <!--view button end-->
    </div>
</section>
<!--Blogs-->

{{--<div class="section">--}}
{{--    <div class="container"> --}}
{{--        <!-- title start -->--}}
{{--        <div class="titleTop">--}}
{{--            <div class="subtitle">{{__('Here You Can See')}}</div>--}}
{{--            <h3>{{__('Latest')}} <span>{{__('Blogs')}}</span></h3>--}}
{{--        </div>--}}
{{--        <!-- title end -->--}}

{{--        <ul class="jobslist row">--}}
{{--           @if(null!==($blogs))--}}
{{--                        <?php--}}
{{--                        $count = 1;--}}
{{--                        ?>--}}
{{--                        @foreach($blogs as $blog)--}}
{{--                        <?php--}}
{{--                        $cate_ids = explode(",", $blog->cate_id);--}}
{{--                        $data = DB::table('blog_categories')->whereIn('id', $cate_ids)->get();--}}
{{--                        $cate_array = array();--}}
{{--                        foreach ($data as $cat) {--}}
{{--                            $cate_array[] = "<a href='" . url('/blog/category/') . "/" . $cat->slug . "'>$cat->heading</a>";--}}
{{--                        }--}}
{{--                        ?>--}}
{{--                        <li class="col-lg-4">--}}
{{--                            <div class="bloginner">--}}
{{--                                <div class="postimg">--}}
{{--									@if(null!==($blog->image) && $blog->image!="")--}}

{{--									<img src="{{asset('uploads/blogs/'.$blog->image)}}"--}}
{{--                                        alt="{{$blog->heading}}">--}}
{{--									@else--}}
{{--									<img src="{{asset('images/blog/1.jpg')}}"--}}
{{--                                        alt="{{$blog->heading}}">--}}
{{--									@endif--}}
{{--								</div>--}}

{{--                                <div class="post-header">--}}
{{--                                    <h4><a href="{{route('blog-detail',$blog->slug)}}">{{$blog->heading}}</a></h4>--}}
{{--                                    <div class="postmeta">Category : {!!implode(', ',$cate_array)!!}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <p>{!! \Illuminate\Support\Str::limit($blog->content, $limit = 150, $end = '...') !!}</p>--}}

{{--                            </div>--}}
{{--                        </li>--}}

{{--                        --}}
{{--                        <?php $count++; ?>--}}
{{--                        @endforeach--}}
{{--                        @endif--}}
{{--        </ul>--}}
{{--        <!--view button-->--}}
{{--        <div class="viewallbtn"><a href="{{route('blogs')}}">{{__('View All Blog Posts')}}</a></div>--}}
{{--        <!--view button end--> --}}
{{--    </div>--}}
{{--</div>--}}
