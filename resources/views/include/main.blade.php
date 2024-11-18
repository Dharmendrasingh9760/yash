<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sitapur')</title>
    <!-- Apple Touch Icons for iOS Devices -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-icon-180x180.png') }}">
    <!-- Favicons for Android and Web Browsers -->
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png') }}">
    <!-- Manifest for Progressive Web Apps (PWAs) -->
    <link rel="manifest" href="{{ asset('/favicon/manifest.json') }}">
    <!-- Microsoft-Specific Icons for Windows Tiles -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/favicon/ms-icon-144x144.png') }}">
    <!-- Theme Color for Mobile Browser UI -->
    <meta name="theme-color" content="#ffffff">

    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}"referrerpolicy="no-referrer" />
    <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
    <link href="{{ asset('frontend/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/slick.css') }}" rel="stylesheet">

    <style>
        td{
          text-align: center
        }
      </style>
    <!-- @include('include.style') -->
    <script src="{{asset('frontend/jquery.min.js')}}"></script>
    <script src="{{asset('jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('frontend/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/toastr.min.js')}}"></script>
    <script src="{{asset('frontend/slick.min.js')}}"></script>
</head>

<body>
    <!-- <script type="text/javascript">
       document.addEventListener("contextmenu", function(e) {
            e.preventDefault();
        }, false);

        document.onkeydown = function(e) {
            if (e.keyCode == 123 || // F12
                (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) || // Ctrl+Shift+I
                (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) || // Ctrl+Shift+C
                (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) || // Ctrl+Shift+J
                (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) // Ctrl+U
            ) {
                return false;
            }
        };
   </script> -->
     <script>
        $(document).ready(function() {
            $('form').on('submit', function(event) {
                var submitBtn = $(this).find('.submitBtn');
                if (submitBtn.prop('disabled')) {
                    return;
                }
                submitBtn.attr('disabled', true);
            });
        });
    </script>
    <div id="main-content" class="main-content shifted">
        @include('include.sidebar')
        @include('include.header')

        <section class="page_container">
            @yield('content')
        </section>
    </div>
     @include('include.script')
</body>
</html>
