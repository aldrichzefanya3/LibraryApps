<!DOCTYPE html>
<html>
    <body>
        @include('layout.header')
        @yield('content')
        @yield('contentTag')
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>
