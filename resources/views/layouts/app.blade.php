<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>@yield('title', 'Markedia - Marketing Blog Template')</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="{{ asset('assets/markedia/images/favicon.ico') }}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{ asset('assets/markedia/images/apple-touch-icon.png') }}">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="{{ asset('assets/markedia/css/bootstrap.css') }}" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="{{ asset('assets/markedia/css/font-awesome.min.css') }}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ asset('assets/markedia/style.css') }}" rel="stylesheet">

<!-- Animate styles for this template -->
<link href="{{ asset('assets/markedia/css/animate.css') }}" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="{{ asset('assets/markedia/css/responsive.css') }}" rel="stylesheet">

<!-- Colors for this template -->
<link href="{{ asset('assets/markedia/css/colors.css') }}" rel="stylesheet">

<!-- Version Marketing CSS for this template -->
<link href="{{ asset('assets/markedia/css/version/marketing.css') }}" rel="stylesheet">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

    <div id="wrapper">
        @include('layouts.components.navbar')

        @yield('hero')

        @yield('page-title')

        <section class="section lb @yield('section_class')">
            <div class="container">
                <div class="row">
                    @if(isset($sidebarLeft) && $sidebarLeft)
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        @include('layouts.components.sidebar')
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        @yield('content')
                    </div>
                    @else
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        @yield('content')
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        @include('layouts.components.sidebar')
                    </div>
                    @endif
                </div>
            </div>
        </section>

        @include('layouts.components.footer')

        <div class="dmtop">Scroll to Top</div>

    </div><!-- end wrapper -->

    <!-- Core JavaScript -->
    <script src="{{ asset('assets/markedia/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/markedia/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/markedia/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/markedia/js/animate.js') }}"></script>
    <script src="{{ asset('assets/markedia/js/custom.js') }}"></script>
    @stack('scripts')
</body>

</html>