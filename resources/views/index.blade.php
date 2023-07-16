<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Go Grow</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{url('frontend/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{url('frontend/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{url('frontend/images/loading.gif')}}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
        
            <div class="container">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Success!</strong> {{ Session::get('success', '') }}
                </div>
            @endif
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{url('/')}}" style="color: #4ec718;font-size: 40px;">Go Grow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><img src="{{url('frontend/icon/loc1.png')}}" />Location</li>
                                <li><img src="{{url('frontend/icon/email1.png')}}" />xyz@gmail.com</li>

                                <li><img src="{{url('frontend/icon/call1.png')}}" />123456</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-10 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="{{url('/')}}">Home</a> </li>
                                                <li> <a href="{{url('/')}}#about">About</a> </li>
                                                <li><a href="{{url('/')}}#product">Products</a></li>
                                                <li><a href="{{url('/')}}#testimonial">FAQ</a></li>
                                                <li><a href="{{url('/')}}#contact">Feedback</a></li>
                                                <li><a href="{{route('useful-link')}}">Useful Links</a></li>
                                                @if(Auth::check())
                                                <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>  
                                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                                </li>
                                                @else
                                                <li><a href="{{route('openAi')}}">Open AI</a>
                                                <li><a href="{{route('sign-in')}}">Login</a>
                                                </li>
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                       </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{url('frontend/images/banner.jpg')}}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Go Grow</h1>
                            <span>Farmer Help Desk</span>

                            <p>Provide information of Seed, crop, Pesticides, Fertilizer.</p>
                            <!-- <a class="buynow" href="#about">About us</a><a class="buynow ggg" href="#">Get a quote</a> -->

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{url('frontend/images/banner.jpg')}}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                        <h1>Go Grow</h1>
                            <span>Farmer Help Desk</span>

                            <p>Provide information of Seed, crop, Pesticides, Fertilizer.</p>
                            <!-- <a class="buynow" href="#about">About us</a><a class="buynow ggg" href="#">Get a quote</a> -->

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="images/banner.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                        <h1>Go Grow</h1>
                            <span>Farmer Help Desk</span>

                            <p>Provide information of Seed, crop, Pesticides, Fertilizer.</p>
                            <!-- <a class="buynow" href="#about">About us</a><a class="buynow ggg" href="#">Get a quote</a> -->

                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>About Go Grow<br><strong class="black"> Farm and company</strong></h2>
                        <p>Farming is growing crops and keeping animals for food and raw materials. Farming is a part of agriculture.Agriculture started thousands of years ago, but no one knows for sure how old it is.The development of farming gave rise to the Neolithic Revolution as people gaveup nomadic hunting and became settlers in cities.</p>
                        <!-- <a href="#">Read More</a> -->
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="{{url('frontend/images/about.png')}}" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- for_box -->
    <div class="for_box_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="{{url('frontend/images/1.png')}}" alt="#"/></i>
                        <span>1996923</span>
                        <h3>Crops</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="{{url('frontend/images/2.png')}}" alt="#"/></i>
                        <span>8000</span>
                        <h3>Seeds</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="{{url('frontend/images/3.png')}}" alt="#"/></i>
                        <span>60002</span>
                        <h3>Pesticides</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="{{url('frontend/images/4.png')}}" alt="#"/></i>
                        <span>1623</span>
                        <h3>Fertilizer</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end for_box -->
    <!-- product -->
    <div id="product" class="product">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Go Grow <strong class="black"> products</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <a href="{{url('/products/crop')}}">
                                <div class="product_box">
                                    <figure><img src="{{url('frontend/images/product_img1.jpg')}}" alt="#" />
                                        <h3>Crops </h3></figure>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <a href="{{url('/products/seed')}}">
                            <div class="product_box">
                                <figure><img src="{{url('frontend/images/product_img2.jpg')}}" alt="#" />
                                    <h3>Seeds</h3>
                                </figure>
                            </div>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <a href="{{url('/products/fertilizer')}}">
                            <div class="product_box">
                                <figure><img src="{{url('frontend/images/fertilizer1.jpg')}}" alt="#" />
                                    <h3>Fertilizer</h3></figure>
                            </div>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <a href="{{url('/products/pesticide')}}">
                            <div class="product_box">
                                <figure><img src="{{url('frontend/images/product_img4.jpg')}}" alt="#" />
                                    <h3>Pasticides </h3></figure>
                            </div>
                            </a>
                        </div>
                        <!-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="product_box">
                                <figure><img src="{{url('frontend/images/land.jpg')}}" alt="#" />
                                    <h3>Land </h3></figure>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="product_box">
                                <figure><img src="{{url('frontend/images/soil.jpg')}}" alt="#" />
                                    <h3>Soil </h3></figure>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                </div>
            </div>
        </div>
    </div>
   

    <!-- end product -->
    <!-- clients -->
    <div id="testimonial" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>FAQ</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="3" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    @foreach($faq as $key => $value)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <div class="testomonial_section">
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 pa_right">
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 pa_left">
                                        <div class="cross_inner">
                                            <h3>{{$value->question}}<br><strong class="ornage_color">{{$value->category}}</strong></h3>
                                            <p><img src="{{url('frontend/icon/1.png')}}" alt="#" />{{$value->answer}}
                                                <img src="{{url('frontend/icon/2.png')}}" alt="#"/></p>

                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 pa_right">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{--<div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 pa_right">
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 pa_left">
                                        <div class="cross_inner">
                                            <h3>Johndue<br><strong class="ornage_color">Farm & CO</strong></h3>
                                            <p><img src="{{url('frontend/icon/1.png')}} alt="#" />ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                <img src="{{url('frontend/icon/2.png')}}alt="#"/>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 pa_right">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="{{url('frontend/images/tes.jpg')}}" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Johndue<br><strong class="ornage_color">Farm & CO</strong></h3>
                                            <p><img src="{{url('frontend/icon/1.png')}}" alt="#" />ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                <img src="{{url('frontend/icon/2.png')}}" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}

                </div>

            </div>
        </div>
    </div>
  
    <!-- end clients -->
    <!-- contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Get <strong class="black"> Feedback</strong></h2>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid padddd">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
            <div class="map_section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <form class="main_form" method="POST" action="{{ route('feedback-form') }}">
                            {{ csrf_field() }}
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Name" type="text" name="name" required>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="email" name="email" required>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Subject" type="text" name="subject" required>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="message" required></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="map">
                </div>

            </div>
        </div>
    </div>

   
    <!-- end contact -->

    <!-- footer -->
    <!--  footer -->
    <footr>
        <div class="footer top_layer ">
            <div class="container">

                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <a href="index.html"> <img src="{{url('frontend/images/logo.png')}}" alt="logo" /></a>
                            <p>The development of farming gave rise to the Neolithic Revolution as people gaveup nomadic hunting and became settlers in cities.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Quick links</h3>
                            <ul class="Links_footer">
                                <li><img src="{{url('frontend/icon/3.png')}}" alt="#" /> <a href="#product">Products</a></li>
                                <li><img src="{{url('frontend/icon/3.png')}}" alt="#" /> <a href="#testimonial">FAQ</a></li>
                                <li><img src="{{url('frontend/icon/3.png')}}" alt="#" /> <a href="#contact">Contact Us</a></li>
                                <li><img src="{{url('frontend/icon/3.png')}}" alt="#" /> <a href="{{route('useful-link')}}">Useful Links</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>About us </h3>
                            <p>Farming is growing crops and keeping animals for food and raw materials.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Contact Us</h3>

                            <ul class="loca">
                                <li>
                                    <a href="#"><img src="{{url('frontend/icon/loc.png')}}" alt="#" /></a>London 145
                                    <br>United Kingdom </li>
                                <li>
                                    <a href="#"><img src="{{url('frontend/icon/email.png')}}" alt="#" /></a>Gogrow@gmail.com </li>
                                <li>
                                    <a href="#"><img src="{{url('frontend/icon/call.png')}}" alt="#" /></a>9876543210 </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footr>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{url('frontend/js/jquery.min.js')}}"></script>
    <script src="{{url('frontend/js/popper.min.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{url('frontend/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{url('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{url('frontend/js/custom.js')}}"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js')}}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> -->
    <script>
	    var botmanWidget = {
	        aboutText: 'Testing',
	        introMessage: "✋ Hi! I'm form Go-grow (Farmer Help Desk)"
	    };
    </script>
  
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</body>

</html>