@extends('layouts.frontend')
@include('includes.error')


@section('content')
<div id="home" class="tr-banner">
        <div id="tr-carousel" class="banner-content slider-2 section-before carousel slide" data-ride="carousel">

            <ol class="carousel-indicators tr-indicators">
                <li data-target="#tr-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#tr-carousel" data-slide-to="1"></li>
                <li data-target="#tr-carousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item bg-image active" style="background-image: url({{asset('assets/images/brook.jpg')}});">
                    <div class="container">
                        <div class="banner-info">
                            <h1 data-animation="animated fadeInDown"> <span></span></h1>
                            <p class="pull-right" data-animation="animated fadeInDown"></p>
                            <a data-animation="animated fadeInDown" href="/donate" class="btn btn-primary">Become a Volunteer</a>
                        </div><!-- /.banner-info -->
                    </div><!-- /.container -->
                </div><!-- /.carousel-item -->

                <div class="carousel-item bg-image" style="background-image: url({{asset('assets/images/book.jpg')}});">
                    <div class="container">
                        <div class="banner-info">
                                <h1 data-animation="animated fadeInDown">We rise <span>by lifting others.</span></h1>
                            <a data-animation="animated fadeInUp" href="/donate" class="btn btn-primary">Donate</a>
                        </div><!-- /.banner-info -->
                    </div><!-- /.container -->
                </div><!-- /.carousel-item -->

                <div class="carousel-item bg-image" style="background-image: url({{asset('assets/images/bike.jpg')}});">
                    <div class="container">
                        <div class="banner-info">
                                <h1 data-animation="animated fadeInDown">Only by giving are you able <span>to receive more than you already have</span></h1>

                            <a data-animation="animated fadeInLeft" href="/donate" class="btn btn-primary">Donate</a>
                        </div><!-- /.banner-info -->
                    </div><!-- /.container -->
                </div><!-- /.carousel-item -->
            </div><!-- /.carousel-inner -->
        </div><!-- /.banner-content -->
</div><!-- /.tr-banner -->

<div class="help-content section-before">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="tr-help">
                        <a >
                            <span class="tr-icon">
                                <img src="{{asset('assets/images/others/icon1.png')}}" alt="Image" class="img-fluid">
                            </span>
                            <span class="help-info">
                                <span>Sharing</span>
                                <span class="title">With Others</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tr-help">
                        <a >
                            <span class="tr-icon">
                                <img src="{{asset('assets/images/others/icon2.png')}}" alt="Image" class="img-fluid">
                            </span>
                            <span class="help-info">
                                <span>Donate</span>
                                <span class="title">For a New Life</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tr-help">
                        <a >
                            <span class="tr-icon">
                                <img src="{{asset('assets/images/others/icon3.png')}}" alt="Image" class="img-fluid">
                            </span>
                            <span class="help-info">
                                <span>Save</span>
                                <span class="title">The Earth</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.help-content -->


<div id="service" class="tr-service-section">
        <div class="section-content">
            <div class="container">
                <div class="section-header header-style-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <h1>DashMe Non-Profit
                                Platform
                            </h1>
                        </div>
                        <div class="col-lg-8">
                            <div class="sub-title title-before">
                                <p>We make a difference in the lives of people during a very traumatic time in their life. Meeting their  needs eases their burden.</p>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.section-header -->

                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="tr-service">
                            <div class="service-icon">
                                <img src="{{asset('assets/images/others/service1.png')}}" alt="Image" class="img-fluid">
                            </div>
                            <h2>You Volunteer</h2>
                            <p>You volunteer to give by filling the donation form. </p>
                            <a href="/donate">Donate</a>
                        </div><!-- /.tr-service -->
                    </div>
                    <div class="col-md-4">
                        <div class="tr-service">
                            <div class="service-icon">
                                <img src="{{asset('assets/images/others/service2.png')}}" alt="Image" class="img-fluid">
                            </div>
                            <h2>We Connect</h2>
                            <p>We find you someone that needs the Goods
                                Staying around Your Resident.
                            </p>
                            <a href="/donate">Donate</a>

                        </div><!--                     /.tr-service -->
                    </div>
<div class="col-md-4">
                        <div class="tr-service">
                            <div class="service-icon">
                                <img src="{{asset('assets/images/others/service3.png')}}" alt="Image" class="img-fluid">
                            </div>
                            <h2>You Donate</h2>
                            <p>then you donate to the person in need Hurray!!! </p>

                            <a href="/donate">Donate</a>

                        </div><!-- /.tr-service -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.service-content -->
</div><!-- /.tr-service -->

