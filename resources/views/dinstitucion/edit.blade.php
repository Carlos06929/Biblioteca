@extends('adminlte::page')

@section('title', 'Editar/Institucion')

@section('content_header')
<button ><a href="{{route('institucion')}}">Atras</a></button>
@stop

@section('content')

    <div class="card">
    {{-- <div class="card-header">


        </div> --}}
        <div class="card-body"  >

            <form class="row g-3" action="{{route('institucion.update')}}"  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{--  @foreach ($instituciones as $institucion)

                @endforeach --}}


                <input type="hidden" value="{{$instituciones->id}}" name="id" >

                <div class="col-md-6">
                    <label  class="form-label">Nombre de la Biblioteca</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$instituciones->nombre}}">
                  </div>



                  <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Institución</label>
                      <input type="text" class="form-control" id="NombInst"  name="NombInst"  value="{{$instituciones->NombInst}}">
                    </div>
                  <div class="col-md-6">
                      <label  class="form-label">Dirección</label>
                      <input type="text" class="form-control" id="direccion"  name="direccion" value="{{$instituciones->direccion}}" >
                    </div>

                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Teléfono</label>
                      <input type="text" class="form-control" id="telefono"  name="telefono" value="{{$instituciones->telefono}}">
                    </div>
                  <div class="col-md-3">
                    <label  class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad"  name="ciudad" value="{{$instituciones->ciudad}}">
                  </div>

                  <div class="col-md-3">
                      <label  class="form-label">Url</label>
                      <input type="text" class="form-control" id="url"  name="url" value="{{$instituciones->url}}">
                    </div>

                  <div class="col-md-2">
                      <label  class="form-label">País</label>
                      <input type="text" class="form-control" id="pais" name="pais"  value="{{$instituciones->pais}}">
                    </div>

                    <div class="col-md-2">
                      <label  class="form-label">Correo</label>
                      <input type="email" class="form-control" id="correo" name="correo"  value="{{$instituciones->correo}}">
                    </div>

                    <div class="col-md-3 ">
                      <label  class="form-label">Cargo</label>
                      <input type="text" class="form-control" id="cargo" name="cargo"  value="{{$instituciones->cargo}}">
                    </div>
                    <div class="col-md-3 ">
                      <label  class="form-label">Nombre del/la Bibliotecario/a</label>
                      <input type="text" class="form-control" id="encargado" name="encargado"  value="{{$instituciones->encargado}}">
                    </div>

                   <div class="col-md-3">

                    <label

                        for="descripcion"
                        class="block text-gray-700 text-sm mb-2"
                        >Imagen:

                    </label>
                    <div id="dropzoneJ" class="dropzone rounded bg-gray-100">
                        <input type="hidden" name="imagen" id="imagen"  value="{{$instituciones->logo}}" >
                        <p id="error"></p>

                </div>

                <button type="submit" onclick="return toastr.success('Se a actualizado correctamente','Datos Institucionales')">Guardar</button>






              </form>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css" integrity="sha512-0ns35ZLjozd6e3fJtuze7XJCQXMWmb4kPRbb+H/hacbqu6XfIX0ZRGt6SrmNmv5btrBpbzfdISSd8BAsXJ4t1Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="{{asset('librerias/toastr/toastr.scss')}}" rel="stylesheet"/>

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

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js" integrity="sha512-Mn7ASMLjh+iTYruSWoq2nhoLJ/xcaCbCzFs0ZrltJn7ksDBx+e7r5TS7Ce5WH02jDr0w5CmGgklFoP9pejfCNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- toastr --}}
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="{{asset('librerias/toastr/toastr.js')}}"></script>

<script>
    toastr.options = {
  "closeButton": null,
  "debug": true,
  "newestOnTop": true,
  "progressBar": false,
  "positionClass": "toast-top-full-width",
  "preventDuplicates": false,
  "onclick": true,
  "showDuration": "1500",
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
    Dropzone.autoDiscover = false;
    // document.addEventListener('DOMContentLoaded',() => {
        window.onload = function() {
        //Dropzone para subir imagen/archivos
        const dropzoneJ= new Dropzone('#dropzoneJ',{
            url:"/dinstitucion/imagen",
            dictDefaultMessage:'Subir imagen aqui',
            acceptedFiles:".png,.jpg,.jpeg",/* configurando el formato a subir */
            addRemoveLinks:true,
            dictRemoveFile:'Eliminar Archivo',
            maxFiles:1, /* cantidad de archivos */
            headers:{
                'X-CSRF-TOKEN':"{{csrf_token()}}"
            },
            init: function(){
                if(document.querySelector('#imagen').value.trim()){
                    let imagenPublicada={};
                    imagenPublicada.size=1234;
                    imagenPublicada.name=document.querySelector('#imagen').value;
                    imagenPublicada.nombreServidor=document.querySelector('#imagen').value

                    this.options.addedfile.call(this,imagenPublicada);
                    this.options.thumbnail.call(this,imagenPublicada,`/storage/logos/${imagenPublicada.name}`);

                    imagenPublicada.previewElement.classList.add('dz-sucess');
                    imagenPublicada.previewElement.classList.add('dz-complete');


                }

            },
            success: function (file,response) {
                // console.log(response);
                document.querySelector('#error').textContent='';

                document.querySelector('#imagen').value=response.correcto;//guarda la imagen en la base de datos

                file.nombreServidor=response.correcto;   //añadir el objeto de archivo o imagen el nombre del servidor del
            },

            maxfilesexceeded: function(file) { /* evento para controlar la cantidad de archivos */
              //   console.log'muchos archivos';
              if(this.files[1] != null){
                  this.removeFile(this.files[0]);//elimina el archivo anterior
                  this.addFile(file);//agregar el nuevo archivo
              }
            },
            removedfile: function(file,response){

             file.previewElement.parentNode.removeChild(file.previewElement);

               params={
                    imagen: file.nombreServidor
                }

             axios.POST('/dinstitucion/borrarimagen', params)
                     .then(respuesta => console.log(respuesta))

            }

    });
  }
</script>


@stop



