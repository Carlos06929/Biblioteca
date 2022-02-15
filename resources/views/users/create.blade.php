@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
<h1>CREAR NUEVO USUARIO</h1>
@stop

@section('content')

<div class="card mb-3" style="border-color: #fbaf32">
    <div class="card-header border-warning" style="background-color: #fbaf32">

        {{-- <div class="card-title" style="font-weight: bold">Crear Usuario</div> --}}
        <div class="pull-right">
            <a href="{{route('user.index')}} "class="btn btn-sm btn-light float-right">
                <span>
                    <i class="fa fa-reply"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('users.store')}}" method="post" id="form_create">
            @csrf
            @method('POST')

                    <div class="col-md-4">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control form-control-sm" name="email" value="{{ old('nombre') }}" required autocomplete="name" autofocus>

                    </div>


                  <div class="col-md-4">
                        <label for="tipo_users">Correo electronico :</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  >

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ 'Este correo ya existe' }}</strong>
                        </span>

                    @enderror
                    </div>



                    <div class="col-md-4">
                        <label for="lugar">Contraseña :</label>
                        <input type="text" name="contraseña" id="contraseña" class="form-control form-control-sm" required>
                    </div>

        <div class="pull-right mt-3">

            <button class="btn btn-sm btn-warning float-right" onclick="guardar()" >

                <span>

                    <i class="fa fa-save" style="color:#fff"></i>
                </span>
                &nbsp;
                Crear


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
  "debug": false,
  "newestOnTop": true,
  "progressBar": false,
  "positionClass": "toast-top-full-width",
  "preventDuplicates": false,
  "onclick": true,
  "showDuration": "1900",
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


        const guardar=()=>{
            const name=document.getElementById('nombre');
            const email=document.getElementById('email');
            const password=document.getElementById('contraseña');


           if((nombre.value && contraseña.value) ===""){

                 toastr.error('El campo es obligatorio','Evento');
            }
             else{
                if(email.value===validate){
                    toastr.warning('El xs ya existe','Evento');

                 }
                 /* if(email.value!==""){
                    toastr.success('Se agrego correctamente','Evento');

                 } */
                 return  $('#form_create').submit();



            }
        }

    </script>

@stop


