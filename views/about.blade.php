<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Humanity</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/demo.css" />
    <link rel="stylesheet" href="css/testimonial.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

<style>
    h3,h5,h4
    {
        color:white;
    }
</style>
</head>
<body>
<div class="header container">
    <div class="visible-xs visible-sm col-xs-12 col-sm-12 text-center sm-logo">
        <a rel="home" href="index.html">
            <img src="img/logo.png" width="200" alt="logo">
        </a>
    </div>
</div>
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
            <li class="selected"><a href="{{asset('about')}}">About</a></li>
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
<div class="divider col-sm-12 col-xs-12 col-md-12">
    <div class="header-text"><span>Gallery</span> Images</div>
</div>


<section>

   <div class="container">
       <div class="row">
           <div class="col-md-8 col-md-offset-2">


               <h3> Name: </h3> <h5> Life’s Poetry Community Empowerment</h5>

               <h3>Email: </h3> <h5> info.lifespoetryce@gmail.com</h5>

                   <h3> Vision:</h3> <h5>
       Inspiring individuals through community empowerment.</h5>
                       <h3> Mission:</h3> <h5>
       Life’s Poetry Community Empowerment seeks to promote development through the arts, culture and literature within the community to enlighten, engage, empower, and to encourage individuals to achieve their full potential in life.</h5>

                           <h3> Our Services/Programs:</h3>

               ·         <h4>Poetry Book Club for Girls - </h4><h5> The Life's Poetry Book Club for Girls is a community book club for girls ages 8-12 that encourages the love of reading and writing poetry. This is a positive and empowering mentorship book club for girls where they engage in interactive activities.</h5>
<br>

                   ·         <h4>Open Mic Nights - </h4><h5>Is a positive community platform for individuals to showcase their gifts and talents.  It encourages and inspires individuals to utilize and embrace their unique gifts and talents.</h5>

<br>
                       ·        <h4>Annual Empowerment Conference –</h4><h5> An Annual Conference that seeks to enlighten, engage, empower and encourage individuals to achieve their full potential in life.</h5>

<br>
                           ·         <h4>Life’s Poetry News Quarterly Newsletter -</h4><h5> Features and showcases inspirational individuals within our community who have overcome obstacles and achieved positive outcomes despite challenging circumstances.</h5>

<br>
                               ·        <h4>Annual Multiple Sclerosis Fundraising Dinner - </h4><h5> A fundraising event that brings awareness to this debilitating disease, while highlighting real-life stories of people suffering with it and how they live their lives against the odds.  Proceeds to go to the MS Society.</h5>

<br>
                                   ·        <h4>Season’s Greetings  Annual Holiday Book Drive - </h4><h5> An annual book drive to bless families for the holiday season with the gift of books and to encourage literacy.  Books are donated to local shelters and organizations helping the less fortunate.

                   </h5>

       ·        <h3> P.U.R.P.L.E.</h3> <h5> - Powerful Upliftment Restores Positive Lifelong Efficiency. Purple Quote Fridays consists of a positive quote posted on Fridays to encourage, motivate and inspire individuals.
                   </h5>
           </div>
       </div>
   </div>
</section><!-- End Team Section -->


<!-- ============FOOTER============= -->

<!-- ============FOOTER============= -->
<br>
<br>
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
