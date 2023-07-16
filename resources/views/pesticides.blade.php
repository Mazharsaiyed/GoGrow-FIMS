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
    <!-- product -->
    <div id="product" class="product">
        <div class="container">
            <div class="container">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Success!</strong> {{ Session::get('success', '') }}
                </div>
            @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Pesticide <strong class="black"> information</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                    <div class="row">
                        @if(isset($pesticide) && count($pesticide) > 0)
                            @foreach($pesticide as $value)
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class="product_box" style="border: 1px solid lightgray;">
                                        <figure><img src="{{url('/images/'.$value->image)}}" alt="#" />
                                            <h3>{{$value->name}}</h3>
                                        </figure>
                                        <p style="text-align:center;" class="p-2"><b>Price : </b><span> {{$value->price}}</span></p>
                                        <div style="display: flex;justify-content: space-evenly;" class="p-2">
                                            @if(Auth::check())
                                            <a href="{{url('/images/'.$value->filename)}}" class="proDtl" download >Download</a>
                                            @else
                                            <a href="{{route('sign-in')}}" class="proDtl">Download</a>
                                            @endif
                                            @if(Auth::check())
                                            <form action="{{route('detail-mail')}}" method="post">
                                            {{ csrf_field() }}
                                                <input type="hidden" value="{{url('/images/'.$value->filename)}}" name="pdfname">
                                                <button class="proDtl">Send Mail</button>
                                            </form>
                                            @else
                                            <a href="{{route('sign-in')}}" class="proDtl">Send Mail</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
                </div>
            </div>
        </div>
    </div>
   

    <!-- end product -->

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
                                <li><img src="{{url('frontend/icon/3.png')}}" alt="#" /> <a href="#testimonial">Testimonial</a></li>
                                <li><img src="{{url('frontend/icon/3.png')}}" alt="#" /> <a href="#contact">Contact Us</a></li>
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
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
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
</body>

</html>