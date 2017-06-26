<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- Styles -->
<style>
html, body {
    background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

.full-height {
    height: 100vh;
            }

.flex-center {
    align-items: center;
                display: flex;
                justify-content: center;
            }

.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
                top: 18px;
            }

.content {
    text-align: center;
            }

.title {
    font-size: 84px;
            }

.links > a {
    color: #636b6f;
    padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

.m-b-md {
    margin-bottom: 30px;
            }
</style>
<link rel="stylesheet" href="<?php echo asset('css/main.css'); ?>" type="text/css">
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <div class="main_page">
                <div class="page_header floating_element">
                    <img src="<?php echo asset('_images/accent1.jpg'); ?>">
                </div>
                <div class="breadcrumbs">
                    @include('components.breadcrumbs')
                <span class="floating_element"></span>
                <div class="table_of_contents floating_element">
                    <div class="section_header section_header_grey">
                        <h3 class="highlight">Inhoud</h3>
                    </div>
                    <div class="table_of_contents_item floating_element">
                        <a href="/register">registeren</a>
                    </div>
                    <div class="table_of_contents_item floating_element">
                        <a href="/login">inloggen</a>
                    </div>
                    <div class="table_of_contents_item floating_element">
                        <a href="/logout">Uitloggen</a>
                    </div>
                    <div class="table_of_contents_item floating_element">
                        <a href="#files">Config files</a>
                    </div>
                </div>
                <div class="content_section floating_element">
                    <div class="section_header section_header_red">
                        <div id="about"></div>
                        It works!
                    </div>
                    <div class="content_section_text">
                        <p>
                    </div>
                </div>
            </div>
            <div class="validator">
            </div>
        </div>
    </div>
</div>
</body>
</html>
