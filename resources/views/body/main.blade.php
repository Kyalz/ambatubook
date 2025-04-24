<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }

    body{
        background-color: rgb(241, 241, 241);
    }
</style>
<body>
    @include('body.navbar')
    <br>
    
    <div class="content">
        @yield('content')
    </div>
</body>
</html>