@extends('adminlte::page') @section('title', 'Informe')
<link href="img/logoh.png" rel="icon" />
<link href="img/logoh.png" rel="apple-touch-icon" />

@section('content_header')
<h1>REGISTROS DE HISTORIAS</h1>

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
                href="{{route('historia.create')}}"
                class="btn btn-sm btn-light float-right"
            >
                <span>
                    <i class="fa fa-plus" style="color: #fbaf32"></i>
                </span>
                &nbsp; Agregar Informe
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


    </div>
    <div class="card-body table-responsive bg-white">
        <table id="miTabla" class="table ui celled table ">
            <thead class="color">
                <tr>
                    <th >Nº</th>
                    <th >Portada</th>
                    <th >Nº Inventario</th>
                    <th >Signatura</th>
                    <th >Titulo</th>
                    <th >Autor</th>
                    <th >Lugar</th>
                    <th >Año</th>
                    <th >Estado</th>
                    <th >Acciones</th>


                </tr>
            </thead>
            <tbody>
               {{--  @php
                    $i=1;
                @endphp
                @foreach ($plan as $planes)


                <tr>
                    <td>{{ $i++}}</td>
                    <td>
                        <a  href="/imgs/{{$planes->nombre_portada}}"
                            data-lightbox="imagen"
                            data-title="{{$planes->titulo}}"

                        >
                            <img src="{{ asset('imgs/' . $planes->nombre_portada) }}" alt="" width="60" height="70">
                        </a>

                    </td>
                    <td>{{$planes->numero_inventario}}</td>
                    <td>{{$planes->signatura_topografica}}</td>
                    <td>{{$planes->titulo}}</td>
                    <td>{{$planes->autor}}</td>
                    <td>{{$planes->categoria}}</td>
                    <td>{{$planes->isbn}}</td>
                    <td>{{$planes->estado}}</td>
                    <td>aciiones</td>
                </tr>

                @endforeach --}}

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
