@extends('adminlte::page') @section('title', 'Registrar revista')
@section('content_header')
<div>
    <a href="{{route('revista.index')}}" class="btn btn-sm float-right"><button class="volver">Volver</button></a>
    <h1 class="titulo">LISTA DE EJEMPLARES</h1>
</div>

@stop @section('content')

<div class="card shadow formulario">
    <div class="card-header">
       <h3>Titulo del revista : {{$revista->titulo}}</h3>
    </div>
    <div class="card-header border-warning" style="background-color: #fbaf32">

        <div class="fa-pull-left" style="margin-left: 5px;">
            <a href="#" class="btn btn-sm btn-light">
                 <span><i class="fa fa-id-badge" style="color: #fbaf32"></i> </span>
               &nbsp;Imprimir Etiquetas
            </a>
         </div>
         
        <div >
            <a href="{{route('revista.addEjemplar',[$revista->id])}}" class="btn btn-sm btn-light float-right">
                <span>
                    <i class="fa fa-plus" style="color: #fbaf32"></i>
                </span>
            &nbsp; Agregar Ejemplar</a>
        </div>

       
         
 
 
     </div>
 
    

    

    @foreach ($ejemplares as $ejemplar)
        <div class="card">
           
                <div class="card-body">
                    <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <label for="ejemplar" class="form-label la">Ejemplar</label>
                        <input name="ejemplar" class="form-control shadow-sm" type="text" id="ejemplar" value="{{$ejemplar->ejemplar}}" readonly>
                        
                    </div>
                    <div class="col-xs-12 col-md-3">
                            <label for="estado" class="form-label la">Estado del ejemplar: </label>
                                <select name="estado" id="estado" class="form-control shadow-sm" aria-readonly="true" disabled>
                                        <option value="1" {{($ejemplar ->estado == '1' ? 'selected' : '' )}}> Disponible</option>
                                        <option value="3" {{($ejemplar->estado == '3' ? 'selected' : '' )}}> Prestado</option>
                                        <option value="2"{{($ejemplar->estado == '2' ? 'selected' : '' )}}> Perdido</option>
                                </select>

                    </div>
                    @php
                        $codigoConCeros=str_pad($ejemplar->id,8,"0",STR_PAD_LEFT);  
                    @endphp
                    <div class="col-xs-12 col-md-3" >
                        <label for="numero_inventario" class="form-label la">
                            Codigo de Barras: {!!DNS1D::getBarcodeHTML($codigoConCeros, 'C39',1,65);!!}
                        </label>
                    </div>
                    <div class="col-xs-12 col-md-3" style="padding-left: 40px">
                        <form action="{{ route('revista.delEjemplar') }}" method="post">
                            @csrf
                            <input type="hidden" name="id_revista" value="{{$revista->id}}">
                            <input type="hidden" name="id_ejemplar" value="{{$ejemplar->id}}">
                            <label for="acciones" class="form-label la">Acciones: </label>
                            <br>
                            <a href="#" class="btn btn-warning btn-sm fas fa-bookmark"></a>
                            <button class="btn btn-danger btn-sm fas fa-trash-alt"
                                name="acciones" onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar"></button>

                        </form>
                        <br>
                        
                    </div>
                </div>
            </div> 
            
        </div>    
    @endforeach
    
    
</div>
<br>
@stop @section('css')

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

    .volver {
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

    .volver:hover {
        background-color: #fbaf32;
        box-shadow: 0px 15px 20px #fbaf32;
        color: #fff;
        transform: translateY(-7px);
    }

    .volver:active {
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
        placeholder:"-- Seleccione --",
        allowing:true,
        tags: true,
        tokenSeparators: [','],


    });
});
</script>

<script>
     $(function () {
        var timeout = 2000;
        $(".alert").delay(timeout).fadeOut(400);
    });


</script>

@stop
