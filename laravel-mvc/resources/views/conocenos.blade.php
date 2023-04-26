<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conocenoss</title>
    <link rel="preload" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="preload" href="{{asset('css/conocenos.css')}}">
    <link rel="stylesheet" href="{{asset('css/conocenos.css')}}">
</head>
<body>
   <main>
    <header>
        <nav class="navbar">
            <a href="/" class="logo"><img src="{{asset('img/CineVerse.png')}}" class="logotipo" alt="logo"></a>
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
   </main>

   <footer>
     <div class="container">
        <div class="sec about-us">
            <h2>Sobre Nosotros</h2>
        </div>
     </div>
   </footer>
</body>
</html>
