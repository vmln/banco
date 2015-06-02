<?php
session_start();
include("includes/conexion.php");
require("includes/login.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8 general">
	<title>Banco de proyectos ITSFCP</title>
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/main.responsive.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href="css/docs.css" rel="stylesheet">
  <link href="css/tcal.css" rel="stylesheet">
  <link href="css/ui-lightness/jquery-ui-1.8.13.custom.css" rel="stylesheet">
</head>
<body>
    <div align="center" style="margin-top:8px;">
       <a href="#"><img src="img/system.jpg" class="img-rounded"></a>
    </div><br>
<div class="container">
<!-- verificar tipo de usuario -->
    <?PHP
    include("includes/lib.php");
      switch($_SESSION["tipo_usuario"]){
        case empresa: include("paginas/perfiles/empresa/perfil_em.php");
                break;
        case academia: include("paginas/perfiles/academia/perfil_ac.php");
                break;
        case alumno: include("paginas/perfiles/alumno/perfil_al.php");
                break;
        case residencia: include("paginas/perfiles/residencia/perfil_res.php");
                break;
      }
    ?>
      <div style="display:none;" class="nav_up" id="nav_up"></div>
 <!-- Configuracion de pie de página ========================== -->
    <footer class="footer">
      <div class="container">
        <img src="img/footer.png" width="1500" class="img-rounded">
              <div class="row show-grid">
                <div class="span4">
                  <strong>UNIDAD ACADEMICA FCP:</strong><br>
                  Carretera Vigia Chico KM 1.5 C&oacute;digo Postal 77200 <br>
                  Felipe Carrillo Puerto, Quintana Roo
                </div>
                <div class="span4">
                  <strong  style="font-size:16px;">INSTITUTO TECN&Oacute;LOGICO SUPERIOR DE FCP:</strong><br>
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
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/funciones.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/bootstrap-affix.js"></script>
    <script src="js/holder/holder.js"></script>
    <script src="js/application.js"></script>
    <script src="js/tcal.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/jquery-1.5.1.min.js"></script>
    <script src="js/jquery-ui-1.8.13.custom.min.js"></script>
</body>
</html>