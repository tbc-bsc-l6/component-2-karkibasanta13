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
        @yield('cdn')
    <link rel="icon" href="/img/lbu.png" type="image/icon type">
</head>
<body>
    @yield('navbar')

    @yield('content')

    @yield('form')

    @yield('newsletter')

    @yield('footer')

</body>
    @yield('js_cdn')
</html>



