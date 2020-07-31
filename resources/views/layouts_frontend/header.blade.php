<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{asset('assets_frontend/img/favicon.png')}}" type="image/png" />
    <title>Ichsan Blog</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets_frontend/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_frontend/vendors/linericon/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_frontend/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_frontend/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_frontend/vendors/lightbox/simpleLightbox.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_frontend/vendors/nice-select/css/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_frontend/vendors/animate-css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_frontend/vendors/jquery-ui/jquery-ui.css')}}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('assets_frontend/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_frontend/css/responsive.css')}}" />
</head>

<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('assets_frontend/img/logo.png')}}" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('blog.index')}}">Home</a>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category</a>
                                <ul class="dropdown-menu">
                                    @foreach($categories as $category)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('category.post',$category->slug)}}">{{$category->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right header_social ml-auto">
                            <li class="nav-item">
                                <a target="_blank" href="https://facebook.com/muh.n.ichsan.9"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="nav-item">
                                <a target="_blank" href="https://twitter.com/ichsantuy"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="logo_part">
            <div class="container">
                <h3 class="title_color">Ichsan Blog | Personal Blog</h3>
            </div>
        </div>
    </header>