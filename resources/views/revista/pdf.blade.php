
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>REVISTA</title>


    <style>

       .coli{
           color: #000;
           text-align: center;
       }
       #miTabla td, #miTabla th {

            padding: 2px;
            text-align:center;


       }
       #miTabla td{
           font-size: 10px;
           border-bottom: 1px solid rgba(243, 207, 207, 0.918);



       }
       #miTabla th {
          border-bottom: 1px solid #000;
       }
       footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height:1%;
            color: #000;
            text-align: center;
            line-height: 10px;
        }
         .page {
            color:#000;
            font-size: 10px;

        }
        header{
            display: inline-block;
            top: 50%;
        }

       </style>

</head>
<body>

    <header>
        <div class="image-fuild">
            <img   id="predeterminada" src="{{public_path('storage/logos/1643785562.png')}}" sizes="40" height="40" width="40"alt="" >
        </div>
        <span>Centro de Documentacion Jose Mirtembaum</span><br>
        <span ><b> U.A.G.R.M.</b></span>

    </header>
    <div class= "bg-white">
        <table id="miTabla" class="ui celled table responsive nowrap unstackable" >
            <thead class="coli">
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
    </div>


<footer>
    <hr>
    {{-- <div>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;</div> --}}
    <span style="font-size: 10px">
        Entre 2º y 3º anillo de la avenida Bush
    </span>
    <span style="font-size: 10px">-&nbsp;Biblioteca Especializada en Sociologia
    </span>


    <span style="font-size: 10px;">
        <br> Santa Cruz - Bolivia
    </span>

</footer>

<script type="text/php">
    if ( isset($pdf) ) {
        $pdf->page_script('
            $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
            $pdf->text(520, 760, "Pág $PAGE_NUM de $PAGE_COUNT", $font, 10);
        ');
    }
    </script>

</body>
</html>