<div id="causes" class="tr-causes-section">
        <div class="section-content tr-bg-white">
            <div class="container">
                <div class="section-header section-header-2">
                    <div class="sub-title title-before">
                        <p>1 in 10 people lack access to cheap goods in Nigeria. We’re on a mission to change that
                            by  using this platform to help poor and average living Nigerians where people can donate free or give fairly used goods
                            at a very cheap price
                        </p>
                    </div>
                </div><!-- /.section-header -->

                <div class="causes-content">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                           <div class="tr-causes">
                               <div class="causes-thumb">
                                   <img src="{{asset('assets/images/shoe.jpg')}}" alt="Image" class="img-fluid">
                                   <div class="tr-overlay">


                                       <a href="/donate" class="btn btn-primary">Donate Now</a>
                                   </div>
                               </div>

                           </div><!-- /.tr-causes -->
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="tr-causes">
                               <div class="causes-thumb">
                                   <img src="{{asset('assets/images/cloth.jpg')}}" alt="Image" class="img-fluid">
                                   <div class="tr-overlay">

                                       <a href="/donate" class="btn btn-primary">Donate Now</a>
                                   </div>
                               </div>

                           </div><!-- /.tr-causes -->
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="tr-causes">
                               <div class="causes-thumb">
                                   <img src="{{asset('assets/images/cshoe.jpg')}}" alt="Image" class="img-fluid">
                                   <div class="tr-overlay">

                                       <a href="/donate" class="btn btn-primary">Donate Now</a>
                                   </div>
                               </div>

                           </div><!-- /.tr-causes -->
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.causes-content -->
            </div><!-- /.container -->
        </div><!-- /.section-content -->
    </div><!-- /.tr-causes-section -->


<div class="tr-video-section">
        <div class="section-content section-before bg-image tr-parallax text-center" style="background-image: url(images/bg/video.jpg);">
            <div class="container">
                <div class="video-content">
                    <h1>You can make a difference, so why don’t you?</h1>
                    <a class="video-link" href="https://www.youtube.com/watch?v=8QW_8X1hsAY"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                </div><!-- /.video-content -->
            </div><!-- /.container -->
        </div><!-- /.section-content -->
</div><!-- /.tr-video-section -->


<div id="about" class="tr-about-section">
        <div class="section-content tr-bg-white">
            <div class="container">
                <div class="section-header section-header-2">
                    <h1>Who We Are</h1>
                    <div class="sub-title title-before">
                        <p>We make a difference in the lives of people during a very traumatic time in their life. Meeting their basic needs eases their burden.</p>
                    </div>
                </div><!-- /.section-header -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="about-thumb">
                            <img src="{{asset('assets/images/hand.jpg')}}" alt="Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-5">

                            <div class="tr-about">
                                <h2>How We Support ?</h2>
                                    <p> This platform was created to help poor and average living Nigerians, where people can donate free or give fairly used goods
                                            at a very cheap price</p>
                            </div>
                        <div class="tr-about">
                            <h2>Mission</h2>
                            <p>To prevents and alleviates human suffering in Nigeria in the face of emergencies by mobilizing the power of volunteers and the generosity of donors</p>
                        </div>
                    </div>

            </div><!-- /.container -->
        </div><!-- /.section-content -->
    </div><!-- /.tr-about-section -->

<div class="tr-fun-facts">
        <div class="section-content bg-image  tr-parallax text-center section-before" style="background-image: url(images/bg/fun-facts.jpg);">
            <div class="container">
                <div class="fun-facts text-left clearfix">
                    <ul class="global-list">
                        <li class="fun-fact">
                            <div class="fun-fact-icon">
                                <img src="{{asset('assets/images/others/icon-fun1.png')}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="fun-fact-info">
                                <p>You Volunteer</p>
                                <p class="counter"><span>1</span></p>
                            </div>
                        </li>
                        <li class="fun-fact">
                            <div class="fun-fact-icon">
                                <img src="{{asset('assets/images/others/icon-fun2.png')}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="fun-fact-info">
                                <p>We Connect</p>
                                <p class="counter"><span>2</span></p>
                            </div>
                        </li>
                        <li class="fun-fact">
                            <div class="fun-fact-icon">
                                <img src="{{asset('assets/images/others/icon-fun3.png')}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="fun-fact-info">
                                <p>You Donate</p>
                                <p class="counter"><span>3</span></p>
                            </div>
                        </li>
                        <li class="fun-fact">
                            <div class="fun-fact-icon">
                                <img src="{{asset('assets/images/others/icon-fun4.png')}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="fun-fact-info">
                                <p>Hurray!!!</p>
                                <p class="counter"><span>4</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- /.container -->
        </div><!-- /.section-content -->
</div><!-- /.tr-fun-facts -->


