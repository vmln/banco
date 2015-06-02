<?php
include('../../includes/conexion.php');
$correo=$_POST['correo_emp'];
$usuario=$_POST['usuario'];

	$a="select *
			from usuario
			where correo='".$correo."'
			";
$mail=mysql_query($a) or die (mysql_error());
 if(mysql_num_rows($mail)>0){
     echo "
     <script>
     alert('EL CORREO:  ".$correo." YA SE ENCUENTRA REGISTRADO EN NUESTRA BASE DE DATOS!!!!!!!');
     window.location='javascript:history.go(-1)';
     </script>
     ";
}else{
	$b="select *
			from usuario
			where usuario='".$usuario."'
			";
$user=mysql_query($b) or die (mysql_error());
if(mysql_num_rows($user)>0){
     echo "
     <script>
     alert('EL CORREO:  ".$usuario." YA SE ENCUENTRA REGISTRADO EN NUESTRA BASE DE DATOS!!!!!!!');
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
	     '".$_POST['contacto']."',
		 '".$_POST['apellido']."',
		 '".$_POST['correo_emp']."',
		 '".$_POST['telefono']."',
		 '',
		 '".$_POST['usuario']."',
		 '".$_POST['contrasenia']."',
		 'empresa',
		 CURDATE( ),
		 'nuevo'
	 )
")or die(mysql_error());
	$idusuario=mysql_query("
	     SELECT MAX(id_usuario) AS id
		 FROM usuario
	");

	$id=mysql_fetch_array($idusuario);

	$empresa=mysql_query("
	     INSERT INTO empresa(
		      emp_nombre,
			  rfc,
			  direccion,
			  id_usuario
		 )
		 VALUES (
		      '".$_POST['nombre_emp']."',
		      '".$_POST['rfc']."',
		      '".$_POST['direccion']."',
			  ".$id['id']."
		 )

	");
	if($insertar and $empresa){
		echo "
	         <script>
	         alert('Registro correcto, favor de revisar su correo');
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
}
?>
