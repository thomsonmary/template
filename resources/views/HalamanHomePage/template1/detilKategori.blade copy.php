<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Mag - Video &amp; Magazine HTML Template</title>

    <!-- Favicon -->
    <link href="{{asset('5.template1/img/core-img/favicon.ico')}}" rel="icon" >

    <!-- Stylesheet -->
    <link href="{{asset('5.template1/style.css')}}" rel="stylesheet">

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
                    <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

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
                                    <li class="active"><a href="index.html">Home</a></li>
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
<!-- ##### Header Area End :: KATEGORI 1  ##### -->
@if ( $categoriesusers->categorie_id = 2 )
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(https://i.ibb.co/y8Dr7Jg/bannerlaravel.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Laravel</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Feature</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Archive by Category <b> “Laravel” </b></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endif

        <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">

                        <!-- Single Catagory 1 Post -->
                        @foreach ($categoriesusers as $key => $tampil)
                        @if($tampil->categorie_id == 1)
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url({{$tampil->gambar_berita}});">
                                <a href="{{route('news', $tampil->sluk)}}" class="video-play"><i class="fa fa-play"></i></a>
                            </div>
                        
                            
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">{{$tampil->tanggal}}</a>
                                    <a href="{{route($tampil->categorie_id, $tampil->slug_kategori)}}">{{$tampil->nama_kategori}}</a>
                                </div>
                                <a href="{{route('news', $tampil->sluk)}}" class="post-title">{{$tampil->judul_berita_ina}}</a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$tampil->view}}</a>
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>{{$tampil->name}}</a>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum. Sed ut perspiciatis lorem150</p>
                            </div>
                        </div>
                        <!-- Single Catagory 2 Post -->
                        @elseif($tampil->categorie_id == 2)
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url({{$tampil->gambar_berita}});">
                                <a href="{{route('news', $tampil->sluk)}}" class="video-play"><i class="fa fa-play"></i></a>
                            </div>
                        
                            
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">{{$tampil->tanggal}}</a>
                                    <a href="{{route($tampil->categorie_id, $tampil->slug_kategori)}}">{{$tampil->nama_kategori}}</a>
                                </div>
                                <a href="{{route('news', $tampil->sluk)}}" class="post-title">{{$tampil->judul_berita_ina}}</a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$tampil->view}}</a>
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>{{$tampil->name}}</a>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum. Sed ut perspiciatis lorem150</p>
                            </div>
                        </div>
                        <!-- Pagination -->
                            <nav>
                            <ul class="pagination">
                               {{ $categoriesusers->links() }}
                            </ul>
                            </nav> 
                        <!-- Single Catagory 3 Post -->
                        @elseif($tampil->categorie_id == 3)
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url({{$tampil->gambar_berita}});">
                                <a href="{{route('news', $tampil->sluk)}}" class="video-play"><i class="fa fa-play"></i></a>
                            </div>
                        
                            
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">{{$tampil->tanggal}}</a>
                                    <a href="{{route($tampil->categorie_id, $tampil->slug_kategori)}}">{{$tampil->nama_kategori}}</a>
                                </div>
                                <a href="{{route('news', $tampil->sluk)}}" class="post-title">{{$tampil->judul_berita_ina}}</a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$tampil->view}}</a>
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>{{$tampil->name}}</a>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum. Sed ut perspiciatis lorem150</p>
                            </div>
                        </div>
                        <!-- Pagination -->
                            <nav>
                            <ul class="pagination">
                               {{ $categoriesusers->links() }}
                            </ul>
                            </nav>   
                        <!-- Single Catagory 4 Post -->
                        @elseif($tampil->categorie_id == 4)
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url({{$tampil->gambar_berita}});">
                                <a href="{{route('news', $tampil->sluk)}}" class="video-play"><i class="fa fa-play"></i></a>
                            </div>
                        
                            
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">{{$tampil->tanggal}}</a>
                                    <a href="{{route($tampil->categorie_id, $tampil->slug_kategori)}}">{{$tampil->nama_kategori}}</a>
                                </div>
                                <a href="{{route('news', $tampil->sluk)}}" class="post-title">{{$tampil->judul_berita_ina}}</a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$tampil->view}}</a>
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>{{$tampil->name}}</a>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum. Sed ut perspiciatis lorem150</p>
                            </div>
                        </div>
                        <!-- Pagination -->
                            <nav>
                            <ul class="pagination">
                               {{ $categoriesusers->links() }}
                            </ul>
                            </nav>    
                        <!-- Single Catagory 5 Post -->
                        @elseif($tampil->categorie_id == 5)
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url({{$tampil->gambar_berita}});">
                                <a href="{{route('news', $tampil->sluk)}}" class="video-play"><i class="fa fa-play"></i></a>
                            </div>
                        
                            
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">{{$tampil->tanggal}}</a>
                                    <a href="{{route($tampil->categorie_id, $tampil->slug_kategori)}}">{{$tampil->nama_kategori}}</a>
                                </div>
                                <a href="{{route('news', $tampil->sluk)}}" class="post-title">{{$tampil->judul_berita_ina}}</a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$tampil->view}}</a>
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>{{$tampil->name}}</a>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum. Sed ut perspiciatis lorem150</p>
                            </div>
                        </div>
                        <!-- Pagination -->
                            <nav>
                            <ul class="pagination">
                               {{ $categoriesusers->links() }}
                            </ul>
                            </nav>    
                        <!-- Single Catagory 6 Post -->
                        @elseif($tampil->categorie_id == 6)
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url({{$tampil->gambar_berita}});">
                                <a href="{{route('news', $tampil->sluk)}}" class="video-play"><i class="fa fa-play"></i></a>
                            </div>
                        
                            
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">{{$tampil->tanggal}}</a>
                                    <a href="{{route($tampil->categorie_id, $tampil->slug_kategori)}}">{{$tampil->nama_kategori}}</a>
                                </div>
                                <a href="{{route('news', $tampil->sluk)}}" class="post-title">{{$tampil->judul_berita_ina}}</a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$tampil->view}}</a>
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>{{$tampil->name}}</a>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum. Sed ut perspiciatis lorem150</p>
                            </div>
                        </div>
                        <!-- Pagination -->
                            <nav>
                            <ul class="pagination">
                               {{ $categoriesusers->links() }}
                            </ul>
                            </nav>    
                        <!-- Single Catagory 7 Post -->
                        @elseif($tampil->categorie_id == 7)
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url({{$tampil->gambar_berita}});">
                                <a href="{{route('news', $tampil->sluk)}}" class="video-play"><i class="fa fa-play"></i></a>
                            </div>
                        
                            
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">{{$tampil->tanggal}}</a>
                                    <a href="{{route($tampil->categorie_id, $tampil->slug_kategori)}}">{{$tampil->nama_kategori}}</a>
                                </div>
                                <a href="{{route('news', $tampil->sluk)}}" class="post-title">{{$tampil->judul_berita_ina}}</a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$tampil->view}}</a>
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>{{$tampil->name}}</a>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum. Sed ut perspiciatis lorem150</p>
                            </div>
                        </div>
                        <!-- Pagination -->
                            <nav>
                            <ul class="pagination">
                               {{ $categoriesusers->links() }}
                            </ul>
                            </nav>    
                        <!-- Single Catagory 8 Post -->
                        @elseif($tampil->categorie_id == 8)
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url({{$tampil->gambar_berita}});">
                                <a href="{{route('news', $tampil->sluk)}}" class="video-play"><i class="fa fa-play"></i></a>
                            </div>
                        
                            
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">{{$tampil->tanggal}}</a>
                                    <a href="{{route($tampil->categorie_id, $tampil->slug_kategori)}}">{{$tampil->nama_kategori}}</a>
                                </div>
                                <a href="{{route('news', $tampil->sluk)}}" class="post-title">{{$tampil->judul_berita_ina}}</a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$tampil->view}}</a>
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>{{$tampil->name}}</a>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum. Sed ut perspiciatis lorem150</p>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <!-- Pagination -->
                            <nav>
                            <ul class="pagination">
                               {{ $categoriesusers->links() }}
                            </ul>
                            </nav>    



                        </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
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

                            <!-- Catagory Widget -->
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
                            <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
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
                                    <img src="img/bg-img/14.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">TV Show</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex">
                                <div class="youtube-channel-thumbnail">
                                    <img src="img/bg-img/15.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Game Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex">
                                <div class="youtube-channel-thumbnail">
                                    <img src="img/bg-img/16.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Sport Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex">
                                <div class="youtube-channel-thumbnail">
                                    <img src="img/bg-img/17.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Travel Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex">
                                <div class="youtube-channel-thumbnail">
                                    <img src="img/bg-img/18.jpg" alt="">
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
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Archive Post Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <!-- Logo -->
                        <a href="index.html" class="foo-logo"><img src="img/core-img/logo2.png" alt=""></a>
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
                        <h6 class="widget-title">Sport Videos</h6>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/12.jpg" alt="">
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
                                <img src="img/bg-img/13.jpg" alt="">
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
    <script src="{{asset('5.template1/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('5.template1/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('5.template1/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('5.template1/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('5.template1/js/active.js')}}"></script>
</body>

</html>