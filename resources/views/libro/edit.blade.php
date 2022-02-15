@extends('adminlte::page') @section('title', 'Registrar Libro')
@section('content_header')
<a href="{{route('libro.index')}}" class="btn btn-sm float-right">
    <button>VOlver</button></a
>
<h1 class="titulo">ACTUALIZAR LIBRO</h1>
@stop @section('content')

<div class="card shadow formulario">
    <div class="card-body">
        <form action="{{route('libro.update', [$libro->id])}}" method="POST" enctype="multipart/form-data">
            @csrf 
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">AREA DE PORTADA</div>
                <div class="col-xs-12 col-sm-12 col-md-12 img">
                    <label for="perfil" class="form-label la">Portada del Libro:</label>
                    <img class="imagen" id="picture" src="{{asset('imgs/libros/'. $libro->nombre_portada)}}"
                    alt="">
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 imgUser">
                    <input type="file" id="file"  name="image" accept="image/*" value="{{old('image')}}"/>
                </div>
                @error('file')
                    <div style="text-align: center">
                        <span class="text-danger">{{ $message }}</span>
                    </div>
                @enderror
                
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <label for="signatura_topograficv a" class="form-label la">Signatura Topografica</label>
                    <textarea name="signatura_topografica" class="form-control shadow-sm" type="text" id="signatura_topografica">{{$libro->signatura_topografica}}</textarea>

                    @error('signatura_topografica')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                
                

                <div
                    class="col-xs-12 col-sm-12 col-md-12 info"
                    style="text-align: center"
                >
                    AREA DE TITULO
                    <hr />
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <label for="titulo" class="form-label la">Titulo:</label>
                    <input
                        name="titulo"
                        type="text"
                        class="form-control shadow-sm"
                        id="titulo"
                        for="titulo"
                        value="{{$libro->titulo}}"
                        
                    />
                    @error('titulo')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <label for="subtitulo" class="form-label la">Subtitulo:</label>
                    <input name="subtitulo" type="text" class="form-control
                    shadow-sm" id="subtitulo" for="subtitulo" value="{{$libro->subtitulo}}" > 
                    
                    @error('subtitulo')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <label for="idioma" class="form-label la">Idioma:</label>
                    <input name="idioma" type="text" class="form-control
                    shadow-sm" id=""for=" idioma" value="{{$libro->idioma}}" >
                    <br/>
                    @error('idioma')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">
                    AREA DE AUTOR Y CATEGORIZACION
                    <hr />
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <label for="autor" class="form-label la">Autor:</label>

                    <select class="form-select form-select-lg mb-3 js-example-basic-multiple " name="autores[]" multiple="multiple" placeholder="seleccione" value="">
                        @foreach ($autores as $autor )
                        
                        <option value="{{$autor->nombre}}">{{$autor->nombre}}</option>
                        
                        @endforeach
                    </select>


                    <br />
                    @error('autor')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <label for="autor" class="form-label la">Categoría:</label>

                    <select class="form-select form-select-lg mb-3 js-example-basic-multiple " name="categorias[]" multiple="multiple">
                        @foreach ($categorias as $categoria )
                        
                        <option value="{{$categoria->nombre}}">{{$categoria->nombre}}</option>
                        
                        @endforeach
                        
                    </select>


                    <br />
                    @error('autor')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
               
                <div

                    class="col-xs-12 col-sm-12 col-md-12 info"
                    style="text-align: center"
                >
                <br>
                    AREA DE EDICION
                    <hr />
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 mt-3">
                    <label for="lugar" class="form-label la">Lugar:</label>
                    <input
                        name="lugar"
                        type="text"
                        class="form-control shadow-sm"
                        id="lugar"
                        for="lugar"
                        value="{{$libro->lugar}}"
                         />
                    @error('Lugar')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <label for="editor" class="form-label la"
                        >Editor o Impresor:</label
                    >
                    <textarea
                        class="form-control shadow-sm"
                        type="text"
                        name="editor"
                        id="editor">{{$libro->editor}}</textarea>

                    @error('editor')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2 mt-3">
                    <label for="anio" class="form-label la">Año:</label>
                    <input
                        name="anio"
                        type="number"
                        class="form-control shadow-sm"
                        id="anio"
                        for="anio"
                        value="{{$libro->anio}}"
                    />
                    @error('anio')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 mt-3">
                    <label for="pais" class="form-label la">Pais:</label>
                    <input
                        name="pais"
                        type="text"
                        class="form-control shadow-sm"
                        id="pais"
                        for="pais"
                        value="{{$libro->pais}}"
                     />
                    @error('pais')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 mt-8">
                    <label for="editorial" class="form-label la">Editorial:</label >

                        <input
                        name="editorial"
                        type="text"
                        class="form-control shadow-sm"
                        id="editorial"
                        for="editorial"
                        value="{{$libro->editorial}}"/>

                    @error('editorial')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                    <label for="edicion" class="form-label la">Edicion:</label>
                    <input
                        name="edicion"
                        type="text"
                        class="form-control shadow-sm"
                        id="edicion"
                        for="edicion"
                        value="{{$libro->edicion}}"
                        />
                    @error('edicion')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <label for="isbn" class="form-label la">ISBN:</label>
                    
                    <textarea
                        class="form-control shadow-sm"
                        type="text"
                        name="isbn"
                        id="isbn">{{$libro->isbn}}</textarea>
                    <br />
                    @error('isbn')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div
                    class="col-xs-12 col-sm-12 col-md-12 info"
                    style="text-align: center"
                >
                    AREA DE DESCRIPCION FISICA DEL LIBRO
                    <hr />
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                    <label for="cantidad_paginas" class="form-label la"
                        >Cantidad de Paginas:</label
                    >
                    <input
                        name="cantidad_paginas"
                        type="text"
                        class="form-control shadow-sm"
                        id="cantidad_paginas"
                        for="cantidad_paginas"
                        value="{{$libro->cantidad_paginas}}"
                        
                    />
                    @error('cantidad_paginas')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 mt-3">
                    <label for="dimensiones" class="form-label la"
                        >Dimensiones:</label
                    >
                    <input
                        name="dimensiones"
                        type="text"
                        class="form-control shadow-sm"
                        id="dimensiones"
                        for="dimensiones"
                        value="{{$libro->dimensiones}}"
                        
                    />
                    @error('dimensiones')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                    <label for="otras_caracteristicas" class="form-label la"
                        >Otras Caracteristicas:</label
                    >
                    <input
                        name="otras_caracteristicas"
                        type="text"
                        class="form-control shadow-sm"
                        id="otras_caracteristicas"
                        for="otras_caracteristicas"
                        value="{{$libro->otras_caracteristicas}}"
                        
                    />
                    @error('otras_caracteristicas')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <label for="material_anexo" class="form-label la"
                        >Material Anexo:</label
                    >
                    <textarea
                        class="form-control shadow-sm"
                        type="text"
                        name="material_anexo"
                        id="material_anexo">{{$libro->material_anexo}}</textarea>

                    @error('material_anexo')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div
                    class="col-xs-12 col-sm-12 col-md-12 info"
                    style="text-align: center"
                >
                    AREA DE DESCRIPCION DEL LIBRO
                    <hr />
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="descripcion" class="form-label la"
                        >Descripcion o Temario:</label
                    >
                    <textarea
                        class="form-control shadow-sm"
                        type="text"
                        name="descripcion"  >{{$libro->descripcion}}</textarea>

                    @error('descripcion')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

            </div>
            <br />
            <div class="w-100">
                <div class="center">
                    <button type="submit">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop @section('css')
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
/>
<link href="{{asset('librerias/select2/select2.min.css')}}" rel="stylesheet"/>



<link
    rel="stylesheet"
    type="text/css"
    href="https://unpkg.com/file-upload-with-preview@4.1.0/dist/file-upload-with-preview.min.css"
/>

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
<script src="{{asset('librerias/select2/select2.min.js')}}"></script>

<script>
    /* script para el select 2 */
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>


<script>
     $(function () {
        var timeout = 2000;
        $(".alert").delay(timeout).fadeOut(400);
    });

    document.getElementById("file").addEventListener("change", cambiarImagen);

    function cambiarImagen(event) {
        var file = event.target.files[0];

        var reader = new FileReader();
        reader.onload = (event) => {
            document
                .getElementById("picture")
                .setAttribute("src", event.target.result);
        };
        reader.readAsDataURL(file);
    }
</script>

<script>
    /* script para el select 2 */
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2({
        placeholder:"Seleccione",
        allowing:true,
        tags: true,
        tokenSeparators: [','],


    });
});
</script>

@stop
