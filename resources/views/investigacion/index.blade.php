@extends('adminlte::page') @section('title', 'Investigacion')
<link href="img/logoh.png" rel="icon" />
<link href="img/logoh.png" rel="apple-touch-icon" />

@section('content_header')
<h1 style="text-align: left;">REGISTROS DE INVESTIGACIONES</h1>


<a href="{{route('investigacion.pdf')}}" class="btn btn-danger btn-m  cursor-pointer">
    <span>
        <i class="fas fa-file-download" style="color: #faf8f5"></i>
    </span>
    &nbsp;PDF
</a>


<a href="{{route('investigacion.excel')}}" class="btn btn-success btn-m  cursor-pointer">
    <span>
        <i class="fas fa-file-excel" style="color: #faf8f5"></i>
    </span>
    &nbsp;EXCEL
</a>

@stop @section('content')

<div class="card mb-3" style="border-color: #fbaf32">
    <div class="card-header border-warning" style="background-color: #fbaf32">
        {{-- <div class="card-title" style="font-weight: bold">REGISTROS DE investigacionS</div> --}}
        <div class="pull-right">
            <a
                href="{{route('investigacion.create')}}"
                class="btn btn-sm btn-light float-right"
            >
                <span>
                    <i class="fa fa-plus" style="color: #fbaf32"></i>
                </span>
                &nbsp; Agregar Investigacion
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
        <table id="miTabla" class="table ui celled table" >
            <thead class="color">
                <tr>
                    <th >Nº</th>
                    <th >ISBN</th>
                    <th >Nº Inventario</th>
                    <th >Portada</th>
                    <th >Titulo</th>
                    <th >Autor</th>
                    <th >Signatura</th>
                    <th >Estado</th>
                    <th >Ejemplares</th>
                    <th >Acciones</th>

                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;

                @endphp
                @foreach ($investigaciones as $investigacion)

                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$investigacion->isbn}}</td>
                    <td>{{$investigacion->numero_inventario}}</td>
                    <td>
                        <a  href="/imgs/Invimages/{{$investigacion->image}}"
                            data-lightbox="imagen"
                            data-title="{{$investigacion->titulo}}"
                        >
                        <img src="{{ asset('imgs/Invimages/' . $investigacion->image) }}" alt="" width="60" height="70">
                    </a>
                    </td>
                    <td>{{$investigacion->titulo}}</td>
                    <td>{{$investigacion->autor}}</td>
                    <td>{{$investigacion->signatura_topografica}}</td>
                    <td>{{$investigacion->estado}}</td>
                    <td>{{$investigacion->editorial}}</td>
                    <td>
                        <form action="{{ route('investigacion.destroy', $investigacion) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('investigacion.edit', [$investigacion->id]) }}"
                                class="btn btn-primary btn-sm fas fa-edit  cursor-pointer"></a>

                                <a href="{{ route('investigacion.show', $investigacion) }}"
                                class="btn btn-warning btn-sm fas fa-eye  cursor-pointer"></a>

                                <a href="{{ route('investigacion.ejemplar', $investigacion) }}"
                                class="btn btn-info btn-sm   cursor-pointer">Ej.</a>

                            <button class="btn btn-danger btn-sm fas fa-trash-alt  cursor-pointer"
                                onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar"></button>

                        </form>

                    </td>
                </tr>

                    @endforeach




            </tbody>
        </table>
    </div>

</div>

@stop @section('css')

     <link rel="stylesheet" href="{{asset('librerias/lightbox/lightbox.min.css')}}">
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
    thead.color{
     color: #fbaf32 !important;
    }

</style>

@stop @section('js')
<script src="{{asset('librerias/lightbox/lightbox.min.js')}}"></script>
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
