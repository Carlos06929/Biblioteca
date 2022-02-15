
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('librerias/DatatablesCss/bootstrap.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/busqueda.css')}}" type="text/css">
    <title>Búsqueda</title>
</head>
<body>


      <div class="container" >
        @foreach ($revista as $revistas)
          <div class="card ">
              <div class="imgBox" >
                  <img src="{{ asset('imgs/' . $revistas->image) }}" size="60px" height="400px" width="310">
              </div>
              <div class="descripcion">
                  <h2>{{$revistas->titulo}},<br>{{$revistas->subtitulo}}</h2>
                  <small>{{$revistas->autor}}</small>
                  <p> {{$revistas->descripcion}}</p>
                  <small>Paginas:{{$revistas->cantidad_paginas}}</small><br>
                  <a href="">Mas información</a>

              </div>
          </div>
          @endforeach
      </div>

</body>
<footer>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
</footer>
</html>
