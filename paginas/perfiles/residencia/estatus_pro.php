<!-- Migas de pan -->
  <ul class="breadcrumb">
    <li><a href="?menu_res=inicio">HOME</a> <span class="divider">/</span></li>
    <li class="active">ESTATUS DE PROYECTOS<span class="divider">/</span></li>
 </ul>
<div class="row-fluid">
	<div class="span12">
		<div class="span1 hidden-phone"></div>
		<div class="span10" style="background:#E1DEDE;" align="center">
			<div class="btn-toolbar" style="margin: 0;">
			<button class="btn" type="button"><a href="?menu_option=todos" style="text-decoration:none; color:black;">Todos</a></button>
              <div class="btn-group">
                <button class="btn dropdown-toggle" data-toggle="dropdown">Disponible<span class="caret"></span></button>
                <ul class="dropdown-menu">
					 <?php
							$consultacarrera=mysql_query("SELECT * FROM carrera");
						while ($carreras=mysql_fetch_array($consultacarrera)) {
						echo " <li><a href='?menu_option=disponible&carrera=$carreras[id_carrera]'>$carreras[carrera]</a></li>";
					}
					?>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn dropdown-toggle" data-toggle="dropdown">Asignado <span class="caret"></span></button>
                <ul class="dropdown-menu">
                   <?php
							$consultacarrera=mysql_query("SELECT * FROM carrera");
						while ($carreras=mysql_fetch_array($consultacarrera)) {
						echo " <li><a href='?menu_option=asignado&carrera=$carreras[id_carrera]'>$carreras[carrera]</a></li>";
					}
					?>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn dropdown-toggle" data-toggle="dropdown">Terminado <span class="caret"></span></button>
                <ul class="dropdown-menu">
                   <?php
							$consultacarrera=mysql_query("SELECT * FROM carrera");
						while ($carreras=mysql_fetch_array($consultacarrera)) {
						echo " <li><a href='?menu_option=terminado&carrera=$carreras[id_carrera]'>$carreras[carrera]</a></li>";
					}
					?>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
              <form class="navbar-search pull-left" method="post" action="?menu_option=busqueda">
                <input id="busqueda" name="busca" class="search-query input-medium" placeholder="Buscar Proyecto">
            </form>
            </div><!-- /btn-group -->
            </div>
		</div>
	</div>
</div>
<hr>
<!-- inicio de los contenedores que haran que se visualicen por categorias -->
<div class="row-fluid">
		<div class="span12">
				<?PHP
			        //VA DEPENDER DEL VALOR QUE SELECCIONE DEL MENU
			        $_GET["menu_option"]=addslashes($_GET["menu_option"]);

			        //EL SWITCH SELECCIONA QUE PAGINA VA CARGAR
			        switch($_GET["menu_option"]){
			                //REGRESA AL HOME CUANDO DE CLIC A LA OPCIÓN DEL MENU HOME
			          case "disponible":include("paginas/perfiles/residencia/disponible.php");
			                break;
			        case "asignado":include("paginas/perfiles/residencia/asignado.php");
			                break;
			        case "terminado":include("paginas/perfiles/residencia/terminado.php");
			                break;
			        case "todos":include("paginas/perfiles/residencia/todos.php");
			                break;
			        case "busqueda":include("paginas/perfiles/residencia/buscar.php");
			                break;
			        default:include("paginas/perfiles/residencia/todos.php");
			                break;
			        }
			      ?>
		</div>
	</div>