
    <!-- Button to Open the Modal -->
    <!-- The Modal -->

    <div class="modal" id="ModalCrear" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form role="form" action="{{route('categoria.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('POST')
                <!-- Modal Header -->
                <div class="modal-header" style="background:#fbaf32">
                    <h4 class="modal-title">Agregar Categoría</h4>
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
                            <label class="form-label" style="color: #fbaf32">Categoría:</label>
                            <input type="text" class="form-control input-lg" name="nombre" placeholder="Ingresa el nombre de la categoría" id="nombre" required autofocus>

                        </div>
                    </div>

                </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-warning" onclick=" (document.getElementById('nombre').value ==='') ? toastr.error('El nombre de la categoria es obligatorio','Categoría'):(toastr.success('Se agregó correctamente','Categoría')) ">Guardar</button>

                </div>
            </form>

            </div>
        </div>
    </div>

    @section('css')
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
