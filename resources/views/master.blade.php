<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>kaitlyn site</title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
    </head>
    <body>
        @yield('nav')
        @yield('page')
        @yield('footer')
    </body>
</html>
