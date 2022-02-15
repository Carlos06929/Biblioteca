<style>

</style>
<table>
    <thead>
        <tr>

            <th >Nº</th>
            <th >Sig&nbsp;Topografica</th>
            <th >Titulo</th>
            <th >Subtitulo</th>
            <th >Autor</th>
            <th >Lugar</th>
            <th >Edicion</th>
            <th >Año</th>
            <th >Paginas</th>
            <th >Dimension</th>
            <th >Material&nbsp;Anexo</th>

        </tr>
    </thead>

    <tbody>
        @php
        $i=1;

    @endphp
    @foreach ($libros as $libro)

    <tr>
        <td>{{$i++}}</td>
        <td>{{$libro->signatura_topografica}}</td>
        <td>{{$libro->titulo}}</td>
        <td>{{$libro->subtitulo}}</td>
        <td>{{$libro->autor}}</td>
        <td>{{$libro->lugar}}</td>
        <td>{{$libro->editorial}}</td>
        <td>{{$libro->anio}}</td>
        <td>{{$libro->cantidad_paginas}}</td>
        <td>{{$libro->dimensiones}}</td>
        <td>{{$libro->material_anexo}}</td>

            </tr>
            @endforeach
    </tbody>
</table>
