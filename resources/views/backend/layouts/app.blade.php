<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>FOOD</title>

    <!-- additional styles for plugins -->
    <!-- weather icons -->
    <link rel="stylesheet" href="bower_components/weather-icons/css/weather-icons.min.css" media="all">
    <!-- metrics graphics (charts) -->
    <link rel="stylesheet" href="bower_components/metrics-graphics/dist/metricsgraphics.css">
    <!-- c3.js (charts) -->
    <link rel="stylesheet" href="bower_components/c3js-chart/c3.min.css">

    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="assets/icons/flags/flags.min.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="assets/css/main.min.css" media="all">

    <!-- Page Level Styles -->
    @stack('styles')
</head>

<body class="sidebar_main_open">
    @if (auth()->guest())
        @yield('guest')
    @else
        <!-- BEGIN HEADER -->
            @include('backend.layouts.partials.header')
        <!-- END HEADER -->
        <!-- BEGIN SIDEBAR-->
            @include('backend.layouts.partials.sidebar')
        <!-- END SIDEBAR-->

        <!-- BEGIN PAGE_CONTENT-->
        <div id="page_content">
            <div id="page_content_inner">
                @yield('content')
            </div>
        </div>
        <!-- BEGIN PAGE_CONTENT-->
    @endif

    <!-- Global Script For Setting Session Messages and Active URL -->
    @include('backend.layouts.partials.global-script')

<script>
    WebFontConfig = {
        google: {
            families: [
                'Source+Code+Pro:400,700:latin',
                'Roboto:400,300,500,700,400italic:latin'
            ]
        }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

<!-- momentJS date library -->
<script src="bower_components/moment/min/moment.min.js"></script>

<!-- common functions -->
<script src="assets/js/common.min.js"></script>
<!-- uikit functions -->
<script src="assets/js/uikit_custom.min.js"></script>
<!-- altair common functions/helpers -->
<script src="assets/js/altair_admin_common.min.js"></script>

<!-- page specific plugins -->
<!-- d3 -->
<script src="bower_components/d3/d3.min.js"></script>
<!-- metrics graphics (charts) -->
<script src="bower_components/metrics-graphics/dist/metricsgraphics.min.js"></script>
<!-- c3.js (charts) -->
<script src="bower_components/c3js-chart/c3.min.js"></script>
<!-- maplace (google maps) -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="bower_components/maplace.js/src/maplace-0.1.3.js"></script>
<!-- peity (small charts) -->
<script src="bower_components/peity/jquery.peity.min.js"></script>
<!-- easy-pie-chart (circular statistics) -->
<script src="bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<!-- countUp -->
<script src="bower_components/countUp.js/countUp.min.js"></script>
<!-- handlebars.js -->
<script src="bower_components/handlebars/handlebars.min.js"></script>
<script src="assets/js/custom/handlebars_helpers.min.js"></script>
<!-- CLNDR -->
<script src="bower_components/clndr/src/clndr.js"></script>
<!-- fitvids -->
<script src="bower_components/fitvids/jquery.fitvids.js"></script>

<!--  dashbord functions -->
<script src="assets/js/pages/dashboard.min.js"></script>

<!-- Page Level Scripts -->
@stack('scripts')

<!-- enable hires images -->
<script>
    $(function() {
        altair_helpers.retina_images();
    });
</script>
</body>
</html>