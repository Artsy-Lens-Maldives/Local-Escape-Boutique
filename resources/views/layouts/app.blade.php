<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hotel Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/img/favicon.ico" sizes="16x16">

        <!-- fonts -->
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>

        <!-- fontawesome -->
		<link rel="stylesheet" href="/css/font-awesome.css" />

        <!-- bootstrap -->
		<link rel="stylesheet" href="/css/bootstrap.min.css" />

        <!-- uikit -->
        <link rel="stylesheet" href="/css/uikit.min.css" />

        <!-- animate -->
        <link rel="stylesheet" href="/css/animate.css" />
        <link rel="stylesheet" href="/css/datepicker.css" />
        <!-- Owl carousel 2 css -->
        <link rel="stylesheet" href="/css/owl.carousel.css">
        <!-- rev slider -->
        <link rel="stylesheet" href="/css/rev-slider/settings.css" />
        <!-- lightslider -->
        <link rel="stylesheet" href="/css/lightslider.css">
        <!-- Theme -->
        <link rel="stylesheet" href="/css/reset.css">
        
        <!-- custom css -->
		<link rel="stylesheet" href="/css/style.css" />
        <!-- responsive -->
		<link rel="stylesheet" href="/css/responsive.css" />
        
        @yield('css')

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!-- This Template Is Fully Coded By Aftab Zaman from swiftconcept.com -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body @yield('body_id')>
        @include('partials.header')


        @yield('content')
        
        
        @include('partials.footer')

        <!-- jquery library -->
        <script src="/js/vendor/jquery-1.11.2.min.js"></script>
        <!-- bootstrap -->
        <script src="/js/bootstrap.min.js"></script>
		<!-- rev slider -->
        <script src="/js/rev-slider/rs-plugin/jquery.themepunch.plugins.min.js"></script>
        <script src="/js/rev-slider/rs-plugin/jquery.themepunch.revolution.js"></script>
        <script src="/js/rev-slider/rs.home.js"></script>
        <!-- uikit -->
        <script src="/js/uikit.min.js"></script>
        <!-- easing -->
		<script src="/js/jquery.easing.1.3.min.js"></script>
        <script src="/js/datepicker.js"></script>
        <!-- scroll up -->
        <script src="/js/jquery.scrollUp.min.js"></script>
        <!-- owlcarousel -->
        <script src="/js/owl.carousel.min.js"></script>
        <!-- lightslider -->
        <script src="/js/lightslider.js"></script>
        <!-- wow Animation -->
        <script src="/js/wow.min.js"></script>
        <!--Activating WOW Animation only for modern browser-->
        <!--[if !IE]><!-->
        <script type="text/javascript">new WOW().init();</script>
        <!--<![endif]-->

        <!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
        <!--[if gte IE 9]>
            <script type="text/javascript">new WOW().init();</script>
        <![endif]-->         

        <!--Opacity & Other IE fix for older browser-->
        <!--[if lte IE 8]>
            <script type="text/javascript" src="/js/ie-opacity-polyfill.js"></script>
        <![endif]-->

        <!-- my js -->
        <script src="/js/main.js"></script>		
        @yield('js')
    </body>
</html>
