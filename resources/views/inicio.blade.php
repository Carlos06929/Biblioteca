<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Biblioteca Sociología</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <!-- fin de los script -->

  <!-- Favicons -->
  <link href="img/logoh.png" rel="icon">
  <link href="img/logoh.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  {{-- <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
  {{-- <link rel="stylesheet" href="{{asset('librerias/lightbox/lightbox.min.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}">


  <!-- Libraries CSS Files -->
  {{-- <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}">

  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">




  <!-- copia del slider moderno -->

  <!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">


<!-- Prettyphoto-->
<link rel="stylesheet" href="css/prettyphoto.css">

<!--Master slider-->
<link href="master-slider/style/masterslider.css" rel="stylesheet">
<!-- <link href="master-slider/skins/default/styleC.css" rel="stylesheet"> -->

<!-- Owl Carousel -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">

<!-- Stylesheet -->
<link rel="stylesheet" type="text/css"  href="css/styleC.css">

<!-- Responsive -->
<link rel="stylesheet" type="text/css"  href="css/responsive.css">

<!-- Animate.min -->
<!-- <link rel="stylesheet" type="text/css"  href="css/animate.min.css"> -->


   <!-- new portal -->
<!--   Google Font  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

<!-- CSS libbraries -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="lib/flaticonh/font/flaticon.css" rel="stylesheet">
<!-- portada -->
<link href="lib/animateh/animateh.min.css" rel="stylesheet">
<link href="lib/owlcarouselh/assets/owl.carouselh.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
<!-- Template Stylesheet -->
<link href="css/styleH.css" rel="stylesheet">


<!-- end new portal -->

</head>

<body>

<!--preloader start-->
<div id="preloader">
  <div id="loader"></div>
</div>
<!--preloader end-->

  <!--==========================
  Header
  ============================-->
     <!-- Nav Bar Start -->
     <div class="navbar navbar-expand-lg bg-light navbar-light">
      <div class="container-fluid">
          <!-- <a href="index.html" class="navbar-brand">U.A.G.R.M<span>|F.H</span></a> -->
          <a href="index.html" class="navbar-brand" style="width: auto;padding-top: 12px;" ><img src="img/logo.png"></a>
          <!-- <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
          </button> -->
          <div  class="main-nav float-right d-none d-lg-block"  >
              <div class="navbar-nav ml-auto" style="height: 50px;">
                  <a href="#intro" class="nav-item nav-link active">Inicio</a>
                  <a href="#about" class="nav-item nav-link">Presentacion</a>
                  <a href="#services" class="nav-item nav-link">Eventos</a>
                  <a href="#team" class="nav-item nav-link">Libros</a>
                  <a href="#team1" class="nav-item nav-link">Autoridades</a>
                  <a href="#contact" class="nav-item nav-link">Contacto</a>
                  <a href="{{route('login')}}"  class="nav-item  nav-link ">Login</a>


              </div>
          </div>
      </div>
  </div>
  <!-- Nav Bar End -->


  <!-- Carousel Start -->


  <div class="carousel">
      <div class="container-fluid">
          <div class="owl-carousel">
              <div class="carousel-item">
                  <div class="carousel-img">
                      <img src="img/portada1.jpg" alt="Image">
                  </div>
                  <div class="carousel-text">
                      <h1>Bienv<span>enid@s</span></h1>
                      {{-- <p>
                          Lorem ipsum dolor sit amet elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat at lectus in malesuada
                      </p> --}}
                      <div class="carousel-btn">
                          <a class="btn custom-btn" href="{{route('busqueda')}}">Buscar Catalogo</a>
                          <!-- <a class="btn custom-btn" href="">Catalogo</a> -->
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="carousel-img">
                      <img src="img/portada3.jpg" alt="Image">
                  </div>
                  <div class="carousel-text">
                      <h1>Centro Documentacional De <span>Sociología</span><br><span>Dr.Jose Mirtenbaum</span></h1>

                      <div class="carousel-btn">
                          <a class="btn custom-btn" href="{{route('busqueda')}}">Buscar Catalogo</a>
                          <!-- <a class="btn custom-btn" href="">Catalogo</a> -->
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="carousel-img">
                      <img src="img/portada2.jpg" alt="Image">
                  </div>
                  <div class="carousel-text">
                      <h1>Biblioteca<span> Especializada</span><br>En Sociología</h1>
                     {{--  <p>
                          Sed ultrices, est eget feugiat accumsan, dui nibh egestas tortor, ut rhoncus nibh ligula euismod quam. Proin pellentesque odio
                      </p> --}}
                      <div class="carousel-btn">
                          <a class="btn custom-btn" href="{{route('busqueda')}}">Buscar Catalogo</a>
                          <!-- <a class="btn custom-btn" href="">Catalogo</a> -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Carousel End -->



    <!--==========================
      About Us Section
    ============================-->
    <section id="about" style="background-color:rgb(255, 255, 255)" >
      <div class="container">

        <header class="section-header">
          <h3>RESEÑA HISTÓRICA</h3>
          <p>La carrera de Sociología fue creada considerando los antecedentes descritos en la resolución Rectoral,
            No 36/92, a nivel Licenciatura con el plan "0" en 1998 se adopta el plan 147-1 el 2008 el 147-2 y en la
            actualidad se trabaja el 147-3.</p>
        </header>

        <div class="row about-container" style="background-color: transparent">

          <div class="col-lg-6 content order-lg-1 order-2">

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">MISIÓN</a></h4>
              <p class="description"> Es misión de la carrera de sociología contribuir al desarrollo de la sociedad formando sociólogos/as con pensamiento crítico,
                responsabilidad ,espíritu emprendedor y pertinencia social, capaces de trabajar en equipo, enriqueciendo el conocimiento
                sociológico teórico .práctico, e interviniendo participativa y creativamente en la elaboración de soluciones de problemas
                sociales de problemas sociales de las comunidades humanas que interactúan con su medio natural.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">VISIÓN</a></h4>
              <p class="description">La carrera de Sociológia de la UAGRM es una comunidad académica con identidad propia,reconocida internacionalmente, que mejora
                continuamente su interacción con el medio social, generación de conocimientos sociológicos y la formación de profesionales con calidad
                académica, capaces de analizar e interpretar la realidad social y facilitae la solución de problemas sociales
                para mejorar la calidad de vida de las personas.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">OBJETIVO</a></h4>
              <p class="description"> Promover y facilitar la colaboración en proyecto comunes de investigación y  desarrollo.
                Difusión de información de interés relacionada (Congresos,jornadas, seminarios, convocatorias, etc.). <br>
                Ofecer un punto de encuentro, información y coordinación para todos los estudiantes.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Servicios.</h4>
            <ul>
              <li> <h5>Catálogos virtual</h5></li>
              <li><h5>Consulta de libros existentes en la biblioteca</h5></li>
              <li><h5>Colección de Tesis</h5></li>
              <li><h5>Trabajos de Investigación</h5></li>
              <li><h5>Ejemplares con CD</h5> </li>
              <li><h5>Revistas</h5> </li>
            </ul>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <!--<h4>Sistema de consultas en línea</h4>-->
            <ul>
                <li> <h3>Sistema de consultas en línea:</h3><p > <h5> Para realizar busquedas en nuestro cátalogo y con la posibilidad de reservar obteniendo los datos del libro para el prestamo en sala o a domicilio. </h5></p></li>
                <li><h3>Sistema Central de Aire Acondicionado:</h3><p> <h5> Para bridar comodidad a todos las personas dentro del ambiente de la biblioteca.</h5></p></li>
              </ul>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
                                       {{-- AQUI EMPIEZAN LOS EVENTOS --}}





    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Eventos</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </header>

        <div class="row">

              @foreach ($eventos as $evento)

              <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                  <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                  <h4 class="title text-uppercase"><a href="">{{$evento->nombre}}</a></h4>
                  <p class="description">{{$evento->descripcion}}</p>
                  <p class="description"><b>Inicio:{{$evento->fecha_inicio}} Hora:{{$evento->hora_inicio}}</b></p>
                </div>
              </div>
          @endforeach

          {{-- <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div> --}}

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
            <h3>¿Como prestarme un Libro?</h3>
            <p>Aquí te guiamos de como puedes adquirir el préstamos de libros</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-language"></i>
              <div class="card-body">
                <h5 class="card-title">Paso 1</h5>
                <p class="card-text">Se debe ingresar a la sección de Buscar Catálogo (Click) y esta  lo redirecionará a una nueva sección de búsqueda </p>
                <a href="#inicio" class="readmore">Ir a Buscar Catálogo</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-language"></i>
              <div class="card-body">
                <h5 class="card-title">Paso 2</h5>
                <p class="card-text" >Estando en la Sección Busquéda llenar los campos correspondientes referente al material que necesite sea Revista, Libros, Tesis etc. <br>
                   ¡No es necesario que todo los campos se han rellenados!</p>
                   <a href="#inicio" class="readmore">Ir a Buscar Catálogo</a>

              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title">Paso 3</h5>
                <p class="card-text">Si el material que búscaba se encuentra debe a personarse a las instalaciones de la biblioteca y solicitar el préstamo.</p>
                <a href="#inicio" class="readmore">Ir a Buscar Catálogo</a>

              </div>
            </div>
          </div>

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Libros</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Revistas</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Periodicos</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Eventos</p>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Portfolio Section
    ============================-->
    <section >
    <!-- Screen  -->

<div id="team" class="team">
  <div class="container">
    <div class="section-title  center">
      <h2>LIBROS<br>
        <strong>QUE TE PUEDEN INTERESAR </strong></h2>
      {{-- <hr > --}}
     {{--  <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. <strong>Lorem Ipsum has been the industry's standard dummy </strong>text
        ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. </p> --}}
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="ms-staff-carousel">
          <div class="master-slider" id="teamslider">
            <div class="ms-slide"> <img  data-src="img/app-screen/01.jpg" alt=""/>
              <div class="ms-info text-center"> </div>
            </div>
            <!--SLIDE TEAM-->
            <div class="ms-slide"> <img  data-src="img/app-screen/02.jpg" alt=""/>
              <div class="ms-info text-center"> </div>
            </div>
            <!--SLIDE TEAM-->
            <div class="ms-slide"> <img  data-src="img/app-screen/03.jpg" alt=""/>
              <div class="ms-info text-center"> </div>
            </div>
            <!--SLIDE TEAM-->
            <div class="ms-slide"> <img  data-src="img/app-screen/04.jpg" alt=""/>
              <div class="ms-info text-center"> </div>
            </div>
            <!--SLIDE TEAM-->
            <div class="ms-slide"> <img  data-src="img/app-screen/05.jpg" alt=""/>
              <div class="ms-info text-center"> </div>
            </div>
            <!--SLIDE TEAM-->
            <div class="ms-slide"> <img  data-src="img/app-screen/06.jpg" alt=""/>
              <div class="ms-info text-center"> </div>
            </div>
            <!--SLIDE TEAM-->
            <!--SLIDE TEAM-->

            <!--SLIDE TEAM-->

          </div>
          <!--- END MASTER SLIDER -->
          <div class="ms-staff-info" id="staff-info"> </div>
        </div>
        <!--- END MS STAFF CAROUSEL -->
      </div>
      <!--- END COL -->
    </div>
    <!--- END ROW -->
  </div>
  <!--- END CONTAINER -->
</div>

<!-- END Screen -->
    </section> <!-- end portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>AUTORES DE LA SOCIOLOGíA</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">

              <div class="testimonial-item">
                <img src="img/autor1.jpg" class="testimonial-img" alt="">
                <h3>Karl Marx</h3>
                <h3>1864-1920</h3>
                <h4>Economista &amp; Sociologo</h4>
                <p>
                  No es la conciencia del hombre la que determina su ser, sino, por el contrario, el ser social es lo que determina su conciencia
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/autor2.jpg" class="testimonial-img" alt="">
                <h3>Emile Durkheim </h3>
                <h3>1858-1917</h3>
                <h4>Sociólogo &amp; pedagogo  &amp;  antropólogo</h4>
                <p>
                  Francés, uno de los pioneros en el desarrollo de la moderna sociología.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/autor3.jpg" class="testimonial-img" alt="">
                <h3>Max Weber</h3>
                <h3>1864-1920</h3>
                <h4>Sociólogo </h4>
                <p>
                    Alemán,Para Weber las, estructuras económicas y la lucha de clases tienen menos importancia que otros factores de naturaleza cultural,como la mentalidad religiosa o filosófica o incluso la ética imperante.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/autor4.jpg" class="testimonial-img" alt="">
                <h3>Robert Merton</h3>
                <h3>1910-2003 Merton</h3>
                <h4>Sociólogo</h4>
                <p>
                  EstadoUnidense,sus investigaciones sobre la sociólogia del conocimiento y la teoría sociológico y sus análisis basados en un método
                  funcional-estructural,según el cual los hechos sociales y sus funciones deben ser considerados como subsitemas del conjunto social, lo convirtieron en una de las figuras más relevantes de la
                  sociología anglosajona.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/autor5.jpg" class="testimonial-img" alt="">
                <h3> Talcott Parsons</h3>
                <h3> 1902-1977 </h3>
                <h4>Sociólogo</h4>
                <p>
                  EstadoUnidense,cuya contribución más notable fue la difusión del concepto de "Acción Social"
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team1" >
      <div class="container" >
        <div class="section-header">
          <h3>AUTORIDADES</h3>
          <p>De la facultad de Humanidades.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-6.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                    <h4>MsC. Marcelo Javier Sossa Hoyos</h4>
                    <span>Decano F.H.</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-6.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                    <h4>Msc. Roxana Michel Gutiérrez</h4>
                    <span>Vicedecana F.H.</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-6.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                    <h4>MsC. Roberto Vargas Gamez</h4>
                    <span>Jefe de carrera</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-6.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                    <h4>Elvis Noel Llanque</h4>
                    <span>Bibliotecaria</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>




        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">

      <div class="container">

        <div class="section-header">
            <h3>Recursos Web</h3>
            <p>Aquí Páginas de interes sociologico.</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                  <a href="https://cisolog.com/sociologia/sociologiaenlared/webs-sobre-sociologia/"><img src="img/clients/client-1.png" class="img-fluid" alt=""  ></a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                  <a href="http://www.lanic.utexas.edu/la/region/sociology/"><img src="img/clients/client-2.png" class="img-fluid" alt="" ></a>
                </div>
              </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://libreria.cis.es/"><img src="img/clients/client-3.png" class="img-fluid" alt="" ></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>contáctanos</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60789.72098481008!2d-63.23188143388828!3d-17.774884853496086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e7ab91e2fefb%3A0xacb3a1546c77032c!2sModulo%20263%20Facultad%20de%20Humanidades%20UAGRM!5e0!3m2!1ses!2sbo!4v1639720832781!5m2!1ses!2sbo" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info" >
                <i class="ion-ios-location-outline" style="color:#fdcb6e"></i>
                <p >Av.Busch,Cuidad Universitaria,Módulo 272(UV 32), Módulos 254 y 263.</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline" style="color:#fdcb6e"></i>
                <p>fachumanidades2015@gmail.com</p>
              </div>

              <div class="col-md-4 info">
                <i class="ion-ios-telephone-outline" style="color:#fdcb6e"></i>
                <p>(591)3-3522101</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Escribe tu mensaje aqui"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message" style="background-color:#fdcb6e">Enviar Mensaje</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>BIBLIOTECA SOCIOLOGíA</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

         <!--  <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Inicio</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div> -->

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactanos</h4>
            <p>
              Av. Busch, Cuidad Universitaria, Módulo 272 (UV 32), Módulos 254 y 263.<br>
              Santa Cruz<br>
              Bolivia<br>
              <strong>Telefono:</strong> (591)3-3522101 <br>
              (591) 3 - 3528846<br>
              <strong>Correo:</strong> fachumanidades2015@gmail.com<br>
            </p>

           <!--  <div class="social-links">
             <!--  <a href="#" class="twitter"><i class="far fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div> -->

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Mas sobre nosotros</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
           <!--  <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form> -->
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        {{-- ©Copyright FICCT Todos los derechos reservados. --}}

      </div>
      <div class="credits">
        FICCT
      </div>
    </div>
  </footer><!-- #footer -->






  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

<!-- script de new portal -->
 <!-- JavaScript libbraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
 <script src="lib/easingh/easingh.min.js"></script>
 <script src="lib/owlcarouselh/owl.carouselh.min.js"></script>
 <script src="lib/tempusdominus/js/moment.min.js"></script>
 <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

 <!-- Template Javascript -->
 <script src="js/mainh.js"></script>



  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>





  <!-- slider moderno -->
  <!-- js file  -->
<script src="js/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>

<!-- Prettyphoto JS  -->
<script src="js/jquery.prettyphoto.js"></script>



<!--load cubeportfolio -->
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/main-portfolio.js"></script>

<!--jqBootstrapValidation js file-->
<script src="js/jqBootstrapValidation.js"></script>

<!--contact js file-->
<!-- <script src="js/contact_me.js"></script>  -->

<!--owl.carouse js filel-->
<script src="js/owl.carousel.js"></script>

<!--wow js file-->
<script src="js/wow.min.js"></script>

<!--master slider-->
<script src="master-slider/js/masterslider.min.js"></script>

<!-- main js -->
<script src="js/mainC.js"></script>

<!-- script de new portal -->
 <!-- JavaScript libbraries -->

 <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>



</body>
</html>
