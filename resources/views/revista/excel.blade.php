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
        @foreach ($revistas as $revista)
            <tr>
                <td>{{$i++}}</td>
                    <td>{{$revista->signatura_topografica}}</td>
                    <td>{{$revista->titulo}}</td>
                    <td>{{$revista->subtitulo}}</td>
                    <td>{{$revista->autor}}</td>
                    <td>{{$revista->lugar}}</td>
                    <td>{{$revista->editorial}}</td>
                    <td>{{$revista->anio}}</td>
                    <td>{{$revista->cantidad_paginas}}</td>
                    <td>{{$revista->dimensiones}}</td>
                    <td>{{$revista->material_anexo}}</td>

            </tr>
            @endforeach
    </tbody>
</table>
