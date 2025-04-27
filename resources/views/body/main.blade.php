<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
:root {
    --putih: rgb(245, 252, 255);
    --birutua: rgb(103, 212, 255);
    --birumuda: rgb(150, 225, 255);
    --birugelap: rgb(51, 176, 225);
    --kuning: rgb(236, 255, 92);
    --hijau: rgb(92, 255, 133);
}



    *{
        padding: 0;
        margin: 0;
    }

    body{
        background-color: var(--putih);
        font-family: montserrat;
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