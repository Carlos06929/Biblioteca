@extends('adminlte::page') @section('title', 'Institucion')
<link href="img/logoh.png" rel="icon">
<link href="img/logoh.png" rel="apple-touch-icon">
@section('content_header')



<button><a href="{{route('institucion.edit')}}">Editar</a></button>

<h1  style="text-align: center;" class="text-uppercase">DATOS DE LA Institución</h1>

@stop
 @section('content')


<div class="card card-content">

    {{--
    <div class="card-header"></div>
    --}}

    <div class="card-body">
        <form class="row g-2">
            @foreach ($institucion as $instituciones) {{--
            <input type="hidden" value="{{$instituciones->id}}" name="id" />
            --}}

            <div class="col-md-2">
                <a
                    href="/storage/logos/{{$instituciones->logo}}"
                    data-lightbox="imagen"
                    data-title="{{$instituciones->nombre}}"
                >
                    <img
                        src="/storage/logos/{{$instituciones->logo}}"
                        class="rounded mx-auto d-block"
                        style="width:60%;height: 100%;padding: 50% justify-items: center;"
                        alt="No hay logo"
                    />
                </a>
            </div>

            <div class="col-md-6 inline-block">
                <label class="form-label">Nombre de la Biblioteca</label>
                <input
                    type="text"
                    class="form-control"
                    id="nombre"
                    name="nombre"
                    value="{{$instituciones->nombre}}"
                    required
                    disabled
                />
            </div>

            <div class="col-md-3 inline-block">
                <label class="form-label">Institución</label>
                <input
                    type="text"
                    class="form-control"
                    id="NombInst"
                    name="NombInst"
                    value="{{$instituciones->NombInst}}"
                    required
                    disabled
                />
            </div>
            <div class="col-md-3 inline-block">
                <label class="form-label">Dirección</label>
                <input
                    type="text"
                    class="form-control"
                    id="direccion"
                    name="direccion"
                    value="{{$instituciones->direccion}}"
                    required
                    disabled
                />
            </div>

            <div class="col-md-3">
                <label class="form-label">Teléfono</label>
                <input
                    type="number"
                    class="form-control"
                    id="telefono"
                    name="telefono"
                    value="{{$instituciones->telefono}}"
                    required
                    disabled
                />
            </div>
            <div class="col-md-2">
                <label class="form-label">Ciudad</label>
                <input
                    type="text"
                    class="form-control"
                    id="ciudad"
                    name="ciudad"
                    value="{{$instituciones->ciudad}}"
                    required
                    disabled
                />
            </div>

            <div class="col-md-2">
                <label class="form-label">Url</label>
                <input
                    type="text"
                    class="form-control"
                    id="url"
                    name="url"
                    value="{{$instituciones->url}}"
                    required
                    disabled
                />
            </div>

            <div class="col-md-1">
                <label class="form-label">País</label>
                <input
                    type="text"
                    class="form-control"
                    id="pais"
                    name="pais"
                    value="{{$instituciones->pais}}"
                    required
                    disabled
                />
            </div>

            <div class="col-md-3">
                <label class="form-label">Correo</label>
                <input
                    type="email"
                    class="form-control"
                    id="correo"
                    name="correo"
                    value="{{$instituciones->correo}}"
                    required
                    disabled
                />
            </div>

            <div class="col-md-3">
                <label class="form-label">Cargo</label>
                <input
                    type="text"
                    class="form-control"
                    id="cargo"
                    name="cargo"
                    value="{{$instituciones->cargo}}"
                    required
                    disabled
                />
            </div>

            <div class="col-md-5">
                <label class="form-label">Nombre del/la Bibliotecario/a</label>
                <input
                    type="text"
                    class="form-control"
                    id="encargado"
                    name="encargado"
                    value="{{$instituciones->encargado}}"
                    required
                    disabled
                />
            </div>
            @endforeach
        </form>
    </div>
</div>

        @stop @section('css')

        <link rel="stylesheet" href="{{asset('librerias/lightbox/lightbox.min.css')}}">
        <style>
            button {
                padding: 1.3em 3em;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 2.5px;
                font-weight: 500;
                color: #000;
                background-color: #fff;
                border: none;
                border-radius: 45px;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease 0s;
                cursor: pointer;
                outline: none;
            }

            button:hover {
                background-color: #fbaf32;
                box-shadow: 0px 15px 20px #fbaf32;
                color: #fff;
                transform: translateY(-7px);
            }

            button:active {
                transform: translateY(-1px);
            }
        </style>

        @stop @section('js')

          <script src="{{asset('librerias/lightbox/lightbox.min.js')}}"></script>


        @stop

