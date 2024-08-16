<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ session()->get('mode') }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
        <title>@yield('title', config('app.name', '@Master Layout'))</title>

        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}" />
        <!-- Short description for link sharing -->
        <meta property="og:title" content="SOFIN Network">
        <meta property="og:description" content="BUILD YOUR BRAND VOICE FOR SUCCESS | SPEED AI SOCIAL MEDIA SOLUTIONS | HUMAN AND TECHNOLOGICAL FUSION | BRING THE WORLD CLOSER TOGETHER">
        <meta property="og:image" content="{{ asset('assets/images/thumb.png') }}">
        <meta name="description" content="BUILD YOUR BRAND VOICE FOR SUCCESS | SPEED AI SOCIAL MEDIA SOLUTIONS | HUMAN AND TECHNOLOGICAL FUSION | BRING THE WORLD CLOSER TOGETHER">
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://sofinnetwork.com/">
        <meta property="og:type" content="website">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="sofinnetwork.com">
        <meta property="twitter:url" content="https://sofinnetwork.com/">
        <meta name="twitter:title" content="SOFIN Network">
        <meta name="twitter:description" content="BUILD YOUR BRAND VOICE FOR SUCCESS | SPEED AI SOCIAL MEDIA SOLUTIONS | HUMAN AND TECHNOLOGICAL FUSION | BRING THE WORLD CLOSER TOGETHER">
        <meta name="twitter:image" content="{{ asset('assets/images/thumb.png') }}">

        <script>document.documentElement.classList.add('js')</script>
        {{-- Styles css common --}}
        @yield('style-libraries')
        {{-- Styles custom --}}
        @yield('styles')
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>

    <body class="dark:text-text--dark dark:bg-bg--dark">
        <div id="loading" class="flex bg-bg--dark p-28 sm:p-0 justify-center items-center fixed top-0 right-0 left-0 bottom-0 h-screen w-screen z-50">
            <img src="{{ asset('/assets/images/sofin-full-logo.png') }}" alt="SoFin Network">
        </div>
        <div id="body">
            <x-header is-hide="{{ Route::currentRouteName() == 'index' }}" />
            <div id="content">
                @yield('content')
                <x-footer />
            </div>
            @yield('scripts')
        </div>
        <!-- Main modal -->
        <div class="modal" id="modal">
            <div class="modal__content">
                <img src="{{ asset('assets/images/stories/cdns.png') }}" alt="SoFinNetwork">
            </div>
        </div>
        <div class="modal" id="modal1">
            <div class="modal__content">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/7kb5zMzJdlM?si=WgYqT6EyeW4Bx9f8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="modal" id="modal2">
            <div class="modal__content">
                <video controls mute playsinline>
                    <source src="{{ asset('assets/videos/introduce.webm') }}" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="modal" id="modal3">
            <div class="modal__content">
                <video controls mute playsinline>
                    <source src="{{ asset('assets/videos/story3.webm') }}" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </body>
    <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
    <script src="{{ asset('/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
</html>
