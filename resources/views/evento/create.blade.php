@extends('adminlte::page')

@section('title', 'Evento')

@section('content_header')
<br>
@stop

@section('content')

<div class="card card-custom" style="border-color: #fbaf32">
    <div class="card-header "style="background-color: #fbaf32">
        <div class="card-title">Nuevo Evento</div>
        <div class="pull-right" >
            <a href="{{route('evento.index')}} "class="btn btn-sm btn-light float-right">
                <span>
                    <i class="fa fa-reply " style="color: #fbaf32"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('evento.store')}}" method="post" id="form_create">
            @csrf
            @method('post')
            <div class="row">

                    <div class="col-md-4">
                        <label for="nombre">Nombre:</label>
                        <input type="text"name="nombre" id="nombre" class=" text-uppercase form-control form-control-sm autofocus @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="lugar" autofocus>

                        @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ 'Es necesario llenar este campo' }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="tipo_evento">Tipo de Evento :</label>
                        <input type="text" name="tipo_evento" id="tipo_evento" class="text-uppercase form-control @error('tipo_evento') is-invalid @enderror" name="email" value="{{ old('tipo_evento') }}" required autocomplete="tipo_evento">

                        @error('tipo_evento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ 'Es necesario llenar este campo' }}</strong>
                        </span>
                    @enderror

                    </div>
                    <div class="col-md-4">
                        <label for="lugar">Lugar del Evento:</label>
                        <input type="text" name="lugar" id="lugar" class="text-uppercase form-control @error('lugar') is-invalid @enderror" name="email" value="{{ old('lugar') }}" required autocomplete="lugar">

                        @error('lugar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ 'Es necesario llenar este campo' }}</strong>
                        </span>
                    @enderror

                    </div>
            </div>
        <div class="row">

            <div class="col-md-4">
                <label for="hora_inicio">Hora de Inicio:</label>
                <input type="time" name="hora_inicio" id="hora_inicio" class="form-control @error('hora_inicio') is-invalid @enderror" name="hora_inicio" value="{{ old('hora_inicio') }}" required autocomplete="lugar" form-control-sm ">

                @error('hora_inicio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ 'Es necesario llenar este campo' }}</strong>
                        </span>
                    @enderror


            </div>


                <div class="col-md-4">
                    <label for="fecha_inicio">Inico del Evento :</label>
                    <input type="datetime-local" name="fecha_inicio" id="fecha_inicio" class="form-control @error('fecha_inicio') is-invalid @enderror" name="fecha_inicio" value="{{ old('fecha_inicio') }}" required autocomplete="lugar" form-control-sm ">

                    @error('fecha_inicio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ 'Es necesario llenar este campo' }}</strong>
                            </span>
                        @enderror
                </div>





                <div class="col-md-4">
                    <label for="fecha_fin">Fin del Evento: </label>
                    <input type="date" name="fecha_fin" id="fecha_fin" class="form-control @error('fecha_fin') is-invalid @enderror" name="fecha_fin" value="{{ old('fecha_fin') }}" required autocomplete="lugar" form-control-sm ">

                    @error('fecha_fin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ 'Es necesario llenar este campo' }}</strong>
                            </span>
                        @enderror
                </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="descripcion">Descripcion del Evento: </label>
                <input type="text" name="descripcion" id="descripcion" class="text-uppercase form-control form-control-sm @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="lugar" form-control-sm ">

                @error('descripcion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ 'Es necesario llenar este campo' }}</strong>
                        </span>
                    @enderror
            </div>
        </div>
        <div class="pull-right mt-3">
            <button class="btn btn-sm btn-warning float-right" onclick="guardar()">
                <span>
                    <i class="fa fa-save"></i>
                </span>
                &nbsp;
                Guardar
            </button>
        </div>
    </form>
    </div>

</div>

@stop

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <link href="{{asset('librerias/toastr/toastr.scss')}}" rel="stylesheet"/>


@stop

@section('js')

     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
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

        const guardar=()=>{

            const nombre=document.getElementById('nombre');
            const descripcion=document.getElementById('descripcion');
            const tipo_evento=document.getElementById('tipo_evento');
            const hora_inicio=document.getElementById('hora_inicio');
            const fecha_inicio=document.getElementById('fecha_inicio');
            const fecha_fin=document.getElementById('fecha_fin');
            const lugar=document.getElementById('lugar');
            if ((nombre.value && descripcion.value && tipo_evento.value && hora_inicio.value && fecha_inicio.value && fecha_fin.value && lugar.value)===""){

               toastr.error('El campo es obligatorio','Evento');
            }
            else{
               toastr.success('Se agrego correctamente','Evento');
               return  $('#form_create').submit();
            }


        }


    </script>

@stop

