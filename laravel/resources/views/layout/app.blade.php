<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600,900" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <header id="site_header">
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('comics.index')}}">Comics</a>
            <a href="{{route('comics.create')}}">Add Comics</a>
        </nav>
    </header>
    <!-- /#site_header -->
    <main id="site_main">
        @yield('content')
    </main>
    <!-- /#site_main -->
    <footer id="site_footer">
        <span>Boolean #35&copy;</span>
    </footer>
    <!-- /#site_footer -->
</body>

</html>