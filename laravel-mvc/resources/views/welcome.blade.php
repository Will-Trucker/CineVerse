<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>| CineVerse</title>
    <link rel="icon" href="{{asset('img/icono.png')}}">
    <link rel="preload" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="preload" href="{{asset('css/welcome.css')}}">
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <link rel="preload" href="{{asset('css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <script src="https://kit.fontawesome.com/5b41b5f095.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
  <header>
    <nav class="navbar">
        <a class="logo" href="#"><img class="logotipo" src="{{asset('img/Logo1.webp')}}" alt="logo"></a>
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


      <!-- Slider -->
      <!-- Slider -->
      <div class="contenedor">
          <div class="slider-container active">
              <div class="slide">
              <div class="content text">
                <h3>Hola </h3>

                <p>La mejor opción en entretenimiento ha llegado</p>

                <a href="{{route('register')}}" class="btn">Unirme</a>

                <video src="{{asset('video/video1.mp4')}}" muted autoplay loop></video>
              </div>
              </div>
          </div>


          <div class="slider-container">
          <div class="slide">
              <div class="content text">
                <h3>John Wick 4</h3>

                <p>Una exploración de las aventuras, las desgarradoras experiencias y las hazañas del legendario asesino a sueldo, John Wick.                    </p>

                <a href="{{route('register')}}" class="btn">Adquirir boletos</a>

                <video src="{{asset('video/movie1.mp4')}}" muted autoplay loop></video>
              </div>
              </div>
          </div>



          <div class="slider-container">
          <div class="slide">
              <div class="content text">
                <h3>Super Mario Bros</h3>

                <p>La pelicula cuenta la historia de Mario y Luigi, dos hermanos que viajan a un mundo oculto para rescatar a la Princesa Peach, capturada por el malvado Rey Bowser.                    </p>

                <a href="{{route('register')}}" class="btn">Adquirir Boletos</a>

                <video src="{{asset('video/movie2.mp4')}}" muted autoplay loop></video>
              </div>
              </div>
          </div>



          <div class="slider-container">
          <div class="slide">
              <div class="content text">
                <h3>Contáctanos</h3>

                <p>Vive la mejor experiencia en cines solamente uniendote</p>

                <a href="{{route('register')}}" class="btn">Registrarme</a>

                <video src="{{asset('video/video2.mp4')}}" muted autoplay loop></video>
              </div>
              </div>
          </div>

          <div id="next" onclick="next()"> > </div>
          <div id="prev" onclick="prev()"> < </div>

      </div>
  </header>
    </main>



    <section class="ofertas">
        <h1>CARTELERA</h1>
        <hr>


    </section>
   <!-- Carrusel -->
<section class="SectionCarrusel">

</center>
    <br>
  <div class="BotonesCarrusel">
        <button class="pre-btn"><img src="images/arrow.png" alt="">></button>
        <button class="nxt-btn"><img src="images/arrow.png" alt="">></button>
  </div>
        <div class="SectionCarrusel-Contenedor">
            <div class="CartaCarrusel">
                <div class="CartaImagen">

                    <img src="https://posterspy.com/wp-content/uploads/2022/01/Avatar-The-Way-Of-Water.jpg" class="movie-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion">

                    <!-- <h3 class="CarruselTitulo">  <a href="">Ir</a></h3> -->
                    <span class="title">Avatar - El Camino del Agua</span>

                </div>
            </div>
            <div class="CartaCarrusel">
                <div class="CartaImagen">

                    <img src="https://mx.web.img2.acsta.net/pictures/22/11/30/02/01/5931433.jpg" class="movie-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion">
                  <!--  <h3 class="CarruselTitulo"> <a href="">Ir</a></h3> -->
                    <span class="title"> Mi Suegra me Odia</span>
                </div>
            </div>
            <div class="CartaCarrusel">
                <div class="CartaImagen">

                    <img src="https://www.multicinema.com.sv/peliculas/MARAVILLOSO-DESASTRE-3.gif" class="movie-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion">
                 <!--   <h3 class="CarruselTitulo"><a href="">Ir</a></h2> -->
                    <span class="title">Maravilloso Desastre</span>
                </div>
            </div>
            <div class="CartaCarrusel">
                <div class="CartaImagen">

                    <img src="https://es.web.img3.acsta.net/pictures/23/01/23/16/41/0617610.jpg" class="movie-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion">
                   <!-- <h3 class="CarruselTitulo"><a href="">Ir</a></h3> -->
                    <span class="title">Posesion Infernal: El Desastre</span>
                </div>
            </div>
            <div class="CartaCarrusel">
                <div class="CartaImagen">

                    <img src="https://static.cinepolis.com/img/peliculas/41904/1/1/41904.jpg" class="movie-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion">
                  <!--  <h3 class="CarruselTitulo"><a href="">Ir</a></h3> -->
                    <span class="title">John Wick 4</span>
                </div>
            </div>
            <div class="CartaCarrusel">
                <div class="CartaImagen">

                    <img src="https://th.bing.com/th/id/OIP.4PzIYDcGhrSYjSx4SLIJFgHaLs?pid=ImgDet&rs=1" class="movie-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion">
                 <!--   <h3 class="CarruselTitulo"><a href="">Ir</a></h3> -->
                    <span class="title">Super Mario Bros - La pelicula</span>
                </div>
            </div>
            </div>
        </div>
    </section>


    <section class="ofertas2">
        <h1>ESTRENOS</h1>
        <hr>


    </section>
   <!-- Carrusel -->
<section class="SectionCarrusel2">

