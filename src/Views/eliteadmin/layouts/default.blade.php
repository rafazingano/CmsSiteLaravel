<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/eliteadmin/plugins/images/favicon.png') }}">
        <title>Dashboard</title>
        <link href="{{ asset('assets/eliteadmin/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/eliteadmin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/eliteadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/eliteadmin/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/eliteadmin/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/eliteadmin/css/colors/blue.css') }}" id="theme" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
        @stack('styles')
    </head>
    <body>
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <div id="wrapper">
            @include('cwsitelaravel::eliteadmin.partials.header')
            @include('cwsitelaravel::eliteadmin.partials.sidebar')
            <div id="page-wrapper">
                <div class="container-fluid">
                    @include('cwsitelaravel::eliteadmin.partials.bg-title')
                    @yield('content')                
                    @include('cwsitelaravel::eliteadmin.partials.sidebar-right')
                </div>
                @include('cwsitelaravel::eliteadmin.partials.footer')
            </div>
        </div>
        <script src="{{ asset('assets/eliteadmin/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/eliteadmin/bootstrap/dist/js/tether.min.js') }}"></script>
        <script src="{{ asset('assets/eliteadmin/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/eliteadmin/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') }}"></script>
        <script src="{{ asset('assets/eliteadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
        <script src="{{ asset('assets/eliteadmin/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/eliteadmin/js/waves.js') }}"></script>
        <script src="{{ asset('assets/eliteadmin/js/custom.min.js') }}"></script>
        @stack('scripts')
    </body>
</html>