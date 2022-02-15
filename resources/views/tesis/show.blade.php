@extends('adminlte::page') @section('title', 'Registrar Revista')
@section('content_header')
    <a href="{{ route('tesis.index') }}" class="btn btn-sm float-right">
        <button>VOlver</button></a>
    <h1 class="titulo">INFORMACION DE LA TESIS</h1>
    @stop @section('content')

    <div class="card shadow formulario">
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf @method('POST')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">
                        AREA DE PORTADA
                        <hr />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 img">
                        <label for="perfil" class="form-label la">Portada:</label>

                        <img  class="imagen" id="picture" src="{{ asset('tesisPortada/' . $tesi->image) }}" alt="Image Description" width="60" height="70">
                    </div>
                    <br><br>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <label for="inventario" class="form-label la">Nº Inventario
                        </label>
                        <input name="inventario" type="text" class="form-control shadow-sm" id="inventario"
                            value="{{ old('ninv', $tesi->ninv) }}" readonly/>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 mt-3">
                        <label for="numero_inventario" class="form-label la">
                            Codigo de Barras: {!!DNS1D::getBarcodeHTML( $tesi->ninv, 'C39',1,65);!!}
                        </label>
                    </div>
                
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <label for="stopografica" class="form-label la">Signatura Topografica</label>
                        <textarea class="form-control shadow-sm" type="text" name="stopografica" id="stopografica"
                            value="{{ old('stopografica', $tesi->stopografica) }}" disabled>
                            </textarea>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <label for="disponible" class="form-label la">Disponible:</label>
                        <select name="disponible" id="disponible" class="form-control shadow-sm" disabled>
                            <option>---Seleccione ---</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <br />
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">
                        AREA DE TITULO
                        <hr />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <label for="titulo" class="form-label la">Titulo:</label>
                        <input name="text" type="text" class="form-control shadow-sm" id="titulo" for="titulo"
                            value="{{ old('titulo', $tesi->titulo) }}" disabled />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <label for="subtitulo" class="form-label la">Subtitulo:</label>
                        <input name="text" type="text" class="form-control
                    shadow-sm" id="for=" titulo"
                            value="{{ old('subtitulo', $tesi->subtitulo) }}" disabled>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <label for="idioma" class="form-label la">Idioma:</label>
                        <input name="text" type="text" class="form-control
                            shadow-sm" 
                            for=" titulo" value="{{ old('idioma', $tesi->idioma) }}" disabled>
                        <br />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">
                        AREA DE AUTOR Y CATEGORIZACION
                        <hr />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <label for="autor" class="form-label la">Autores:</label>

                        <select class="form-select form-select-lg mb-3 js-example-basic-multiple " name="states[]"
                            multiple="multiple">
                            <option value="AL">Alabama</option>
                            ...
                            <option value="WY">Wyoming</option>
                        </select>


                        <br />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">
                        AREA DE EDICION
                        <hr />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 mt-3">
                        <label for="lugar" class="form-label la">Lugar:</label>
                        <input name="text" type="text" class="form-control shadow-sm" id="" for="lugar"
                            value="{{ old('lugar', $tesi->lugar) }}" disabled />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-9">
                        <label for="editor" class="form-label la">Editor o Impresor:</label>
                        <textarea class="form-control shadow-sm" type="text" name="editor" id="editor"
                            value="{{ old('editor', $tesi->editor) }}" disabled>
                            </textarea>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
                        <label for="año" class="form-label la">Año:</label>
                        <input name="ano" type="text" class="form-control shadow-sm" id="año" for="ano"
                            value="{{ old('ano', $tesi->ano) }}" disabled />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
                        <label for="pais" class="form-label la">Pais:</label>
                        <input name="pais" type="text" class="form-control shadow-sm" id="pais" for="pais"
                            value="{{ old('pais', $tesi->pais) }}" disabled />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">
                        <br>
                        AREA DE DESCRIPCION FISICA DE LA TESIS
                        <hr />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                        <label for="cpaginas" class="form-label la">Cantidad de Paginas:</label>
                        <input name="cantpag" type="text" class="form-control shadow-sm" id="cantpag" for="cantpag"
                            value="{{ old('cantpag', $tesi->cantpag) }}" disabled />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 mt-3">
                        <label for="dimensiones" class="form-label la">Dimensiones:</label>
                        <input name="dimensiones" type="text" class="form-control shadow-sm" id="dimensiones"
                            for="dimensiones" value="{{ old('dimensiones', $tesi->dimensiones) }}" disabled />
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label for="manexo" class="form-label la">Material Anexo:</label>
                        <textarea class="form-control shadow-sm" type="text" name="matAnexo" id="matAnexo"
                            value="{{ old('matAnexo', $tesi->matAnexo) }}" disabled>
                            </textarea>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">
                        <br>
                        AREA DE DESCRIPCION DE TESIS
                        <hr />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label for="descriptores" class="form-label la">Descripcion o Temario:</label>
                        <textarea class="form-control shadow-sm" type="text" name="dscTemario"
                            value="{{ old('dscTemario', $tesi->dscTemario) }}" disabled>
                            </textarea>
                    </div>

                </div>
                <br />
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
  
@stop