<div id="blog" class="tr-blog">
        <div class="section-content">
            <div class="container">
                <div class="section-header section-header-2">
                    <div class="sub-title title-before">
                            <h1>Avaliable Goods</h1>
                    </div>
                </div><!-- /.section-header -->
                <div class="row">
                        @foreach ($products as $product)
                        <div class="col-md-6 col-lg-4">
                                <div class="tr-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                        <a href="blog-details.html"><img src="{{asset($product->product_image)}}" alt="Image" class="img-fluid"></a>
                                        </div>
                                        <div class="entry-footer clearfix">
                                            <ul class="tr-list">
                                                <li >
                                                        <label for="">Name:</label>
                                                    {{$product->givers_name}}</li>
                                            </ul>
                                            <ul class="tr-list">
                                                    <li >
                                                            <label for="">Phone No:</label>
                                                        {{$product->giver_phoneno}}</li>
                                                </ul>

                                                <ul class="tr-list">
                                                        <li >
                                                                <label for="">Resident Area:</label>
                                                            {{$product->giver_area}}</li>
                                                    </ul>

                                                    <ul class="tr-list">
                                                            <li >
                                                                    <label for="">Goods Name / Type:</label>
                                                                {{$product->product_name}}</li>
                                                        </ul>
                                                        <ul class="tr-list">
                                                                <li >
                                                                        <label for="">Goods Price:</label>
                                                                        &#8358 {{$product->product_price}}</li>
                                                            </ul>

                                                    <ul class="tr-list">
                                                            <li >
                                                                    <label for="">Goods description:</label>
                                                                {{$product->product_bio}}</li>
                                                        </ul>
                                        </div>
                                    </div><!-- /.entry-header -->
                                </div><!-- /.tr-post -->
                            </div>
                        @endforeach
                    </div><!-- /.row -->

            </div><!-- /.container -->
        </div><!-- /.blog-content -->
</div><!-- /.tr-blog -->


<div class="tr-testimonial-section">
        <div class="section-content tr-bg-white">
            <div class="container">
                <div class="tr-testimonial-content">
                    <div class="testimonial-content-info">
                        <div class="tr-slider-6">
                            <div class="tr-testimonial text-right">
                                <div class="tr-testimonial-icon tr-icon-style-1">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                                <div class="tr-testimonial-description">
                                    <p>Happiness doesn’t result from what we get, but from what we give</p>
                                </div><!-- /.tr-testimonial-description -->

                                <div class="tr-testimonial-author">
                                    <div class="tr-author-info">
                                        <span class="tr-title">Ben Carson</span>
                                    </div>
                                </div>
                            </div><!-- /.tr-testimonial -->

                            <div class="tr-testimonial">
                                <div class="tr-testimonial-icon tr-icon-style-1">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                                <div class="tr-testimonial-description">
                                    <p>Remember that the happiest people are not those getting more, but those giving more</p>
                                </div><!-- /.tr-testimonial-description -->

                                <div class="tr-testimonial-author">
                                    <div class="tr-author-info">
                                        <span class="tr-title">Robin Sharma </span>
                                    </div>
                                </div>
                            </div><!-- /.tr-testimonial -->


                        </div><!-- /.tr-slider-5 -->
                    </div><!-- /.testimonial-content-info -->
                </div><!-- /.tr-testimonial-content -->
            </div><!-- /.container -->
        </div><!-- /.section-content -->
</div><!-- /.tr-testimonial-section -->

<div class="tr-subscribe">
    <div class="section-content tr-parallax bg-image" style="background-image: url(images/bg/subscribe-bg.jpg);">
        <div class="container text-center">
            <div class="subscribe-info">
                <h1>Subscribe With</h1>

            <form action="/subscribe" method="POST" class="tr-form">
                @csrf
                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                    <input type="submit" class="btn btn-primary" value="Subscribe Now">
                </form>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.subscribe-content -->
</div><!-- /.tr-subscribe -->

<div id="contact" class="tr-contact-section">
        <div class="section-content tr-bg-white">
            <div class="container">
                <div class="section-header section-header-2">
                    <div class="sub-title title-before">
                        <h1>Leave Us A Message</h1>
                    </div>
                </div><!-- /.section-header -->
                <div class="row">
                    <div class="col-md-7">
                    <form action="{{route('frontend.message')}}" class="tr-form" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" type="text" placeholder="Name" value="" size="30" aria-required="true" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" type="email" placeholder="Email" value="" size="30" aria-required="true" required="required">
                                    </div>
                                </div>
                            </div><!-- /.row -->
                            <div class="form-group">
                                <textarea name="message" class="form-control" required="required" rows="7" placeholder="Text Here. . ."></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary btn-full" value="Submit your message">
                        </form><!-- /.tr-form -->
                    </div>
                </div>
            </div><!-- /.container -->
        </div><!-- /.section-content -->
    </div><!-- /.tr-contact-section -->

@endsection
