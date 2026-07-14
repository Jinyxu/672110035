<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panrawee's Book store - @yield('title')</title>
</head>
<body>
    <header>
        <h1>Jay's Book store - @yield('title')</h1>
        
        <nav>
    <a href="{{ route('products.list') }}">Products</a> 
    <a href="{{ route('categories.list') }}">Categories</a>
</nav>


         @yield('content')
         <footer>&#xA9; Copyright Week-03, 2026 Jay's Books Store.</footer>


    </header>
</body>
</html>