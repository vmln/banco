<?php
include('../../includes/conexion.php');
$usuario=$_POST['correo'];
$contrasena = rand(199999, 999999);
	$sql="select *
			from usuario
			where usuario='".$usuario."'
			";
$resultado=mysql_query($sql) or die (mysql_error());
 if(mysql_num_rows($resultado)>0){
     echo "
     <script>
     alert('EL NUMERO DE CONTROL  ".$usuario." YA SE ENCUENTRA REGISTRADO EN NUESTRA BASE DE DATOS!!!!!!!');
     window.location='javascript:history.go(-1)';
     </script>
     ";
}else{
$insertar=mysql_query("
     INSERT INTO usuario(
	     nombre,
		 apellido,
		 correo,
		 telefono,
		 img,
		 usuario,
		 contrasenia,
		 tipo_usuario,
		 fecha_reg,
		 estatus
	 )
	 VALUES(
	     '".$_POST['nombre']."',
		 '".$_POST['apellido']."',
		 '".$_POST['correo']."@itscarrillopuerto.edu.mx',
		 '',
		 '',
		 '".$_POST['correo']."',
		 ".$contrasena.",
		 'alumno',
		CURDATE( ),
		 'aceptado'
	 )
")or die(mysql_error());

$idusuario=mysql_query("
	     SELECT MAX(id_usuario) AS id
		 FROM usuario
	");

	$id=mysql_fetch_array($idusuario);

	$alumno=mysql_query("
	     INSERT INTO alumno(
		      num_control,
			  id_usuario,
			  id_carrera
		 )
		 VALUES (
		      '".$_POST['correo']."',
			  ".$id['id'].",
			  '".$_POST['carrera']."'
		 )

	");
	// Header("Location:../../../../system.php?menu_em=default");
	if($insertar and $alumno){
		echo "
	         <script>
	         alert('Tu registro se realizo correctamente, tu clave de acceso sera enviado al correo electronico. favor de verificar.');
	         window.location='../../index.php?menu=default';
	         </script>
	         ";
	}else{
		echo "
	         <script>
	         alert('Problemas al enviar intente mas tarde');
	         window.location='../../index.php?menu=reg_alumno';
	         </script>
	         ";
	}
	}
?>