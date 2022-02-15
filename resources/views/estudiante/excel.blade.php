<table>
    <thead>
        <tr>
            
            <th >REGISTRO</th>
            <th >NOMBRE</th>
            <th >APELLIDO</th>
            <th >CORREO</th>
            <th >CIUDAD</th>
            <th >DOMICILIO</th>
            <th >TELÉFONO</th>

        </tr>
    </thead>

    <tbody>
        @foreach ($estudiantes as $estudiante)
            <tr>
                <td>{{$estudiante->registro}}</td>
                <td>{{$estudiante->nombre}}</td>
                <td>{{$estudiante->apellidos}}</td>
                <td>{{$estudiante->correo}}</td>
                <td>{{$estudiante->ciudad}}</td>
                <td>{{$estudiante->domicilio}}</td>            
                <td>{{$estudiante->telefono}}</td> 
               
            </tr>
            @endforeach
    </tbody>
</table>