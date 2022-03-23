<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse</title>
   
    <link href="{{asset('/css/browse.css') }}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/fa0463f5e9.js" crossorigin="anonymous"></script>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="logo">
                <a href="#"><i class="fa-solid fa-book"></i>Amref Library</a>
        </div>
       
        <div class="account">
            <img src="https://img.icons8.com/color/48/000000/avatar.png"/>
        </div>
    </div>
   
    <div class="main">
     @yield('content')
    </div>


</body>
</html>