<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Life's Poetry</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/demo.css')}}" />
    <link rel="stylesheet" href="{{asset('css/testimonial.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header container">
    <div class="visible-xs visible-sm col-xs-12 col-sm-12 text-center sm-logo">
        <a rel="home" href="{{asset('index.html')}}">
            <img src="{{asset('img/logo.png')}}" width="200" alt="logo";
            >
        </a>
    </div>
</div>s
<div class="navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class= "hidden-xs hidden-sm">
                <a rel="home" href="{{asset('index.html')}}"><img class="logo" src="{{asset('img/logo.png')}}" width="200" alt="logo" style ="border-radius:50%"></a>
            </li>
            <li><a href="{{asset('index')}}">Home</a></li>
            <li><a href="{{asset('about')}}">About</a></li>
            <li><a href="{{asset('gallery')}}">Gallery</a></li>
            <li><a href="{{asset('event')}}">Events</a></li>
            @if (!auth::check())
                <li><a href="{{asset('register')}}">Register</a></li>
                <li class="selected"><a href="{{asset('login')}}">Login</a></li>
            @endif
            <li><a href="{{asset('contact')}}">Contact</a></li>
            @if (auth::check() && Auth::user()->IsAdmin)

             <li><a href="{{asset('AddEvent')}}">Add Events</a></li>
             <li><a href="{{asset('ApprovePhotos')}}">Approve Photos</a></li>
            @endif
            <li><a href="{{asset('logout')}}">Logout</a></li>
        </ul>
    </div>
</div>
<div>
    <div class="row">
        &nbsp;
</div>
    <div class="row">
        &nbsp;
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn" style="background-color:#8E507F;color:black">
                                    Login
                                </button>

                                <a class="btn" href="{{ route('password.request') }}" style="color:#8E507F">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ============FOOTER============= -->
<footer id="footer">
    <div class="footer-content container">
        <div class="footer-adress text-center col-xs-12 col-sm-4 col-md-4">
            <h4>Life's Poetry Community Enpowerment</h4>
            <ul class="footer-menus">
                <li><a href="{{asset('index')}}">Home </a> /</li>
                <li><a href="{{asset('about')}}">About</a></li><br />
                <li><a href="{{asset('gallery')}}">Gallery </a></li>
                <li><a href="{{asset('contact')}}">Contact</a></li>

            </ul>
        </div>
        <div class="footer-second col-xs-12 col-sm-4 col-md-4">
            <div class="social-block text-center">
                <div class="social-share">
                    <a href="https://www.facebook.com/lifespoetrycommunityempowerment/"><i class="fa fa-2x fa-facebook"></i></a>
                    <a href="https://twitter.com/search?q=Lifes_Poetry"><i class="fa fa-2x  fa-twitter"></i></a>
                    <a href="https://www.instagram.com/explore/tags/lifespoetry/"><i class="fa fa-2x  fa-instagram"></i></a>
                </div>
            </div>
            <p class="text-center footer-text1">123 456 7890</p>
            <p class="text-center footer-text">info.lifespoetry@gmail.com</p></div>
        <div class="footer-third col-xs-12 col-sm-4 col-md-4">
            <div class="copyright">
                <span>Copyright 2018 Theme</span><br>
                <span>All Rights Reserved</span>
            </div>
        </div>
    </div>
    <div class="move-top-page">
    </div>
</footer>


<!-- script references -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/nav-hover.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<!-- Place in the <head>, after the three links -->
<script>
    $('.testimonials-slider').bxSlider({
        slideWidth: 800,
        minSlides: 1,
        maxSlides: 1,
        slideMargin: 32,
        auto: true,
        autoControls: true
    });
</script>
<script type="text/javascript">
</script>
</body>
</html>
