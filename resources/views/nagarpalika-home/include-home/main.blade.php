<!DOCTYPE html>
<html lang="en">

<head>
    @include('nagarpalika-home.include-home.style')
    @stack('style')
    <script>
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault(); // Disable right-click menu
        });
    </script>
</head>

<body>
    <div class="loadScreen"></div>
    @include('nagarpalika-home.include-home.header')

    @yield('content')


    @include('nagarpalika-home.include-home.footer')

    @include('nagarpalika-home.include-home.script')

<script>
var firstLink = document.querySelector('link');
if (firstLink) {
    firstLink.remove();
}

</script>
<script>
    // Disable right-click on the entire document
    document.addEventListener('contextmenu', function(event) {
        event.preventDefault();
    });
</script>
</body>

</html>
