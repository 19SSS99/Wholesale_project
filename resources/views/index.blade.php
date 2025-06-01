@extends('buyer.layouts.app')
@section('social')
    <div class="hero_social">
        <a href="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
        </a>
        <a href="">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
    </div>
@endsection
@section('slider')
    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h1>
                                        Smart Watches
                                    </h1>
                                    <p>
                                        Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl, convallis et augue sit amet, lobortis semper quam.
                                    </p>
                                    <div class="btn-box">
                                        <a href="{{route('contact_us')}}" class="btn1">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{asset('public/images/slider-img.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h1>
                                        Smart Watches
                                    </h1>
                                    <p>
                                        Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl, convallis et augue sit amet, lobortis semper quam.
                                    </p>
                                    <div class="btn-box">
                                        <a href="{{route('contact_us')}}" class="btn1">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{asset('public/images/slider-img.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h1>
                                        Smart Watches
                                    </h1>
                                    <p>
                                        Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl, convallis et augue sit amet, lobortis semper quam.
                                    </p>
                                    <div class="btn-box">
                                        <a href="{{route('contact_us')}}" class="btn1">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{asset('public/images/slider-img.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel1" data-slide-to="1"></li>
                <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
        </div>

    </section>
@endsection
@section('content')

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Latest Products
                </h2>
            </div>
            <div class="row">
                @foreach($products as $product)

                <div class="col-sm-6 col-xl-4">
                    <div class="box">

                        <a href="{{route('products.details',$product->id)}}">
                            <div class="img-box">
                                <img src="{{$product->photo}}" alt="">
                            </div>
                            <div class="detail-box">
                                <div>
                                    Quantity:
                                    <span>
                    {{$product->qnty - $product->qnty_sold}}
                  </span>
                                </div>
                                <h6>
                                    {{$product->name}}
                                </h6>
                                <h6>
                                    Price:
                                    <span>
                    {{$product->price}}
                  </span>
                                </h6>



                            </div>
                            <div class="new">
                <span>
                  New
                </span>

                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section>
    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6 col-lg-5 ">
                    <div class="img-box">
                        <img src="{{asset('public/images/about-img.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Us
                            </h2>
                        </div>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                            in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                            are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                            the middle of text. All
                        </p>
                        <a href="{{route('about')}}">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Features Of Our Watches
                </h2>
                <p>
                    Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{asset('public/images/f1.png')}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Fitness Tracking
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            </p>
                            <a href="">
                <span>
                  Read More
                </span>
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{asset('public/images/f2.png')}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Alerts & Notifications
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            </p>
                            <a href="">
                <span>
                  Read More
                </span>
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{asset('public/images/f3.png')}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Messages
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            </p>
                            <a href="">
                <span>
                  Read More
                </span>
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{asset('public/images/f4.png')}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Bluetooth
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            </p>
                            <a href="">
                <span>
                  Read More
                </span>
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="{{route('about')}}">
                    View More
                </a>
            </div>
        </div>
    </section>
@endsection
