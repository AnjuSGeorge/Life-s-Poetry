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
    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
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
            <li class="selected"><a href="{{asset('index')}}">Home</a></li>
            <li><a href="{{asset('about')}}">About</a></li>
            <li><a href="{{asset('gallery')}}">Gallery</a></li>
            <li><a href="{{asset('event')}}">Events</a></li>
            @if (!auth::check())
                <li><a href="{{asset('register')}}">Register</a></li>
                <li><a href="{{asset('login')}}">Login</a></li>
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


    <div class="col-md-6 col-md-offset-1 col-sm-7 col-xs-12">

        <div class="widget">
            <h3 class="widget-title style5" style="color:white">Contact</h3>
            <p>Morbi rutrum massa eget mi gravida, sit amet mollis magna gravida. Morbi sodales, ligula quis ornare bibendum, magna erat convallis ipsum, id posuere ligula massa vitae leo.</p>
            <ul class="clearfix">
                <li>
                    <p><span class="fa fa-envelope-o"></span>Email: <a href="mailto:info.lifespoetryce@gmail.com">info.lifespoetryce@gmail.com
                        </a></p>
                </li>
                <li>
                    <p><span class="fa fa-phone"></span>Phone: (+84) XXX-349-0600</p>
                </li>
                <li>
                    <p><span class="fa fa-fax"></span>Fax: (+84) 740-349-xxxx</p>
                </li>

            </ul>
        </div>
        <!-- widget -->

    </div>
    <div class="contact-form-full col-md-4 col-sm-4 col-xs-11" style="background-color:white" >
    <br>
        <div class="inner contact" >
            <!-- Form Area -->
            <div class="contact-form" >
                <!-- Form -->
                <form id="contact-us" method="post" action="#">
                {{ csrf_field() }}
                    <!-- Left Inputs -->
                    <div class="col-xs-12 wow animated slideInLeft" data-wow-delay=".5s">
                        <!-- Name -->
                        <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                        <!-- Email -->
                        <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />

                    </div><!-- End Left Inputs -->
                    <!-- Right Inputs -->
                    <div class="col-xs-12 wow animated slideInRight" data-wow-delay=".5s">
                        <!-- Message -->
                        <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                    </div><!-- End Right Inputs -->
                    <!-- Bottom Submit -->
                    <div class="relative fullwidth col-xs-12">
                        <!-- Send Button -->
                        <button type="submit" id="submit" name="submit" class="form-btn semibold" style="background-color:#7a4b94;color:black">Send Message</button>
                    </div><!-- End Bottom Submit -->
                    <!-- Clear -->
                    <div class="clear"></div>
                </form>

                <!-- Your Mail Message -->
                <div class="mail-message-area">
                    <!-- Message -->
                    <div class="alert gray-bg mail-message not-visible-message">
                        <strong>Thank You !</strong> Your email has been delivered.
                    </div>
                </div>

            </div><!-- End Contact Form Area -->
        </div><!-- End Inner -->
        <br>
    </div>

    <!-- ============FOOTER============= -->
<footer id="footer">
    <div class="footer-content container">
        <div class="footer-adress text-center col-xs-12 col-sm-4 col-md-4">
            <h4>Life's Poetry Community Enpowerment</h4>
            <ul class="footer-menus">
                <li>Home /</li>
                <li>About </li><br />
                <li>Service /</li>
                <li>Gallery /</li>
                <li>Contact</li>
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
