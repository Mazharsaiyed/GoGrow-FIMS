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
     <!-- contact -->
    
     <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Sign <strong class="black"> UP</strong></h2>
                    </div>
                </div>
            </div>
            @if(Session::has('success'))
            <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
            @endif
            @if(Session::has('error'))
            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
            @endif
        </div>
        <div class="container-fluid d-flex" id="signForm">
            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-6">
                <div class="container">
                    <form class="main_formms" action="{{ route('store-user') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label class="input-lbl">Name</label>
                                <input class="form-control" placeholder="Name" type="text" name="name" value="{{ old('name') }}" required>
                            </div>
                            @if($errors->has('name'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </em>
                            @endif
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label class="input-lbl">Email</label>
                                <input class="form-control" placeholder="Email" type="text" name="email" value="{{ old('email') }}" required>
                            </div>
                            @if($errors->has('email'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </em>
                            @endif
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label class="input-lbl">Password</label>
                                <input class="form-control" placeholder="Password" type="password" name="password" required>
                            </div>
                            @if($errors->has('password'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </em>
                            @endif
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label class="input-lbl">Phone</label>
                                <input class="form-control" placeholder="Phone" type="text" name="phone" value="{{ old('phone') }}" required>
                            </div>
                            @if($errors->has('phone'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </em>
                            @endif
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label class="input-lbl">Country</label>
                                <input class="form-control" placeholder="Country" type="text" name="country" value="{{ old('country') }}" required>
                            </div>
                            @if($errors->has('country'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('country') }}
                                </em>
                            @endif
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label class="input-lbl">State</label>
                                <input class="form-control" placeholder="State" type="text" name="state" value="{{ old('state') }}" required>
                            </div>
                            @if($errors->has('state'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('state') }}
                                </em>
                            @endif
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label class="input-lbl">City</label>
                                <input class="form-control" placeholder="City" type="text" name="city" value="{{ old('city') }}" required>
                            </div>
                            @if($errors->has('city'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('city') }}
                                </em>
                            @endif
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label class="input-lbl">Date of Birth</label>
                                <input class="form-control" placeholder="Date of Birth" type="date" name="dob" value="{{ old('dob') }}" required>
                            </div>
                            @if($errors->has('dob'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('dob') }}
                                </em>
                            @endif
                            <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <label class="input-lbl">Gender</label><br>
                                <input type="radio" name="gender" value="male"> <span class="input-lbl">Male</span>
                                <input type="radio" name="gender" value="female"> <span class="input-lbl">Female</span>
                            </div>
                            @if($errors->has('gender'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('gender') }}
                                </em>
                            @endif -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <label class="input-lbl">Address</label>
                                <textarea class="textarea" placeholder="" type="text" name="address" value="{{ old('address') }}" required></textarea>
                            </div>
                            @if($errors->has('address'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('address') }}
                                </em>
                            @endif
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <button class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
            </div>
        </div>
        <br>
            <br>
            <br>
            <br>
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