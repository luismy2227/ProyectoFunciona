<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Serenity - Modern bootstrap website template</title>
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
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  <!-- =======================================================
    Theme Name: Serenity
    Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
  <header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="index.html">
			<img src="assets/img/logo.png" alt="" />
			</a>
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown">
                  <a href="index.html">Inicio</a>
                </li>
                <li class="dropdown">
                  <a href="#">Vehiculo</a>
                  <ul class="dropdown-menu">
                    <li><a href="InsertarAuto.php">Insertar Autos</a></li>
                    <li><a href="scaffolding.html">Mantenimiento</a></li>
                    
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#">Repuestos</a>
                  <ul class="dropdown-menu">
                    <li><a href="about.html">About us</a></li>
                    <li><a href="pricingtable.html">Pricing table</a></li>
                    <li><a href="fullwidth.html">Fullwidth</a></li>
                    <li><a href="404.html">404</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#">Facturacion</a>
                  <ul class="dropdown-menu">
                    <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                    <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                    <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                    <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#">Personal</a>
                  <ul class="dropdown-menu">
                    <li><a href="blog_left_sidebar.html">Blog left sidebar</a></li>
                    <li><a href="blog_right_sidebar.html">Blog right sidebar</a></li>
                    <li><a href="post_left_sidebar.html">Post left sidebar</a></li>
                    <li><a href="post_right_sidebar.html">Post right sidebar</a></li>
                  </ul>
                </li>
                
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>
  <!-- Subhead
================================================== -->
  <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
           
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span4">
            
        <div class="span8">
         

          <div class="spacer30"></div>

          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form action="" method="post" role="form" class="contactForm">
            <div class="row">
              <div class="span4 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="idVehiculo" data-rule="minlen:4" data-msg="Porfavor Ingrese id" />
                <div class="validation"></div>
              </div>

              <div class="span4 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Marca" data-rule="email" data-msg="Porfafor Ingrese Email" />
                <div class="validation"></div>
              </div>
              <div class="span4 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="color" data-rule="minlen:4" data-msg="Porfavor ingrese Color" />
                <div class="validation"></div>
              </div>
              <div class="span4 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Modelo" data-rule="minlen:4" data-msg="Porfavor ingrese Modelo" />
                <div class="validation"></div>
              </div>
              <div class="span4 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Placa" data-rule="minlen:4" data-msg="Porfavor ingrese Placa" />
                <div class="validation"></div>
              </div>
              <div class="span4 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Version" data-rule="minlen:4" data-msg="Porfavor ingrese Version" />
                <div class="validation"></div>
              </div>
              <div class="span4 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Año" data-rule="minlen:4" data-msg="Porfavor ingrese el Año" />
                <div class="validation"></div>
              </div>
              <div class="span4 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Generacion" data-rule="minlen:4" data-msg="Porfavor ingrese la Generacion" />
                <div class="validation"></div>
              </div>
              <div class="span4 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Serie_vin" data-rule="minlen:4" data-msg="Porfavor ingrese Serie_vin" />
                <div class="validation"></div>
              </div>
              <div class="span4 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="TipoMotor" data-rule="minlen:4" data-msg="Porfavor ingrese TipoMotor" />
                <div class="validation"></div>
              </div>
              <div class="span4 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Transmision" data-rule="minlen:4" data-msg="Porfavor ingrese la Transmision" />
                <div class="validation"></div>
              </div>
              <div class="span4 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="TipoGasolina" data-rule="minlen:4" data-msg="Porfavor ingrese el TipoGasolina" />
                <div class="validation"></div>
              </div>
              <div>

              </div>
              <div class="container">
               <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22226%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20226%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162e9996169%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162e9996169%22%3E%3Crect%20width%3D%22288%22%20height%3D%22226%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.828125%22%20y%3D%22119.2390625%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: : :100px; width: -10%; display: block;">
                <div class="card-body">
                   </div>
                  <div>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Agregar Foto</button>
                      
                    </div>

                   
                  </div>
                </div>
              <div class="span4 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder= "Fecha Registro DD/MM/YYYY" data-rule="minlen:4" data-msg="Porfavor ingrese fecha" />
                <div class="validation"></div>
              </div>
               <div class="span4 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder= "Fecha Adquisicion DD/MM/YYYY" data-rule="minlen:4" data-msg="Porfavor ingrese fecha" />
                <div class="validation"></div>
              </div>
              <div class="span8 form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escriba el estado" placeholder="Observacion Estado Vehiculo"></textarea>
                <div class="validation"></div>
                <div class="text-center">
               
                  <button class="btn btn-color btn-rounded" type="submit">Guardar</button>
                  <button class="btn btn-color btn-rounded" type="submit">Cancelarr</button>
                </div>
              </div>
       
  
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


  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>


</body>

</html>
