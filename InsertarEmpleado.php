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
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/color/default.css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


    </head>
    <body data-spy="scroll" data-target=".bs-docs-sidebar">
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
                                        <a href="#">Features</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="overview.html">Overview</a></li>
                                            <li><a href="scaffolding.html">Scaffolding</a></li>
                                            <li><a href="base-css.html">Base CSS</a></li>
                                            <li><a href="components.html">Components</a></li>
                                            <li><a href="javascript.html">Javascripts</a></li>
                                            <li><a href="icons.html">More icons</a></li>
                                            <li class="dropdown"><a href="#">3rd level</a>
                                                <ul class="dropdown-menu sub-menu">
                                                    <li><a href="#">Example menu</a></li>
                                                    <li><a href="#">Example menu</a></li>
                                                    <li><a href="#">Example menu</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="pricingtable.html">Pricing table</a></li>
                                            <li><a href="fullwidth.html">Fullwidth</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog_left_sidebar.html">Blog left sidebar</a></li>
                                            <li><a href="blog_right_sidebar.html">Blog right sidebar</a></li>
                                            <li><a href="post_left_sidebar.html">Post left sidebar</a></li>
                                            <li><a href="post_right_sidebar.html">Post right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Portfolio</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                                            <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                                            <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                                            <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- end menu -->
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
                                <h3>Registro de Cliente</h3>
                                <p>
                                    Llena la información solicitada del  cliente
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

                            <form action="" id="Form_InsertarCliente" name="Form_InsertarCliente" method="post" role="form" class="contactForm">
                                <div class="row">
                                    <div class="span4 form-group">
                                         <div class="span4 form-group">
                                <input type="text" class="form-control" name="text_PrimerNombre" id="text_PrimerNombre"  data-rule="minlen:4" placeholder="Primer Nombre" data-msg="PrimerNombre" />
                                 <input type="text" class="form-control" name="text_SegundoNombre" id="text_SegundoNombre"  data-rule="minlen:4" placeholder="Segundo Nombre" data-msg="SegundoNombre" />
                               </div>
                               <div class="span4 form-group">
                                 <input type="text" class="form-control" name="text_Correo" id="text_Correo" placeholder="Ingrese Correo" data-rule="minlen:4" data-msg="Porfavor ingrese Correo"/>
                <div class="validation"></div>
               
                <input type="text" class="form-control" name="text_Telefono" id="text_Telefono" placeholder="Ingrese Telefono" data-rule="minlen:4" data-msg="Porfavor ingrese Telefono" />
                <div class="validation"></div>
   
              
                              </div>
                              <div class="span4 form-group">
                                <input type="text" class="form-control" name="text_NombreUsuario" id="text_NombreUsuario" placeholder="Ingrese el Usuario"  data-rule="minlen:4" data-msg="Porfavor ingrese Identidad" />
                <div class="validation"></div>
                 <input type="password" class="form-control" name="text_UserPassword" id="text_UserPassword" placeholder="Ingrese el Password"  data-rule="minlen:4" data-msg="Porfavor ingrese Identidad" />
                                
                                <input type="text" class="form-control" name="text_Departamento" id="text_Departamento" placeholder="Ingrese el Departamento"  data-rule="minlen:4" data-msg="Porfavor ingrese Telefono" />
                <div class="validation"></div>

                <input type="text" class="form-control" name="text_Municipio" id="text_Municipio" placeholder="Ingrese el Municipio" data-rule="minlen:4" data-msg="Porfavor ingrese Telefono" />
                <div class="validation"></div>
                              </div>
                              <div class="span4 form-group">
                              <select type="text" id="cbx_SeleccioneGenero" name="cbx_SeleccioneGenero" class="form-control" placeholder="Seleccione Genero"  data-rule="minlen:4" data-msg="Seleccione un Genero">
                                  <option value='0'>Seleccione un Genero</option>
                                  <option value='1'>Femenino</option>
                                  <option value='2'>Masculino</option>
                                </select>
                            
                </div>
                
                                    </div>
                         
                                    <div class="span4 form-group">
                                      
              <div class="span4 form-group">
                                  <input type="text" class="form-control" name="text_PrimerApellido" id="text_PrimerApellido" placeholder="Primer Apellido" data-rule="minlen:4" data-msg="PrimerApellido" />
                               <input type="text" class="form-control" name="text_SegundoApellido" id="text_SegundoApellido" placeholder="Segundo Apellido" data-rule="minlen:4" data-msg="SegundoApellido" />
                                 <input type="text" class="form-control" name="text_Identidad" id="text_Identidad" placeholder="Ingrese el Identidad"  data-rule="minlen:4" data-msg="Porfavor ingrese Identidad" />
                <div class="validation"></div>
                                       <input type="text" class="form-control" name="text_Rtn" id="text_Rtn" placeholder="Ingrese el RTN"  data-rule="minlen:4" data-msg="Porfavor ingrese Identidad" />
                <div class="validation"></div>
                 <input type="text" class="form-control" name="text_Imagenruta" id="text_Imagenruta" placeholder="Ingrese la imagen"  data-rule="minlen:4" data-msg="Porfavor ingrese Identidad" />
                <div class="validation"></div>
                              </div>
                            </div>
                            <div class="span4 form-group">
    <div class="span4 form-group">
                

                <input type="text" class="form-control" name="text_Colonia" id="text_Colonia" placeholder="Ingrese la Colonia" data-rule="minlen:4" data-msg="Porfavor ingrese Telefono" />
                <div class="validation"></div>

                <input type="text" class="form-control" name="text_Sector" id="text_Sector" placeholder="Ingrese el Sector"  data-rule="minlen:4" data-msg="Porfavor ingrese Telefono" />
                <div class="validation"></div>

                <input type="text" class="form-control" name="text_NumeroCasa" id="text_NumeroCasa"  placeholder="Ingrese numero de Vivienda" data-rule="minlen:4" data-msg="Porfavor ingrese Telefono" />
                <div class="validation"></div>
                                    </div>
