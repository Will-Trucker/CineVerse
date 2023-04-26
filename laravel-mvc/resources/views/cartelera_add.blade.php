<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Agregar Cartelera</title>
    <link rel="stylesheet" href="{{asset('css/cartelera_add.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}" type="text/css">
</head>
<body>
    <center>
        <br>

        <form action="EnvioCartelera" method="post" class="form-register" enctype="multipart/form-data">
            @csrf
                <img src="{{asset('img/Logo.jpeg')}}" width="350px" height="145px" class="logo">
                <br>
                <h2 class="title-form">AGREGAR CARTELERA</h2>
                <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                @error('nombre')
                <br>
                  <span role="alert" style="color: white;">
                    <strong>
                    {{ $message }}
                    </strong>
                  </span>
                @enderror
                <br>
                <select name="genero" id="genero" class="formulario__campo controls" value="{{old('genero')}}">
                <option disabled selected>GÉNERO</option>

                <option value="ACCION">ACCION</option>
                <option value="COMEDIA">COMEDIA</option>
                <option value="MIEDO">MIEDO</option>
                <option value="ANIMADA">ANIMADA</option>
                <option value="DRAMA">DRAMA</option>
                <option value="CIENCIA-FICCION">CIENCIA-FICCION</option>
                </select>
                @error('genero')
                <br>
                  <span role="alert" style="color: white;">
                    <strong>
                    {{ $message }}
                    </strong>
                  </span>
                @enderror
                <br>
                <input class="controls" type="date" name="dia" id="dia" placeholder="Dia" min="2023-04-25" max="2023-05-12">
                @error('dia')
                <br>
                  <span role="alert" style="color: white;">
                    <strong>
                    {{ $message }}
                    </strong>
                  </span>
                @enderror
               <br>
                <input class="controls" type="time" name="horario" id="horario" placeholder="Funcion" min="08:00" max="20:00" value="{{old('horario')}}">
                @error('horario')
                <br>
                <span role="alert" style="color: white;">
                <strong>  {{ $message }} </strong>

                </span>
                @enderror
                <br>
                <select name="formato" id="formato" class="formulario__campo controls" value="{{old('formato')}}">
                <option disabled selected>FORMATO</option>

                <option value="DOB">DOB</option>
                <option value="3D">3D</option>
                </select>
                @error('formato')
                <br>
                  <span role="alert" style="color: white;">
                    <strong>
                    {{ $message }}
                    </strong>
                  </span>
                @enderror
                <br>
                <select name="sala" id="sala" class="formulario__campo controls" value="{{old('sala')}}">
                    <option disabled selected > SALA </option> <br>

                    <option value="Sala1">Sala1</option>
                    <option value="Sala2">Sala2</option>
                    <option value="Sala3">Sala3</option>
                    <option value="Sala4">Sala4</option>
                    <option value="Sala5">Sala5</option>
                </select>
                @error('sala')
                <br>
                <span role="alert" style="color: white;">
                  <strong>
                  {{ $message }}
                  </strong>
                </span>
                @enderror
                <br>
                <textarea class="controls" name="sinopsis" id="sinopsis" cols="30" rows="10" value="{{old('sinopsis')}}" placeholder="sinopsis"></textarea>
                @error('sinopsis')
                <br>
                  <span role="alert" style="color: white;">
                    <strong>
                    {{ $message }}
                    </strong>
                  </span>
                @enderror
                <br>
                <div class="archivo">
                <label for="archivo"><i class="fa-solid fa-file-image"></i> Agregar Imagen</label>
                <input type="file" id="archivo" name="archivo" value="{{old('archivo')}}">
                @error('archivo')
                <br>
                <span role="alert" style="color: white;">
                <strong>  {{ $message }} </strong>
                </span>
                @enderror
                <br>
                <h4 id="nombre-a"></h4>
                <script src="{{asset('js/agregar.js')}}" type="text/javascript"></script>
            </div>
             <br>
                <button class="btn-neon" type="submit">

                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Agregar

            </button>


            </form>
        </center>
</body>
</html>
