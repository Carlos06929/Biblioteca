@extends('adminlte::page')

@section('title', 'Estudiante')
<link href="img/logoh.png" rel="icon">
<link href="img/logoh.png" rel="apple-touch-icon">

@section('content_header')
<h1>REGISTROS DE ESTUDIANTES</h1>
@stop
@section('content')

    <div class="card  mb-3" style="border-color: #fbaf32">
        <div class="card-header  border-warning" style="background-color: #fbaf32">
            <div class="pull-right">
                <a href="{{ route('estudiante.create') }}" class="btn btn-sm btn-light float-right">
                    <span>
                        <i class="fa fa-plus " style="color: #fbaf32"></i>
                    </span>
                    &nbsp;
                    Agregar
                </a>
                <a href="{{route('estudiante.pdfAll')}}" class="btn btn-danger btn-m  cursor-pointer">
                    <span>
                        <i class="fas fa-file-download" style="color: #faf8f5"></i>
                    </span>
                    &nbsp;Pdf
                </a>
                <a href="{{route('estudiante.excelAll')}}" class="btn btn-success btn-m  cursor-pointer">
                    <span>
                        <i class="fas fa-file-excel" style="color: #faf8f5"></i>
                    </span>
                    &nbsp;Excel
                </a>

            </div>
        </div>
        <div class="card-body table-responsive bg-white ">
            <table id="miTabla" class="table ui celled table ">
                <thead class="color">
                    <tr>
                        <th >Nº</th>
                        <th >registros</th>
                        <th >Ci</th>
                        <th >Nombre</th>
                        <th >Apellidos</th>
                        <th >Teléfono</th>
                        <th >Correo</th>
                        <th >Image</th>
                        <th >Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($estudiante as $estudiantes)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{ $estudiantes->registro }}</td>
                            <td>{{ $estudiantes->ci }}</td>
                            <td>{{ $estudiantes->nombre }}</td>
                            <td>{{ $estudiantes->apellidos }}</td>
                            <td>{{ $estudiantes->telefono }}</td>
                            <td>{{ $estudiantes->correo }}</td>

                            <td>
                                <a
                                href="/images/{{$estudiantes->image}}"
                                data-lightbox="imagen"
                                data-title="{{$estudiantes->nombre}}"
                                >
                                <img src="{{ asset('images/' . $estudiantes->image) }}" alt="" width="60" height="70">
                            </a>
                        </td>




                            <td>
                                <form action="{{ route('estudiante.destroy', $estudiantes) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('estudiante.edit', $estudiantes) }}"
                                        class="btn btn-primary btn-sm fas fa-edit  cursor-pointer"></a>

                                        <a href="{{ route('estudiante.show', $estudiantes) }}"
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

@stop




@section('css')
    <link rel="stylesheet" href="{{asset('librerias/lightbox/lightbox.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

    <style>
          /*estilos para el tamñp de la img en el datatable*/

        .color{
            color: #fbaf32;
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
    <script src="{{asset('librerias/lightbox/lightbox.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#miTabla').DataTable({
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

                 ], */
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
    }
                }
            });
        });
    </script>


@stop
