<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
        @yield('css_cdn')
</head>
<body>
    @yield('nav')
    @yield('content')
    @yield('form')
    @yield('footer')
</body>
    @yield('js_cdn')
</html>



