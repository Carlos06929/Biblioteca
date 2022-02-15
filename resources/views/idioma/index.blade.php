@extends('adminlte::page') @section('title', 'Idioma')
<link href="img/logoh.png" rel="icon" />
<link href="img/logoh.png" rel="apple-touch-icon" />

@section('content_header')
<h1>REGISTROS DE IDIOMAS</h1>
@stop @section('content')

<div class="card mb-3" style="border-color: #fbaf32">
    <div class="card-header border-warning" style="background-color: #fbaf32">
        <div class="card-title" style="font-weight: bold"></div>
        <div class="pull-right">
            <a
                href="{{route('idioma.create')}}"
                class="btn btn-sm btn-light float-right"  data-toggle="modal" data-target="#ModalCrear"
            >
                <span>
                    <i class="fa fa-plus" style="color: #fbaf32"></i>
                </span>
                &nbsp; Agregar
            </a>
        </div>

        <div class="fa-pull-left">
            <a
                onclick="history.go(-1)"
                {{-- href="{{route('libro.index')}}" --}}
                class="btn btn-sm btn-light float-right"
            >
                <span>
                    <i class="fa fa-angle-double-left" style="color: #fbaf32"></i>
                </span>
              &nbsp;Volver
            </a>
        </div>


    </div>
    <div class="card-body table-responsive bg-white">
        <table id="miTabla" class="table ui celled table">
            <thead class="color">
                <tr>
                    <th style="text-align:center">Nº</th>
                    <th>Nombre</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @php
                  $i=1;
                 @endphp

                @foreach($idiomas as $idioma)
                <tr>
                    <td style="text-align:center;padding: 5px">{{$i++}}</td>

                    <td class="text-justify p-1">{{$idioma->nombre}}</td>


                    <td class="text-center p-1">

                        <a href="{{route('idioma.edit',[$idioma->id])}} " class="btn btn-sm btn-warning" >
                            <span>
                                <i class="fa fa-edit"></i>
                            </span>
                            &nbsp; EDITAR
                        </a>

                        <form action="{{route('idioma.destroy',[$idioma->id])}}" style="display: inline" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger btn-round" onclick="return toastr.success('Se a eliminado correctamente','Idioma')">
                                <span>
                                    <i class="fa fa-trash"></i>
                                </span>
                                Eliminar
                            </button>
                        </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@extends('idioma.create')

@stop @section('css')

    <link href="{{asset('librerias/DatatablesCss/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('librerias/DatatablesCss/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('librerias/DatatablesCss/responsive.bootstrap4.min.css')}}" rel="stylesheet"/>

    <link href="{{asset('librerias/toastr/toastr.scss')}}" rel="stylesheet"/>

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
    /* estilos del boton de redireccionamiento */
    button {
        padding: 1.3em 3em;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        font-weight: 500;
        color: #192a56;
        background-color: #fff;
        border-color: #fbaf32;
        border-radius: 45px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
    }

    button:hover {
        background-color: #fbaf32;
        box-shadow: 0px 15px 20px #fbaf32;
        color: #fff;
        transform: translateY(-7px);
    }

    button:active {
        transform: translateY(-1px);
    }
    thead.color{
        color: #fbaf32;
    }

</style>

@stop @section('js')

    <script src="{{asset('librerias/DatatablesJs/jquery-3.5.1.js')}}"></script>
    <script src="{{asset('librerias/DatatablesJs/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('librerias/DatatablesJs/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('librerias/DatatablesJs/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('librerias/DatatablesJs/responsive.bootstrap4.min.js')}}"></script>



<script src="{{asset('librerias/toastr/toastr.js')}}"></script>

        <script>
         toastr.options = {
                "closeButton": null,
                "debug": false,
                "newestOnTop": true,
                "progressBar": false,
                "positionClass": "toast-top-full-width",
                "preventDuplicates": false,
                "onclick": true,
                "showDuration": "1500",
                "hideDuration": "1500",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
        }
        </script>
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
