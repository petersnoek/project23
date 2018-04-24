<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/project23.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{ url('home/index') }}">Home</a></li>
            <li><a href="{{ url('category/index') }}">Categories</a></li>
        </ul>
    </nav>

    @yield('body')
</body>
</html>

