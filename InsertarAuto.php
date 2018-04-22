<!DOCTYPE html>
<?php
  include("class/class-conexion.php");
  $conexion = new Conexion();
  //Obteniendo las marcas
  $query = "SELECT idMarca, descripcion FROM tbl_Marca ORDER BY descripcion;";
  $resMarcas = $conexion->ejecutarConsulta($query);

  //Obteniendo las transmisiones
  $query = "SELECT idTransmision, descripcion FROM tbl_Transmision ORDER BY descripcion;";
  $resTransmision = $conexion->ejecutarConsulta($query);

  //Obteniendo los tipos de gasolina
  $query = "SELECT idTipoGasolina, descripcion FROM tbl_TipoGasolina ORDER BY descripcion;";
  $resGasolina = $conexion->ejecutarConsulta($query);

   //Obteniendo los tipos de cilindraje
  $query = "SELECT idCilindraje, descripcion FROM tbl_Cilindraje ORDER BY descripcion;";
  $resCilindraje = $conexion->ejecutarConsulta($query);

  //Obteniendo los tipos de estado
  $query = "SELECT idEstado, descripcion FROM tbl_Estado;";
  $resEstado = $conexion->ejecutarConsulta($query);

?>
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
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
  <header>
    
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          
          <a class="brand logo" href="index.html">
			<img src="assets/img/logo.png" alt="" />
			</a>
          
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
          
        </div>
      </div>
    </div>

  </header>
  
  <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Registro de Vehículo</h3>
              <p>
                Llena la información solicitada del vehículo adquirido, para ponerlo disponible a la venta o renta.
              </p>
            </div>
          </div>
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
                <!-- Combobox de marcas-->
                <div> 
                  <select id="cbx_Marca" name="cbx_Marca">
                    <option value='0'>Selecciona una marca</option>
                    <?php while($rowMarcas = pg_fetch_array($resMarcas)) { ?>
                    <option value="<?php echo $rowMarcas[0]; ?>" ><?php echo $rowMarcas[1]; ?> </option>
                    <?php } ?>
                  </select>
                </div>
                <!-- Combobox de modelos-->
                  <div>
                    <select id="cbx_Modelo" name="cbx_Modelo"></select>
                  </div>
                  <!-- Combobox de versiones-->
                  <div>
                    <select id="cbx_Version" name="cbx_Version"></select>
                  </div>
                <!-- Combobox de transmisiones-->
                <div> 
                  <select id="cbx_Transmisiones" name="cbx_Transmisiones">
                    <option value='0'>Transmisión</option>
                    <?php while($rowTransmision = pg_fetch_array($resTransmision)) { ?>
                    <option value="<?php echo $rowTransmision[0]; ?>" ><?php echo $rowTransmision[1]; ?> </option>
                    <?php } ?>
                  </select>
                </div>

                <!-- Combobox de gasolinas-->
                <div> 
                  <select id="cbx_Gasolinas" name="cbx_Gasolinas">
                    <option value='0'>Combustible</option>
                    <?php while($rowGasolina = pg_fetch_array($resGasolina)) { ?>
                    <option value="<?php echo $rowGasolina[0]; ?>" ><?php echo $rowGasolina[1]; ?> </option>
                    <?php } ?>
                  </select>
                </div>

                <!-- Combobox de cilindrajes-->
                <div> 
                  <select id="cbx_Cilindraje" name="cbx_Cilindraje">
                    <option value='0'>Número de cilindros</option>
                    <?php while($rowCilindros = pg_fetch_array($resCilindraje)) { ?>
                    <option value="<?php echo $rowCilindros[0]; ?>" ><?php echo $rowCilindros[1]; ?> </option>
                    <?php } ?>
                  </select>
                </div>

                <!-- Combobox de estados-->
                <div> 
                  <select id="cbx_Estado" name="cbx_Estado">
                    <option value='0'>Estado</option>
                    <?php while($rowEstado = pg_fetch_array($resEstado)) { ?>
                    <option value="<?php echo $rowEstado[0]; ?>" ><?php echo $rowEstado[1]; ?> </option>
                    <?php } ?>
                  </select>
                </div>

                <!-- Combobox de si se vende-->
                <div> 
                  <select id="cbx_SeVende" name="cbx_SeVende">
                    <option value='0'>Venta</option>
                    <option value='1'>Si</option>
                    <option value='2'>No</option>
                  </select>
                </div>

              </div>

              <div class="span4 form-group">
                <input type="text" class="form-control" name="text_Color" id="text_Color" placeholder="Color" data-rule="minlen:4" data-msg="Ingrese Color" />
                <div class="validation"></div>
              </div>
              
              <div class="span4 form-group">
                <input type="text" class="form-control" name="text_Placa" id="text_Placa" placeholder="Placa" data-rule="minlen:4" data-msg="Ingrese la Placa" />
                <div class="validation"></div>
              </div>
              
              <div class="span4 form-group">
                <input type="text" class="form-control" name="text_Anio" id="text_Anio" placeholder="Año" data-rule="minlen:4" data-msg="Ingrese el Año" />
                <div class="validation"></div>
              </div>
              <div class="span4 form-group">
                <input type="text" class="form-control" name="text_Generacion" id="text_Generacion" placeholder="Generación" data-rule="minlen:4" data-msg="Ingrese la Generacion" />
                <div class="validation"></div>
              </div>
              <div class="span4 form-group">
                <input type="text" class="form-control" name="text_Serie" id="text_Serie" placeholder="Número de Serie" data-rule="minlen:4" data-msg="Ingrese Serie" />
                <div class="validation"></div>
              </div>
              <div class="span4 form-group">
                <input type="text" class="form-control" name="subject" id="subtext_TipoMotorject" placeholder="Tipo de motor" data-rule="minlen:4" data-msg="Seleccione el Tipo de Motor" />
                <div class="validation"></div>
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
  <!--Combobox dependientes-->
  <script language="javascript">
      $(document).ready(function(){
        $("#cbx_Marca").change(function () {
        $('#cbx_Version').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');     
        $("#cbx_Marca option:selected").each(function () {
          idMarca = $(this).val();
          $.post("includes/get-Modelos.php", { idMarca: idMarca }, function(data){
            $("#cbx_Modelo").html(data);
          });            
        });
      })
    });

      $(document).ready(function(){
        $("#cbx_Modelo").change(function () {     
        $("#cbx_Modelo option:selected").each(function () {
          idModelo = $(this).val();
          $.post("includes/get-Versiones.php", { idModelo: idModelo }, function(data){
            $("#cbx_Version").html(data);
          });            
        });
      })
    });
  </script>
</body>

</html>
