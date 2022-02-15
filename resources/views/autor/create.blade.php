

    <div class="modal" id="ModalCrear" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form role="form" action="{{route('autor.store')}}" method="post" enctype="multipart/form-data" id="form_create">
                  @csrf
                  @method('POST')
                <!-- Modal Header -->
                <div class="modal-header" style="background:#fbaf32">
                    <h4 class="modal-title">Agregar Autor/Institucion</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>

                <!-- Modal body -->

                 <div class="modal-body">
                    <div class="col-md-12">
                        <div class="col-md-3">

                        </div>
                    </div>

                    <div class="row">

                        <div class="col ">
                            <label class="form-label" style="color: #fbaf32">Nombre:</label>
                            <input type="text" class="form-control form-control-sm @error('nombre') is-invalid @enderror" id="nombre"  name="nombre" placeholder="Ingresa el nombre" required autofocus >

                            @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ 'El nombre es obligatorio' }}</strong>
                        </span>

                       @enderror

                        </div>
                    </div>

                </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-warning"
                    onclick="(document.getElementById('nombre').value==='') ? (toastr.error('El campo es obligatorio','Autor')) : (toastr.success('Se agregó correctamente','Autor'))">Guardar</button>

                </div>
            </form>
            </div>
        </div>
    </div>

    @section('css')
    <link rel="stylesheet" href="{{ asset('librerias/DatatablesCss/bootstrap.css') }}">
    <link href="{{asset('librerias/toastr/toastr.scss')}}" rel="stylesheet"/>

    @stop
    @section('js')
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
      "hideDuration": "100",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
</script>


@stop
