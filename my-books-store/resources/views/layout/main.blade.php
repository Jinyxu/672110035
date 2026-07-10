<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panrawee's Book store - @yield('title')</title>
</head>
<body>
    <header>
        <h1>Panrawee's Book store - @yield('title')</h1>
        <nav>
            <a href="{{ route('products.list') }}">Product</a>
            <a href="{{ route('products.list') }}">Category</a>
        </nav>
         @yield('content')
         <footer>&#xA9; Copyright Week-03, 2026 Panrawee's Books Store.</footer>


    </header>
</body>
</html>