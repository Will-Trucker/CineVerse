<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>| Editar Cartelera</title>
    <link rel="preload" href="{{asset('css/normalize.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}" type="text/css">
    <link rel="preload" href="{{asset('css/edit.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/edit.css')}}" type="text/css">
    <link rel="icon" href="{{asset('img/icono.png')}}">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <center>
        <br>
        <form action="Enviarmovie" method="post" class="form-register" enctype="multipart/form-data">
            @csrf
            <img src="{{asset('img/Logo1.webp')}}" width="350px" height="145px" class="logo">
            <br>
            <h2 class="title-form">CARTELERA</h2>
                <input class="controls" id="nombre" type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre" required autofocus>
                  <br>
                <input type="number" name="asientos" id="asientos"  min="1" max="48" placeholder="Cantidad de Asientos" required autofocus>
                <input class="controls" id="dia" type="date" name="dia" value="{{ old('dia') }}" placeholder="dia" required autofocus>
               <br>
               <input type="time" id="hora" name="hora"  value="08:00" min="08:00" max="00:00" required value="{{old('hora')}}" autofocus class="controls">
               <br>
               <select name="sala" id="sala" value="{{old('sala')}}" class="formularios__campos controls">
               <option value="SALA 1">SALA 1</option>
               <option value="SALA 2">SALA 2</option>
               <option value="SALA 3">SALA 3</option>
               <option value="SALA 4">SALA 4</option>
               <option value="SALA 5">SALA 5</option>
               </select>
               <select name="clasificacion" name="clasificacion" id="clasificacion"  value="{{old('clasificacion')}}" class="formularios__campos controls">
               <option value="CLASIFICACION" disabled selected>CLASIFICACION</option>
               <option value="A">A</option>
               <option value="AA">AA</option>
               <option value="B">B</option>
               <option value="C">C</option>
               </select>
               <br>
               <select name="genero" name="genero" id="genero" value="{{old('genero')}}" class="formulario__campos controls">
               <option value="GENERO" disabled selected>GENERO</option>
               <option value="ACCION">ACCION</option>
               <option value="COMEDIA">COMEDIA</option>
               <option value="CIENCIA-FICCION">CIENCIA-FICCION</option>
               <option value="MIEDO">MIEDO</option>
               <option value="FAMILIAR">FAMILIAR</option>
               </select>
               <br>
                <textarea class="formulario__campo controls" id="sinopsis" name="sinopsis" required {{ old('sinopsis') }} placeholder="Sinopsis"></textarea>
                <br>
                <div class="imagen">
                    <label for="imagen"><i class="fa-solid fa-file-image"></i>Agregar imagen</label>
                    <input id="imagen" type="file" name="imagen" required accept=".png,.jpg,.jpeg" class="controls">
                    <br>
                    <h4 id="nombre-a"></h4>
                    <script src="{{asset('js/agregar.js')}}"></script>
                </div>
                <br>
                <div class="trailers">
                    <label for="trailer"><i class="fa-solid fa-file-video"></i>Agregar video</label>
                    <input id="trailer" type="file" name="trailer" required accept=".mp4" class="controls">
                    <br>
                    <h4 id="nombre-v"></h4>
                    <script src="{{asset('js/video.js')}}"></script>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <button class="btn-neon" type="submit">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Registrar
            </button>
        </center>
        <br>
</body>
</html>
