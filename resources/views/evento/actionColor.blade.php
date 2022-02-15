@if($estado == '1')
   <div class="badge bg-primary">ESPERANDO</div>
@endif
@if($estado == '2')
    <div class="badge bg-danger">FINALIZADO</div>
@endif
 @if($estado == '3')
    <div class="badge bg-success">INICIADO</div>
 @endif
