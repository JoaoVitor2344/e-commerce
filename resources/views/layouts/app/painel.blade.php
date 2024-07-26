<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Black Dashboard') }}</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ Vite::asset('resources/painel/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/painel/img/favicon.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- CSS Files -->
    @vite([
        'resources/painel/css/nucleo-icons.css',
        'resources/painel/css/black-dashboard.css',
        'resources/painel/css/theme.css',
    ])

    <!-- Perfect Scrollbar CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/perfect-scrollbar@1.5.5/css/perfect-scrollbar.min.css">
</head>
<body class="{{ $class ?? '' }}">
{{--@auth()--}}
<div class="wrapper">
    @include('layouts.navbars.sidebar')
    <div class="main-panel">
        @include('layouts.navbars.navbar')

        <div class="content">
            @yield('content')
        </div>

        @include('layouts.footer')
    </div>
</div>
<form id="logout-form" action="#" method="POST" style="display: none;">
    @csrf
</form>
{{--@else--}}
{{--    @include('layouts.navbars.navbar')--}}
{{--    <div class="wrapper wrapper-full-page">--}}
{{--        <div class="full-page {{ $contentClass ?? '' }}">--}}
{{--            <div class="content">--}}
{{--                <div class="container">--}}
{{--                    @yield('content')--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @include('layouts.footer')--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endauth--}}
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
                        <span class="badge filter badge-primary active" data-color="primary"></span>
                        <span class="badge filter badge-info" data-color="blue"></span>
                        <span class="badge filter badge-success" data-color="green"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/black-dashboard-laravel" target="_blank"
                   class="btn btn-primary btn-block btn-round">Download Now</a>
                <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html"
                   target="_blank" class="btn btn-default btn-block btn-round">
                    Documentation
                </a>
                <a href="https://www.creative-tim.com/product/black-dashboard-pro-laravel" target="_blank"
                   class="btn btn-danger btn-block btn-round">
                    Upgrade to PRO
                </a>
            </li>
            <li class="header-title">Thank you for 95 shares!</li>
            <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
                <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50
                </button>
                <br>
                <br>
                <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard-laravel"
                   data-icon="octicon-star" data-size="large" data-show-count="true"
                   aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
        </ul>
    </div>
</div>

<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<!-- Perfect Scrollbar -->
<script src="https://cdn.jsdelivr.net/npm/perfect-scrollbar@1.5.5/dist/perfect-scrollbar.min.js"></script>

<!-- Bootstrap Notify -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.min.js"
        integrity="sha512-vCgNjt5lPWUyLz/tC5GbiUanXtLX1tlPXVFaX5KAQrUHjwPcCwwPOLn34YBFqws7a7+62h7FRvQ1T0i/yFqANA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Vite -->
@vite([
    'resources/painel/js/plugins/chartjs.min.js',
    'resources/painel/js/black-dashboard.js',
    'resources/painel/js/theme.js',
])

<!-- JS File -->
@stack('js')

<script>
    $(() => {
        $(() => {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');
            $main_panel = $('.main-panel');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            $('.fixed-plugin a').click(function (event) {
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .background-color span').click(function () {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data', new_color);
                }

                if ($main_panel.length != 0) {
                    $main_panel.attr('data', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data', new_color);
                }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function () {
                var $btn = $(this);

                if (sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    sidebar_mini_active = false;
                    blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                } else {
                    $('body').addClass('sidebar-mini');
                    sidebar_mini_active = true;
                    blackDashboard.showSidebarMessage('Sidebar mini activated...');
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function () {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function () {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });

            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function () {
                var $btn = $(this);

                if (white_color == true) {
                    $('body').addClass('change-background');
                    setTimeout(function () {
                        $('body').removeClass('change-background');
                        $('body').removeClass('white-content');
                    }, 900);
                    white_color = false;
                } else {
                    $('body').addClass('change-background');
                    setTimeout(function () {
                        $('body').removeClass('change-background');
                        $('body').addClass('white-content');
                    }, 900);

                    white_color = true;
                }
            });
        });
    });
</script>
@stack('js')
</body>
</html>
