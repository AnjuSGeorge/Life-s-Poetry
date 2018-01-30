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
    <?php
    /*function get_image_array($path = NULL, $protocol = "http://", $image_folder = "images") {

        $dir = new DirectoryIterator($path);

        $realpath = array();
        foreach ($dir as $fileinfo) {
            if ($fileinfo->isDot()) {
                continue;
            }

            $folder_name   = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; // gets the name of folder, in this case: "images"
            $file_name     = $fileinfo->getFilename();                // gets the name of the image
            $realpath[]    = $protocol . $folder_name . $image_folder . "/" . $file_name;        // put foldername and filename together
        }

        return $realpath;
    }

    $path = dirname(__FILE__) . "\images";       // path to image folder
    $image_array_path = get_image_array($path);  // invoke the get_image_array function

    // Simple way to output images, for the sake of example
    foreach ($image_array_path as $image_path) {

        echo "<img src=\"{$image_path}\"></img><br>";
    }

    $ar=array();
    $g=scandir('images/gallery');
    foreach($g as $x)
    {

    if(is_dir($x))
        $ar[$x]=scandir($x);

    else $ar[]=$x;
    }
        if (!is_dir($x))
            $ar[]=$x;
    }
    print_r($ar);

    */


    $getDetails=DB::table('photogallery')->where('photoIsApproved',0)-> orderBy('DateTime','ASC')->get();


    ?>

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
                <li class="selected"><a href="{{asset('ApprovePhotos')}}">Approve Photos</a></li>
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

<div class="divider col-sm-12 col-xs-12 col-md-12">
    <div class="header-text"><span>Approve Photos</span></div>
</div>


<section id="clients">

    <!-- Team Inner -->
    <div class="inner team">

        <!-- Header -->


        <!-- Members -->
        <div class="team-members inner-details">

            <!-- Member -->
            @foreach($getDetails as $showItem)
                <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="0">
                    <div class="member-inner">
                        <!-- Team Member Image -->
                        <a class="team-image">
                            <!-- Img -->
                            <img src="{{$showItem->photoPath}}" alt=""  height="350px"; width="150px" />
                        </a>
                        <br>
                        <a href ="/ApproveImages?ImageId={{$showItem->photoId}}">Approve</a>
                    </div> <!-- End Member Inner -->
                </div><!-- End Member -->

            @endforeach



        </div><!-- End Team Inner -->
</section><!-- End Team Section -->


<!-- ============FOOTER============= -->

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
