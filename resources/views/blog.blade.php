@include('layouts_frontend.header')

<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
                <div class="blog_text_slider owl-carousel">
                    <div class="item">
                        <div class="blog_text">
                            <a href="#">
                                <h4>Welcome To My Personal Blog</h4>
                            </a>
                            <a class="blog_btn" href="#blog">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_area p_120">
    <div class="container">
        <div class="row" id="blog">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">
                    <div class="row">
                        @forelse($posts as $post)
                        <div class="col-md-6">
                            <article class="blog_style1 small">
                                <div class="blog_img">
                                    <img class="img-fluid" src="{{asset($post->image)}}" alt="" />
                                </div>
                                <div class="blog_text">
                                    <div class="blog_text_inner">
                                        <div class="cat">
                                            <a class="cat_btn" href="{{route('category.post',$post->category->slug)}}">{{$post->category->name}}</a>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            {{$post->created_at->format('d m Y')}}
                                            <i class="fa fa-user ml-5" aria-hidden="true"></i>
                                            {{$post->user->name}}

                                        </div>
                                        <a href="{{route('post.desc',$post->slug)}}">
                                            <h4>{{$post->title}}</h4>
                                        </a>
                                        <p>
                                            {!! Str::words($post->excerpt, $words = 20, $end = '..') !!}
                                        </p>
                                        <a class="blog_btn" href="{{route('post.desc',$post->slug)}}">Read More</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @empty
                        <h1>No Articel</h1>
                        @endforelse
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
                        <img class="author_img img-fluid" src="{{asset('assets_frontend/img/blog/ichsan.jpg')}}" alt="" />
                        <h4>Ichsan </h4>
                        <p>Web Developer</p>
                        <p>
                            Seorang Developer web yang masih awam.
                        </p>
                        <div class="social_icon">
                            <a target="_blank" href="https://facebook.com/muh.n.ichsan.9"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://twitter.com/ichsantuy"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://github.com/mnurichsan"><i class="fa fa-github"></i></a>
                        </div>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Post Catgories</h4>
                        <ul class="list cat-list">
                            @foreach($categories as $category)
                            <li>
                                <a href="{{route('category.post',$category->slug)}}" class="d-flex justify-content-between">
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
        {{$posts->links()}}
    </div>

</section>
<!--================Blog Area =================-->

@include('layouts_frontend.footer')