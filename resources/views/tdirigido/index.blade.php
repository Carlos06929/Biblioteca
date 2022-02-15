@extends('adminlte::page') @section('title', 'Trabajo Dirigido')
<link href="img/logoh.png" rel="icon" />
<link href="img/logoh.png" rel="apple-touch-icon" />

@section('content_header')
<h1 style="text-align: left; ">REGISTROS DE TRABAJOS DIRIGIDOS</h1>

@stop @section('content')

<div class="card mb-3" style="border-color: #fbaf32">
    <div class="card-header border-warning" style="background-color: #fbaf32">
        {{-- <div class="card-title" style="font-weight: bold">REGISTROS DE TRABAJOS DIRIGIDOS</div> --}}
        <div class="pull-right">
            <a
                href="{{route('tdirigido.create')}}"
                class="btn btn-sm btn-light float-right"
            >
                <span>
                    <i class="fa fa-plus" style="color: #fbaf32"></i>
                </span>
                &nbsp; Agregar Trabajo Dirigido
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
    </div>


    <div class="card-body table-responsive bg-white">
        <table id="miTabla" class="table ui celled table">
            <thead class="color">
                <tr>
                    <th >#</th>
                    <th >Nº Inventario</th>
                    <th >Portada</th>
                    <th >Titulo</th>
                    <th >Autor</th>
                    <th >Signatura</th>
                    <th >Estado</th>
                    <th >Acciones</th>
                </tr>
            </thead>


            <tbody>
                @php
                    $i=1;

                @endphp
                @foreach ($tdirigido as $tdirigidos)

                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$tdirigidos->numero_inventario}}</td>
                    <td>
                        <a  href="/imgs/{{$tdirigidos->imagen}}"
                            data-lightbox="imagen"
                            data-title="{{$tdirigidos->titulo}}"
                            >
                        <img src="{{ asset('imgs/tdirigido/' . $tdirigidos->imagen) }}" alt="" width="60" height="70">
                    </a>
                    </td>
                    <td>{{$tdirigidos->titulo}}</td>
                    <td>{{$tdirigidos->autor}}</td>
                    <td>{{$tdirigidos->signatura_topografica}}</td>
                    <td>{{$tdirigidos->estado}}</td>
                    <td>
                        <form action="{{ route('tdirigido.destroy', $tdirigidos) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('tdirigido.edit', [$tdirigidos->id]) }}"
                                class="btn btn-primary btn-sm fas fa-edit  cursor-pointer"></a>

                                <a href="{{ route('tdirigido.show', $tdirigidos) }}"
                                class="btn btn-warning btn-sm fas fa-eye  cursor-pointer"></a>

                            <button class="btn btn-danger btn-sm fas fa-trash-alt  cursor-pointer"
                                onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar"></button>

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
    <link href="{{asset('librerias/DatatablesCss/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('librerias/DatatablesCss/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('librerias/DatatablesCss/responsive.bootstrap4.min.css')}}" rel="stylesheet"/>

<style>

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
    .color{
        color:#fbaf32;
    }

</style>

@stop @section('js')

<script src="{{asset('librerias/DatatablesJs/jquery-3.5.1.js')}}"></script>
<script src="{{asset('librerias/DatatablesJs/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('librerias/DatatablesJs/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('librerias/DatatablesJs/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('librerias/DatatablesJs/responsive.bootstrap4.min.js')}}"></script>

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
