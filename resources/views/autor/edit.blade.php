@extends('adminlte::page')

@section('title', 'users')

@section('content_header')
<h1>ACTUALIZAR AUTOR</h1>
@stop

@section('content')

<div class="card mb-2" style="border-color: #fbaf32; max-width:80%">
    <div class="card-header border-warning" style="background-color: #fbaf32">
        {{-- <div class="card-title" style="font-weight: bold">Editar Usuario</div> --}}
         <div class="pull-right">
            <a href="{{route('autor.index')}} "class="btn btn-sm btn-light float-right">
                <span>
                    <i class="fa fa-reply"  style="color: #fbaf32"></i> VOLVER
                </span>
            </a>
        </div>

    </div>
    <div class="card-body">
        <form action="{{route('autor.update',$autor)}}" method="POST" id="form_edit">
            @csrf
            @method('PUT')

                    <div class="col-md-12">
                        <label for="nombre">Nombre del Autor:</label>
                        <input type="text" value="{{old('nombre',$autor->nombre)}}"name="nombre" id="nombre" class="form-control form-control-sm  @error('nombre') is-invalid @enderror " autofocus>

                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ 'El nombre del autor no sé podrá actualizar si el campo está vacío' }}</strong>
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
  "hideDuration": "100",
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

            if ((nombre.value)===""){

               toastr.error('El campo es obligatorio','Autor');
            }
            else{
               toastr.success('Se agrego correctamente','Autor');

            }
            return  $('#form_edit').submit();
        }
    </script>

@stop

