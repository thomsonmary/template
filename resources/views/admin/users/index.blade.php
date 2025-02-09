<!doctype html>
  <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
  <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
  <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
  <!--[if gt IE 8]><!-->
  <html class="no-js" lang="en">
  <!--<![endif]-->

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Sufee Admin :: Administrator</title>
      <meta name="description" content="Sufee Admin :: Admin Ganteng">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="apple-touch-icon" href="{{asset('2.admin/apple-icon.png')}}">
      <link rel="shortcut icon" href="{{asset('2.admin/favicon.ico')}}">

      <link rel="stylesheet" href="{{asset('2.admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('2.admin/vendors/font-awesome/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('2.admin/vendors/themify-icons/css/themify-icons.css')}}">
      <link rel="stylesheet" href="{{asset('2.admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
      <link rel="stylesheet" href="{{asset('2.admin/vendors/selectFX/css/cs-skin-elastic.css')}}">
      <link rel="stylesheet" href="{{asset('2.admin/vendors/jqvmap/dist/jqvmap.min.css')}}">

      <link rel="stylesheet" href="{{asset('2.admin/vendors/chosen/chosen.min.css')}}">
      <link rel="stylesheet" href="{{asset('2.admin/assets/css/style.css')}}">

      <!-- DATE PICKER  -->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       <script>
       $( function() {
         $( "#datepicker" ).datepicker();
         $( "#format" ).on( "change", function() {
           $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
         });
       } );
       </script>
      <!-- END DATE PICKER  -->

      <!-- DATE PICKER  -->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       <script>
       $( function() {
         $( "#datepickers" ).datepicker();
         $( "#format" ).on( "change", function() {
           $( "#datepickers" ).datepicker( "option", "dateFormat", $( this ).val() );
         });
       } );
       </script>
      <!-- END DATE PICKER  -->


      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  </head>

  <body>


      <!-- Left Panel -->

      <aside id="left-panel" class="left-panel">
          <nav class="navbar navbar-expand-sm navbar-default">

              <div class="navbar-header">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                      <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="./users"><img src="{{asset('2.admin/images/logo.png')}}" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="./users"><img src="{{asset('2.admin/images/logo2.png')}}" alt="Logo"></a>
              </div>

              <div id="main-menu" class="main-menu collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                      <li class="active">
                          <a href="/admin/users"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                          <a href="/" target="_blank"> <i class="menu-icon fa fa-dashboard"></i>Website </a>
                      </li>
                      <h3 class="menu-title">Admin Users</h3><!-- /.menu-title -->
                      <li class="menu-item-has-children dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Setting Users</a>
                          <ul class="sub-menu children dropdown-menu">
                            @can('manage-users')
                              <li><i class="fa fa-user"></i><a href="/admin/users/management">Users Management</a></li>
                            @endcan
                              <li><i class="fa fa-id-badge"></i><a href="#">Modul Management</a></li>
                          </ul>
                      </li>
                      <li >
                          <a href="/admin/users/template" > <i class="menu-icon fa fa-table"></i>Template</a>
                      </li>

                      <h3 class="menu-title">Berita</h3><!-- /.menu-title -->

                      <li class="menu-item-has-children dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Headline</a>
                          <ul class="sub-menu children dropdown-menu">
                              <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{route('admin.news.berita')}}">Berita</a></li>
                              <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Sekilas Info</a></li>
                          </ul>
                      </li>
                      <li class="menu-item-has-children dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                          <ul class="sub-menu children dropdown-menu">
                              <li><i class="menu-icon fa fa-line-chart"></i><a href="{{asset('2.admin/"charts-chartjs.html')}}">Chart JS</a></li>
                              <li><i class="menu-icon fa fa-area-chart"></i><a href="{{asset('2.admin/"charts-flot.html')}}">Flot Chart</a></li>
                              <li><i class="menu-icon fa fa-pie-chart"></i><a href="{{asset('2.admin/"charts-peity.html')}}">Peity Chart</a></li>
                          </ul>
                      </li>

                      <li class="menu-item-has-children dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                          <ul class="sub-menu children dropdown-menu">
                              <li><i class="menu-icon fa fa-map-o"></i><a href="{{asset('2.admin/"maps-gmap.html')}}">Google Maps</a></li>
                              <li><i class="menu-icon fa fa-street-view"></i><a href="{{asset('2.admin/"maps-vector.html')}}">Vector Maps</a></li>
                          </ul>
                      </li>
                      <h3 class="menu-title">Videos</h3><!-- /.menu-title -->
                      <li class="menu-item-has-children dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Videos</a>
                          <ul class="sub-menu children dropdown-menu">
                              <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                              <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                              <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                          </ul>
                      </li>
                      <h3 class="menu-title">Penelitian&Pengabdian</h3><!-- /.menu-title -->
                      <li class="menu-item-has-children dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Dengan Ikhlas</a>
                          <ul class="sub-menu children dropdown-menu">
                              <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Laporan Penelitian/Pengabdian</a></li>
                              <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Biaya Penelitian/Pengabdian</a></li>
                              <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Luaran Penelitian / Pengabdian</a></li>
                          </ul>
                      </li>
                      <h3 class="menu-title">Jurnal</h3><!-- /.menu-title -->
                      <li class="menu-item-has-children dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Dengan Tabah</a>
                          <ul class="sub-menu children dropdown-menu">
                              <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Jurnal Terindexs</a></li>
                              <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Jurnal Sitasi</a></li>
                              <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Hak Kekayaan Intelektual</a></li>
                          </ul>
                      </li>
                      <h3 class="menu-title">Pengajaran</h3><!-- /.menu-title -->
                      <li class="menu-item-has-children dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Materi</a>
                          <ul class="sub-menu children dropdown-menu">
                              <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Mata Kuliah</a></li>
                              <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Pemrograman Web</a></li>
                              <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Struktur Data</a></li>
                          </ul>
                      </li>
                  </ul>
              </div><!-- /.navbar-collapse -->
          </nav>
      </aside><!-- /#left-panel -->

      <!-- Left Panel -->

      <!-- Right Panel -->

      <div id="right-panel" class="right-panel">

          <!-- Header-->
          <header id="header" class="header">

              <div class="header-menu">

                  <div class="col-sm-7">
                      <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                      <div class="header-left">
                          <button class="search-trigger"><i class="fa fa-search"></i></button>
                          <div class="form-inline">
                              <form class="search-form">
                                  <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                  <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                              </form>
                          </div>

                          <div class="dropdown for-notification">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-bell"></i>
                                  <span class="count bg-danger">5</span>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="notification">
                                  <p class="red">You have 3 Notification</p>
                                  <a class="dropdown-item media bg-flat-color-1" href="#">
                                  <i class="fa fa-check"></i>
                                  <p>Server #1 overloaded.</p>
                              </a>
                                  <a class="dropdown-item media bg-flat-color-4" href="#">
                                  <i class="fa fa-info"></i>
                                  <p>Server #2 overloaded.</p>
                              </a>
                                  <a class="dropdown-item media bg-flat-color-5" href="#">
                                  <i class="fa fa-warning"></i>
                                  <p>Server #3 overloaded.</p>
                              </a>
                              </div>
                          </div>

                          <div class="dropdown for-message">
                              <button class="btn btn-secondary dropdown-toggle" type="button"
                                  id="message"
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="ti-email"></i>
                                  <span class="count bg-primary">9</span>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="message">
                                  <p class="red">You have 4 Mails</p>
                                  <a class="dropdown-item media bg-flat-color-1" href="#">
                                  <span class="photo media-left"><img alt="avatar" src="{{asset('2.admin/images/avatar/1.jpg')}}"></span>
                                  <span class="message media-body">
                                      <span class="name float-left">Jonathan Smith</span>
                                      <span class="time float-right">Just now</span>
                                          <p>Hello, this is an example msg</p>
                                  </span>
                              </a>
                                  <a class="dropdown-item media bg-flat-color-4" href="#">
                                  <span class="photo media-left"><img alt="avatar" src="{{asset('2.admin/images/avatar/2.jpg')}}"></span>
                                  <span class="message media-body">
                                      <span class="name float-left">Jack Sanders</span>
                                      <span class="time float-right">5 minutes ago</span>
                                          <p>Lorem ipsum dolor sit amet, consectetur</p>
                                  </span>
                              </a>
                                  <a class="dropdown-item media bg-flat-color-5" href="#">
                                  <span class="photo media-left"><img alt="avatar" src="{{asset('2.admin/images/avatar/3.jpg')}}"></span>
                                  <span class="message media-body">
                                      <span class="name float-left">Cheryl Wheeler</span>
                                      <span class="time float-right">10 minutes ago</span>
                                          <p>Hello, this is an example msg</p>
                                  </span>
                              </a>
                                  <a class="dropdown-item media bg-flat-color-3" href="#">
                                  <span class="photo media-left"><img alt="avatar" src="{{asset('2.admin/images/avatar/4.jpg')}}"></span>
                                  <span class="message media-body">
                                      <span class="name float-left">Rachel Santos</span>
                                      <span class="time float-right">15 minutes ago</span>
                                          <p>Lorem ipsum dolor sit amet, consectetur</p>
                                  </span>
                              </a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="user-area dropdown float-right">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('2.admin/images/admin.jpg')}}" alt="{{ Auth::user()->name }}">{{ Auth::user()->name }}
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="/admin/users/{{Auth::user()->id}}/profile"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>
                            @can ('manage-users')
                            <a class="nav-link" href="{{route('admin.users.management')}}"><i class="fa fa-cog"></i> User Management</a>
                            @endcan
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off">{{ __('Logout') }}</i></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>

                    </div>
                      <div class="language-select dropdown" id="language-select">
                          <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                              <i class="flag-icon flag-icon-us"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="language">
                              <div class="dropdown-item">
                                  <span class="flag-icon flag-icon-fr"></span>
                              </div>
                              <div class="dropdown-item">
                                  <i class="flag-icon flag-icon-es"></i>
                              </div>
                              <div class="dropdown-item">
                                  <i class="flag-icon flag-icon-us"></i>
                              </div>
                              <div class="dropdown-item">
                                  <i class="flag-icon flag-icon-it"></i>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>

          </header><!-- /header -->
          <!-- Header-->
          @yield('konten_dashboard')
          @yield('konten_management')
          @yield('konten_editUsers')
          @yield('konten_profile')
          @yield('konten_berita')
          @yield('konten_editNews')
          @yield('konten_tambahNews')
          @yield('konten_template')
      </div><!-- /#right-panel -->

      <!-- Right Panel -->

      <script src="{{asset('2.admin/vendors/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{asset('2.admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
      <script src="{{asset('2.admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('2.admin/assets/js/main.js')}}"></script>


      <script src="{{asset('2.admin/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
      <script src="{{asset('2.admin/assets/js/dashboard.js')}}"></script>
      <script src="{{asset('2.admin/assets/js/widgets.js')}}"></script>
      <script src="{{asset('2.admin/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
      <script src="{{asset('2.admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
      <script src="{{asset('2.admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>


      <script src="{{asset('2.admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('2.admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
      <script src="{{asset('2.admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
      <script src="{{asset('2.admin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
      <script src="{{asset('2.admin/vendors/jszip/dist/jszip.min.js')}}"></script>
      <script src="{{asset('2.admin/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
      <script src="{{asset('2.admin/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
      <script src="{{asset('2.admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
      <script src="{{asset('2.admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
      <script src="{{asset('2.admin/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
      <script src="{{asset('2.admin/assets/js/init-scripts/data-table/datatables-init.js')}}"></script>

      <script src="{{asset('2.admin/vendors/chosen/chosen.jquery.min.js')}}"></script>


      <script>
          jQuery(document).ready(function() {
              jQuery(".standardSelect").chosen({
                  disable_search_threshold: 10,
                  no_results_text: "Oops, nothing found!",
                  width: "100%"
              });
          });
      </script>


      <script>
          (function($) {
              "use strict";

              jQuery('#vmap').vectorMap({
                  map: 'world_en',
                  backgroundColor: null,
                  color: '#ffffff',
                  hoverOpacity: 0.7,
                  selectedColor: '#1de9b6',
                  enableZoom: true,
                  showTooltip: true,
                  values: sample_data,
                  scaleColors: ['#1de9b6', '#03a9f5'],
                  normalizeFunction: 'polynomial'
              });
          })(jQuery);
      </script>


      <!-- CK EDITOR TEXTAREA -->
      <script src="{{asset('4.ckeditorFull/ckeditor.js')}}"></script>
      <script src="{{ asset('4.ckeditorFull/adapters/jquery.js') }}"></script>
      <script>
      var isiberitaina = document.getElementById("isiberitaina");
      CKEDITOR.replace(isiberitaina,{
      language:'en-gb'
      });
      CKEDITOR.config.allowedContent = true;
      </script>
      <script>
      var isiberitaeng = document.getElementById("isiberitaeng");
      CKEDITOR.replace(isiberitaeng,{
      language:'en-gb'
      });
      CKEDITOR.config.allowedContent = true;
      </script>

  </body>

  </html>
