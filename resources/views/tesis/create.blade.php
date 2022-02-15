@extends('adminlte::page') @section('title', 'Registrar Tesis')
@section('content_header')
    <a href="{{ route('tesis.index') }}" class="btn btn-sm float-right">
        <button>VOlver</button></a>
    <h1 class="titulo">REGISTRAR TESIS</h1>
    @stop @section('content')

    <div class="card shadow formulario">
        <div class="card-body">
            <form action="{{ route('tesis.store') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('POST')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">
                        AREA DE PORTADA
                        <hr />
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 img" class="image-wrapper">
                        <label for="perfil" class="form-label la">Portada:</label>
                        <img class="imagen" id="predeterminada"
                            src="https://www.bootdey.com/app/webroot/img/hero-graphic.png" alt="Image Description" />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 imgUser">
                        <input id="file" accept="image/*" name="image" size="220px" width="220px" height="220px"
                            type="file">
                    </div>
                    @error('portada')
                        <div style="text-align: center">
                            <span class="text-danger">{{ $message }}</span>
                        </div>

                    @enderror

                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label for="stopografica" class="form-label la">Signatura Topografica</label>
                        <textarea class="form-control shadow-sm" type="text" name="sgtopografica" id="stopografica">
                                </textarea>

                        @error('sgtopografica')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    

                   

                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <label for="disponible" class="form-label la">Disponible:</label>
                        <select name="disponible" id="disponible" class="form-control shadow-sm">
                            <option>---Seleccione ---</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <br />
                        @error('disponible')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">
                        AREA DE TITULO
                        <hr />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <label for="titulo" class="form-label la">Titulo:</label>
                        <input name="titulo" type="text" class="form-control shadow-sm" id="titulo" for="titulo" value="" />
                        @error('titulo')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <label for="subtitulo" class="form-label la">Subtitulo:</label>
                        <input name="subtitulo" type="text" class="form-control
                    shadow-sm" id="for="
                            titulo" value=""> @error('subtitulo')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <label for="idioma" class="form-label la">Idioma:</label>
                        <input name="idioma" type="text" class="form-control
                    shadow-sm" id=""
                            for=" titulo" value="">
                        <br />
                        @error('idioma')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">
                        AREA DE AUTOR Y CATEGORIZACION
                        <hr />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <label for="autores" class="form-label la">Autores:</label>

                        <select class="form-select form-select-lg mb-3 js-example-basic-multiple " name="states[]"
                            multiple="multiple">
                            <option value="AL">Alabama</option>
                            ...
                            <option value="WY">Wyoming</option>
                        </select>


                        <br />
                        @error('autores')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">
                        AREA DE EDICION
                        <hr />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 mt-3">
                        <label for="lugar" class="form-label la">Lugar:</label>
                        <input name="lugar" type="text" class="form-control shadow-sm" id="" for="lugar" value="" />
                        @error('lugar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-9">
                        <label for="editor" class="form-label la">Editor o Impresor:</label>
                        <textarea class="form-control shadow-sm" type="text" name="editor" id="editor">
                                </textarea>

                        @error('editor')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
                        <label for="año" class="form-label la">Año:</label>
                        <input name="ano" type="text" class="form-control shadow-sm" id="año" for="año" value="" />
                        @error('ano')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
                        <label for="pais" class="form-label la">Pais:</label>
                        <input name="pais" type="text" class="form-control shadow-sm" id="pais" for="pais" value="" />
                        @error('pais')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">
                        <br>
                        AREA DE DESCRIPCION FISICA DE LA TESIS
                        <hr />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                        <label for="cpaginas" class="form-label la">Cantidad de Paginas:</label>
                        <input name="cantpag" type="text" class="form-control shadow-sm" id="cpaginas" for="cpaginas"
                            value="" />
                        @error('cantpag')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 mt-3">
                        <label for="dimensiones" class="form-label la">Dimensiones:</label>
                        <input name="dimensiones" type="text" class="form-control shadow-sm" id="dimensiones"
                            for="dimensiones" value="" />
                        @error('dimensiones')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label for="manexo" class="form-label la">Material Anexo:</label>
                        <textarea class="form-control shadow-sm" type="text" name="matAnexo" id="manexo">
                                </textarea>

                        @error('matAnexo')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">
                        <br>
                        AREA DE DESCRIPCION DE TESIS
                        <hr />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label for="descriptores" class="form-label la">Descripcion o Temario:</label>
                        <textarea class="form-control shadow-sm" type="text" name="dscTemario">
                                </textarea>

                        @error('dscTemario')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>
                <br />
                <div class="w-100">
                    <div class="center">
                        <button type="submit">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @stop @section('css') {{-- <link rel="stylesheet" href="/css/admin_custom.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    {{-- <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
/> --}}

    <link rel="stylesheet" type="text/css"
        href="https://unpkg.com/file-upload-with-preview@4.1.0/dist/file-upload-with-preview.min.css" />
    <link href="{{ asset('librerias/select2/select2.min.css') }}" rel="stylesheet" />


    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap");

        :root {
            --green: #fbaf32;
            --black: #192a56;
            --light-color: #666;
        }

        * {
            text-decoration: none !important;
        }

        form {
            display: inline-block;
        }

        .selec {
            max-width: 50%;
            font-weight: 700;
            color: var(--black);
        }

        .titulo {
            color: var(--black);
        }

        .info {
            color: var(--black);
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .formulario {
            max-width: 60%;
            margin: auto !important;
            margin-bottom: 2rem;
            /* background: rgba(255, 255, 255, 0); */
        }

        .la {
            color: var(--green);
        }

        .btnFormulario {
            max-width: 60%;
            margin: auto;
            border: none;
            box-shadow: none;
            background: rgba(255, 255, 255, 0);
        }

        div.w-100 {
            width: 33.33%;
            /* background-color: orange; */
        }

        div.center {
            text-align: center;
        }

        button {
            padding: 1.3em 3em;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 500;
            color: #192a56;
            background-color: #fff;
            border-color: #fbaf32;
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

        .img {
            /* text-align: center; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .imagen {
            margin-left: 2rem;
            width: 150px;
            height: 150px;
            /* border-radius: 50%; */
        }

        .imgUser {
            display: inline-block;
            margin: 1rem 0rem;
            text-align: center;
        }

        /*  .textarea{
                        text-align: center;
                        font-weight: bold
                    } */

        @media (max-width: 1024px) {
            .formulario {
                max-width: 90%;
            }
        }

        @media (max-width: 760px) {

            .content,
            .container-fluid {
                padding: 0 !important;
            }

            .container {
                max-width: 100%;
                padding: 0;
            }

            .formulario {
                margin: 0;
            }
        }

        @media (max-width: 450px) {
            .img {
                flex-direction: column;
            }

            .formulario {
                max-width: 100%;
            }

        }

    </style>

    @stop @section('js')
    <script src="{{ asset('librerias/select2/select2.min.js') }}"></script>

    <script>
        /* script para el select 2 */
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script>
        $(function() {
            var timeout = 2000;
            $(".alert").delay(timeout).fadeOut(400);
        });
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
