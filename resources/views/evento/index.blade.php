@extends('adminlte::page')

@section('title', 'Eventos')
<link href="img/logoh.png" rel="icon">
<link href="img/logoh.png" rel="apple-touch-icon">




@section('content_header')
<h1>EVENTOS</h1>
@stop

@section('content')

    <div class="card carda-custom" style="border-color: #fbaf32">
            <div class="card-header" style="background-color: #fbaf32">
              {{--   <div class="card-title">EVENTOS</div> --}}
                <div class="pull-right">
                    <a href="{{route('evento.create')}}" class="btn btn-sm btn-light float-right">
                        <span>
                            <i class="fa fa-plus" style="color: #fbaf32"></i>
                        </span>
                        &nbsp;
                        Crear
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                    <table id="miTabla"  data-order='[[ 1, "asc" ]]' class="table ui celled table">
                            <thead class="color">
                                <tr>
                                    {{-- <th class="text-warning">Id</th> --}}
                                    <th >Nombre</th>
                                    <th >Descripcion</th>
                                    <th >Tipo de Evento</th>
                                    <th >Hora</th>
                                    <th >Fecha Inicio</th>
                                    <th >Fecha Finalizacion</th>
                                    <th >Lugar</th>
                                    <th >Estado</th>
                                    <th >Ver</th>
                                    <th >Editar</th>
                                    <th >Eliminar</th>

                                </tr>
                            </thead>



                    </table>
            </div>
    </div>

@stop

@section('css')

    <link href="{{asset('librerias/DatatablesCss/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('librerias/DatatablesCss/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('librerias/DatatablesCss/responsive.bootstrap4.min.css')}}" rel="stylesheet"/>

    <style>
        .color{
            color: #fbaf32;
            text-align: center;
        }
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
     </style>

@stop

@section('js')
    <script src="{{asset('librerias/DatatablesJs/jquery-3.5.1.js')}}"></script>
    <script src="{{asset('librerias/DatatablesJs/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('librerias/DatatablesJs/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('librerias/DatatablesJs/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('librerias/DatatablesJs/responsive.bootstrap4.min.js')}}"></script>


 <script>

        $(document).ready(function() {
        $('#miTabla').DataTable({

                "ajax": "{{route('evento.traer')}}",
                "columns":[

                    // {data: 'id'},
                    {data:'nombre'},
                    {data:'descripcion'},
                    {data:'tipo_evento'},
                    {data:'hora_inicio'},
                    {data:'fecha_inicio'},
                    {data:'fecha_fin'},
                    {data:'lugar'},
                    {data:'estado'},
                    {data: 'show'},
                    {data: 'edit'},
                    {data: 'delete'},

                ],

               responsive:true,
                autoWidth:false,
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
                        }
                }

            });

        } );
    </script>


@stop

