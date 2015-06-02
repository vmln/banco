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
<!-- barra de menus -->
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
         <span class="brand" style="font-size:10px; float:left;">Banco de Proyectos ITSFCP</span>
        <div class="nav-collapse collapse navbar-responsive-collapse">
          <ul class="nav">
            <li style="margin-top:5px; font-size:15px; width:200px;"><span><?php echo '<img src="img/perfiles/'.$info["img"].'" class="img-circle" width="40" />';?></span><span style="color:blue;">Depto. Residencia</span></li>
            <li class="active" style="border-left: 1px solid #BFB3B3; border-right: 1px solid #BFB3B3;"><a href="?menu_res=inicio"><img src="img/home.png" title="Inicio" width="22"></a></li>
          </ul>
          <form class="navbar-search pull-left" action="?menu_res=search" style="margin-left:15px; margin-top: -4px;" method="post">
            <input name="search" class="search-query span2" placeholder="Buscar Proyecto" required="required">
          </form>
          <ul class ="nav pull-right">
            <li style="border-left: 1px solid #BFB3B3; border-right: 1px solid #BFB3B3;"><a href="?menu_res=mensajes">
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
                <li><a href="?menu_res=perfil">Editar Perfil</a></li>
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
  <div class="span3">
    <div id="acordeon">
          <ul>
              <li class="submenu"><span><a href="?menu_res=inicio"><strong>Inicio</strong></a></span></li>
              <li>
                  <h3><span>Empresas por validar</span></h3>
                  <ul>
                      <li><a href="?menu_res=Empresas new">Solicitudes</a></li>
                      <li><a href="#">Recientes</a></li>
                      <li><a href="#">&Uacute;ltimas</a></li>
                  </ul>
              </li>
              <!-- we will keep this LI open by default -->
              <li>
                  <h3><span>Empresas Validadas</span></h3>
                  <ul>
                      <li><a href="?menu_res=recientes">Recientes</a></li>
                      <li><a href="?menu_res=Empresas old">Todas</a></li>
                      <li><a href="?menu_res=no aceptadas">No aceptadas</a></li>
                  </ul>
              </li>
              <li>
                  <h3><span>Ver Proyectos</span></h3>
                  <ul>
                      <li><a href="?menu_res=proyectos">Todos</a></li>
                      <li><a href="?menu_res=proyectos estatus">Estatus de Proyectos</a></li>
                  </ul>
              </li>
              <li class="submenu"><span><a href="?menu_res=perfil"><strong>Perfil</strong></a></span></li>
          </ul>
      </div><br>
  </div>
<!-- inicio del contenedor -->
  <div class="span8"  style="background:white; border: 1px solid #F0EBEB; border-radius:8px; -moz-border-radius:8px; -webkit-border-radius:8px; padding-left:15px;">
    <?PHP
        //VA DEPENDER DEL VALOR QUE SELECCIONE DEL MENU
        $_GET["menu_res"]=addslashes($_GET["menu_res"]);

        //EL SWITCH SELECCIONA QUE PAGINA VA CARGAR
        switch($_GET["menu_res"]){
                //REGRESA AL HOME CUANDO DE CLIC A LA OPCIÓN DEL MENU HOME
          case "inicio":include("paginas/perfiles/residencia/res_inicio.php");
                      break;
          case "perfil": include("paginas/perfiles/residencia/res_perfil.php");
                            break;
          case "aceptar": include("paginas/perfiles/residencia/acciones/aceptar_em.php");
                            break;
          case "rechazar": include("paginas/perfiles/residencia/acciones/rechazar_em.php");
                            break;
          case "detalles": include("paginas/perfiles/residencia/detalles_emp.php");
                            break;
          case "detalles_p": include("paginas/perfiles/residencia/detalles_p.php");
                            break;
          case "Empresas new": include("paginas/perfiles/residencia/emp_new.php");
                            break;
          case "Empresas old": include("paginas/perfiles/residencia/emp_old.php");
                            break;
          case "no aceptadas": include("paginas/perfiles/residencia/no_aceptadas.php");
                            break;
          case "edit_emp": include("paginas/perfiles/residencia/editar_emp.php");
                            break;
          case "proyectos": include("paginas/perfiles/residencia/proyectos_res.php");
                            break;
          case "proyectos estatus": include("paginas/perfiles/residencia/estatus_pro.php");
                            break;
          case "mensajes": include("paginas/perfiles/residencia/res_mensajes.php");
                            break;
          case "recientes": include("paginas/perfiles/residencia/recientes.php");
                            break;
          case "search": include("paginas/perfiles/residencia/search.php");
                            break;
              //POR DEFAULT EL INDEX CARGARÁ EL HOME
          default: include("paginas/perfiles/residencia/estatus_pro.php");
                   break;
        }
      ?>
  </div>
</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>