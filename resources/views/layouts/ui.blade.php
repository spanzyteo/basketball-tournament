<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BasketBall Tournament') }}</title>

    <!-- Css Files -->
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/slick-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <!--/!--[if lte IE 9]-->
    <link rel="stylesheet" href="{{ asset('frontend/../../css/chosen.html') }}"> <!--[endif]--//-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!--// Main Wrapper \\-->
    <div class="sportsmagazine-main-wrapper">

        @include('layouts.frontend.navbar')


        @yield('content')

        @include('layouts.frontend.footer')
        <div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- SearchModal -->
    <div class="searchmodal modal fade" id="searchModal" tabindex="-1" role="dialog">
        <a href="#" data-dismiss="modal" class="sportsmagazine-modal-close"><i class="icon-uniF106"></i></a>
        <div class="modal-dialog" role="document">
            <div class="container">
                <div class="row">
                    <form class="sportsmagazine-search-box">
                        <input type="text" value="Search Your Keyword" onblur="if(this.value == '') { this.value ='Search Your Keyword'; }" onfocus="if(this.value =='Search Your Keyword') { this.value = ''; }">
                        <input type="submit" value="">
                        <i class="fa fa-search"></i>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- LoginModal -->
    <div class="loginmodal modal fade" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="sportsmagazine-login-box">
                <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i class="icon-uniF106"></i></a>
                <h4>Login To Your Account</h4>
                <form>
                    <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="password" value="Password*" onblur="if(this.value == '') { this.value ='Password*'; }" onfocus="if(this.value =='Password*') { this.value = ''; }">
                    <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign In" class="sportsmagazine-bordercolor sportsmagazine-color"></label>
                </form>
                <h4>Try Our Socials Also</h4>
                <ul class="login-network">
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                    <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Sign - Up Now !</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- SignupModal -->
    <div class="loginmodal modal fade" id="signupModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="sportsmagazine-login-box">
                <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i class="icon-uniF106"></i></a>
                <h4>Sign Up Now</h4>
                <form>
                    <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="text" value="Type your password*" onblur="if(this.value == '') { this.value ='Type your password*'; }" onfocus="if(this.value =='Type your password*') { this.value = ''; }">
                    <input type="text" value="Confirm your password*" onblur="if(this.value == '') { this.value ='Confirm your password*'; }" onfocus="if(this.value =='Confirm your password*') { this.value = ''; }">
                    <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign Up" class="sportsmagazine-bordercolor sportsmagazine-color"></label>
                </form>
                <h4>Try Our Socials Also</h4>
                <ul class="login-network">
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                    <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Login - Now !</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    @yield('scripts')
    <!-- jQuery (necessary for JavaScript plugins) -->
    <script type="text/javascript" src="{{ asset('frontend/script/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/script/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/script/slick.slider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/script/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/script/fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/script/isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/script/progressbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/script/counter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/script/functions.js') }}"></script>

</body>

</html>
