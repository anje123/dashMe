<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="olufemi" content="olufemi">
        <meta name="description" content="">

        <title>DashMe</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/YTPlayer.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/structure.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
        <link id="preset" rel="stylesheet" href="{{asset('assets/css/presets/preset2.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <!-- icons -->
        <link rel="icon" href="{{asset('assets/images/logo.JPG')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/images_ico/ico/apple-touch-icon-precomposed.html')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images_ico/ico/apple-touch-icon-114-precomposed.html')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images_ico/ico/apple-touch-icon-72-precomposed.html')}}">
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/images/ico/apple-touch-icon-57-precomposed.html')}}">
        <!-- icons -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>



<body>
    @include('sweet::alert')
        <div class="tr-menu">
            <nav id="tr_navbar" class="navbar fixed-top navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand">
                        <img src="{{asset('assets/images/logo.JPG')}}" alt="Logo" class="img-fluid tr-logo">
                        <img src="{{asset('assets/images/logo.JPG')}}" alt="Logo" class="img-fluid tr-logo1">

                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class=>
                            <a href="/">Home</a>
                            </li>
                            <li><a href="#service">Service</a></li>
                            <li><a href="/goods">Avaliable Goods</a></li>


                        </ul>
                    </div>

                    <div class="tr-button">
                    <a href="/donate" class="btn btn-primary">Donate Now</a>
                    </div><!-- /.tr-buttons -->

                </div><!-- /.container -->
            </nav><!-- /.navbar -->
        </div><!-- /.tr-menu -->


    <!-- inject files -->
    @yield('content')





        <div class="tr-footer">
                <div class="footer-top-content bg-image tr-parallax section-before" style="background-image: url(images/bg/footer-bg.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class=" col-lg-4">
                                <div class="footer-widget">
                                    <h3 class="title-before">About Us</h3>
                                    <p>Our aim is to provide platform for charities  to help raise much needs.
                                            where individuals can also help the poor and needy people instantly
                                            by providing assistance that helps them to solve the basic problems of living.


                                    </p>
                                </div><!-- /.footer-widget -->
                            </div>
                            <div class=" col-lg-4">
                                <div class="footer-widget">
                                    <h3 class="title-before">Quick Links</h3>
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/donate">Donate</a></li>
                                    </ul>
                                </div><!-- /.footer-widget -->
                            </div>

                            <div class=" col-lg-4">
                                    <div class="footer-widget">
                                        <h3 class="title-before">Quote</h3>
                                        <p>
                                                We can never learn too much of His will towards us, too much of His messages and His advice. The Bible is His word and its study gives at once the foundation
                                                for our faith and an inspiration
                                                to battle onward in the fight against the tempter.
                                        </p>
                                    </div><!-- /.footer-widget -->
                                </div>

                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.footer-content -->

                <div class="footer-bottom">
                    <div class="container">
                        <div class="copyright">
                            <span>All rights reserved 2019 &copy; <a href="#">DashMe</a>  </span>
                        </div>

                    </div><!-- /.container -->
                </div><!-- /.footer-bottom -->
            </div><!-- /.tr-footer -->


            <!-- JS -->
            <!-- Include this in your blade layout -->
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script src="{{asset('assets/js/jquery.min.js')}}"></script>
            <script src="{{asset('assets/js/popper.min.js')}}"></script>
            <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('assets/js/jquery.nav.js')}}"></script>
            <script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
            <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
            <script src="{{asset('assets/js/counterup.min.js')}}"></script>
            <script src="{{asset('assets/js/inview.min.js')}}"></script>
            <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
            <script src="{{asset('assets/js/slick.min.js')}}"></script>
            <script src="{{asset('assets/js/jarallax.min.js')}}"></script>
            <script src="{{asset('assets/js/YTPlayer.min.js')}}"></script>
            <script src="{{asset('assets/js/switcher.js')}}"></script>
            <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
