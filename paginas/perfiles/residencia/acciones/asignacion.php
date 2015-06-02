<?php
include('../../../../includes/conexion.php');
$asignacion=mysql_query("
     INSERT INTO asignacion(
	     fecha_inicio,
		 fecha_terminacion,
		 clasificacion,
		 estado,
		 id_solicitud,
		 id_usuario
	 )
	 VALUES(
	     '".$_POST['inicio']."',
		 '".$_POST['final']."',
		 '',
		 'En curso',
		 '".$_POST['id']."',
		 '2'
	 )
")or die(mysql_error());

	// Header("Location:../../../../system.php?menu_em=default");
	if($asignacion){
		echo "
	         <script>
	         alert('Asignacion correcta');
	         window.location='../../../../system.php?menu_res=proyectos';
	         </script>
	         ";
	}else{
		echo "
	         <script>
	         alert('Problemas al enviar intente mas tarde');
	         window.location='../../../../system.php?menu_res=proyectos';
	         </script>
	         ";
	}
?>