@extends('adminlte::page')

@section('title', 'users')

@section('content_header')
<h1>ACTUALIZAR USUARIO</h1>
@stop

@section('content')

<div class="card mb-3" style="border-color: #fbaf32">
    <div class="card-header border-warning" style="background-color: #fbaf32">
        {{-- <div class="card-title" style="font-weight: bold">Editar Usuario</div> --}}
        <div class="pull-right">
            <a href="{{route('user.index')}} "class="btn btn-sm btn-light float-right">
                <span>
                    <i class="fa fa-reply"  style="color: #fbaf32"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('users.update',$users)}}" method="post" id="form_edit">
            @csrf
            @method('PUT')

                    <div class="col-md-4">
                        <label for="nombre">Nombre:</label>
                        <input type="text" value="{{old('name',$users->name)}}"name="nombre" id="nombre" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-4">
                        <label for="tipo_users">Correo electronico :</label>
                        <input type="text"value="{{old('email',$users->email)}}" name="email" id="email" class="form-control form-control-sm @error('email') is-invalid @enderror">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ 'Este email ya existe' }}</strong>
                        </span>
                    @enderror



                    </div>

                    <div class="col-md-4">
                        <label for="lugar">Contraseña :</label>
                        <input type="password"value="" name="contraseña" id="contraseña" class="form-control form-control-sm">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ 'Este email ya existe' }}</strong>
                        </span>
                    @enderror
                    </div>

        <div class="pull-right mt-3">

            <button class="btn btn-sm btn-warning float-right" type="submit" >
                <span>
                    <i class="fa fa-save" style="color:#fff"></i>
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

