<?php
include('../../../../includes/conexion.php');
$insertar=mysql_query("
     INSERT INTO proyecto(
	     p_nombre,
		 p_descripcion,
		 p_duracion,
		 p_apoyo,
		 p_habilidades,
		 p_clasificacion,
		 p_fecha,
		 p_estatus,
		 id_usuario
	 )
	 VALUES(
	     '".$_POST['nombre_pro']."',
		 '".$_POST['descripcion']."',
		 '".$_POST['duracion']."',
		 '".$_POST['apoyo']."',
		 '".$_POST['conocimiento']."',
		 '".$_POST['carrera']."',
		 CURDATE( ),
		 'Nuevo',
		 ".$_SESSION["id_usuario"]."
	 )
")or die(mysql_error());
	// Header("Location:../../../../system.php?menu_em=default");
	if($insertar){
		echo "
	         <script>
	         alert('El proyecto se ha guardado correctamente (:');
	         window.location='../../../../system.php?menu_em=default';
	         </script>
	         ";
	}else{
		echo "
	         <script>
	         alert('Problemas al enviar intente mas tarde');
	         window.location='../../../../system.php?menu_home=proyecto';
	         </script>
	         ";
	}
?>