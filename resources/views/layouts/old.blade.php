<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oldschool layout - @yield('title')</title>
</head>
<body>
    @section('navbar')
        This is the navbar Section
        <ul>
            <li><a href="/">Main page</a></li>
            <li><a href="/brands">Brands</a></li>
            <li><a href="/products">Products</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href=""></a>...</li>
        </ul>
    {{--@endsection--}}
    @show

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
