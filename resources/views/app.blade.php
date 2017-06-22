<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <title>TASTY - RESTAURANT HTML TEMPLATE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/base.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css"  media="all" />
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css"  media="all" />
    <link href="https://fonts.googleapis.com/css?family=Kristi" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
</head>
<body>
<!-- Preloader -->
<div class="loader">
    <!-- Preloader inner -->
    <div class="loader-inner">
        <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <circle class="spinner" cx="50" cy="50" r="21" fill="#ffffff" stroke-width="2"/>
        </svg>
    </div>
    <!-- End preloader inner -->
</div>
<!-- End preloader-->

@include('partials/navbar')
@include('partials/restro')
@include('partials/menu')
@include('partials/review')
@include('partials/special')
@include('partials/reservation')
@include('partials/gallery')
@include('partials/contact')

<!--Javascript-->
<script src="{{ asset('js/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.flexslider-min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/smooth-scroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/placeholders.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbGQXiGt-6UAmOFFdSzYI-byeE7ewBuVM&callback=initializeMap"></script>
<!-- Google analytics -->
<!-- End google analytics -->
</body>
</html>