<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Carnet|Estudiante</title>
<style>
         body {
            display: flex;
            background-image: url("./img/CEAR.jpg") !important;
  /*Centrado en la página tanto vertical como horizontal.*/
            min-height: 100vh;
  /*background-size: cover;*/
            background-repeat: no-repeat;
            background-size: 50%;

        }
        aside{
            position: absolute;
            top: 12%;
            left: 36%;
            transform: translate(-50%, -50%);
        }
        section {
            padding: 14% 3% 10% 5%;
        }


    </style>
</head>

<body >
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                     <section>

                    <div class="col" >
                        <img src="{{public_path('images/'.$estudiante->image)}}" alt="" width="90" height="90" >
                    </section>
                    <aside>
                        <div class="col" >
                            <label for="" class="form-label" ><b>Registro:</b>&nbsp;{{ $estudiante->registro }}</label><br>
                            <label for="" class="form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>CI</b>: &nbsp;{{ $estudiante->ci }}</label><br>
                            <label for="" class="form-label"><b>Nombre(s):</b>&nbsp; {{ $estudiante->nombre }}</label><br>
                            <label class="form-label"><b>Apellidos:</b>&nbsp;{{ $estudiante->apellidos }}</label>

                        </div>
                    </aside>
                    </div>

                </div>
            </div>

        </div>
    </div>
</body>

</html>
