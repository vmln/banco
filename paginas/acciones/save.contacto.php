<?php
include('../../includes/conexion.php');
$contacto=mysql_query("
     INSERT INTO contacto(
	     c_nombre,
		 c_apellido,
		 c_correo,
		 c_telefono,
		 c_comentario,
		 c_fecha
	 )
	 VALUES(
	     '".$_POST['nombre']."',
		 '".$_POST['apellido']."',
		 '".$_POST['correo']."',
		 '".$_POST['telefono']."',
		 '".$_POST['comentario']."',
		  CURDATE( )
	 )
")or die(mysql_error());
	if($contacto){
		echo "
	         <script>
	         alert('Tu comentario ha sido almacenado correctamente');
	         window.location='../../index.php?menu=default';
	         </script>
	         ";
	}else{
		echo "
	         <script>
	         alert('Problemas al enviar intente mas tarde');
	         window.location='../../index.php?menu=contacto';
	         </script>
	         ";
	}
?>