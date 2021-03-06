
<?php
  session_start();
  if(isset($_SESSION["status"])==false){
    session_destroy();
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>RENTCAR</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/sequence.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


</head>

<body>
  <header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="index.html"><img src="assets/img/logo.png" alt=""></a>
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown active">
                  <a href="index.html">Inicio</a>
                </li>
                <li class="dropdown">
                  <a href="#">Vehículos</a>
                  <ul class="dropdown-menu">
                    <li><a href="overview.html">Ver Todo</a></li>
                    <li><a href="scaffolding.html">Renta</a></li>
                    <li><a href="base-css.html">Venta</a></li>
                    <li class="dropdown"><a href="#">Agregar</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="InsertarAutoCliente.php">Agregar Auto Cliente</a></li>
                        <li><a href="InsertarAutoEmpresa.php">Agregar Auto Empresa</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#">Mantenimiento</a>
                  <ul class="dropdown-menu">
                    <li><a href="about.html">About us</a></li>
                    <li><a href="pricingtable.html">Pricing table</a></li>
                    <li><a href="fullwidth.html">Fullwidth</a></li>
                    <li><a href="404.html">404</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#">Sucursales</a>
                  <ul class="dropdown-menu">
                    <li><a href="blog_left_sidebar.html">Blog left sidebar</a></li>
                    <li><a href="blog_right_sidebar.html">Blog right sidebar</a></li>
                    <li><a href="post_left_sidebar.html">Post left sidebar</a></li>
                    <li><a href="post_right_sidebar.html">Post right sidebar</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#">Contactenos</a>
                  <ul class="dropdown-menu">
                    <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                    <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                    <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                    <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                  </ul>
                </li>
                
                <li>
                  <a href="contact.html">Contacto</a>
                </li>
                  <?php
                  if(isset($_SESSION["status"])==true){
                    $boton ="<li><a  id=\"btn_Logout\" name=\"btn_Logout\" href=\"includes/logout.php\">Cerrar Sesión</a></li>";
                    echo $boton;
                  }
                ?>
              </ul>

            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>
  <section id="intro">
    <div class="jumbotron masthead">
      <div class="container">
        <!-- slider navigation -->
        <div class="sequence-nav">
          <div class="prev">
            <span></span>
          </div>
          <div class="next">
            <span></span>
          </div>
        </div>
        <!-- end slider navigation -->
        <div class="row">
          <div class="span12">
            <div id="slider_holder">
              <div id="sequence">
                <ul>
                  <!-- Layer 1 -->
                  <li>
                    <div class="info animate-in">
                      <h2>Rent Car</h2>
                      <br>
                      <h3>Mas que una Coorporacion</h3>
                      <p>
                        Ven Atrevete a disfrutar una experiencia diferente.
                      </p>
                     
                    </div>
                    <img class="slider_img animate-in" src="assets/img/slides/sequence/img-1.png" alt="">
                  </li>
                  <!-- Layer 2 -->
                  <li>
                    <div class="info">
                      <h2>Lo Mejor lo encuentras</h2>
                      <br>
                      <h3>Siempre en RentCar</h3>
                      <p>
                        El Mejor servicio a nivel nacional. 
                      </p>
                      
                    </div>
                    <img class="slider_img" src="assets/img/slides/sequence/img-2.png" alt="">
                  </li>
                  <!-- Layer 3 -->
                  <li>
                    <div class="info">
                      <h2>Contamos con los mejores autos</h2>
                      <br>
                      <h3>Lo ultimo en tecnologia </h3>
                      <p>
                        Porque nosotros somos tu opcion atrevete 
                      </p>
                     
                    </div>
                    <img class="slider_img" src="assets/img/slides/sequence/img-3.png" alt="">
                  </li>
                </ul>
              </div>
            </div>
            <!-- Sequence Slider::END-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-suitcase left active"></i>
          <h4>RentCar</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Una compañia dedicada a ofrecer lo mejor en renta ,venta,mantenimiento de tu vehiculo con nosotros la calidad es una obligacion ven y pruebalo.
          </p>
         
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-plane left"></i>
          <h4>Venta</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            La venta de vehiculos con nosotros es la mas segura que podras encontrar rentcar te ofrece un mejor servicio a nivel nacional buscanos .
          </p>
         
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-leaf left"></i>
          <h4>Renta Vehiculo</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Nuestro servicio de renta de vehiculo es el mejor a nivel  nacional porque nosotros te ofrecemos el mejor servicio Rentcar tu mejor opcion.
          </p>
         
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-wrench left"></i>
          <h4>Servicios</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Encargados de brindar el mejor servicio en todo el pais ven a conocernos nosotros somos los mejores en lo que hacemos quieres calidad busca rentcar.
          </p>
         
        </div>
      </div>
     
              </div>
            </div>
          </div>
          <!-- end tagline -->
        </div>
      </div>
     
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span3">
            <div class="post-image">
             
            </div>
            <div class="entry-meta">
             
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title"></h5>
              </a>
              <p>
               
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span3">
            <div class="post-image">
         
            </div>
            <div class="entry-meta">
            
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
            
                <h5 class="title">t</h5>
              </a>
              <p>
              
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span3">
            <div class="post-slider">
             
              <!-- end flexslider -->
            </div>
            <div class="entry-meta">
              
              <span class="date"></span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              
            </div>
            <!-- end .entry-body -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer
 ================================================== -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="widget">
           
          </div>
        </div>
        <div class="span4">
          <div class="widget">
            
          </div>
        </div>
        <div class="span4">
          <div class="widget">
                   

          </div>
        </div>
      </div>
    </div>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="span6">
            <p>
             
            </p>
          </div>
          <div class="span6">
            <div class="credits">
                <p> 
                <?php  
                  if(isset($_SESSION["status"])==true){
                    $mensaje = "Usted se ha identificado como ".$_SESSION["nombre"];
                    echo $mensaje;
                  } ?> 
              </p>
              <p class="right">
                  &copy; 2018 RENTCAR. 
                </p>
             
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript Library Files -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/sequence/sequence.jquery-min.js"></script>
  <script src="assets/js/sequence/setting.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/application.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/hover/setting.js"></script>

  <!-- Template Custom JavaScript File -->
<script src="assets/js/custom.js"></script>
  
  <script src="js/logout.js"></script>

</body>
</html>
