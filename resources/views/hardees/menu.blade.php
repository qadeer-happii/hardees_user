@extends('layouts.main')

@section('content')

<div class="home" style="background-color:#ebf0f2 ; margin-top: 40px;">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background">
                    <img style="height: 65%; width:100%;" src="{{asset('user')}}/images/menu-banner1.jpg">
                </div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background">
                    <img style="height: 65%; width:100%;" src="{{asset('user')}}/images/menu-banner2.jpg">
                </div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-item home_slider_item">
                <div class="home_slider_background">
                    <img style="height: 65%; width:100%;" src="{{asset('user')}}/images/menu-banner3.jpg">
                </div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background">
                    <img style="height: 65%; width:100%;" src="{{asset('user')}}/images/menu-banner4.jpg">
                </div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container" id="1" style="margin-top: -300px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <h3 class="text-dark font-weight-bold">RAMADAN DEALS</h3>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a data-toggle="modal" data-target="#menuModal"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <div>
                        </div>
                    </div>

                </div>
            </div>


        </section>
</div>


<div class="container" id="2" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <h3 class="text-dark font-weight-bold">New Arrival</h3>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a data-target-id="3" data-toggle="modal" data-target="#menuModal "><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <div>
                        </div>
                    </div>

                </div>
            </div>


        </section>
</div>



<div class="container" id="3" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <h3 class="text-dark font-weight-bold">Chargrilled Burgers</h3>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px; margin-top: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>





                </div>
            </div>


        </section>
</div>
<div class="container" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;  ">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>





                </div>
            </div>


        </section>
</div>



<div class="container" id="4" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <h3 class="text-dark font-weight-bold">Chicken Sandwiches</h3>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px; margin-top: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>





                </div>
            </div>


        </section>
</div>
<div class="container" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;  ">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>





                </div>
            </div>


        </section>
</div>



<div class="container" id="5" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <h3 class="text-dark font-weight-bold">100% Angus Beef Thick Burgers</h3>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px; margin-top: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>





                </div>
            </div>


        </section>
</div>
<div class="container" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;  ">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>





                </div>
            </div>


        </section>
</div>


<div class="container" id="6" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <h3 class="text-dark font-weight-bold">Chicken Tenders</h3>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px; margin-top: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>





                </div>

                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">

                    </div>





                </div>
            </div>


        </section>
</div>


<div class="container" id="7" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <h3 class="text-dark font-weight-bold">Fish</h3>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <div>
                        </div>
                    </div>

                </div>
            </div>


        </section>
</div>

<div class="container" id="8" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <h3 class="text-dark font-weight-bold">Wraps</h3>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px; margin-top: 12px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                </div>
            </div>


        </section>
</div>




<div class="container" id="9" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <h3 class="text-dark font-weight-bold">Kids Combo</h3>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px; margin-top: 12px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                </div>
            </div>


        </section>
</div>



<div class="container" id="10" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <h3 class="text-dark font-weight-bold">Side</h3>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px; margin-top: 12px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                </div>
            </div>


        </section>
</div>



<div class="container" id="11" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <h3 class="text-dark font-weight-bold">Desserts</h3>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <div>
                        </div>
                    </div>

                </div>
            </div>


        </section>
</div>



<div class="container" id="12" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <h3 class="text-dark font-weight-bold">Beverages</h3>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px; margin-top: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>


                </div>
            </div>


        </section>
</div>
<div class="container" style="margin-top: -120px;">
    <br<br><br><br><br><br><br><br>
        <section class="offer-service-area section-padding-80-0">

            <div class="container">
                <div class="row" style="background-color: whitesmoke;padding-bottom: 10px;">

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>

                    <div class="col-sm">
                        <br>
                        <div style="background-color: black; padding: 10px; border-radius: 10px;  ">
                            <h4 style="color:#FEC52E; " class="font-weight-bold">SuperStar with Cheese</h4>
                            <h6 class="font-weight-bold text-light">Lorem ipsum dolor sit amet, consectetur
                                .<br> Labore, soluta? Lorem ipsum dolor sit amet.</h6>
                            <h6 class=" font-weight-bold" style="color:#FEC52E;">From PKR: 750.0 </h6>

                            <div class="text-right" style="margin-top: -100px;"> <img style="height:85px; width: 80px;" src="{{asset('user')}}/img/circle.png"></div>
                            <div class="text-right" style="margin-top: -20px;"><a href="{{route('addbuket')}}"><img style="height: 20px; width: 20px;" src="{{asset('user')}}/img/plus-button.png"></a></div>

                        </div>
                    </div>
                </div>
            </div>


        </section>
</div>


@endsection

<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">
            <div><img src="{{asset('user')}}/img/burger.png" width="100%"> </div>
            <div class="modal-header">

                <h4 class="modal-title text-dark font-weight-bold" id="exampleModalLabel">Super Star with Cheese <br>
                    <p class="font-weight-bold">PKR 750.0<br>
                        <span class="font-weight-normal">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ipsam

                        </span></p>
                </h4>

                <button type="button" style=" color:red; " class="close " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-dark font-weight-bold">Select variation<span style="font-size: 12px; color:#7c888d;"> ( 1 Required )</span></h4>Select 1
                <br>
                <table class="table text-light" style="border-top:2px solid white;">
                    <tbody>
                        <tr>
                            <th scope="col" style="border-bottom:2px solid transparent;color:black"><input type="radio"> Ala Carte</th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent;color:black">PKR 890.0</th>
                        </tr>

                        <tr>
                            <th scope="col" style="border-bottom:2px solid transparent;color:black"><input type="radio"> White Drink</th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent;color:black">PKR 890.0</th>
                        </tr>

                        <tr>
                            <th scope="col" style="border-bottom:2px solid transparent;color:black"><input type="radio">Regular Combo </th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent;color:black">PKR 890.0</th>
                        </tr>

                        <tr>
                            <th scope="col" style="border-bottom:2px solid transparent;color:black"><input type="radio"> Medium Combo</th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent;color:black">PKR 890.0</th>
                        </tr>

                        <tr>
                            <th scope="col" style="border-bottom:2px solid transparent;color:black"><input type="radio"> Large Combo</th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent; color: transparent;">First</th>
                            <th scope="col" style="border-bottom:2px solid transparent;color:black">PKR 890.0</th>
                        </tr>
                    </tbody>
                </table>

                <hr>
                <h4 class="text-dark font-weight-bold">Special instructions</h4>
                <p>You can write down here any special instructions</p>
                <textarea rows="4" class="form-control" cols="50">
	</textarea>
                <br>

                <div class="row text-right" style="padding:20px 50px ">
                    <div class="input-group text-right" style="margin-left:-32px">
                        <span class="input-group-btn text-right">
                            <button type="button" class="btn  text-warning text-right  " style="background-color:black; border:1px solid #f6bf2d;;" data-type="minus" data-field=""><b>-</b></button>
                        </span>
                        <input type="text" id="quantity" name="quantity" class="  input-number" value="10" min="1" max="100">
                        <span class="input-group-btn">
                            <button type="button" class="quantity-right-plus btn  btn-number text-warning" style="background-color:black;  border:1px solid #f6bf2d;" data-type="plus" data-field=""><b>+</b></button>

                        </span>

                    </div>
                    <a href="placeorder.html">
                        <button class="btn btn-sm btn-light" style=" color: black; font-weight: 600; background-color: #f6bf2d; margin-top:10px; border:2px solid #f6bf2d">ADD TO BUCKET</button>
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>
</div>