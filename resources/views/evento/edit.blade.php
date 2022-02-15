@extends('adminlte::page')

@section('title', 'Evento')

@section('content_header')
<br>
@stop

@section('content')

<div class="card card-custom" style="border-color: #fbaf32">
    <div class="card-header "style="background-color: #fbaf32">
        <div class="card-title">EDITAR EVENTO</div>
        <div class="pull-right" >
            <a href="{{route('evento.index')}} "class="btn btn-sm btn-light float-right">
                <span>
                    <i class="fa fa-reply " style="color: #fbaf32"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('evento.update',$evento)}}" method="post" id="form_edit">
            @csrf
            @method('PUT')
            <div class="row">

                    <div class="col-md-4">
                        <label for="nombre">Nombre:</label>
                        <input type="text" value="{{old('nombre',$evento->nombre)}}"name="nombre" id="nombre" class=" text-uppercase form-control form-control-sm @error('nombre') is-invalid @enderror" required>

                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ 'El evento no sé podrá actualizar si el campo está vacío' }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="tipo_evento">Tipo de Evento :</label>
                        <input type="text"value="{{old('tipo_evento',$evento->tipo_evento)}}" name="tipo_evento" id="tipo_evento" class="text-uppercase form-control form-control-sm @error('tipo_evento') is-invalid @enderror" required>

                        @error('tipo_evento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ 'El evento no sé podrá actualizar si el campo está vacío' }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="lugar">Lugar del Evento:</label>
                        <input type="text"value="{{old('lugar',$evento->lugar)}}" name="lugar" id="lugar" class="text-uppercase form-control form-control-sm @error('lugar') is-invalid @enderror" required>

                        @error('lugar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ 'El evento no sé podrá actualizar si el campo está vacío' }}</strong>
                        </span>
                    @enderror
                    </div>
            </div>
        <div class="row">
            <div class="col-md-4">
                <label for="hora_inicio">Hora de Inicio:</label>
                <input type="time" name="hora_inicio" value="{{old('hora_inicio',$evento->hora_inicio)}}" id="hora_inicio" class="form-control form-control-sm @error('hora_inicio') is-invalid @enderror" required>

                @error('fecha_inicio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ 'El evento no sé podrá actualizar si el campo está vacío' }}</strong>
                </span>
            @enderror
            </div>
                <div class="col-md-4">
                    <label for="fecha_inicio">Inico del Evento :</label>
                    <input type="date" value="{{old('fecha_inicio',$evento->fecha_inicio)}}" name="fecha_inicio" id="fecha_inicio" class="form-control form-control-sm @error('fecha_inicio') is-invalid @enderror" required>

                    @error('fecha_inicio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ 'El evento no sé podrá actualizar si el campo está vacío' }}</strong>
                    </span>
                @enderror
                </div>

                <div class="col-md-4">
                    <label for="fecha_fin">Fin del Evento: </label>
                    <input type="date" name="fecha_fin" value="{{old('fecha_fin',$evento->fecha_fin)}}" id="fecha_fin" class="form-control form-control-sm  @error('fecha_fin') is-invalid @enderror " required>

                    @error('fecha_fin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ 'El evento no sé podrá actualizar si el campo está vacío' }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="estado">Estado del Evento: </label>
                        <select name="estado" id="estado" class="form-control form-control-sm">
                                <option value="1" {{($evento->estado == '1' ? 'selected' : '' )}}> ESPERANDO</option>
                                <option value="3" {{($evento->estado == '3' ? 'selected' : '' )}}> INICIADO</option>
                                <option value="2"{{($evento->estado == '2' ? 'selected' : '' )}}> FINALIZADO</option>
                        </select>

                </div>
                descripcion
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="descripcion">Descripcion de Evento:</label>
                <input type="text" value="{{old('descripcion',$evento->descripcion)}}"name="descripcion" id="descripcion" class=" text-uppercase form-control form-control-sm @error('descripcion') is-invalid @enderror" required>

                @error('descripcion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ 'Solo puede rellenar el campo con 50 Caracteres' }}</strong>
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
                Actualizar
            </button>
        </div>
    </form>
    </div>

</div>

@stop

@section('css')
<link href="{{asset('librerias/toastr/toastr.scss')}}" rel="stylesheet"/>

@stop

@section('js')
<script src="{{asset('librerias/toastr/toastr.js')}}"></script>

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


        function guardar(){
            const nombre=document.getElementById('nombre');
            const descripcion=document.getElementById('descripcion');
            const tipo_evento=document.getElementById('tipo_evento');
            const hora_inicio=document.getElementById('hora_inicio');
            const fecha_inicio=document.getElementById('fecha_inicio');
            const fecha_fin=document.getElementById('fecha_fin');
            const lugar=document.getElementById('lugar');
            if ((nombre.value || descripcion.value || tipo_evento.value || hora_inicio.value || fecha_inicio.value || fecha_fin.value || lugar.value)===""){

               toastr.error('El campo es obligatorio','Evento');
            }
            else{
               toastr.success('Se agrego correctamente','Evento');

            }
            return  $('#form_create').submit();
        }
    </script>

@stop

