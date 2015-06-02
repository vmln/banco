<?php
session_start();
  include("includes/conexion.php");
  include("includes/lib.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8 general ">
	<title>Banco de proyectos ITSFCP</title>
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <meta name="keywords" content="banco, proyectos,itsfcp, banco de proyectos, carrillo puerto"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
   <link href="css/main.responsive.css" rel="stylesheet">
    <script type='text/javascript'>
        window.onload = detectarCarga;
        function detectarCarga(){
        document.getElementById("imgLOAD").style.display="none";
        }
  </script>
</head>
<body>
<!-- cabecera de la pagina para inicio de sesion, buscador y registro -->
  <div class="container">
    <div class="row">
      <ul class="nav nav-pills">
         <li>
            <form class="navbar-search pull-left" action="?menu=buscar" method="post">
                <input type="text" name="buscar" class="search-query span2" placeholder="Buscar Proyecto">
            </form>
        </li>
        <li class="Clickable"><a data-toggle="modal" title="Registrarse en nuestra p&aacute;gina" href="#registro" style="color:black;">Registrarse</a></li>
        <li style="margin:3px 0px;"><img src="img/separador.png"></li>
        <li class="Clickable"><a data-toggle="modal" title="Iniciar sesi&oacute;n" href="#sesion" style="color:black;">Ingrese</a></li>
      </ul>
<!-- ventana modal del inicio de sesion ============================= -->
      <div id="sesion" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header" align="center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="myModalLabel">Inciar sesi&oacute;n</h3>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" action="system.php" method="post" style="background-color: #f4f4f4;">
                <div class="control-group">
                  <label class="control-label" for="inputEmail">Usuario</label>
                  <div class="controls">
                    <input type="text" id="inputEmail" name="user" title="Ingresar Nombre de Usuario"  placeholder="Email">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="inputPassword">Contrase&ntilde;a</label>
                  <div class="controls">
                    <input type="password" name="pass" title="Ingresar contrase&ntilde;a" id="inputPassword" placeholder="Password">
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    <button type="submit" title="Enviar Datos" class="btn btn-primary">Iniciar Sesi&oacute;n</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <span style="float:left;"><a href="#sesion">Recuperar contrase&ntilde;a</a></span>
              <button class="btn" data-dismiss="modal">Cancelar</button>
            </div>
      </div>
<!-- ventana modal de registro ============================= -->
      <div id="registro" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header" align="center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="myModalLabel">Seleccione un tipo de usuario</h3>
            </div>
            <div class="modal-body" align="center">
              <div class="btn-group">
                  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#" style="font-size:20px;">
                    Usuario:
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" style="font-size:20px;">
                    <li><a href="?menu=reg_empresa">Empresa</a></li>
                    <li><a href="?menu=reg_alumno">Estudainte</a></li>
                  </ul>
            </div><br><br><br><br><br>
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal">Cancelar</button>
            </div>
      </div>
    <!-- banner -->
  <div class="container" align="center">
      <a href="?menu=home"><img src="img/prueba.jpg" class="img-rounded"></a>
  </div><br>
  <div id='imgLOAD' style="TEXT-ALIGN: center">
      <b>Cargando</b>
      <img alt='LOADING' height='50' src='img/loading.gif' width='50'/>
   <br><br> </div>
   <!-- inicio del menu que va controlar la entrada y salida de las paginas -->
   <div class="container" style="background-color:white;">
      <?PHP
        //VA DEPENDER DEL VALOR QUE SELECCIONE DEL MENU
        $_GET["menu"]=addslashes($_GET["menu"]);

        //EL SWITCH SELECCIONA QUE PAGINA VA CARGAR
        switch($_GET["menu"]){
                //REGRESA AL HOME CUANDO DE CLIC A LA OPCIÓN DEL MENU HOME
          case "inicio":include("paginas/home.php");
                break;
          case "conocenos": include("paginas/conocenos.php");
                            break;
          case "n_proyectos": include("paginas/proyectos_n.php");
                            break;
          case "p_proyectos": include("paginas/proyectos_p.php");
                            break;
          case "t_proyectos": include("paginas/proyectos_t.php");
                            break;
          case "t_empresas": include("paginas/empresas_t.php");
                            break;
          case "r_empresas": include("paginas/empresas_r.php");
                            break;
          case "u_empresas": include("paginas/empresas_u.php");
                            break;
          case "contacto": include("paginas/contacto.php");
                            break;
          case "reg_empresa": include("paginas/reg_empresa.php");
                            break;
          case "reg_alumno": include("paginas/reg_alumno.php");
                            break;
          case "buscar": include("paginas/busqueda.php");
                            break;
              //POR DEFAULT EL INDEX CARGARÁ EL HOME
          default: include("paginas/home.php");
                   break;
        }
      ?>
   </div>
<!-- este es el scroll que hace que nuestra pagina haga un efecto de retroceso -->
   <div style="display:none;" class="nav_up" id="nav_up"></div>

 <!-- Configuracion de pie de página ========================== -->
    <footer class="footer">
      <div class="container">
        <img src="img/footer.png" width="1100" class="img-rounded" align="left">
              <div class="row show-grid">
                <div class="span4">
                  <strong>UNIDAD ACADEMICA FCP:</strong><br>
                  Carretera Vigia Chico KM 1.5 C&oacute;digo Postal 77200 <br>
                  Felipe Carrillo Puerto, Quintana Roo
                </div>
                <div class="span4">
                  <strong style="font-size:16px;">INSTITUTO TECN&Oacute;LOGICO SUPERIOR DE FCP:</strong><br>
                  Tel.-Fax 01 (983) 20 7 10 / 83 4 00 51 <br>
                  itscarrillopuerto.edu.mx
                </div>
                <div class="span4">
                 <strong>UNIDAD ACADEMICA TULUM: </strong><br>
                  Calle 4 Oriente entre Osiris y Beta Norte <br>
                  Tulum, Quintana Roo
                </div>
              </div>
      </div>
    </footer>

<!-- Importar librerias para que la pagina cargue mas rapido -->
 <script src="js/jquery-1.3.2.js" type="text/javascript"></script>
 <script>
      $(function() {
        var $elem = $('#content');

        $('#nav_up').fadeIn('slow');

        $(window).bind('scrollstart', function(){
          $('#nav_up').stop().animate({'opacity':'0.1'});
        });
        $(window).bind('scrollstop', function(){
          $('#nav_up').stop().animate({'opacity':'1'});
        });
        $('#nav_up').click(
          function (e) {
            $('html, body').animate({scrollTop: '0px'}, 800);
          }
        );
            });
        </script>
    <script src="js/jquery.js"></script>
    <script src="js/funciones.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/strap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/bootstrap-affix.js"></script>
    <script src="js/holder/holder.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/application.js"></script>
    <script src="js/scroll-startstop.events.jquery.js"></script>
</body>
</html>