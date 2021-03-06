<!DOCTYPE html>
<!--[if IE 7 ]>
<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<!-- =========================================
head
========================================== -->

<head>
    <!-- =========================================
    Basic
    ========================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>fontanero</title>
    <meta name="keywords" content="fontanero, HTML5, CSS3, responsive, Template"/>
    <meta name="author" content="Cloud Software Solution Ltd."/>
    <meta name="description" content="fontanero- Responsive HTML5/CSS3 Template"/>

    <!-- =========================================
    Mobile Configurations
    ========================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>


    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Raleway:600,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <!-- //Fonts -->

    <!-- Owl Carousel CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- =========================================
    CSS
    ========================================== -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/offcanvas.css"/>
    <link rel="stylesheet" href="css/style.css"/>

</head>
<!-- /head -->


<body>

    <div class="wrapper" id="wrapper">
        <div class="offcanvas-pusher">
            <div class="content-wrapper">

            @yield('header')

                <!-- .container-->
                @yield('slider')
                @yield('breadcrumb')
                <!-- .container-fluid-->
                @yield('content')
                <!-- .container-->
                @yield('gallery')
                <!-- .container-->
                @yield('contact')
                <!-- .quote-section-->
                
                <!-- .container-->
                @yield('footer')
                <!-- .container-->


            </div>
            <!--content-wrapper-->
        </div>
        <!-- offcanvas-pusher -->
        @yield('mobileNav')
        <!-- offcanvas-menu end -->         
    </div>
    <!-- #wrapper -->


    <!-- =========================================
    JAVASCRIPT
    ========================================== -->

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/hippo-off-canvas.js"></script>
    <script src="js/script.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>


    
</body>
</html>