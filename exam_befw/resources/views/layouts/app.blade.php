<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        nav { margin-bottom: 20px; padding: 10px; border-bottom: 3px dotted darkorchid;}
        nav a { margin-right: 10px; text-decoration: none; color: darkorchid; }
        .content { margin-top: 20px; }
        li {margin: 10px 0; border-bottom: 2px solid black; width: 500px; height: auto;}
    </style>
</head>
<body>

    @include('layouts.nav')

    <header>
        @yield('header')
    </header>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>