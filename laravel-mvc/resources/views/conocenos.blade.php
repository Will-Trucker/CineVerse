<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>| Conocenoss</title>
    <link rel="preload" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="preload" href="{{asset('css/conocenos.css')}}">
    <link rel="stylesheet" href="{{asset('css/conocenos.css')}}">
    <link rel="icon" href="{{asset('img/icono.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5b41b5f095.js" crossorigin="anonymous"></script>
</head>
<body>
    @csrf
   <main>
    <header>
        <nav class="navbar">
            <a href="/" class="logo"><img src="{{asset('img/Logo1.webp')}}" class="logotipo" alt="logo"></a>
            <div class="nav-links">
                <ul>
                   <li class="enlace-resp"><a href="/">Home</a></li>
                   <li class="active"><a href="#">Nosotros</a></li>
                   <li class="enlace-resp"><a href="#">Cartelera</a></li>
                   <li class="enlace-resp"><a href="#">Unirme</a></li>
                   <li class="enlace-resp"><a href="#">Contáctanos</a></li>
                </ul>
              </div>
              <img src="{{asset('img/menu-btn.png')}}" alt="icono de menu" class="menu-hamburger">
        </nav>
    </header>
   </main>
   <section class="titulo">
    <article>
    <h1>Nosotros</h1>
    <hr class="linea-blanca">
    </article>
  </section>
<br>
<section class="contenido">
    <article>
      <br><br>
      <p>Cineverse fue fundada en el año 2023 por un grupo de amigos amantes del cine que vieron la necesidad de facilitar la compra de entradas de cine para los espectadores. En ese momento, la mayoría de las personas compraban sus entradas directamente en las taquillas de los cines, lo que a menudo resultaba en largas filas y esperas.</p>
  <br><br><br>
      <p>La idea de Cineverse fue crear una plataforma en línea fácil de usar que permitiera a los espectadores reservar y comprar sus entradas de cine en línea. La empresa comenzó con un pequeño equipo de desarrolladores y diseñadores que trabajaron arduamente para crear una plataforma de reserva de entradas de cine en línea intuitiva y fácil de usar.</p>
  <br><br><br>
      <p>En los primeros años, Cineverse enfrentó muchos desafíos para difundir su servicio en línea y competir con las grandes cadenas de cine. Sin embargo, a medida que el uso de Internet y los dispositivos móviles se volvieron más comunes, la plataforma en línea de Cineverse se volvió cada vez más popular.</p>
  <br><br><br>
      <p>En la actualidad, Cineverse es una de las principales empresas de reserva de entradas de cine en línea en el mundo, con una gran base de usuarios que disfrutan de su servicio fácil y conveniente. La empresa sigue innovando y mejorando su plataforma para ofrecer la mejor experiencia de reserva de entradas de cine en línea a sus clientes en todo el mundo.</p>
    <br><br>
    </article>
  </section>

   <footer>
    <div class="container">
        <div class="sec about-us">
            <h2>Sobre Nosotros</h2>
            <p>Cineverse es una empresa dedicada a la reserva de asientos de cine que se preocupa por ofrecer la mejor experiencia posible a sus clientes...</p>
            <ul class="sci">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                </a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
             </ul>
        </div>
        <div class="sec quick-links">
            <h2>Enlaces Utiles</h2>
            <ul>
                <li><a href="#">Conócenos</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Terminos y Condiciones</a></li>
            </ul>
        </div>
        <div class="sec contact">
            <h2>Contáctanos</h2>
            <ul class="info">
                <li>
                    <span><i class="fa-solid fa-location-dot"></i>
                    </span>
                    <span> Km 1 1/2 Calle a plan del Pino,
                        <br> Ciudadela Don Bosco,
                        <br>Soyapango</span>
                </li>
                <li>
                    <span><i class="fa-solid fa-phone"></i>
                    </span>
                    <p><a href="tel:2525-2525"> +503 2525-2525<br></a></p>
                </li>
                <li>
                    <span><i class="fa-solid fa-envelope"></i>
                    </span>
                    <p><a href="mailto:cine.versesv@gmail.com"> cine.versesv@gmail.com</a></p>
                </li>
            </ul>
        </div>
    </div>
  </footer>
  <div class="copyrightText">
    <p>Copyright © 2023 CineVerse. Derechos Reservados</p>
  </div>
  <script src="{{asset('js/menu.js')}}" type="text/javascript"></script>
</body>
</html>
