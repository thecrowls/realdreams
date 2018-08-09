<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="{{asset("images/favicon-36x36.ico")}}">
    <link rel="shortcut icon" href="{{asset("images/favicon-36x36.ico")}}"/>
    <link rel="stylesheet" href="{{asset("booking/css/booking.css")}}">
    <link rel="stylesheet" href="{{asset("css/camera.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <script src="{{asset("js/jquery.js")}}"></script>
    <script src="{{asset("js/jquery-migrate-1.2.1.js")}}"></script>
    <script src="{{asset("js/script.js")}}"></script>
    <script src="{{asset("js/superfish.js")}}"></script>
    <script src="{{asset("js/jquery.ui.totop.js")}}"></script>
    <script src="{{asset("js/jquery.equalheights.js")}}"></script>
    <script src="{{asset("js/jquery.mobilemenu.js")}}"></script>
    <script src="{{asset("js/jquery.easing.1.3.js")}}"></script>
    <script src="{{asset("js/owl.carousel.js")}}"></script>
    <script src="{{asset("js/camera.js")}}"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="{{asset("js/jquery.mobile.customized.min.js")}}"></script>
    <!--<![endif]-->
    <script src="{{asset("booking/js/jquery-ui-1.10.3.custom.min.js")}}"></script>
    <script src="{{asset("booking/js/jquery.fancyform.js")}}"></script>
    <script src="{{asset("booking/js/jquery.placeholder.js")}}"></script>
    <script src="{{asset("booking/js/regula.js")}}"></script>
    <script src="{{asset("booking/js/booking.js")}}"></script>
    <script>
        $(document).ready(function () {
            jQuery('#camera_wrap').camera({
                loader: false,
                pagination: false,
                minHeight: '444',
                thumbnails: false,
                height: '48.375%',
                caption: true,
                navigation: true,
                fx: 'mosaic'
            });
            /*carousel*/
            var owl = $("#owl");
            owl.owlCarousel({
                items: 2, //10 items above 1000px browser width
                itemsDesktop: [995, 2], //5 items between 1000px and 901px
                itemsDesktopSmall: [767, 2], // betweem 900px and 601px
                itemsTablet: [700, 2], //2 items between 600 and 0
                itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                navigation: true,
                pagination: false
            });
            $().UItoTop({easingType: 'easeOutQuart'});
        });
    </script>
</head>