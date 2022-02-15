<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudiante</title>

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
                <th >NRO</th>
                <th >REGISTRO</th>
                <th >NOMBRE</th>
                <th >APELLIDO</th>
                <th >CORREO</th>
                <th >DOMICILIO</th>
                <th >TELÉFONO</th>


            </tr>

            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
            @foreach ($estudiantes as $estudiante)
            <tr>
                 <td>{{$i++}}</td>
                <td>{{$estudiante->registro}}</td>
                <td>{{$estudiante->nombre}}</td>
                <td>{{$estudiante->apellidos}}</td>
                <td>{{$estudiante->correo}}</td>
                <td>{{$estudiante->domicilio}}</td>
                <td>{{$estudiante->telefono}}</td>

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



