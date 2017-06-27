<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="flex-center position-ref full-height">

    <div id="main" class="row">

        <div id="contentWrapper" class="col-md-8">
            @yield('content')
        </div>

        <div id="sidebar" class="col-md-4">
            @include('includes.sidebar')
        </div>

    </div><!-- sidebar content -->

</div>
</div>
<footer class="row">
    @include('includes.footer')
</footer>
</div>
</body>
</html>