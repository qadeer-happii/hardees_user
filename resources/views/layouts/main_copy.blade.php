<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{env('APP_NAME')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Hardees project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('user') }}/css/bootstrap4/bootstrap.min.css">
    <link href="{{asset('user') }}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('user') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('user') }}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{asset('user') }}/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('user') }}/css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{asset('user') }}/css/responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header Start -->

        <header class="header">
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <a href="#"><img class="logo" style="width: 40%;" src="{{asset('user') }}/img/logo.png"></a>
                                <nav class="main_nav">
                                    <ul>
                                        <li class="hassubs active">
                                            <a href="{{ route('order') }}">Order</a>
                                            <ul>

                                            </ul>
                                        </li>
                                        <li class="hassubs">
                                            <a href="#">Restaurant</a>
                                            <ul>

                                            </ul>
                                        </li>
                                        <li><a href="#">Offers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">More</a></li>

                                    </ul>
                                </nav>
                                <div class="header_extra ml-auto">
                                    <div class="cd-main-nav__list js-signin-modal-trigger">
                                        <a type="button" style="font-size: 2rem; color: #f6bf2d;" class="btn cd-main-nav__item cd-main-nav__item--signin" href="#" data-signin="login">
                                            <i class="fa fa-user-circle"></i></a>
                                    </div>
                                </div>

                                <!-- Modal Html Start -->

                                <div class="cd-signin-modal js-signin-modal">
                                    <!-- this is the entire modal form, including the background -->
                                    <div class="cd-signin-modal__container">
                                        <!-- this is the container wrapper -->
                                        <ul class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger" style="padding-bottom: 20px;">
                                            <li><a href="{{asset('user') }}/#0" data-signin="login" data-type="login">Sign In</a></li>
                                            <li><a href="{{asset('user') }}/#0" data-signin="signup" data-type="signup">Create Account</a></li>
                                        </ul>

                                        <div class="cd-signin-modal__block js-signin-modal-block" data-type="login">
                                            <!-- log in form -->
                                            <form class="cd-signin-modal__form">
                                                <p class="cd-signin-modal__fieldset">
                                                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width" id="signin-email" type="text">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Username</label>
                                                </p>
                                                <p class="cd-signin-modal__fieldset">
                                                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width" id="signin-email" type="text">
                                                    <a href="{{asset('user') }}/#0" class="cd-signin-modal__hide-password js-hide-password">Hide</a>
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Password</label>
                                                </p>

                                                <p class="cd-signin-modal__fieldset">
                                                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width" type="submit" value="Login">
                                                </p>
                                            </form>

                                            <p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="{{asset('user') }}/#0" data-signin="reset">Forgot your password?</a></p>
                                        </div> <!-- cd-signin-modal__block -->

                                        <div class="cd-signin-modal__block js-signin-modal-block" data-type="signup">
                                            <!-- sign up form -->
                                            <form class="cd-signin-modal__form">
                                                <p class="cd-signin-modal__fieldset">
                                                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width" id="signin-email" type="text">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Username</label>
                                                </p>
                                                <p class="cd-signin-modal__fieldset">
                                                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width" id="signin-email" type="email">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Email</label>
                                                </p>

                                                <p class="cd-signin-modal__fieldset">
                                                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width" id="signin-email" type="tel">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Phone #</label>
                                                </p>
                                                <p class="cd-signin-modal__fieldset">
                                                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width" id="signin-email" type="text">
                                                    <a href="{{asset('user') }}/#0" class="cd-signin-modal__hide-password js-hide-password">Hide</a>
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Password</label>
                                                </p>


                                                <p class="cd-signin-modal__fieldset">
                                                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Create account">
                                                </p>
                                            </form>
                                        </div> <!-- cd-signin-modal__block -->

                                        <div class="cd-signin-modal__block js-signin-modal-block" data-type="reset">
                                            <!-- reset password form -->
                                            <form class="cd-signin-modal__form">
                                                <p class="cd-signin-modal__message">Lost your password? Enter your email address. You will receive a link to create a new password.</p>
                                                <p class="cd-signin-modal__fieldset">
                                                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width" id="signin-email" type="email">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Email</label>
                                                </p>

                                                <p class="cd-signin-modal__fieldset">
                                                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Reset password">
                                                </p>
                                            </form>

                                            <p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="{{asset('user') }}/#0" data-signin="login">Back to log-in</a></p>
                                        </div> <!-- cd-signin-modal__block -->
                                        <a href="{{asset('user') }}/#0" class="cd-signin-modal__close js-close">Close</a>
                                    </div> <!-- cd-signin-modal__container -->
                                </div> <!-- cd-signin-modal -->

                                <!-- Modal Html Start -->



                                <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </header>


        <!-- Header End -->
        <div class="menu menu_mm trans_300">
            <div class="menu_container menu_mm">
                <div class="page_menu_content">

                    <div class="page_menu_search menu_mm">
                        <form action="#">
                            <input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
                        </form>
                    </div>
                    <ul class="page_menu_nav menu_mm">
                        <li class="page_menu_item has-children menu_mm">
                            <a href="{{route('index')}}">Home<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection menu_mm">
                                <li class="page_menu_item menu_mm"><a href="#">Categories<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item menu_mm"><a href="#">Product<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item menu_mm"><a href="#">Cart<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item menu_mm"><a href="#">Checkout<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item menu_mm"><a href="{{route('contact')}}">Contact<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item has-children menu_mm">
                            <a href="categories.html">Categories<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection menu_mm">
                                <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item menu_mm"><a href="#">Accessories<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item menu_mm"><a href="{{route('contact')}}">Contact<i class="fa fa-angle-down"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
        </div>


        <div class="">
            @yield('content')
        </div>

        <!-- Footer -->
        <section id="footer">
            <div class="container">
                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="logog"> <img src="{{asset('user') }}/img/logo.png"></div>
                        <div class="store">
                            <a href="{{asset('user') }}/"> <img class="play" src="{{asset('user') }}/img/service/app_store.png"> </a>
                            <a href="{{asset('user') }}/"> <img class="app" src="{{asset('user') }}/img/service/play_store.png"> </a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <h5>Get Help</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="/about"><i class="fa fa-angle-right"></i>About</a></li>
                            <li><a href="{{asset('user') }}/faqs.html"><i class="fa fa-angle-right"></i>Read FAQs</a></li>
                    </div>

                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <h5>About Hardees</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="/career"><i class="fa fa-angle-right"></i>Career</a></li>
                            <li><a href="/privacy"><i class="fa fa-angle-right"></i></i>Private Policy</a></li>
                            <li><a href="{{asset('user') }}/javascript:void();"><i class="fa fa-angle-right"></i>Read Our Blogs</a></li>
                            <li><a href="{{asset('user') }}/terms.html"><i class="fa fa-angle-right"></i>Terms and Conditions</a></li>
                        </ul>
                    </div>

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
                        <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="/" target="_blank">Hadees's</a></p>
                    </div>
                    </hr>
                </div>
            </div>
        </section>
        <!-- ./Footer -->

    </div>


    <script src="{{asset('user') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('user') }}/css/bootstrap4/popper.js"></script>
    <script src="{{asset('user') }}/css/bootstrap4/bootstrap.min.js"></script>
    <!-- <script src="{{asset('user') }}/plugins/greensock/animation.gsap.min.js"></script>
    <script src="{{asset('user') }}/plugins/greensock/ScrollToPlugin.min.js"></script> -->
    <script src="{{asset('user') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="{{asset('user') }}/js/custom.js"></script>
</body>

</html>