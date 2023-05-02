<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/cartelera.css')}}">

    </head>
    <body class="antialiased">

        <section id="SecVide">
            <div class="slider">
                <div class="slider-content">
                    <video class="video"src="{{asset('video/mariotrai.mp4')}}" autoplay muted></video>
                    <video class="video"src="{{asset('video/mariotrai.mp4')}}" autoplay muted></video>
                    <video class="video"src="{{asset('video/mariotrai.mp4')}}" autoplay muted></video>
                </div>
                <button class="prev-button" onclick="moveSlider(-1)">Next</button>
                <button class="next-button" onclick="moveSlider(1)">Prev</button>
            </div>
        </section>

        <section class="sectionCaru" id="mySection">
            <div id="Contdeco">
                <div class="imgprueba1" id="imgprueba1"></div>
                <div class="imgprueba2 flechavisible" id="imgprueba2"></div>
            </div>
            <input type="checkbox" class="Visivilidad" id="visibleSoon" name="visibleSoon" onclick="changeBackground()">

        <h2 class="tituloca">En cartelera</h2>
            <div class="carousel">

                <div class="carousel-list" id="Carousel-list">
                    <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                            </path>
                        </svg>
                    </button>


                    <div class="carrusel-track" id="track">

                        <div class="carrusel">
                            <div>
                                <a href="">
                                <h4><small>John Wick 4</small></h4>
                                    <picture>
                                        <img src="{{asset('img/jhon.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="carrusel">
                            <div>
                                <a href="">
                                    <h4><small>AIR: la historia detras del logo</small></h4>
                                    <picture>
                                        <img src="{{asset('img/AIR.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="carrusel">
                            <div>
                                <a href="">
                                    <h4><small>El exorcista del papa</small></h4>
                                    <picture>
                                        <img src="{{asset('img/Exorcista.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="carrusel">
                            <div>
                                <a href="">
                                    <h4><small>Super Mario Bros. La pelicula</small></h4>
                                    <picture>
                                        <img src="{{asset('img/mario.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="carrusel">
                            <div>
                                <a href="">
                                    <h4><small>Suzume</small></h4>
                                    <picture>
                                        <img src="{{asset('img/Suzume.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="carrusel">
                            <div>
                                <a href="">
                                    <h4><small>Mi suegra me odia</small></h4>
                                    <picture>
                                        <img src="{{asset('img/suegra.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="carrusel">
                            <div>
                                <a href="">
                                    <h4><small>Maravilloso desastre</small></h4>
                                    <picture>
                                        <img src="{{asset('img/Desastre.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="carrusel">
                            <div>
                                <a href="">
                                    <h4><small>Evil Dead: el despertar</small></h4>
                                    <picture>
                                        <img src="{{asset('img/Evil.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>


                    <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="contenedor">
                <div id="columnas">
                    <a href="">
                        <div class="pin">
                            <img class="imgCartelera"src="{{asset('img/jhon.jpg')}}">
                            <div class="EspacioInfo">
                                <h2>John Wick 4</h2>
                                <div class="Especificaciones">
                                    <div class="Horarios">
                                        <h3>DOB</h3>
                                        <div class="Hora"><h4>21:05</h4></div>
                                        <div class="Hora"><h4>15:30</h4></div>
                                    </div>
                                    <div class="DesmasEspe">
                                        <div class="edadClasis"><h4>C</h4></div>
                                        <div class="Tiempoduracion"><h4>169 min</h4></div>
                                        <div class="Vertrailer"><h4>Ver trailer</h4></div>
                                    </div>
                                </div>
                                <div class="descripcion">
                                    <p>El marqués Vincent de Gramont pretende matar a John Wick para afianzar su poder en la Orden Suprema. Sin embargo, John tratará de adelantarse a cada uno de sus movimientos hasta lograr enfrentarse cara a cara con su peor enemigo.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="pin">
                            <img class="imgCartelera"src="{{asset('img/jhon.jpg')}}">
                            <div class="EspacioInfo">
                                <h2>John Wick 4</h2>
                                <div class="Especificaciones">
                                    <div class="Horarios">
                                        <h3>DOB</h3>
                                        <div class="Hora"><h4>21:05</h4></div>
                                        <div class="Hora"><h4>15:30</h4></div>
                                    </div>
                                    <div class="DesmasEspe">
                                        <div class="edadClasis"><h4>C</h4></div>
                                        <div class="Tiempoduracion"><h4>169 min</h4></div>
                                        <div class="Vertrailer"><h4>Ver trailer</h4></div>
                                    </div>
                                </div>
                                <div class="descripcion">
                                    <p>El marqués Vincent de Gramont pretende matar a John Wick para afianzar su poder en la Orden Suprema. Sin embargo, John tratará de adelantarse a cada uno de sus movimientos hasta lograr enfrentarse cara a cara con su peor enemigo.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="CarteleraProximos" id="MyCarte">
        <div id="Contdeco">
                <div class="imgprueba3" id="imgprueba3"></div>
                <div class="imgprueba4 flechavisible" id="imgprueba4"></div>
            </div>
            <input type="checkbox" class="Visivilidad" id="visibleSoon2" name="visibleSoon" onclick="changeBackground()">

        <h2 class="tituloca">Proximamente</h2>
            <div class="carousel">

                <div class="carousel-list" id="Carousel-list">
                    <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                            </path>
                        </svg>
                    </button>


                    <div class="carrusel-track" id="track">

                        <div class="carrusel">
                            <div>
                                <a href="">
                                <h4><small>John Wick 4</small></h4>
                                    <picture>
                                        <img src="{{asset('img/jhon.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="carrusel">
                            <div>
                                <a href="">
                                    <h4><small>AIR: la historia detras del logo</small></h4>
                                    <picture>
                                        <img src="{{asset('img/AIR.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="carrusel">
                            <div>
                                <a href="">
                                    <h4><small>El exorcista del papa</small></h4>
                                    <picture>
                                        <img src="{{asset('img/Exorcista.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="carrusel">
                            <div>
                                <a href="">
                                    <h4><small>Super Mario Bros. La pelicula</small></h4>
                                    <picture>
                                        <img src="{{asset('img/mario.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="carrusel">
                            <div>
                                <a href="">
                                    <h4><small>Suzume</small></h4>
                                    <picture>
                                        <img src="{{asset('img/Suzume.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="carrusel">
                            <div>
                                <a href="">
                                    <h4><small>Mi suegra me odia</small></h4>
                                    <picture>
                                        <img src="{{asset('img/suegra.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="carrusel">
                            <div>
                                <a href="">
                                    <h4><small>Maravilloso desastre</small></h4>
                                    <picture>
                                        <img src="{{asset('img/Desastre.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="carrusel">
                            <div>
                                <a href="">
                                    <h4><small>Evil Dead: el despertar</small></h4>
                                    <picture>
                                        <img src="{{asset('img/Evil.jpg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>


                    <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="contenedor">
                <div id="columnas">
                    <a href="">
                        <div class="pin">
                            <img class="imgCartelera"src="{{asset('img/jhon.jpg')}}">
                            <div class="EspacioInfo">
                                <h2>John Wick 4</h2>
                                <div class="Especificaciones">
                                    <div class="Horarios">
                                        <h3>DOB</h3>
                                        <div class="Hora"><h4>21:05</h4></div>
                                        <div class="Hora"><h4>15:30</h4></div>
                                    </div>
                                    <div class="DesmasEspe">
                                        <div class="edadClasis"><h4>C</h4></div>
                                        <div class="Tiempoduracion"><h4>169 min</h4></div>
                                        <div class="Vertrailer"><h4>Ver trailer</h4></div>
                                    </div>
                                </div>
                                <div class="descripcion">
                                    <p>El marqués Vincent de Gramont pretende matar a John Wick para afianzar su poder en la Orden Suprema. Sin embargo, John tratará de adelantarse a cada uno de sus movimientos hasta lograr enfrentarse cara a cara con su peor enemigo.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="pin">
                            <img class="imgCartelera"src="{{asset('img/jhon.jpg')}}">
                            <div class="EspacioInfo">
                                <h2>John Wick 4</h2>
                                <div class="Especificaciones">
                                    <div class="Horarios">
                                        <h3>DOB</h3>
                                        <div class="Hora"><h4>21:05</h4></div>
                                        <div class="Hora"><h4>15:30</h4></div>
                                    </div>
                                    <div class="DesmasEspe">
                                        <div class="edadClasis"><h4>C</h4></div>
                                        <div class="Tiempoduracion"><h4>169 min</h4></div>
                                        <div class="Vertrailer"><h4>Ver trailer</h4></div>
                                    </div>
                                </div>
                                <div class="descripcion">
                                    <p>El marqués Vincent de Gramont pretende matar a John Wick para afianzar su poder en la Orden Suprema. Sin embargo, John tratará de adelantarse a cada uno de sus movimientos hasta lograr enfrentarse cara a cara con su peor enemigo.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <script src="{{asset('js/video.js')}}" text="text/javascript"></script>
        <script src="{{asset('js/colorfondo.js')}}" text="text/javascript"></script>
        <script src="{{asset('js/carrusel.js')}}" text="text/javascript"></script>
    </body>
</html>
