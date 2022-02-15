@extends('adminlte::page')

@section('title', 'Crear/Institucion')

@section('content_header')
@stop

@section('content')

    <div class="card">
    {{-- <div class="card-header">

        </div> --}}
        <div class="card-body">

            <form class="row g-3" action="{{route('institucion.store')}}"  method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="col-md-6">
                    <label  class="form-label">Nombre de la Biblioteca</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="">
                  </div>


                  <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Institucion</label>
                      <input type="text" class="form-control" id="NombInst"  name="NombInst"  value="">
                    </div>
                  <div class="col-md-6">
                      <label  class="form-label">Direccion</label>
                      <input type="text" class="form-control" id="direccion"  name="direccion" value="" >
                    </div>

                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Telefono</label>
                      <input type="text" class="form-control" id="telefono"  name="telefono" value="">
                    </div>
                  <div class="col-md-3">
                    <label  class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad"  name="ciudad" value="">
                  </div>

                  <div class="col-md-3">
                      <label  class="form-label">Url</label>
                      <input type="text" class="form-control" id="url"  name="url" value="">
                    </div>

                  <div class="col-md-2">
                      <label  class="form-label">Pais</label>
                      <input type="text" class="form-control" id="pais" name="pais"  value="">
                    </div>

                    <div class="col-md-2">
                      <label  class="form-label">Correo</label>
                      <input type="email" class="form-control" id="correo" name="correo"  value="">
                    </div>

                    <div class="col-md-3 ">
                      <label  class="form-label">Cargo</label>
                      <input type="text" class="form-control" id="cargo" name="cargo"  value="">
                    </div>
                    <div class="col-md-3 ">
                      <label  class="form-label">Nombre del/la Bibliotecario/a</label>
                      <input type="text" class="form-control" id="encargado" name="encargado"  value="">
                    </div>

                   <tbody>
                    <td>logo</td>

                       <td>
                        <div class="card-body">
                        <img src="img/portada2.jpg" class="img-fluid" style="width:30%;height: 90%; " id="imagenSeleccionada">
                    </div>

                       </td>
                   </tbody>

                      <button type="submit">Guardar</button>



              </form>
@stop

@section('css')

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
 background-color: #2EE59D;
 box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
 color: #fff;
 transform: translateY(-7px);
}

button:active {
 transform: translateY(-1px);
}

    </style>

@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script>
        $(document).ready(function(e) {
            $('#imagen').change(function(){
                let reader = new FileReader();
                reader.onload = (e)=>{
                    $('#imagenSeleccionada').attr('src',e.target.result);
                }
                reader.readAsDataURL(this.file[0]);

            });
        });


    </script>

@stop



