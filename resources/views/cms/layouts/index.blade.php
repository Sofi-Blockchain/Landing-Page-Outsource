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
        <link rel="stylesheet" href="{{ asset('cms_assets/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet"
            href="{{ asset('cms_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('cms_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- DataTables -->
        <link rel="stylesheet"
            href="{{ asset('cms_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet"
            href="{{ asset('cms_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet"
            href="{{ asset('cms_assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
        <!-- Select2 -->
        <link rel="stylesheet" href="{{ asset('cms_assets/plugins/select2/css/select2.min.css') }}">
        <link rel="stylesheet"
            href="{{ asset('cms_assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
        <!-- Theme style -->
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('cms_assets/plugins/daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('cms_assets/css/adminlte.css') }}">
        <script src="{{ asset('cms_assets/js/jquery-3.6.1.min.js') }}"></script>
        <script src="{{ asset('cms_assets/plugins/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
        <!-- Ekko Lightbox -->
        <link rel="stylesheet" href="{{ asset('cms_assets/plugins/ekko-lightbox/ekko-lightbox.css') }}">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="{{ asset('cms_assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
        <!-- Toastr -->
        <link rel="stylesheet" href="{{ asset('cms_assets/plugins/toastr/toastr.min.css') }}">
        <link rel="stylesheet" href="{{ asset('cms_assets/plugins/DataTables/datatables.min.css') }}">

        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet"
            href="{{ asset('cms_assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
        @yield('style-libraries')
        {{-- Styles custom --}}
        @yield('styles')
        @vite(['resources/scss/cms.scss', 'resources/js/cms.js'])
    </head>

    <body class="sidebar-mini layout-fixed layout-navbar-fixed" style="height: auto;">
        <div class="wrapper">
            @include('cms.partials.header')
            @include('cms.partials.sidebar')
            <main class="content-wrapper">
                @yield('content')
            </main>
            @include('cms.partials.footer')
        </div>
        {{-- Confirm modal --}}
        <div class="modal fade" id="confirm_modal" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title modal__title"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Huỷ bỏ">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="modal__message"></p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
                        <a href="#" type="button" class="btn btn-primary modal__redirect">Đồng ý</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        {{-- end modal --}}
        <!-- Bootstrap 4 -->
        <script src="{{ asset('cms_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('cms_assets/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('cms_assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- Select2 -->
        <script src="{{ asset('cms_assets/plugins/select2/js/select2.full.min.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('cms_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
        </script>
        <!-- AdminLTE App -->
        <script src="{{ asset('cms_assets/js/pages/dashboard.js') }}"></script>
        <script src="{{ asset('cms_assets/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('cms_assets/js/demo.js') }}"></script>
        <script src="{{ asset('cms_assets/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
        <script src="{{ asset('cms_assets/plugins/laravel-filemanager/js/stand-alone-button.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('cms_assets/plugins/jqueryui/jquery-ui.min.js') }}"></script>
        <!-- SweetAlert2 -->
        <script src="{{ asset('cms_assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <!-- Toastr -->
        <script src="{{ asset('cms_assets/plugins/toastr/toastr.min.js') }}"></script>
        <!-- bootstrap color picker -->
        <script src="{{ asset('cms_assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ asset('cms_assets/plugins/DataTables/datatables.min.js') }}"></script>
        @yield('scripts')
    </body>

</html>
