<?PHP
	include("../../../../includes/conexion.php");

	$dir='../../../../img/perfiles/';
	$idinfo=mysql_query("SELECT UUID() AS id ");
	$id=mysql_fetch_array($idinfo);

	$extension = pathinfo($_FILES['img']['name']);
	$extension = ".".$extension['extension'];
	$nombre=$id["id"].$extension;
	move_uploaded_file($_FILES['img']['tmp_name'], $dir.$nombre);

	$grabar=mysql_query("
		UPDATE usuario SET
					usuario.img='".$nombre."'
					WHERE usuario.id_usuario=".$_SESSION["id_usuario"]."
	")or die(mysql_error());
	// Header("Location:../../../../system.php?menu_em=default");
	if($grabar){
		echo "
	         <script>
	         alert('Datos Actualizados');
	         window.location='../../../../system.php?menu_res=perfil';
	         </script>
	         ";
	}else{
		echo "
	         <script>
	         alert('Problemas al enviar intente mas tarde');
	         window.location='../../../../system.php?menu_res=perfil';
	         </script>
	         ";
	}
?>