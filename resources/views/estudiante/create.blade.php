@extends('adminlte::page')

@section('title', 'Estudiantes')

@section('content_header')
    <h1>FORMULARIO DE DATOS </h1>

@stop

@section('content')

    <div class="card">

        <div class="card-body">

            <form class="row g-3" action="{{ route('estudiante.store') }}" method="POST" novalidate
                enctype="multipart/form-data">
                @csrf
                @method('POST')


                <div class="col-md-6">
                    <div class="col-md-3">
                        <div class="image-wrapper">
                            <img id="predeterminada"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPuqjcgCgTS1bX7vt0Efl4UY5o-5WtCS-4Zw&usqp=CAU"
                                alt="">
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="imageBox">
                        <label for="file">
                            <div class="imageFile" data-text="Seleccionar archivo">
                                Seleccionar imagen
                            </div>
                        </label>
                        <input id="file" accept="image/*" name="image" size="220px" width="220px" height="220px" type="file">
                    </div>

                </div>

                <div class="col-md-6">
                    <label class="form-label">Carrera</label>
                    <input type="text" class="form-control" name="carrera" value="">
                    @error('carrera')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>



                <div class="col-md-3">
                    <label for="" class="form-label">Registro</label>
                    <input type="number" class="form-control" name="registro" value="{{old('registro')}}" autofocus>
                    @error('registro')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label for="" class="form-label">Carnet de Identidad</label>
                    <input type="number" class="form-control" name="ci" value="{{old('ci')}}" >
                    @error('ci')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>


                <div class="col-md-6">
                    <label for="" class="form-label">Nombre(s)</label>
                    <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}" >
                    @error('nombre')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>


                <div class="col-md-6">
                    <label class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" value="{{old('apellidos')}}">
                    @error('apellidos')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Lugar de Nacimiento</label>
                    <input type="text" class="form-control" name="lugarNacimiento" value="{{old('lugarNacimiento')}}">
                    @error('lugarNacimiento')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>


                <div class="col-md-6">
                    <label class="form-label">Fecha Nacimiento</label>
                    <input type="date" class="form-control" name="fechaNacimiento" value="{{old('fechaNacimiento')}}">
                    @error('fechaNacimiento')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label for="" class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" name="nacionalidad" value="{{old('nacionalidad')}}">
                    @error('nacionalidad')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label"> Domicilio</label>
                    <input type="text" class="form-control" name="domicilio" value="{{old('domicilio')}}">
                    @error('domicilio')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label class="form-label">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" value="{{old('ciudad')}}">
                    @error('ciudad')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" name="telefono" value="{{old('telefono')}}">
                    @error('telefono')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label">Correo</label>
                    <input type="email" class="form-control" name="correo" value="{{old('correo')}}">
                    @error('correo')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-3 ">
                    <label class="form-label">Profesión</label>
                    <input type="text" class="form-control" name="profesion" value="{{old('profesion')}}">
                    @error('profesion')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>


                <button type="submit" class="col-sm-3 col-md-2 mt-3" >Registrar</button>
                <button type="button" class="col-sm-3 col-md-2 mt-3" ><a href="{{route('estudiante.index')}}">Volver</a></button>


            </form>


        @stop

         @section('css')
            <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">
            <link rel="stylesheet" href="{{ asset('librerias/DatatablesCss/bootstrap.css') }}">

           <style>
                button{
                border-radius: 40px !important;
              }

           </style>

        @stop

        @section('js')

            <script>
                //cambiar imagen
                document.getElementById("file").addEventListener('change', cambiarImagen);

                function cambiarImagen(event) {
                    var file = event.target.files[0];
                    var reader = new FileReader();
                    reader.onload = (event) => {
                        document.getElementById("predeterminada").setAttribute('src', event.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            </script>
        @stop
