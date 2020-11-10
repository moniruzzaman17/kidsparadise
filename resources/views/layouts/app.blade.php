<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! SEO::generate() !!}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

</head>
<body>
    <div id="app">
        <app-header></app-header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
<!-- Scripts -->
<script defer src="{{ mix('js/app.js') }}"></script>
</body>
</html>