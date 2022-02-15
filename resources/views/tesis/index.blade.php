@extends('adminlte::page') @section('title', 'Revistas')


<link href="img/logoh.png" rel="icon" />
<link href="img/logoh.png" rel="apple-touch-icon" />

@section('content_header')
    <h1 style="text-align: left;">REGISTROS DE TESIS</h1>


    @stop @section('content')

    <div class="card mb-3" style="border-color: #fbaf32">
        <div class="card-header border-warning" style="background-color: #fbaf32">
            <div class="pull-right">
                <a href="{{ route('tesis.create') }}" class="btn btn-sm btn-light float-right">
                    <span>
                        <i class="fa fa-plus" style="color: #fbaf32"></i>
                    </span>
                    &nbsp; Agregar Tesis
                </a>
            </div>
            <div class="fa-pull-left">
                <a href="{{ route('autor.index') }}" class="btn btn-sm btn-light float-right">
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
                        <th>#</th>
                        <th>portada</th>
                        <th>Nºinventario</th>
                        <th>Titulo</th>
                        <th>Signatura Topografica</th>
                        <th>Autores</th>
                        <th>Año</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                                @php
                                    $i=1;
                                @endphp
                <tbody>
                    @foreach ($tesis as $tesi)
                    <tr>
                        <td>{{$i++}}</td>
                        <td><img src="{{ asset('tesisPortada/'.$tesi->image) }}" alt="" width="60" height="70"></td>
                        <td>{{ $tesi->ninv }}</td>
                        <td>{{ $tesi->titulo }}</td>
                        <td>{{ $tesi->sgtopografica }}</td>
                        <td>{{ $tesi->autores }}</td>
                        <td>{{ $tesi->ano }}</td>

                    <td>
                            <form action="{{ route('tesis.destroy', $tesi) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('tesis.edit', $tesi) }}"
                                    class="btn btn-primary btn-sm fas fa-edit  cursor-pointer"></a>

                                    <a href="{{ route('tesis.show', $tesi) }}"
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
    <link href="{{ asset('librerias/DatatablesCss/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('librerias/DatatablesCss/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('librerias/DatatablesCss/responsive.bootstrap4.min.css') }}" rel="stylesheet" />

    <style>
        .page-item.active .page-link {
            background-color: #fbaf32 !important;
            border: 1px solid white;

        }

        .page-link {
            color: black !important;
            border-radius: #fbaf32;
        }

        .page-link:hover {
            color: white !important;

        }

        .color {
            color: #fbaf32;
        }

    </style>

    @stop @section('js')


    <script src="{{ asset('librerias/DatatablesJs/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('librerias/DatatablesJs/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('librerias/DatatablesJs/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('librerias/DatatablesJs/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('librerias/DatatablesJs/responsive.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#miTabla").DataTable({
                // "ajax": "data/arrays.txt",
                /*  "ajax": "{{ route('evento.traer') }}",
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
