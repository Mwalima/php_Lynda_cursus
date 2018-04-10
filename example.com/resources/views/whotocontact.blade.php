<!doctype html>
<html>
<head>
    @include('partials.header')
</head>
<body>
<div class="index_title">
    <h1><img src="/images/w_medium.png">ho to Contact</h1>
</div>

<!-- NAVIGATION MENU -->

<div class="navbar-nav navbar-inverse navbar-fixed-top">
    @include('partials.nav_menu')
</div>
<div class="container">
    <div class="contact_form">
        @include('partials.contact_form')
    </div>
</div>
<div id="footerwrap">
    @include('partials.footer')
</div>
</body>
</html>