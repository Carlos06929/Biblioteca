@extends('adminlte::page')

@section('title', 'Idioma')

@section('content_header')
<h1>ACTUALIZAR IDIOMA</h1>
@stop

@section('content')

<div class="card mb-2" style="border-color: #fbaf32; max-width:80%">
    <div class="card-header border-warning" style="background-color: #fbaf32">
        {{-- <div class="card-title" style="font-weight: bold">Editar Usuario</div> --}}
         <div class="pull-right">
            <a href="{{route('idioma.index')}} "class="btn btn-sm btn-light float-right">
                <span>
                    <i class="fa fa-reply"  style="color: #fbaf32"></i> VOLVER
                </span>
            </a>
        </div>

    </div>
    <div class="card-body">
        <form action="{{route('idioma.update',$idioma)}}" method="POST" id="form_edit">
            @csrf
            @method('PUT')

                    <div class="col-md-12">
                        <label for="nombre">Idioma:</label>
                        <input type="text" value="{{old('nombre',$idioma->nombre)}}"name="nombre" id="nombre" class="form-control form-control-sm  @error('nombre') is-invalid @enderror " autofocus>

                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            {{-- <strong>{{ 'El nombre del Idioma no sé podrá actualizar si el campo está vacío' }}</strong> --}}
                          <strong>{{'Este idioma ya existe debe hacer click en volver /o agregar uno nuevo '}}</strong>
                        </span>
                    @enderror
                    </div>

         <div class="row">
        <div class="col-md-2 pull-left mt-3">

            <button class="btn btn-sm btn-warning float-left" type="submit" onclick="guardar()">
                <span>
                    <i class="fa fa-save" style="color:#fff"></i>
                </span>
                &nbsp;
                Actualizar

            </button>
        </div>

    </div>
    </form>
    </div>

</div>

@stop

@section('css')

@stop
@section('js')





     <script>


        function guardar(){

            return  $('#form_edit').submit();
        }
    </script>

@stop

