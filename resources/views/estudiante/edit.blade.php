@extends('adminlte::page')

@section('title', 'Estudiantes')

@section('content_header')
    <h1>FORMULARIO DE DATOS </h1>
    {{-- <button><a href="{{route('estudiante.index')}}"></a>Volver</button> --}}
@stop

@section('content')

    <div class="card">

        <div class="card-body">

            <form class="row g-3" action="{{ route('estudiante.update',$estudiante->id) }}" method="POST" novalidate
                enctype="multipart/form-data">
                @csrf
                @method('put')


                <div class="col-md-6">
                    <div class="col-md-3">
                        <div class="image-wrapper">
                            <img   id="predeterminada" src="{{asset('images/'. $estudiante->image)}}" alt="" >
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
                        <input id="file" accept="image/*" name="image" size="220px" width="220px" height="220px"
                            type="file">
                    </div>

                </div>

                <div class="col-md-6">
                    <label class="form-label">Carrera</label>
                    <input type="text" class="form-control" name="carrera" value="{{old('carrera',$estudiante->carrera)}}">
                    @error('carrera')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label for="" class="form-label">Registro</label>
                    <input type="number" class="form-control" name="registro" value="{{old('registro',$estudiante->registro)}}">
                    @error('registro')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label for="" class="form-label">Carnet de Identidad</label>
                    <input type="number" class="form-control" name="ci" value="{{old('ci',$estudiante->ci)}}">
                    @error('ci')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>


                <div class="col-md-6">
                    <label for="" class="form-label">Nombre(s)</label>
                    <input type="text" class="form-control" name="nombre" value="{{old('nombre',$estudiante->nombre)}}">
                    @error('nombre')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>


                <div class="col-md-6">
                    <label class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" value="{{old('apellidos',$estudiante->apellidos)}}">
                    @error('apellidos')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Lugar de Nacimiento</label>
                    <input type="text" class="form-control" name="lugarNacimiento" value="{{old('lugarNacimiento',$estudiante->lugarNacimiento)}}">
                    @error('lugarNacimiento')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>


                <div class="col-md-6">
                    <label class="form-label">Fecha Nacimiento</label>
                    <input type="date" class="form-control" name="fechaNacimiento" value="{{old('fechaNacimiento',$estudiante->fechaNacimiento)}}">
                    @error('fechaNacimiento')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label for="" class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" name="nacionalidad" value="{{old('nacionalidad',$estudiante->nacionalidad)}}">
                    @error('nacionalidad')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label"> Domicilio</label>
                    <input type="text" class="form-control" name="domicilio" value="{{old('domicilio',$estudiante->domicilio)}}">
                    @error('domicilio')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label class="form-label">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" value="{{old('ciudad',$estudiante->ciudad)}}">
                    @error('ciudad')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" name="telefono" value="{{old('telefono',$estudiante->telefono)}}">
                    @error('telefono')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label">Correo</label>
                    <input type="email" class="form-control" name="correo" value="{{old('correo',$estudiante->correo)}}">
                    @error('correo')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <div class="col-md-3 ">
                    <label class="form-label">Profesión</label>
                    <input type="text" class="form-control" name="profesion" value="{{old('profesion',$estudiante->profesion)}}">
                    @error('profesion')
                        <small class="text-danger">*{{ $message }}</small>
                        <br>
                    @enderror
                </div>

                <button type="submit" >Guardar</button>
                <button ><a href="{{route('estudiante.index')}}">Volver</a></button>




            </form>
        @stop

        @section('css')
        <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">
            <link rel="stylesheet" href="/css/admin_custom.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
            <style>
                button{
                border-radius: 50px;
              }
           </style>


        @stop

        @section('js')
            <script>
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                )
            </script>



            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#inicio').DataTable({
                        // "ajax": "data/arrays.txt",
                        responsive: true,
                        autoWidth: false,
                        "language": {
                            "lengthMenu": "Mostrar _MENU_ registros por pagina",
                            "zeroRecords": "Nada encontrado - disculpas",
                            "info": "Mostrando pagina _PAGE_ de _PAGES_",
                            "infoEmpty": "No registro disponible",
                            "infoFiltered": "(filtrado de _MAX_ registros totales)",
                            'search': 'Buscar:',
                            'paginate': {
                                'next': 'Siguiente',
                                'previous': 'Anterior'
                            }
                        }
                    });
                });
            </script>

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
