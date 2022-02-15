@extends('adminlte::page') @section('title', 'Libros')
<link href="img/logoh.png" rel="icon" />
<link href="img/logoh.png" rel="apple-touch-icon" />

@section('content_header')
<h1>LISTA DE LIBROS</h1>

<a href="{{route('libro.pdf')}}" class="btn btn-danger btn-m  cursor-pointer">
    <span>
        <i class="fas fa-file-download" style="color: #faf8f5"></i>
    </span>
    &nbsp;PDF
</a>


<a href="{{route('libro.excel')}}" class="btn btn-success btn-m  cursor-pointer">
    <span>
        <i class="fas fa-file-excel" style="color: #faf8f5"></i>
    </span>
    &nbsp;EXCEL
</a>

@stop @section('content')

<div class="card mb-3" style="border-color: #fbaf32">
    <div class="card-header border-warning" style="background-color: #fbaf32">
       {{--  <div class="card-title" style="font-weight: bold"></div> --}}
        <div class="pull-right">
            <a
                href="{{route('libro.create')}}"
                class="btn btn-sm btn-light float-right"
            >
                <span>
                    <i class="fa fa-plus" style="color: #fbaf32"></i>
                </span>
                &nbsp; Agregar Libro
            </a>
        </div>
        <div class="fa-pull-left">
            <a
                href="{{route('autor.index')}}"
                class="btn btn-sm btn-light float-right"
            >
                <span>
                    <i class="fa fa-id-badge" style="color: #fbaf32"></i>
                </span>
              &nbsp;Lista de Autores
            </a>
        </div>
        &nbsp;

        <div class="fa-pull-left" style="margin-left: 5px;">

            <a

                href="{{route('categoria.index')}}"
                class="btn btn-sm btn-light float-left"
            >
                <span>
                    <i class="fa fa-id-badge" style="color: #fbaf32"></i>
                </span>
              &nbsp;Lista de Categorías
            </a>
        </div>


    </div>
    <div class="card-body table-responsive bg-white">
        <table id="miTabla" class="table ui celled table ">
            <thead class="color">
                <tr>
                    <th >#</th>
                    <th >Portada</th>
                    <th >Signatura</th>
                    <th >Titulo</th>
                    <th >Autor</th>
                    <th >Categoria</th>
                    <th >ISBN</th>
                    <th >Ejemplares</th>
                    <th >Acciones</th>


                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($libros as $libro)


                <tr>
                    <td>{{ $i++}}</td>
                    <td>
                        <a  href="/imgs/{{$libro->nombre_portada}}"
                            data-lightbox="imagen"
                            data-title="{{$libro->titulo}}"

                        >
                            <img src="{{ asset('imgs/libros/' . $libro->nombre_portada) }}" alt="" width="60" height="70">
                        </a>

                    </td>
                    <td>{{$libro->signatura_topografica}}</td>
                    <td>{{$libro->titulo}}</td>
                    <td>{{$libro->autor}}</td>
                    <td>{{$libro->categoria}}</td>
                    <td>{{$libro->isbn}}</td>
                    <td>{{$libro->ejemplares}}</td>
                    <td>
                        <form action="{{ route('libro.destroy', [$libro->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('libro.edit', [$libro->id]) }}"
                                class="btn btn-primary btn-sm fas fa-edit  cursor-pointer"></a>

                                <a href="{{ route('libro.show',  [$libro->id]) }}"
                                class="btn btn-warning btn-sm fas fa-eye  cursor-pointer"></a>

                            <button class="btn btn-danger btn-sm fas fa-trash-alt  cursor-pointer"
                                onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar"></button>
                                
                            <a href="{{ route('libro.ejemplares',  [$libro->id]) }}" class="btn btn-success btn-sm fas fa-address-book  cursor-pointer"></a>
       
                        </form>




                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
    <div class="card-footer bg-transparent border-warning"></div>
</div>

@stop @section('css')
<link rel="stylesheet" href="{{asset('librerias/lightbox/lightbox.min.css')}}">

    <link href="{{asset('librerias/DatatablesCss/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('librerias/DatatablesCss/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('librerias/DatatablesCss/responsive.bootstrap4.min.css')}}" rel="stylesheet"/>

<style>

     /* estilos de la paginacion de data table */
     .page-item.active .page-link {
        background-color: #fbaf32 !important;
        border: 1px solid white;

    }
    .page-link {
        color: black !important;
        border-radius :#fbaf32;
    }
    .page-link:hover {
        color: white !important;

    }



    thead.color{
        color: #fbaf32 !important;
    }


</style>

@stop @section('js')
    <script src="{{asset('librerias/DatatablesJs/jquery-3.5.1.js')}}"></script>
    <script src="{{asset('librerias/DatatablesJs/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('librerias/DatatablesJs/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('librerias/DatatablesJs/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('librerias/DatatablesJs/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('librerias/lightbox/lightbox.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $("#miTabla").DataTable({
            // "ajax": "data/arrays.txt",
            /*  "ajax": "{{route('evento.traer')}}",
                "columns":[
                    {data:'nombre'},
                    {data:'descripcion'},
                    {data:'tipo_evento'},
                    {data:'hora_inicio'},
                    {data:'fecha_inicio'},
                    {data:'fecha_fin'},
                    {data:'lugar'},
                    {data:'estado'},

                ],*/
           responsive: true,
            autoWidth: false,
            language: {
            "processing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "infoThousands": ",",
            "loadingRecords": "Cargando...",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
    },

},
        });
    });
</script>

@stop
