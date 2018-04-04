    <meta charset="utf-8">
    <title>WebWonderWoman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mwalima Peltenburg">

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">

    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('js/lineandbars.js')}}"></script>

    <script type="text/javascript" src="{{ asset('js/dash-charts.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/gauge.js')}}"></script>

    <!-- NOTY JAVASCRIPT -->
    <script type="text/javascript" src="{{ asset('js/jquery.noty.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/top.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/topLeft.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/topRight.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/topCenter.js')}}"></script>

    <!-- You can add more layouts if you want -->
    <script type="text/javascript" src="{{ asset('js/default.js')}}"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
    {{--<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>--}}
    <script src="{{ asset('js/jquery.flexslider.js')}}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('js/admin.js')}}"></script>

    <style type="text/css">
        body {
            padding-top: 60px;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <!-- Google Fonts call. Font Used Open Sans & Raleway -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <script type="text/javascript">
        $(document).ready(function () {

            $("#btn-blog-next").click(function () {
                $('#blogCarousel').carousel('next')
            });
            $("#btn-blog-prev").click(function () {
                $('#blogCarousel').carousel('prev')
            });

            $("#btn-client-next").click(function () {
                $('#clientCarousel').carousel('next')
            });
            $("#btn-client-prev").click(function () {
                $('#clientCarousel').carousel('prev')
            });

        });

        $(window).load(function () {

            $('.flexslider').flexslider({
                animation: "slide",
                slideshow: true,
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });

    </script>