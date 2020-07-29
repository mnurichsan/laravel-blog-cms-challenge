@include('layouts_frontend.header')
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="row banner_inner">
            <div class="col-lg-12">
                <div class="banner_content text-center">
                    <h2>{{$post->title}}</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="#artikel">Post Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_area p_120 single-post-area" id="artikel">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main_blog_details">
                    <img class="img-fluid" src="{{asset($post->image)}}" alt="" />
                    <a href="#">
                        <h4>
                            {{$post->title}}
                        </h4>
                    </a>
                    <div class="user_details">
                        <div class="float-left">
                            <a href="#">{{$post->category->name}}</a>
                        </div>
                        <div class="float-right">
                            <div class="media">
                                <div class="media-body">
                                    <h5>{{$post->user->name}}</h5>
                                    <p>{{$post->created_at->format('d m, Y i:s A')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>{!! $post->content !!}</p>
                    <div class="news_d_footer">
                        <div class="news_socail ml-auto">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Posts" />
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="lnr lnr-magnifier"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget author_widget">
                        <img class="author_img img-fluid" src="{{asset('assets_frontend/img/blog/author.png')}}" alt="" />
                        <h4>Muhammad Nur Ichsan B.</h4>
                        <p>Web Developer</p>
                        <p>
                            Seorang Developer web yang masih awam.
                        </p>
                        <div class="social_icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Post Catgories</h4>
                        <ul class="list cat-list">
                            @foreach($categories as $category)
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>{{$category->name}}</p>
                                    <p>{{$category->post_count}}</p>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

@include('layouts_frontend.footer')