</div>
</div>
                                </div>
                                <div class="span4 form-group">
                                    <div class="col-md-4">
                                    </div>
                                </div>
                                <div class="span8 form-group">
                                    <div class="text-center">
                                        <button class="btn btn-color btn-rounded" id="btn_Guardar" name="btn_Guardar" type="submit">Guardar</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                </form>
                <button class="btn btn-color btn-rounded" id="btn_Cancelar" name="btn_Cancelar" type="cancel" onclick="javascript:window.location = 'index.php';">Cancelar</button>
            </div>
        </div>
    </div>
</div>
</section>


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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/insertarCliente.js"></script>

<!--Combobox dependientes-->
<script language="javascript">
                    //Combobox de modelos
                    $(document).ready(function () {
                        $("#cbx_Marca").change(function () {
                            $('#cbx_Version').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
                            $("#cbx_Marca option:selected").each(function () {
                                idMarca = $(this).val();
                                $.post("includes/get-Modelos.php", {idMarca: idMarca}, function (data) {
                                    $("#cbx_Modelo").html(data);
                                });
                            });
                        })
                    });

                    //Combobox de versiones
                    $(document).ready(function () {
                        $("#cbx_Modelo").change(function () {
                            $("#cbx_Modelo option:selected").each(function () {
                                idModelo = $(this).val();
                                $.post("includes/get-Versiones.php", {idModelo: idModelo}, function (data) {
                                    $("#cbx_Version").html(data);
                                });
                            });
                        })
                    });

                    //Combobox de garages
                    $(document).ready(function () {
                        $("#cbx_Sucursal").change(function () {
                            $("#cbx_Sucursal option:selected").each(function () {
                                idSucursal = $(this).val();
                                $.post("includes/get-Sucursales.php", {idSucursal: idSucursal}, function (data) {
                                    $("#cbx_Garage").html(data);
                                });
                            });
                        })
                    });
</script>

</body>
</html>