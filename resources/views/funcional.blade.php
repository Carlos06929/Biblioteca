<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styleF.css" />
    <script
      src="https://kit.fontawesome.com/fab501db93.js"
      crossorigin="anonymous">
  </script>
   @section('title', 'Administracion')
  </head>
  <body style="background-image: url('{{ asset('img/portada2.jpg')}}');>
    <div class="container-all">
        <h1 class="titulo">Seleccione una funcionalidad</h1>
      <div class="container-box">
        @can('Gestion de Usuarios')
        <a href="{{route('home')}}">
          <!-- para llevarlo a un link -->
          <div class="box box1">
            <i class="fa fa-users icon icon1"></i>

            <h4 class="title">Usuarios</h4>

            <p>lorem ipsum dolor sit amet, consectetur adip</p>

            <div class="background-hover"></div>
          </div>
        </a>
        @endcan


        

        <a href="{{route('institucion')}}">
          <!-- para llevarlo a un link -->
          <div class="box box7">
            <i class="fa fa-university icon"></i>

            <h4 class="title">Intitucion</h4>

            <p>lorem ipsum dolor sit amet, consectetur adip</p>

            <div class="background-hover"></div>
          </div>
        </a>


        <a href="{{route('libro.index')}}">
          <!-- para llevarlo a un link -->
          <div class="box  box2">
            <i class="fa fa-book icon"></i>

            <h4 class="title">Agregar Libro</h4>

            <p>lorem ipsum dolor sit amet, consectetur adip</p>

            <div class="background-hover"></div>
          </div>
        </a>
        <a href="#">
          <!-- para llevarlo a un link -->
          <div class="box box3">
            <i class="fa fa-leanpub icon"></i>

            <h4 class="title">Prestamo</h4>

            <p>lorem ipsum dolor sit amet, consectetur adip</p>

            <div class="background-hover"></div>
          </div>
        </a>
        <a href="#">
          <!-- para llevarlo a un link -->
          <div class="box box4">
            <i class="fa fa-bookmark icon"></i>

            <h4 class="title">Catalogos</h4>

            <p>lorem ipsum dolor sit amet, consectetur adip</p>

            <div class="background-hover"></div>
          </div>
        </a>
        <a href="#">
          <!-- para llevarlo a un link -->
          <div class="box box5">
            <i class="fa fa-user-plus icon"></i>

            <h4 class="title">Agregar Estudiante</h4>

            <p>lorem ipsum dolor sit amet, consectetur adip</p>

            <div class="background-hover"></div>
          </div>
        </a>
        <a href="#">
          <!-- para llevarlo a un link -->
          <div class="box box6">
            <i class="fa fa-search-plus icon"></i>

            <h4 class="title">Buscar</h4>

            <p>lorem ipsum dolor sit amet, consectetur adip</p>

            <div class="background-hover"></div>
          </div>
        </a>
      

      </div>
    </div>
  </body>
</html>
