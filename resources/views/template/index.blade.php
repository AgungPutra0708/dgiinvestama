<!doctype html>
<html lang="en-US">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Digitize Global Inovasi</title>
    <meta name="description" content="Digitize Global Inovasi - Investing in Innovation, Shaping Tomorrow">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <!-- Body font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <!-- Navbar font -->

    <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/inc/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/inc/animations/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/inc/font-awesome/css/font-awesome.min.css') }}"> <!-- Font Icons -->
    <link rel="stylesheet" href="{{ asset('assets/inc/owl-carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/inc/owl-carousel/css/owl.theme.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mobile.css') }}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/skin/cool-gray.css') }}">


</head>

<body data-spy="scroll" data-target="#main-navbar">
    <div class="page-loader"></div> <!-- Display loading image while page loads -->
    <div class="body">

        @include('template.header')

        @include('carousel')

        @include('about')

        @include('product')

        @include('service')

        @include('testi')

        @include('partner')

        @include('contact')

        @include('footer')

    </div>
    <!-- body ends -->

    <!-- Plugins JS -->
    <script src="{{ asset('assets/inc/jquery/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('assets/inc/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/inc/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/inc/stellar/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/inc/animations/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/inc/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/inc/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/inc/classie.js') }}"></script>
    <script src="{{ asset('assets/inc/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/inc/jquery.counterup.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>

</body>


</html>
