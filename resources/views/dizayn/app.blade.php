<!DOCTYPE html>
<html lang="en">

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <title>Mega Able bootstrap admin template by codedthemes </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" href="{{url('images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="{{url('https://fonts.googleapis.com/css?family=Roboto:400,500')}}" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{url('pages/waves/css/waves.min.css')}}" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap/css/bootstrap.min.css')}}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{url('pages/waves/css/waves.min.css')}}" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="{{url('icon/themify-icons/themify-icons.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{url('icon/font-awesome/css/font-awesome.min.css')}}">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="{{url('css/jquery.mCustomScrollbar.css')}}">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="{{url('https://www.amcharts.com/lib/3/plugins/export/export.css')}}" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
  </head>

  <body>
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="{{route('orderss')}}">
                          <img class="img-fluid" src="{{url('images/logo.png')}}" alt="Theme-Logo" />
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          <li class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                  <i class="ti-fullscreen"></i>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav-right">
                          <li class="user-profile header-notification">
                            @if(Auth::user()->image)
                              <a href="#!" class="waves-effect waves-light">
                                  <img style="height:55px; width:55px;" src="{{url(Auth::user()->image)}}" class="img-radius" alt="User-Profile-Image">
                                  <span>{{Auth::user()->name}}</span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              @else
                              <a href="#!" class="waves-effect waves-light">
                                  <img style="height:55px; width:55px;" src="{{url('https://th.bing.com/th?id=OIP.GHGGLYe7gDfZUzF_tElxiQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2')}}" class="img-radius" alt="User-Profile-Image">
                                  <span>{{Auth::user()->name}}</span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              @endif
                              <ul class="show-notification profile-notification">
                                  <li class="waves-effect waves-light">
                                      <a href="{{route('profile')}}">
                                        <i class="ti-user"></i> Profil
                                      </a>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <a href="{{route('logout')}}">
                                        <i class="ti-layout-sidebar-left"></i> Çıxış</a>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                            @if(Auth::user()->image)
                              <div class="main-menu-header">
                                  <img style="height:65px; width:65px;" class="img-80 img-radius" src="{{url(Auth::user()->image)}}" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details">{{Auth::user()->name}}<i class="fa fa-caret-down"></i></span>
                                  </div>
                              </div>
                             @else
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="{{url('https://th.bing.com/th?id=OIP.GHGGLYe7gDfZUzF_tElxiQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2')}}" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details">{{Auth::user()->name}}<i class="fa fa-caret-down"></i></span>
                                  </div>
                              </div>
                             @endif
                              <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                          <a href="{{Route('profile')}}"><i class="ti-user"></i>Profil</a>
                                          <a href="{{Route('logout')}}"><i class="ti-layout-sidebar-left"></i>Çıxış</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="p-15 p-b-0">
                              <form class="form-material">
                                  <div class="form-group form-primary">
                                      <input type="text" name="footer-email" class="form-control" required="">
                                      <span class="form-bar"></span>
                                      <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                  </div>
                              </form>
                          </div>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Anbar</div>

                          <ul class="pcoded-item pcoded-left-item">
                              <li class="active">
                                  <a href="{{route('orderss')}}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Ana səhifə</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="pcoded-hasmenu">
                                  <a href="javascript:void(0)" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                      <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Digər səhifələr</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  <ul class="pcoded-submenu">
                                      <li class=" ">
                                          <a href="{{route('orderss')}}" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Orders</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                      <li class=" ">
                                          <a href="{{route('productess')}}" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Products</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                      <li class=" ">
                                          <a href="{{route('klientss')}}" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Clients</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                      <li class=" ">
                                          <a href="{{route('brendd')}}" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Brands</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                      <li class=" ">
                                          <a href="{{route('xarcc')}}" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Xerc</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                   
                                  </ul>
                              </li>
                          </ul>

                          



                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Profil &amp; Çıxış</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="pcoded-hasmenu">
                                  <a href="javascript:void(0)" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                      <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Digər səhifələr</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  <ul class="pcoded-submenu">
                                      <li class=" ">
                                          <a href="{{route('logout')}}" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Çıxış</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                      <li class=" ">
                                          <a href="{{route('profile')}}" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Profil</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
        
                          </ul>
        
                          
                          
                      </div>
                  </nav>
                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h5 class="m-b-10">@yield('title')</h5>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="{{route('orderss')}}"> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="{{route('orderss')}}">Anbar</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>


        <!-- Page-header end -->
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">

                            <!-- task, page, download counter  start -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="text-c-yellow" >Xərc:{{$xsay}} </h4>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="fa fa-calendar-check-o f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-yellow">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <a href="{{route('xarcc')}}" ><p class="text-white m-b-0" title="Buradan keçid edin">Xərc</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="ti-arrow-left text-white f-14"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="text-c-green">Brend:{{$bsay}} </h4>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="ti-apple f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-green">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <a href="{{route('brendd')}}"><p class="text-white m-b-0" title="Buradan keçid edin">Brands</p></a>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="ti-arrow-left text-white f-14"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="text-c-blue">Müştəri:{{$csay}} </h4>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="ti-user f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-blue">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <a href="{{route('klientss')}}"><p class="text-white m-b-0" title="Buradan keçid edin">Clients</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="ti-arrow-left text-white f-14"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="text-c-red">Məhsul:{{$psay}} </h4>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="ti-package f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-red">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <a href="{{route('productess')}}"><p class="text-white m-b-0" title="Buradan keçid edin">Products</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="ti-arrow-left text-white f-14"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="text-c-blue">Sifariş:{{$osay}} </h4>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="ti-shopping-cart-full f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-blue">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <a href="{{route('orderss')}}"><p class="text-white m-b-0" title="Buradan keçid edin">Orders</p></a>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="ti-arrow-left text-white f-14"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- task, page, download counter  end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>



      @yield('orders')
      @yield('products')
      @yield('klients')
      @yield('brand')
      @yield('xerc')
      @yield('profile')
 
 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{url('js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('pages/widget/excanvas.js')}}"></script>
    <!-- waves js -->
    <script src="{{url('pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{url('js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{url('js/modernizr/modernizr.js')}}"></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="{{url('js/SmoothScroll.js')}}"></script>
    <script src="{{url('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{url('js/chart.js/Chart.js')}}"></script>
    <!-- amchart js -->
    <script src="{{url('https://www.amcharts.com/lib/3/amcharts.js')}}"></script>
    <script src="{{url('pages/widget/amchart/gauge.js')}}"></script>
    <script src="{{url('pages/widget/amchart/serial.js')}}"></script>
    <script src="{{url('pages/widget/amchart/light.js')}}"></script>
    <script src="{{url('pages/widget/amchart/pie.min.js')}}"></script>
    <script src="{{url('https://www.amcharts.com/lib/3/plugins/export/export.min.js')}}"></script>
    <!-- menu js -->
    <script src="{{url('js/pcoded.min.js')}}"></script>
    <script src="{{url('js/vertical-layout.min.js')}}"></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{url('pages/dashboard/custom-dashboard.js')}}"></script>
    <script type="text/javascript" src="{{url('js/script.js')}}"></script>
</body>

</html>
