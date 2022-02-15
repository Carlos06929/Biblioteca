@extends('adminlte::page')

@section('title', 'Evento')

@section('content_header')
<br>
@stop

@section('content')

<div class="card card-custom" style="border-color: #fbaf32">
    <div class="card-header "style="background-color: #fbaf32">
        <div class="card-title">DETALLES DEL EVENTO</div>
        <div class="pull-right" >
            <a href="{{route('evento.index')}} "class="btn btn-sm btn-light float-right">
                <span>
                    <i class="fa fa-reply " style="color: #fbaf32"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="card-body">

            <div class="row">

                    <div class="col-md-4">
                        <label for="nombre">Nombre:</label>
                        <input type="text" value="{{$evento->nombre}}"name="nombre" id="nombre" class=" text-uppercase form-control form-control-sm" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="tipo_evento">Tipo de Evento :</label>
                        <input type="text"value="{{$evento->tipo_evento}}" name="tipo_evento" id="tipo_evento" class="text-uppercase form-control form-control-sm" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="lugar">Lugar del Evento:</label>
                        <input type="text"value="{{$evento->lugar}}" name="lugar" id="lugar" class="text-uppercase form-control form-control-sm" readonly>
                    </div>
            </div>
        <div class="row">
            <div class="col-md-4">
                <label for="hora_inicio">Hora de Inicio:</label>
                <input type="time" name="hora_inicio" value="{{$evento->hora_inicio}}" id="hora_inicio" class="form-control form-control-sm" readonly>
            </div>
                <div class="col-md-4">
                    <label for="fecha_inicio">Inico del Evento :</label>
                    <input type="date" value="{{$evento->fecha_inicio}}" name="fecha_inicio" id="fecha_inicio" class="form-control form-control-sm" readonly>
                </div>
                <div class="col-md-4">
                    <label for="fecha_fin">Fin del Evento: </label>
                    <input type="date" name="fecha_fin" value="{{$evento->fecha_fin}}" id="fecha_fin" class="form-control form-control-sm" readonly>
                </div>
                <div class="col-md-4">
                    <label for="estado">Estado:  </label>
                    <input type="text" name="estado" value="{{$evento->descripcion_estado}}" id="estado" class="form-control form-control-sm" readonly>
                </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="descripcion">Descripcion del Evento: </label>
                <input type="text" name="descripcion" value="{{$evento->descripcion}}" id="descripcion" class="text-uppercase form-control form-control-sm" readonly>
            </div>
        </div>

    </div>

</div>

@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

@stop

@section('js')
        {{-- <script> Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
        ) </script> --}}



     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

     <script>
        $(document).ready(function() {
            $('#miTabla').DataTable({
                // "ajax": "data/arrays.txt",
                responsive:true,
                autoWidth:false,
                "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "Nada encontrado - disculpas",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No registro disponible",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            'search':'Buscar:',
            'paginate':{
                'next':'Siguiente',
                'previous':'Anterior'
            }
                }
            });
        } );

        function guardar(){
            $('#form_create').submit();
        }
    </script>

@stop

