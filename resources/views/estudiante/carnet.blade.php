@extends('adminlte::page')

@section('title', 'Administracion')

@section('content_header')

@stop

@section('content')
    <br>
    <div>
        <a href="{{ route('estudiante.pdfEstudiante',$estudiante) }}" class="btn btn-danger btn-m  cursor-pointer">
            <span>
                <i class="fa fa-download " style="color: #faf8f5"></i>
            </span>
            &nbsp;Descargar
        </a>
        <a href="{{ route('estudiante.index') }}" class="btn btn-success btn-m  cursor-pointer">
            <span>
                <i class="fas fa-undo " style="color: #faf8f5"></i>
            </span>
            &nbsp;Volver
        </a>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">

                    <div class="row" id="datos">
                        <div class="col" id="img">
                            <div class="image-wrapper">
                                <img id="predeterminada" src="{{ asset('images/' . $estudiante->image) }}" alt="">
                            </div>
                        </div>
                        <div class="col" id="inf">
                            <label for="" class="form-label">Registro:&nbsp;{{ $estudiante->registro }}</label>
                            <label for="" class="form-label">CI: &nbsp;{{ $estudiante->ci }}</label>
                            <label for="" class="form-label">Nombre(s):&nbsp; {{ $estudiante->nombre }}</label>
                            <label class="form-label">Apellidos:&nbsp;{{ $estudiante->apellidos }}</label>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col">
            <div class="cardreverso">
                <div class="card-body">

                </div>
            </div>

        </div>
    </div>


@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/ci.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

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
