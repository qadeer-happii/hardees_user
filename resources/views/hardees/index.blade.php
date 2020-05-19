@extends('layouts.main')

@section('content')
<!-- Home Slider Start-->
<div class="home" style="background-color:#ebf0f2 ; ">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background">
                    <img style="height: 65%;  width:100%;" src="{{asset('user')}}/images/index-banner2.jpg">
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
                    <img style="height: 65%;  width:100%;" src="{{asset('user')}}/images/index-banner3.jpg">
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
                    <img style="height: 65%;  width:100%;" src="{{asset('user')}}/images/index-banner4.jpg">
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
<!-- Home Slider End -->



<!-- Order Button Start-->

<div class="myorder">
    <div class="container my-4">
        <div class="border border-light mb-4">
            <div class="text-center">
                <button class="white" type="button" class="btn">Orders Pickup</button>
                <button class="black" type="button" class="btn">Order Delivery</button>
            </div>

        </div>

    </div>
</div>

<!-- Order Button End-->


<!-- Our Service Area Start -->
<section class="akame-service-area section-padding-80-0">
    <div class="container">
        <div class="row">

            <!-- Single Service Area -->
            @foreach(Helper::getUserCount() as $key => $deal )
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-service-area text-center mb-80 wow fadeInUp" data-wow-delay="200ms">
                    <img src="{{ asset( $deal->image) }}" />

                    <label class="white" type="button" class="btn"><span>{{$deal->payable_price}}</span></label>
                    <a><button data-target-id="{{$deal->id}}" data-toggle="modal" data-target="#basicModal" class="black" type="button" class="btn"> Order Delivery</button></a>

                </div>
            </div>
            @endforeach

            <!-- Single Service Area -->


        </div>
    </div>
</section>
<!-- Our Service Area End -->


<!-- Discount Ads start -->

<div class="avds">
    <div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
        <div class="avds_small">
            <div class="avds_background" style="background-image:url({{ asset('user')}}/img/discount_img.jpg)"></div>
            <div class="avds_small_inner">
                <div class="avds_discount_container">
                    <img src="{{asset('user') }}/images/discount.png" alt="">
                    <div>
                        <div class="avds_discount">
                            <div>20<span>%</span></div>
                            <div>Discount</div>
                        </div>
                    </div>
                </div>
                <div class="avds_small_content">
                    <div class="avds_title">Fast Food</div>
                    <div class="avds_link"><a href="{{asset('user') }}/categories.html">See More</a></div>
                </div>
            </div>
        </div>
        <div class="avds_large">
            <div class="avds_background" style="background-image:url({{ asset('user')}}/img/pro_img.jpeg)"></div>
            <div class="avds_large_container">
                <div class="avds_large_content">
                    <div class="avds_title">Amazing Food</div>
                    <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div>
                    <div class="avds_link avds_link_large"><a href="{{asset('user') }}/categories.html">See More</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header" style="height: 50px">
                <h4 class="modal-title" id="myModalLabel">Basic Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container">

                </div>

                <h4 class="text-dark font-weight-bold">Special instructions</h4>
                <p>You can write down here any special instructions</p>
                <textarea rows="4" class="form-control" cols="50"></textarea>
            </div>

            <div class="modal-footer">
                <span class="input-group-btn">
                    <button type="button" id="minus" class="btn btn-danger" data-type="minus" data-field="">-</button>

                    </button>
                </span>
                <input type="text" id="qty" name="quantity" style="width: 30px; text-align:center" class="input-number" value="0" min="1" max="100">
                <span class="input-group-btn">
                    <button id="qtyadd" type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">+</button>
                    <a href="{{route('angus')}}" class="btn text-light" style="background-color:black; margin-left:5px;"><b>ADD TO BUCKET</b></a>
                </span>
            </div>
        </div>
    </div>
</div>
</div>