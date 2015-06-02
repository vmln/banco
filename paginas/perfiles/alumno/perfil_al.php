<?php
    $dato=mysql_query("
    SELECT
    usuario.nombre,
    usuario.apellido,
    usuario.img
    FROM usuario
      WHERE id_usuario=".$_SESSION["id_usuario"]."
  ")or die(mysql_error());
  $info=mysql_fetch_array($dato);
?>
<?php
    $ca=mysql_query("
    SELECT
    alumno.carrera
    FROM alumno
      WHERE id_usuario=".$_SESSION["id_usuario"]."
  ")or die(mysql_error());
  $carrera=mysql_fetch_array($ca);
?>
<!-- barra de menus -->
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
         <span class="brand" style="font-size:12px; float:left;">Banco de Proyectos ITSFCP</span>
        <div class="nav-collapse collapse navbar-responsive-collapse">
          <ul class="nav">
            <li style="margin-top:5px; font-size:15px; width:200px;"><span><?php echo '<img src="img/perfiles/'.$info["img"].'" width="40" />';?></span><span style="color:blue;"><?php echo $carrera['carrera'];?></span></li>
            <li class="active" style="border-left: 1px solid #BFB3B3; border-right: 1px solid #BFB3B3;"><a href="?menu_ac=inicio"><img src="img/home.png" title="Inicio" width="22"></a></li>
          </ul>
          <form class="navbar-search pull-left" action="" style="margin-left:15px; margin-top: -4px;">
            <input type="text" class="search-query span2" placeholder="Buscar Proyecto">
          </form>
          <ul class="nav pull-right">
            <li style="border-left: 1px solid #BFB3B3; border-right: 1px solid #BFB3B3;"><a href="?menu_al=mensajes">
              <img src="img/mensaje.png" title="Mensajes" width="22"><span class="badge badge-important">
                  <?php
                      // primero conectamos siempre a la base de datos mysql
                      $inbox = "SELECT *
                      FROM mensaje
                      WHERE estatus='No visto'";  // sentencia sql
                      $result = mysql_query($inbox);
                      $numero = mysql_num_rows($result); // obtenemos el número de filas
                      echo ''.$numero.'';  // imprimos en pantalla el número generado
                    ?>
            </span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $info['nombre'];?> <?php echo $info['apellido'];?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?menu_ac=perfil">Editar Perfil</a></li>
                <li><a href="includes/desconectar.php">Cerrar Sesi&oacute;n</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
<!-- menu izquierdo -->
 <div class="row-fluid">
  <div class="span12">
  <div class="span3" style="background:#CBC4C4; height:auto;">
      <ul class="nav nav-list">
        <li><a href="?menu_al=default">Inicio</a></li>
        <li><a href="?menu_al=proyectos nuevos">Proyectos Nuevos</a></li>
        <li><a href="?menu_al=proyectos">Ver Proyectos</a></li>
        <li><a href="?menu_al=perfil">Perfil</a></li>
    </ul>
  </div>
<!-- inicio del contenedor -->
  <div class="span8"  style="background:white; border: 1px solid #F0EBEB; border-radius:8px; -moz-border-radius:8px; -webkit-border-radius:8px; padding-left:15px;">
    <?PHP
        //VA DEPENDER DEL VALOR QUE SELECCIONE DEL MENU
        $_GET["menu_al"]=addslashes($_GET["menu_al"]);

        //EL SWITCH SELECCIONA QUE PAGINA VA CARGAR
        switch($_GET["menu_al"]){
                //REGRESA AL HOME CUANDO DE CLIC A LA OPCIÓN DEL MENU HOME
          case "inicio":include("paginas/perfiles/alumno/al_inicio.php");
                      break;
          case "perfil": include("paginas/perfiles/alumno/al_perfil.php");
                            break;
          case "proyectos nuevos": include("paginas/perfiles/alumno/p_nuevos.php");
                            break;
          case "proyectos": include("paginas/perfiles/alumno/proyectos.php");
                            break;
          case "mensajes": include("paginas/perfiles/alumno/res_mensajes.php");
                            break;
              //POR DEFAULT EL INDEX CARGARÁ EL HOME
          default: include("paginas/perfiles/alumno/al_inicio.php");
                   break;
        }
      ?>
  </div>
</div>
</div>