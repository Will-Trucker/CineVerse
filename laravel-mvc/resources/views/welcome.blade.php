<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>| CineVerse</title>
    <link rel="preload" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="preload" href="{{asset('css/welcome.css')}}">
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <nav class="navbar">
        <a href="#" class="logo">Logo</a>
        <div class="nav-links">
          <ul>
             <li class="active"><a href="#">Home</a></li>
             <li class="enlace-resp"><a href="#">Nosotros</a></li>
             <li class="enlace-resp"><a href="#">Cartelera</a></li>
             <li class="enlace-resp"><a href="#">Unirme</a></li>
             <li class="enlace-resp"><a href="#">Contáctanos</a></li>
          </ul>
        </div>
        <img src="{{asset('img/menu-btn.png')}}" alt="icono de menu" class="menu-hamburger">
      </nav>
  </header>

  <script src="{{asset('js/menu.js')}}" type="text/javascript"></script>
</body>
</html>
