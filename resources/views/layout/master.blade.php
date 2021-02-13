<!DOCTYPE html>
<html>
    <body>
        @include('layout.header')
        @yield('content')
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>
