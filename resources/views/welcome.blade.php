<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <div>
		<h1 style="text-align: center;">Welcome Page </h1>
            <ul>
                <li><a href="/users">Users</a></li>
                <!-- <li><a href="/">Home</a></li>
                <li><a href="/home">Axtar</a></li>
                <li><a href="about">About</a></li> -->
            </ul>
            <!-- {{URL::current()}} -->
        </div> 
    </body>
</html>