</center>
    <br>
  <div class="BotonesCarrusel2">
        <button class="pre-btn2"><img src="images/arrow.png" alt="">></button>
        <button class="nxt-btn2"><img src="images/arrow.png" alt="">></button>
  </div>
        <div class="SectionCarrusel-Contenedor2">
            <div class="CartaCarrusel2">
                <div class="CartaImagen">

                    <img src="https://www.multicinema.com.sv/peliculas/rapidos-y-furiosos-10.gif" class="movie-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion2">

                    <!-- <h3 class="CarruselTitulo">  <a href="">Ir</a></h3> -->
                    <span class="title">Rapidos y Furiosos X</span>

                </div>
            </div>
            <div class="CartaCarrusel2">
                <div class="CartaImagen">

                    <img src="https://www.multicinema.com.sv/peliculas/guardianes-de-la-galaxia-4.jpg" class="movie-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion2">
                  <!--  <h3 class="CarruselTitulo"> <a href="">Ir</a></h3> -->
                    <span class="title">Guardianes de la Galaxia Vol. 3</span>
                </div>
            </div>
            <div class="CartaCarrusel2">
                <div class="CartaImagen">

                    <img src="https://cinemarkmedia.modyocdn.com/ca/300x400/93033.jpg?version=1682571600000" class="movie-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion2">
                 <!--   <h3 class="CarruselTitulo"><a href="">Ir</a></h2> -->
                    <span class="title">Oso Intoxicado</span>
                </div>
            </div>
            <div class="CartaCarrusel2">
                <div class="CartaImagen">

                    <img src="https://www.multicinema.com.sv/peliculas/INDIANA-JONES-1.jpg" class="movie-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion2">
                   <!-- <h3 class="CarruselTitulo"><a href="">Ir</a></h3> -->
                    <span class="title">Indiana Jones y el dia del destino</span>
                </div>
            </div>
            <div class="CartaCarrusel2">
                <div class="CartaImagen">

                    <img src="https://www.multicinema.com.sv/peliculas/la-segunda-enmienda-3.jpg" class="movie-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion2">
                  <!--  <h3 class="CarruselTitulo"><a href="">Ir</a></h3> -->
                    <span class="title">La Segunda Enmienda 3</span>
                </div>
            </div>
            <div class="CartaCarrusel2">
                <div class="CartaImagen">

                    <img src="https://www.multicinema.com.sv/peliculas/MISION-IMPOSIBLE-1-1.gif" class="movie-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion2">
                 <!--   <h3 class="CarruselTitulo"><a href="">Ir</a></h3> -->
                    <span class="title">Mision Imposible - Sentencia Mortal Part. I</span>
                </div>
            </div>

            <div class="CartaCarrusel2">
                <div class="CartaImagen">

                    <img src="https://www.multicinema.com.sv/peliculas/spider-man-a-traves-del-spider-verso-1.gif" class="movie-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion2">
                 <!--   <h3 class="CarruselTitulo"><a href="">Ir</a></h3> -->
                    <span class="title">Spider-Man A través del spiderverso</span>
                </div>
            </div>

            <div class="CartaCarrusel">
                <div class="CartaImagen2">

                    <img src="https://www.multicinema.com.sv/peliculas/THE-MARVELS-1.gif" class="movie-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion2">
                 <!--   <h3 class="CarruselTitulo"><a href="">Ir</a></h3> -->
                 <br><br>
                    <span class="title">Las Marvels - La pelicula</span>
                </div>
            </div>
            </div>
        </div>
    </section>


    <script src="{{asset('js/Carrousel.js')}}"></script>

    <div class="slide-container swiper">
        <div class="slide-content">
            <h1 class="slide-content__title">Testimonios</h1>
            <hr>
            <br>
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="{{asset('img/profiles/profile1.jpg')}}" alt="" class="card-img" />
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Rafael Castro</h2>
                <p class="description">
                    Ofrece una experiencia de compra satisfactoria y sin complicaciones.
                </p>

                <button class="button">Ver Más</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="{{asset('img/profiles/profile2.jpg')}}" alt="" class="card-img" />
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Ana Castro</h2>
                <p class="description">
                    El sistema es facil de usar sin tener que hacer fila.
                </p>

                <button class="button">Ver Más</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="{{asset('img/profiles/profile3.jpg')}}" alt="" class="card-img" />
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Juan López</h2>
                <p class="description">
                    En lugar de hacer filas, puedo comprar de forma rápida.
                </p>

                <button class="button">Ver Más</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="{{asset('img/profiles/profile4.jpg')}}" alt="" class="card-img" />
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Marisol Rivera</h2>
                <p class="description">
                    Un servicio nada comparado a la competencia.
                </p>

                <button class="button">Ver Más</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="{{asset('img/profiles/profile5.jpg')}}" alt="" class="card-img" />
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Rosa González</h2>
                <p class="description">
                    Proporciona una variedad de películas en función.
                </p>

                <button class="button">Ver Más</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="{{asset('img/profiles/profile6.jpg')}}" alt="" class="card-img" />
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">José Ramírez</h2>
                <p class="description">
                    Me evite largas filas y disfrute de mi pelicula favorita.
                </p>

                <button class="button">Ver Más</button>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-button-next swipper-navBtn"></div>
        <div class="swiper-button-prev swipper-navBtn"></div>
        <div class="swiper-pagination"></div>
      </div>

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
  <script src="{{asset('js/slider.js')}}" type="text/javascript"></script>
   <!-- Swiper JS -->
   <script src="{{asset('js/swiper-bundle.min.js')}}" type="text/javascript"></script>
   <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
   <script src="{{asset('js/carrousel.js')}}"></script>
   <!-- JavaScript -->
   <script src="{{asset('js/script.js')}}" text="text/javascript"></script>
</body>
</html>
