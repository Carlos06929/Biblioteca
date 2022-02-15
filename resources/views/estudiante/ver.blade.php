@extends('adminlte::page')

@section('title', 'Administracion')

@section('content_header')

@stop

@section('content')
    <H3>DATOS DEL ESTUDIANTE</H3>

    <div class="card-deck" style="width:650px ">
        <div class="card" style="border-color: #fbaf32">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="image-wrapper">
                            <img id="predeterminada" src="{{ asset('images/' . $estudiante->image) }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col">
                        <label for="" class="form-label">Registro</label>
                        <input type="integer" class="form-control" name="registro" disabled
                            value="{{ old('registro', $estudiante->registro) }}">
                    </div>


                    <div class="col">
                        <label for="" class="form-label">Carnet de Identidad</label>
                        <input type="integer" class="form-control" name="ci" disabled
                            value="{{ old('ci', $estudiante->ci) }}">

                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">Nombre(s)</label>
                        <input type="text" class="form-control" name="nombre" disabled
                            value="{{ old('nombre', $estudiante->nombre) }}">

                    </div>


                    <div class="col">
                        <label class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" disabled
                            value="{{ old('apellidos', $estudiante->apellidos) }}">

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">Lugar de Nacimiento</label>
                        <input type="text" class="form-control" name="lugarNacimiento" disabled
                            value="{{ old('lugarNacimiento', $estudiante->lugarNacimiento) }}">

                    </div>


                    <div class="col">
                        <label class="form-label">Fecha Nacimiento</label>
                        <input type="date" class="form-control" name="fechaNacimiento" disabled
                            value="{{ old('fechaNacimiento', $estudiante->fechaNacimiento) }}">

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">Nacionalidad</label>
                        <input type="text" class="form-control" name="nacionalidad" disabled
                            value="{{ old('nacionalidad', $estudiante->nacionalidad) }}">

                    </div>

                    <div class="col">
                        <label for="" class="form-label"> Domicilio</label>
                        <input type="text" class="form-control" name="domicilio" disabled
                            value="{{ old('domicilio', $estudiante->domicilio) }}">

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label">Ciudad</label>
                        <input type="text" class="form-control" name="ciudad" disabled
                            value="{{ old('ciudad', $estudiante->ciudad) }}">

                    </div>

                    <div class="col">
                        <label class="form-label">Teléfono</label>
                        <input type="integer" class="form-control" name="telefono" disabled
                            value="{{ old('telefono', $estudiante->telefono) }}">

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label">Correo</label>
                        <input type="email" class="form-control" name="correo" disabled
                            value="{{ old('correo', $estudiante->correo) }}">

                    </div>

                    <div class="col ">
                        <label class="form-label">Profesión</label>
                        <input type="text" class="form-control" name="profesion" disabled
                            value="{{ old('profesion', $estudiante->profesion) }}">

                    </div>
                </div>


                <div class="row" >                
                        <label class="form-label">Correo</label>
                        <input type="text" class="form-control" name="carrera" disabled
                            value="{{ old('correo', $estudiante->carrera) }}">
                </div>

            </div>
            <div class="card-footer" style="border-color: #fbaf32">
                <a href="{{ route('estudiante.cishow', $estudiante) }}"
                    class="btn btn-warning btn-m fas fa-address-card cursor-pointer"> &nbsp;Carnet</a>

                <a href="{{ route('estudiante.index') }}" class="btn btn-success btn-m  cursor-pointer">
                    <span>
                        <i class="fas fa-undo " style="color: #faf8f5"></i>
                    </span>
                    &nbsp;Volver
                </a>

            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">


    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 30.25%;
            width: 120px;
            height: 120px;
            margin-bottom: 20px;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

    </style>

@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



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

@stop
