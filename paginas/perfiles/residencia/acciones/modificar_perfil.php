<?PHP
	include("../../../../includes/conexion.php");
	#ESCAPAR CADENAS
	$_POST['nombre']=addslashes($_POST['nombre']);
	$_POST['apellido']=addslashes($_POST['apellido']);
	$_POST["telefono"]=addslashes($_POST["telefono"]);
	$_POST["pass"]=addslashes($_POST["pass"]);

	if($_FILES['img']['name']!=""){
		$dir='../../../../img/perfiles/';
		$id_usuario=mysql_query("SELECT UUID() AS id");
		$id=mysql_fetch_array($id_usuario);

		$extension = pathinfo($_FILES['img']['name']);
		$extension = ".".$extension['extension'];
		$nombre=$id["id"].$extension;
		move_uploaded_file($_FILES['img']['tmp_name'], $dir.$nombre);
		$grabar=mysql_query("
				UPDATE usuario SET
					nombre='".$_POST['nombre']."',
					apellido='".$_POST['apellido']."',
					telefono='".$_POST['telefono']."',
					img='".$nombre."',
					contrasenia='".$_POST['pass']."'
				WHERE id_usuario=".$_SESSION['id_usuario']."
		")or die(mysql_error());

	}else{
		$grabar=mysql_query("
				UPDATE usuario SET
					nombre='".$_POST['nombre']."',
					apellido='".$_POST['apellido']."',
					telefono='".$_POST['telefono']."',
					contrasenia='".$_POST['pass']."'
				WHERE id_usuario=".$_SESSION['id_usuario']."
		")or die("Segundo ".mysql_error());
	}
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
