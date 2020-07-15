<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- TAB TITLE -->
    <title>AIRBUS</title>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- FONTS -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- ESTILOS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="floating-labels.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">
    <link href="floating-labels.css" rel="stylesheet">
</head>

<body>
    <div id="app">
        @include('inc.navbar')
        @yield('banner')
        <div class="container">
            <div class="py-5">
                @include('inc.messages')
                @yield('content')
            </div>
            @include('inc.footer')
        </div>
    </div>
</body>

</html>
