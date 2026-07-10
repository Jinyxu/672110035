<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <header>
       <h1>@yield('title')</h1>

     <nav>
        <a href="/home">Home</a>
        <a href="/friends">Friends</a>
        <a href="/teaching-schedule">Teaching Schedule</a>
        <a href="/about-me">About Me</a>
     </nav>
</header>


@yield('content')

<footer>Created by Panrawee Normai ,Student ID: 672110035.</footer>


</body>
</html>