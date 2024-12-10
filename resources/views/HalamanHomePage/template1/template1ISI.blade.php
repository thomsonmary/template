<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Mag - IT &amp; Magazine IT</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset("5.template1/img/core-img/favicon.ico") }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset("5.template1/style.css")}}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="index.html" class="nav-brand"><img src={{ asset("5.template1/img/core-img/logo.png") }} alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="archive.html">Archive</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive.html">Archive</a></li>
                                            <li><a href="video-post.html">Single Video Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="submit-video.html">Submit Video</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Mega</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="archive.html">Archive</a></li>
                                                <li><a href="video-post.html">Single Video Post</a></li>
                                                <li><a href="single-post.html">Single Post</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="login.html">Login</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="archive.html">Archive</a></li>
                                                <li><a href="video-post.html">Single Video Post</a></li>
                                                <li><a href="single-post.html">Single Post</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="login.html">Login</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="archive.html">Archive</a></li>
                                                <li><a href="video-post.html">Single Video Post</a></li>
                                                <li><a href="single-post.html">Single Post</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="login.html">Login</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="archive.html">Archive</a></li>
                                                <li><a href="video-post.html">Single Video Post</a></li>
                                                <li><a href="single-post.html">Single Post</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="login.html">Login</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="index.html" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            <a href="login.html" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <!-- Submit Video -->
                            <a href="submit-video.html" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Submit Video</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area owl-carousel">
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url( {{asset("5.template1/img/bg-img/1.jpg")}} );">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">August 17, 2021</a>
                                <a href="archive.html">lifestyle</a>
                            </div>
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Technology Make Your Life Easier. . .</a>
                            <a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url( {{asset("5.template1/img/bg-img/2.jpg")}} );">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">August 17, 2021</a>
                                <a href="archive.html">lifestyle</a>
                            </div>
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Technology Make Your Life Better. . .</a>
                            <a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url( {{asset("5.template1/img/bg-img/3.jpg") }});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">August 17, 2021</a>
                                <a href="archive.html">lifestyle</a>
                            </div>
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Technology Make Your Life Easier, Better and More Value !</a>
                            <a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Most Popular</h5>
                </div>

                <!-- Single Blog Post -->
                @foreach ($categoriesusers->sortByDesc('view')->slice(0, 5) as $mostpopular)
                @if ($mostpopular->aktif=="Y" && $mostpopular->view)
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{ $mostpopular->gambar_berita }}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="{{ route('news', $mostpopular->sluk ) }}" class="post-title">
                            {{ $mostpopular->judul_berita_ina, 0, 10 }}
                        </a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $mostpopular->view }}</a>
                            <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $mostpopular->tanggal }}</a>
                       
                     </div>
                    </div>
                </div>
                @endif
                @endforeach

            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="{{asset("5.template1/img/bg-img/add.png")}}" alt=""></a>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Latest News</h5>
                </div>

                <!-- Single Blog Post -->
                @foreach ($categoriesusers->slice(1, 10) as $latest)
                @if ($latest->aktif=="Y" && $latest->view)
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{ $latest->gambar_berita }}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="{{ route('news', $latest->sluk ) }}" class="post-title">
                            {{ $latest->judul_berita_ina, 0, 10 }}
                        </a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $latest->view }}</a>
                            <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $latest->tanggal }}</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach




            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
            <!-- Trending Now Posts Area -->
            <div class="trending-now-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>TRENDING NOW</h5>
                </div>

                <div class="trending-post-slides owl-carousel">
                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        @foreach ($categoriesusers->sortByDesc('id')->slice(0, 1) as $trending)
                        @if ($trending->aktif ===  'Y' && $trending->headline === 'Y')
                        <img src="{{ $trending->gambar_berita }}" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Video</a>
                            <a href="video-post.html" class="post-title">{!! substr($trending->judul_berita_ina, 0, 10) !!}</a>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="single-trending-post">
                        @foreach ($categoriesusers->sortByDesc('id')->slice(1, 1) as $trending)
                        @if ($trending->aktif === 'Y' && $trending->headline === 'Y')
                        <img src="{{ $trending->gambar_berita }}" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Video</a>
                            <a href="video-post.html" class="post-title">{!! substr($trending->judul_berita_ina, 0, 10) !!}</a>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="single-trending-post">
                        @foreach ($categoriesusers->sortByDesc('id')->slice(2, 1) as $trending)
                        @if ($trending->aktif === 'Y' && $trending->headline === 'Y')
                        <img src="{{ $trending->gambar_berita }}" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Video</a>
                            <a href="video-post.html" class="post-title">{!! substr($trending->judul_berita_ina, 0, 10) !!}</a>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="single-trending-post">
                        @foreach ($categoriesusers->sortByDesc('id')->slice(3, 1) as $trending)
                        @if ($trending->aktif === 'Y' && $trending->headline === 'Y')
                        <img src="{{ $trending->gambar_berita }}" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Video</a>
                            <a href="video-post.html" class="post-title">{!! substr($trending->judul_berita_ina, 0, 10) !!}</a>
                        </div>
                        @endif
                        @endforeach
                    </div>

                    <!-- Single Trending Post 
                    <div class="single-trending-post">
                        <img src=" " alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">TV Show</a>
                            <a href="video-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                        </div>
                    </div> -->

                </div>
            </div>

            <!-- Feature Video Posts Area -->
            <div class="feature-video-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Featured News</h5>
                </div>

                <div class="featured-video-posts">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <!-- Single Featured Post -->
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                @foreach ($categoriesusers->slice(0, 1) as $tampiltunggal)
                                @if ($tampiltunggal->headline == 'Y' && $tampiltunggal->aktif == 'Y' )
                                <div class="post-thumbnail mb-50">
                                    <img src="{{ $tampiltunggal->gambar_berita }}" alt="">
                                    <a href="{{ route('news', $tampiltunggal->sluk ) }}" 
                                        class="video-play"><i class="fa fa-play"></i>
                                    </a>
                                </div>
                                <!-- Post Contetnt -->
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">{{ $tampiltunggal->tanggal }}</a>
                                        <a href="#">{{ $tampiltunggal->name }}</a>
                                    </div>
                                    <a href="{{ route('news', $tampiltunggal->sluk ) }}" class="post-title">
                                        {{ $tampiltunggal->judul_berita_ina }}
                                    </a>
                                    <p>
                                        {!! substr($tampiltunggal->isi_berita_ina, 0, 150) !!}
                                    </p>
                                        <a href="{{ route('news', $tampiltunggal->sluk ) }}">[...]</a>
                                    
                                </div>
                                @endif
                                @endforeach
                                <!-- Post Share Area -->
                                <div class="post-share-area d-flex align-items-center justify-content-between">
                                    <!-- Post Meta -->
                                    <div class="post-meta pl-3">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{ $tampiltunggal->view }}</a>
                                        <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $tampiltunggal->tanggal }}</a>
                                    </div>
                                    <!-- Share Info -->
                                    <div class="share-info">
                                        <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                        <!-- All Share Buttons -->
                                        <div class="all-share-btn d-flex">
                                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                           
                           
                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- Featured Video Posts Slide -->
                            <div class="featured-video-posts-slide owl-carousel">

                                <div class="single--slide">
                                    <!-- Single Blog Post -->
                                    @foreach ($categoriesusers->sortByDesc('id')->slice(1, 3) as $tampillima)
                                    @if ($tampillima->aktif === 'Y' && $tampillima->headline === 'Y')
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="{{ $tampillima->gambar_berita }}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="{{ route('news', $tampillima->sluk ) }}" class="post-title">
                                                {{ $tampillima->judul_berita_ina, 0, 10 }}
                                            </a>
                                            
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $tampillima->view }}</a>
                                                <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $tampillima->tanggal }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="single--slide">
                                    <!-- Single Blog Post -->
                                    @foreach ($categoriesusers->sortByDesc('id')->slice(2, 3) as $tampillima)
                                    @if ($tampillima->aktif === 'Y' && $tampillima->headline === 'Y' )
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="{{ $tampillima->gambar_berita }}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="{{ route('news', $tampillima->sluk ) }}" class="post-title">
                                                {{ $tampillima->judul_berita_ina, 0, 10 }}
                                            </a>
                                            
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $tampillima->view }}</a>
                                                <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $tampillima->tanggal }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Most Viewed News -->
            <div class="most-viewed-videos mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Most Viewed News</h5>
                </div>

                <div class="most-viewed-videos-slide owl-carousel">

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        @foreach($categoriesusers->sortBy('view')->slice(0, 1) as $mostviewed)
                        @if($mostviewed->aktif === 'Y')
                        <div class="post-thumbnail">
                            <img src="{{ $mostviewed->gambar_berita }}" alt="">
                            <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">{{ $mostviewed->view }}</span>
                        </div>
                        <div class="post-content">
                            <a href="{{route('news', $mostviewed->sluk)}}" class="post-title">{{ substr($mostviewed->judul_berita_ina, 0, 25) }}</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $mostviewed->view }}</a>
                                <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $mostviewed->tanggal }}</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        @foreach($categoriesusers->sortBy('view')->slice(1, 1) as $mostviewed)
                        @if($mostviewed->aktif === 'Y')
                        <div class="post-thumbnail">
                            <img src="{{ $mostviewed->gambar_berita }}" alt="">
                            <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">{{ $mostviewed->view }}</span>
                        </div>
                        <div class="post-content">
                            <a href="{{route('news', $mostviewed->sluk)}}" class="post-title">{{ substr($mostviewed->judul_berita_ina, 0, 25) }}</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $mostviewed->view }}</a>
                                <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $mostviewed->tanggal }}</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>


                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        @foreach($categoriesusers->sortBy('view')->slice(2, 1) as $mostviewed)
                        @if($mostviewed->aktif === 'Y')
                        <div class="post-thumbnail">
                            <img src="{{ $mostviewed->gambar_berita }}" alt="">
                            <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">{{ $mostviewed->view }}</span>
                        </div>
                        <div class="post-content">
                            <a href="{{route('news', $mostviewed->sluk)}}" class="post-title">{{ substr($mostviewed->judul_berita_ina, 0, 25) }}</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $mostviewed->view }}</a>
                                <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $mostviewed->tanggal }}</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        @foreach($categoriesusers->sortBy('view')->slice(3, 1) as $mostviewed)
                        @if($mostviewed->aktif === 'Y')
                        <div class="post-thumbnail">
                            <img src="{{ $mostviewed->gambar_berita }}" alt="">
                            <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">{{ $mostviewed->view }}</span>
                        </div>
                        <div class="post-content">
                            <a href="{{route('news', $mostviewed->sluk)}}" class="post-title">{{ substr($mostviewed->judul_berita_ina, 0, 25) }}</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $mostviewed->view }}</a>
                                <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $mostviewed->tanggal }}</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>


                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        @foreach($categoriesusers->sortBy('view')->slice(4, 1) as $mostviewed)
                        @if($mostviewed->aktif === 'Y')
                        <div class="post-thumbnail">
                            <img src="{{ $mostviewed->gambar_berita }}" alt="">
                            <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">{{ $mostviewed->view }}</span>
                        </div>
                        <div class="post-content">
                            <a href="{{route('news', $mostviewed->sluk)}}" class="post-title">{{ substr($mostviewed->judul_berita_ina, 0, 25) }}</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $mostviewed->view }}</a>
                                <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $mostviewed->tanggal }}</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        @foreach($categoriesusers->sortBy('view')->slice(5, 1) as $mostviewed)
                        @if($mostviewed->aktif === 'Y')
                        <div class="post-thumbnail">
                            <img src="{{ $mostviewed->gambar_berita }}" alt="">
                            <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">{{ $mostviewed->view }}</span>
                        </div>
                        <div class="post-content">
                            <a href="{{route('news', $mostviewed->sluk)}}" class="post-title">{{ substr($mostviewed->judul_berita_ina, 0, 25) }}</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $mostviewed->view }}</a>
                                <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $mostviewed->tanggal }}</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>


                </div>
            </div>

            <!-- Sports Videos -->
            <div class="sports-videos-area">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Older News</h5>
                </div>

                <div class="sports-videos-slides owl-carousel mb-30">
                    <!-- Single Featured Post -->
                    <div class="single-featured-post">
                        @foreach ($categoriesusers->sortBy('id')->slice(1, 1) as $bukanheadline)
                        @if ($bukanheadline->headline == 'N' )
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            <img src="{{ $bukanheadline->gambar_berita }}" alt="">
                            <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">{{$bukanheadline->tanggal}}</a>
                                <a href="#">{{$bukanheadline->slug_kategori}}</a>
                            </div>
                            <a href="{{ route('news', $bukanheadline->sluk ) }}" class="post-title">
                                {{ substr($bukanheadline->judul_berita_ina, 0, 30) }}</a>
                            <p> {!! substr($bukanheadline->isi_berita_ina, 0, 210) !!} </p>
                            <a href="{{ route('news', $bukanheadline->sluk ) }}">[...]</a>
                        </div>
                        <!-- Post Share Area -->
                        <div class="post-share-area d-flex align-items-center justify-content-between">
                            <!-- Post Meta -->
                            <div class="post-meta pl-3">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $bukanheadline->view }}</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $bukanheadline->tanggal }}</a>
                            </div>
                            <!-- Share Info -->
                            <div class="share-info">
                                <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                <!-- All Share Buttons -->
                                <div class="all-share-btn d-flex">
                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach    
                    </div>
                    <!-- Single Featured Post -->
                    <div class="single-featured-post">
                        @foreach ($categoriesusers->sortBy('id')->slice(2, 1) as $bukanheadline)
                        @if ($bukanheadline->headline == 'N' )
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            <img src="{{ $bukanheadline->gambar_berita }}" alt="">
                            <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">{{$bukanheadline->tanggal}}</a>
                                <a href="#">{{$bukanheadline->slug_kategori}}</a>
                            </div>
                            <a href="{{ route('news', $bukanheadline->sluk ) }}" class="post-title">
                                {{ substr($bukanheadline->judul_berita_ina, 0, 30) }}</a>
                            <p> {!! substr($bukanheadline->isi_berita_ina, 0, 230) !!} </p>
                            <a href="{{ route('news', $bukanheadline->sluk ) }}">[...]</a>
                        </div>
                        <!-- Post Share Area -->
                        <div class="post-share-area d-flex align-items-center justify-content-between">
                            <!-- Post Meta -->
                            <div class="post-meta pl-3">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $bukanheadline->view }}</a>
                                <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $bukanheadline->tanggal }}</a>
                            </div>
                            <!-- Share Info -->
                            <div class="share-info">
                                <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                <!-- All Share Buttons -->
                                <div class="all-share-btn d-flex">
                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach    
                    </div>
                    <!-- Single Featured Post -->
                    <div class="single-featured-post">
                        @foreach ($categoriesusers->sortBy('id')->slice(3, 1) as $bukanheadline)
                        @if ($bukanheadline->headline == 'N' )
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            <img src="{{ $bukanheadline->gambar_berita }}" alt="">
                            <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">{{$bukanheadline->tanggal}} </a>
                                <a href="#">{{$bukanheadline->slug_kategori}}</a>
                            </div>
                            <a href="{{ route('news', $bukanheadline->sluk ) }}" class="post-title">
                                {{ substr($bukanheadline->judul_berita_ina, 0, 30) }}</a>
                            <p> {!! substr($bukanheadline->isi_berita_ina, 0, 230) !!} </p>
                            <a href="{{ route('news', $bukanheadline->sluk ) }}">[...]</a>
                        </div>
                        <!-- Post Share Area -->
                        <div class="post-share-area d-flex align-items-center justify-content-between">
                            <!-- Post Meta -->
                            <div class="post-meta pl-3">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $bukanheadline->view }}</a>
                                <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $bukanheadline->tanggal }}</a>
                            </div>
                            <!-- Share Info -->
                            <div class="share-info">
                                <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                <!-- All Share Buttons -->
                                <div class="all-share-btn d-flex">
                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach    
                    </div>

                </div>

                <div class="row">
                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        @foreach($categoriesusers->slice(1, 1) as $tampilakhir)
                        @if($tampilakhir->aktif === 'Y' && $tampilakhir->headline === 'N')
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="{{ $tampilakhir->gambar_berita }}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="{{ route('news', $tampilakhir->sluk) }}" class="post-title">
                                    {!! substr($tampilakhir->judul_berita_ina, 0, 30) !!}</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $tampilakhir->view }}</a>
                                    <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $tampilakhir->tanggal }}</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        @foreach($categoriesusers->slice(2, 1) as $tampilakhir)
                        @if($tampilakhir->aktif === 'Y' && $tampilakhir->headline === 'N')
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="{{ $tampilakhir->gambar_berita }}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="{{ route('news', $tampilakhir->sluk) }}" class="post-title">
                                    {!! substr($tampilakhir->judul_berita_ina, 0, 30) !!}</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $tampilakhir->view }}</a>
                                    <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $tampilakhir->tanggal }}</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        @foreach($categoriesusers->slice(3, 1) as $tampilakhir)
                        @if($tampilakhir->aktif === 'Y' && $tampilakhir->headline === 'N')
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="{{ $tampilakhir->gambar_berita }}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="{{ route('news', $tampilakhir->sluk) }}" class="post-title">
                                    {!! substr($tampilakhir->judul_berita_ina, 0, 30) !!}</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $tampilakhir->view }}</a>
                                    <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $tampilakhir->tanggal }}</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        @foreach($categoriesusers->slice(4, 1) as $tampilakhir)
                        @if($tampilakhir->aktif === 'Y' && $tampilakhir->headline === 'N')
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="{{ $tampilakhir->gambar_berita }}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="{{ route('news', $tampilakhir->sluk) }}" class="post-title">
                                    {!! substr($tampilakhir->judul_berita_ina, 0, 30) !!}</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $tampilakhir->view }}</a>
                                    <a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $tampilakhir->tanggal }}</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Social Followers Info -->
                <div class="social-followers-info">
                    <!-- Facebook -->
                    <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                    <!-- Twitter -->
                    <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>
                    <!-- YouTube -->
                    <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>
                    <!-- Google -->
                    <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Categories</h5>
                </div>

                <!-- Catagory Widget categorie-7/hardware -->
                <ul class="catagory-widgets"> 
                    <li>@foreach ($tampilKategori1 as $tampil)
                        <a href="{{ route($tampil->id, $tampil->slug_kategori) }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{ $tampil->nama_kategori }}@endforeach</span> 
                        <span> {{ $hitungKategori1->count() }}</span>
                        </a>
                    </li>
                    <li>@foreach ($tampilKategori2 as $tampil)
                        <a href="{{ route($tampil->id, $tampil->slug_kategori) }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{ $tampil->nama_kategori }}@endforeach</span> 
                        <span> {{ $hitungKategori2->count() }}</span>
                        </a>
                    </li>
                    <li>@foreach ($tampilKategori3 as $tampil)
                        <a href="{{ route($tampil->id, $tampil->slug_kategori) }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{ $tampil->nama_kategori }}@endforeach</span> 
                        <span> {{ $hitungKategori3->count() }}</span>
                        </a>
                    </li>
                    <li>@foreach ($tampilKategori4 as $tampil)
                        <a href="{{ route($tampil->id, $tampil->slug_kategori) }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{ $tampil->nama_kategori }}@endforeach</span> 
                        <span> {{ $hitungKategori4->count() }}</span>
                        </a>
                    </li>
                    <li>@foreach ($tampilKategori5 as $tampil)
                        <a href="{{ route($tampil->id, $tampil->slug_kategori) }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{ $tampil->nama_kategori }}@endforeach</span> 
                        <span> {{ $hitungKategori5->count() }}</span>
                        </a>
                    </li>
                    <li>@foreach ($tampilKategori6 as $tampil)
                        <a href="{{ route($tampil->id, $tampil->slug_kategori) }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{ $tampil->nama_kategori }}@endforeach</span> 
                        <span> {{ $hitungKategori6->count() }}</span>
                        </a>
                    </li>
                    <li>@foreach ($tampilKategori7 as $tampil)
                        <a href="{{ route($tampil->id, $tampil->slug_kategori) }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{ $tampil->nama_kategori }}@endforeach</span> 
                        <span> {{ $hitungKategori7->count() }}</span>
                        </a>
                    </li>
                    <li>@foreach ($tampilKategori8 as $tampil)
                        <a href="{{ route($tampil->id, $tampil->slug_kategori) }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{ $tampil->nama_kategori }}@endforeach</span> 
                        <span> {{ $hitungKategori8->count() }}</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="{{asset("5.template1/img/bg-img/add2.png")}}" alt=""></a>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Hot Channels</h5>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="{{asset("5.template1/img/bg-img/14.jpg")}}" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">TV Show</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="{{asset("5.template1/img/bg-img/15.jpg")}}" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">Game Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="{{asset("5.template1/img/bg-img/16.jpg")}}" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">Sport Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="{{asset("5.template1/img/bg-img/17.jpg")}}" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">Travel Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="{{asset("5.template1/img/bg-img/18.jpg")}}" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">LifeStyle Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Newsletter</h5>
                </div>

                <div class="newsletter-form">
                    <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                    <form action="#" method="get">
                        <input type="search" name="widget-search" placeholder="Enter your email">
                        <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Mag Posts Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <!-- Logo -->
                        <a href="index.html" class="foo-logo"><img src="{{asset("5.template1/img/core-img/logo2.png")}}" alt=""></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="footer-social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Categories</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tech</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Music</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Foods</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fashion</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Football</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sports</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> TV Show</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Sport News</h6>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="{{asset("5.template1/img/bg-img/12.jpg")}}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Take A Romantic Break In A Boutique Hotel</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="{{asset("5.template1/img/bg-img/13.jpg")}}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Travel Prudently Luggage And Carry On</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Channels</h6>
                        <ul class="footer-tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Fashionista</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">DESIGN</a></li>
                            <li><a href="#">NEWS</a></li>
                            <li><a href="#">TRENDING</a></li>
                            <li><a href="#">VIDEO</a></li>
                            <li><a href="#">Game</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Foods</a></li>
                            <li><a href="#">TV Show</a></li>
                            <li><a href="#">Twitter Video</a></li>
                            <li><a href="#">Playing</a></li>
                            <li><a href="#">clips</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Advertisement</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src={{ asset("5.template1/js/jquery/jquery-2.2.4.min.js")}}></script>
    <!-- Popper js -->
    <script src={{ asset("5.template1/js/bootstrap/popper.min.js")}}></script>
    <!-- Bootstrap js -->
    <script src={{ asset("5.template1/js/bootstrap/bootstrap.min.js")}}></script>
    <!-- All Plugins js -->
    <script src={{ asset("5.template1/js/plugins/plugins.js")}}></script>
    <!-- Active js -->
    <script src={{ asset("5.template1/js/active.js")}}></script>
</body>

</html>