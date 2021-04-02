<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>*{box-sizing: border-box;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}#app,body,*{ margin: 0;padding: 0; }</style>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('styles')
    <link href="{{ asset('pixelFlag/flags.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @include('design.header')
        @yield('content')
        @include('design.footer')
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    @yield('scripts')
</body>
</html>
