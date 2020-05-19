<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{env('APP_NAME')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Hardees's project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('user') }}/styles/bootstrap4/bootstrap.min.css">
    <link href="{{asset('user') }}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('user') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('user') }}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{asset('user') }}/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('user') }}/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{asset('user') }}/styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{asset('user') }}/styles/categories.css">
</head>

<style>
    div.socrollmenu {
        background-color: transparent;
        overflow: auto;
        white-space: nowrap;
    }

    div.socrollmenu a {
        display: inline-block;
        color: black;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    a:hover {
        border-bottom: 2px solid red;
        ;
    }
</style>

<body style="background-color: #ebf0f2;">

    <div class="super_container" style="background-color:#ebf0f2 ;">

        <!-- Header -->

        <header class="header">
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo col-md-3 col-sm-3 col-xs-3"><a href="{{route('index')}}"><img width="80%;" src="{{asset('user') }}/img/logo.png"></a></div>
                                <nav class="main_nav col-md-6 col-sm-6 col-xs-3">
                                    <ul>
                                        <li class="hassubs active">
                                            <a href="{{route('index')}}">Home</a>
                                            <ul>
                                                <!-- <li><a href="{{asset('user') }}/#">query</a></li> -->
                                            </ul>
                                        </li>
                                        <li class="hassubs">
                                            <a href="{{route('login') }}">Restaurants</a>
                                            <ul>
                                                <!-- <li><a href="{{asset('user') }}/#">query</a></li> -->
                                            </ul>
                                        </li>
                                        <li><a href="{{route('menu')}}">Menu</a></li>
                                        <li><a href="{{asset('user') }}/#"></a></li>
                                        <li><a href="{{asset('user') }}/#"></a></li>
                                        <li><a href="{{asset('user') }}/#"></a></li>
                                        @guest
                                        <li><a href="{{route('login')}}">Sign In</a></li>
                                        @endguest
                                        @auth
                                        <li><a href="{{route('logout')}}">Logout</a></li>
                                        @endguest
                                    </ul>
                                </nav>
                                <div class="header_extra ml-auto col-md-3 col-sm-3 col-xs-3">
                                    <div class="shopping_cart">
                                        <a href="{{route('login')}}">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
                                                <g>
                                                    <path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
													c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
													C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
													H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
													c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z" />
                                                </g>
                                            </svg>
                                            <div>Cart <span>(0)</span></div>
                                        </a>
                                    </div>
                                    <div class="search">
                                        <div class="search_icon">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 475.084 475.084" style="enable-background:new 0 0 475.084 475.084;" xml:space="preserve">
                                                <g>
                                                    <path d="M464.524,412.846l-97.929-97.925c23.6-34.068,35.406-72.047,35.406-113.917c0-27.218-5.284-53.249-15.852-78.087
												c-10.561-24.842-24.838-46.254-42.825-64.241c-17.987-17.987-39.396-32.264-64.233-42.826
												C254.246,5.285,228.217,0.003,200.999,0.003c-27.216,0-53.247,5.282-78.085,15.847C98.072,26.412,76.66,40.689,58.673,58.676
												c-17.989,17.987-32.264,39.403-42.827,64.241C5.282,147.758,0,173.786,0,201.004c0,27.216,5.282,53.238,15.846,78.083
												c10.562,24.838,24.838,46.247,42.827,64.234c17.987,17.993,39.403,32.264,64.241,42.832c24.841,10.563,50.869,15.844,78.085,15.844
												c41.879,0,79.852-11.807,113.922-35.405l97.929,97.641c6.852,7.231,15.406,10.849,25.693,10.849
												c9.897,0,18.467-3.617,25.694-10.849c7.23-7.23,10.848-15.796,10.848-25.693C475.088,428.458,471.567,419.889,464.524,412.846z
												 M291.363,291.358c-25.029,25.033-55.148,37.549-90.364,37.549c-35.21,0-65.329-12.519-90.36-37.549
												c-25.031-25.029-37.546-55.144-37.546-90.36c0-35.21,12.518-65.334,37.546-90.36c25.026-25.032,55.15-37.546,90.36-37.546
												c35.212,0,65.331,12.519,90.364,37.546c25.033,25.026,37.548,55.15,37.548,90.36C328.911,236.214,316.392,266.329,291.363,291.358z
												" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </div>
                        @if(Request::is('menu'))
                        <div class="container" style="margin-top: -20px;">

                            <div class="socrollmenu">
                                <a href="#1" class="act">RAMADAN DEALS </a>
                                <a href="#2">NEW ARRIVAL </a>
                                <a href="#3">CHARGRILLED BURGERS </a>
                                <a href="#4">CHICKEN SANDWICHES </a>
                                <a href="#5">100% ANGUS BEEF THICK BURGERS </a>
                                <a href="#6">CHICKEN TENDERS </a>
                                <a href="#7">FISH </a>
                                <a href="#8">WRAPS </a>
                                <a href="#9">KIDS COMBO </a>
                                <a href="#10">SIDES </a>
                                <a href="#11">DESSERTS </a>
                                <a href="#12">BEVERAGES</a>

                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Search Panel -->
            <div class="search_panel trans_300">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#">
                                    <input type="text" class="search_input" placeholder="Search" required="required">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social -->
            <div class="header_social">
                <ul>
                    <li><a href="{{asset('user') }}/#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="{{asset('user') }}/#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="{{asset('user') }}/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="{{asset('user') }}/#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </header>

        <!-- Menu -->

        <div class="menu menu_mm trans_300">
            <div class="menu_container menu_mm">
                <div class="page_menu_content">

                    <div class="page_menu_search menu_mm">
                        <form action="#">
                            <input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
                        </form>
                    </div>
                    <ul class="page_menu_nav menu_mm">
                        <li class="page_menu_item menu_mm"><a href="{{route('login')}}">Sign In<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item menu_mm"><a href="{{route('login')}}">Add to Cart<i class="fa fa-angle-down"></i></a></li>

                        <li class="page_menu_item has-children menu_mm">
                        <li class="page_menu_item menu_mm"><a href="{{route('order')}}">Home<i class="fa fa-angle-down"></i></a></li>

                        <ul class="page_menu_selection menu_mm">
                            <!-- <li class="page_menu_item menu_mm"><a href="{{asset('user') }}/categories.html">Category<i class="fa fa-angle-down"></i></a></li>  -->

                        </ul>
                        </li>
                        <li class="page_menu_item has-children menu_mm">
                        <li class="page_menu_item menu_mm"><a href="{{asset('user') }}/#">Restaurants<i class="fa fa-angle-down"></i></a></li>
                        <ul class="page_menu_selection menu_mm">
                            <!-- <li class="page_menu_item menu_mm"><a href="{{asset('user') }}/categories.html">Category<i class="fa fa-angle-down"></i></a></li>  -->
                        </ul>
                        </li>
                        <li class="page_menu_item has-children menu_mm">
                        <li class="page_menu_item menu_mm"><a href="{{asset('user') }}/offer.html">Offes<i class="fa fa-angle-down"></i></a></li>
                        <ul class="page_menu_selection menu_mm">
                            <!-- <li class="page_menu_item menu_mm"><a href="{{asset('user') }}/categories.html">Category<i class="fa fa-angle-down"></i></a></li>  -->
                        </ul>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

            <div class="menu_social">
                <ul>
                    <li><a href="{{asset('user') }}/#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="{{asset('user') }}/#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="{{asset('user') }}/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="{{asset('user') }}/#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="">
            @yield('content')
        </div>

        <!-- Download the App Html Start-->

        <div class="upper-svg" class="col-12">

            <svg xmlns="" viewBox="0 0 1440 240">
                <path fill="#f6bf2d" fill-opacity="1" d="M0,64L1440,0L1440,0L0,0Z"></path>
            </svg>
            <div class="mobile row padding">
                <div class="mobile-img col-md-6 col-sm-6 col-xs-12" data-aos="fade-right">
                    <img class="" src="{{asset('user') }}/img/mockup2.png">
                </div>

                <div class="mobile-content col-md-6 col-sm-6 col-xs-12">
                    <img src="{{asset('user') }}/img/logo.png">
                    <h2 data-aos="fade-left"><strong>Download Our App</strong></h2>
                    <p class="padding" data-aos="fade-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    <div class="play">
                        <img src="{{asset('user') }}/img/service/play_store.png" data-aos="fade-up">
                        <img src="{{asset('user') }}/img/service/app_store.png" data-aos="fade-up">
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer Start -->


        <div class="upper-svg" class="col-12" style="margin-bottom:-25%;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#f6bf2d" fill-opacity="1" d="M0,192L120,165.3C240,139,480,85,720,90.7C960,96,1200,160,1320,192L1440,224L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
            </svg>
        </div>

        <section id="footer">
            <div class="container">
                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="logog"><a href="{{route('order')}}"><img src="{{asset('user') }}/img/logo.png"></a></div>
                        <div class="store">
                            <a href="{{asset('user') }}/"> <img class="play" src="{{asset('user') }}/img/service/app_store.png"> </a>
                            <a href="{{asset('user') }}/"> <img class="app" src="{{asset('user') }}/img/service/play_store.png"> </a>
                        </div>
                    </div>




                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <h5>Get Help</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="{{route('about')}}"><i class="fa fa-angle-right"></i>About Us</a></li>
                            <li><a href="{{route('contact') }}"><i class="fa fa-angle-right"></i>Contact Us</a></li>
                    </div>





                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <h5>About Hardees</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="{{route('career')}}"><i class="fa fa-angle-right"></i>Career</a></li>
                            <li><a href="{{route('privacy')}}"><i class="fa fa-angle-right"></i></i>Private Policy</a></li>
                            <li><a href="{{route('term')}}"><i class="fa fa-angle-right"></i>Terms and Conditions</a></li>


                        </ul>
                    </div>


                    <!--
              <div class="col-xs-12 col-sm-3 col-md-3">
          <h5>Quick links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="{{asset('user') }}/javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href="{{asset('user') }}/javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
            <li><a href="{{asset('user') }}/javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
            <li><a href="{{asset('user') }}/javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            <li><a href="{{asset('user') }}/https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
          </ul>
        </div>
      -->
                </div>

                <div id="line"></div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a href="{{asset('user') }}/#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="{{asset('user') }}/#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="{{asset('user') }}/#"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="{{asset('user') }}/#"><i class="fa fa-pinterest-square"></i></a></li>
                            <li class="list-inline-item"><a href="{{asset('user') }}/#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    </hr>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                        <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="{{asset('user') }}/#" target="_blank">Hardees's</a></p>
                    </div>
                    </hr>
                </div>
            </div>
        </section>
        <!-- ./Footer End -->


    </div>

    <script src="{{asset('user') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('user') }}/styles/bootstrap4/popper.js"></script>
    <script src="{{asset('user') }}/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="{{asset('user') }}/plugins/greensock/TweenMax.min.js"></script>
    <script src="{{asset('user') }}/plugins/greensock/TimelineMax.min.js"></script>
    <script src="{{asset('user') }}/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="{{asset('user') }}/plugins/greensock/animation.gsap.min.js"></script>
    <script src="{{asset('user') }}/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="{{asset('user') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="{{asset('user') }}/plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="{{asset('user') }}/plugins/easing/easing.js"></script>
    <script src="{{asset('user') }}/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="{{asset('user') }}/js/custom.js"></script>
</body>

</html>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Please Choose Your State</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <button class="btn btn-primary" data-dismiss="modal">Sindh</button>
                <button class="btn btn-primary">Punjab</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>