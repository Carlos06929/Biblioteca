@extends('adminlte::page')
<link href="img/logoh.png" rel="icon" />
<link href="img/logoh.png" rel="apple-touch-icon" />

@section('title', 'Usuarios') @section('content_header')
<h1>LISTA DE USUARIOS</h1>
@stop @section('content')

<div class="card mb-3" style="border-color: #fbaf32">
    <div class="card-header border-warning" style="background-color: #fbaf32">
        {{--
        <div class="card-title" style="font-weight: bold">Usuarios</div>
        --}}
        <div class="pull-right">
            <a href="{{route('users.create')}}" class="btn btn-sm btn-light float-right">
                <span>
                    <i class="fa fa-plus" style="color: #fbaf32"></i>
                </span>
                &nbsp; Agregar
            </a>
        </div>
    </div>
    <div class="card-body table-responsive">
        <table id="miTabla" class="table ui celled table">
            <thead class="color">
                <tr>
                    <th style="text-align: center">Nº</th>
                    <th>Nombre</th>
                    <th>Email</th>

                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @php
                  $i=1;
                 @endphp

                @foreach($users as $users)
                <tr>
                    <td style="text-align: center; padding:5px">{{$i++}}</td>

                    <td class="text-justify p-1">{{$users->name}}</td>

                    <td class="text-justify p-1">{{$users->email}}</td>

                    <td class="text-center p-1">
                        <a href="{{route('users.edit',[$users->id])}} " class="btn btn-sm btn-success">
                            <span>
                                <i class="fa fa-edit"></i>
                            </span>
                            &nbsp; Editar
                        </a>

                        <form action="{{route('users.destroy',[$users->id])}}" style="display: inline" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger btn-round" onclick="return toastr.success('Se a eliminado correctamente','Usuarios')">
                                <span>
                                    <i class="fa fa-trash"></i>
                                </span>
                                &nbsp; Eliminar
                            </button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

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
   .color{
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
    $(document).ready(function () {
        $("#miTabla").DataTable({

            responsive: true,
            autoWidth: false,
            language: {
                processing: "Procesando...",
                lengthMenu: "Mostrar _MENU_ registros",
                zeroRecords: "No se encontraron resultados",
                emptyTable: "Ningún dato disponible en esta tabla",
                infoEmpty:
                    "Mostrando registros del 0 al 0 de un total de 0 registros",
                infoFiltered: "(filtrado de un total de _MAX_ registros)",
                search: "Buscar:",
                infoThousands: ",",
                loadingRecords: "Cargando...",
                info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                paginate: {
                    first: "Primero",
                    last: "Último",
                    next: "Siguiente",
                    previous: "Anterior",
                },
            },
        });
    });
</script>

<script>
    toastr.options = {
  "closeButton": null,
  "debug": true,
  "newestOnTop": true,
  "progressBar": false,
  "positionClass": "toast-top-full-width",
  "preventDuplicates": false,
  "onclick": true,
  "showDuration": "1500",
  "hideDuration": "100",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
</script>

@stop
