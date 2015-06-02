	<legend><a href="?menu_home=proyecto" style="color:blue;"><img src="img/sw.png" alt="">Subir Proyectos</a></legend>
	<div class="row-fluid">
		<div class="span12">
				<?PHP
			        //VA DEPENDER DEL VALOR QUE SELECCIONE DEL MENU
			        $_GET["menu_home"]=addslashes($_GET["menu_home"]);

			        //EL SWITCH SELECCIONA QUE PAGINA VA CARGAR
			        switch($_GET["menu_home"]){
			                //REGRESA AL HOME CUANDO DE CLIC A LA OPCIÓN DEL MENU HOME
			          case "proyecto":include("paginas/perfiles/empresa/formproyect.php");
			                break;
			          default : include("paginas/perfiles/empresa/home_emp.php");
			                            break;
			        }
			      ?>
		</div>
	</div>
