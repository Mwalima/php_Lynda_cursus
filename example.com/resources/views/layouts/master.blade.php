<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Mwalima Test site</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/jumbotron-narrow.css') }}" rel="stylesheet">
    <link href="ḧttps://fonts.googleapis.com/css?family=Caveat|open+sans:400,700" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/animation.css">
    <![endif]-->
    <style>
        body{
            height:200%;
            width:100%;
            background-image:url("img/background.jpg");/*your background image*/
            /*background-repeat:no-repeat;!*we want to have one single image not a repeated one*!*/
            background-size:cover;/*this sets the image to fullscreen covering the whole screen*/
            /*css hack for ie*/
            filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.image.jpg',sizingMethod='scale');
            -ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.jpg',sizingMethod='scale')";
        }
        .btn-success{
            background-color: #0569e0;
        }
        a {
            color: #0b1823;
            text-decoration: none;
        }
        .social { position: absolute; right: 30px; bottom: -25px; }
        .social a { display: inline-block; width: 50px; height: 50px; background: no-repeat 0 0; margin-left: 10px; }
        .social a span { display: none; }

        .social a.tw {

            background-image: url(img/icon_tw_svg.php?b=255,0,0,.6);
        }
        .social a.li {

            background-image: url(/img/icon_li_svg.php?b=255,0,0,.6);
        }
        .social a.ig {

            background-image: url(img/icon_ig_svg.php?b=255,0,0,.6&i=0,0,255,1);
        }

        /*on hover over mouse*/
        .social a.tw:hover {

            background-image: url(img/icon_tw_svg.php?255,255,255,255&i=89,173,235,1);
        }
        .social a.li:hover {

            background-image: url(/img/icon_li_svg.php?b=255,255,255,255&i=89,173,235,1);
        }
        .social a.ig:hover {

            background-image: url(img/icon_ig_svg.php?b=255,255,255,255&i=89,173,235,1);
        }

    </style>
</head>

<div class="container">
    <div class="header">
        @include('includes.header')
    </div>

    <div class="jumbotron">

        @yield('sidebar-up')
    </div>

    @include('components.breadcrumbs')

    <div class="row marketing">
        <div class="col-12 col-md-auto">
            @yield('sidebar-left')
        </div>

        <div class="col-12 col-md-auto">
            @yield('sidebar-right')
        </div>
    </div>



    <div class="content">
        @yield('content')
    </div>

    <footer class="footer">
        @yield('footer')
    </footer>
</div>

<script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>

</html>
