<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">

    <title>Sitapur</title>

     <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-icon-180x180.png')}}">
    
    <!-- Favicon Icons -->
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="144x144" href="{{asset('favicon/android-icon-144x144.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    
    <!-- Manifest File -->
    <link rel="manifest" href="{{asset('favicon/manifest.json')}}">
    
    <!-- Meta Tags -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('admin/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/slick.css') }}" rel="stylesheet">
    <script src="{{asset('admin/jquery.min.js')}}"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    
    @include('include.style')

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
   

</head>
<body>
     <script type="text/javascript">
        $(document).ready(function() {
            @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
            @endif

            @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
            @endif

            @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
            @endif

            @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
            @endif
        });
    </script>
    
    <div id="main-content" class="main-content shifted">
        @include('include.sidebar')
        @include('include.header')

        <section class="page_container">
            @yield('content')
        </section>
    </div>

    <script src="{{asset('admin/jquery.min.js')}}"></script>
    <script src="{{asset('admin/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/slick.min.js')}}"></script>
    <!-- <script src="slick.js"></script> -->
    @include('include.script')
</body>

</html>
