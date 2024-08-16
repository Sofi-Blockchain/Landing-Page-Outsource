<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
        <title>@yield('title', config('app.name', '@Master Layout'))</title>

        {{-- Styles css common --}}

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('cms_assets/plugins/fontawesome-free/css/all.min.css'); }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet"
            href="{{ asset('cms_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('cms_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('cms_assets/plugins/jqvmap/jqvmap.min.css'); }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('cms_assets/css/adminlte.css'); }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet"
            href="{{ asset('cms_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('cms_assets/plugins/daterangepicker/daterangepicker.css'); }}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('cms_assets/plugins/summernote/summernote-bs4.min.css'); }}">

        @yield('style-libraries')
        {{-- Styles custom --}}
        @yield('styles')

        @vite(['resources/scss/cms.scss', 'resources/js/cms.js'])
    </head>

    <body class="hold-transition login-page">
        <main class="content">
            @yield('content')
        </main>

        @yield('scripts')
        <!-- jQuery -->
        <script src="{{ asset('cms_assets/plugins/jquery/jquery.min.js')}}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('cms_assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('cms_assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); }}"></script>
        <!-- ChartJS -->
        <script src="{{ asset('cms_assets/plugins/chart.js/Chart.min.js'); }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('cms_assets/plugins/sparklines/sparkline.js'); }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('cms_assets/plugins/jqvmap/jquery.vmap.min.js'); }}"></script>
        <script src="{{ asset('cms_assets/plugins/jqvmap/maps/jquery.vmap.usa.js'); }}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('cms_assets/plugins/jquery-knob/jquery.knob.min.js'); }}"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('cms_assets/plugins/moment/moment.min.js'); }}"></script>
        <script src="{{ asset('cms_assets/plugins/daterangepicker/daterangepicker.js'); }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('cms_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); }}">
        </script>
        <!-- Summernote -->
        <script src="{{ asset('cms_assets/plugins/summernote/summernote-bs4.min.js'); }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('cms_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('cms_assets/js/adminlte.js'); }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('cms_assets/js/demo.js'); }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('cms_assets/js/pages/dashboard.js'); }}"></script>
    </body>

</html>
