<?PHP
#VERIFICAMOS SI ESTAN LLEGANDO LOS POST'S
if(isset($_POST["user"]) && isset($_POST["pass"])){

	$_POST["user"]=addslashes($_POST["user"]);
	$_POST["pass"]=addslashes($_POST["pass"]);

	#QUERY A LA BASE DE DATOS
	$password=mysql_query("
				SELECT *
				FROM usuario
				WHERE usuario='".$_POST["user"]."' AND
					  contrasenia='".$_POST["pass"]."' AND
					  estatus='aceptado'
	")or die(mysql_error());

	if(mysql_num_rows($password)>0){
			//nombre de sesion
			session_name("id_usuario");
			session_start();
			$info=mysql_fetch_array($password);
			$_SESSION["id_usuario"]=$info["id_usuario"];
			$_SESSION["tipo_usuario"]=$info["tipo_usuario"];
			//Header("system.php");
			//exit;
	}else{
		echo "<script>
				alert('Error: Nombre de Usuario o Clave Incorrectas');
				 window.location='index.php?menu=error';
			</script>";
		exit;
	}
}else{
	// usamos la sesion de nombre definido.
	session_name("id_usuario");
	// Iniciamos el uso de sesiones
	session_start();

	// Chequeamos si estan creadas las variables de sesión de identificación del usuario,
	// El caso mas comun es el de una vez "matado" la sesion se intenta volver hacia atras
	// con el navegador.

	if (!isset($_SESSION["id_usuario"]) && !isset($_SESSION["tipo_usuario"])){
		// Borramos la sesion creada por el inicio de session anterior
		session_destroy();
		die ("
			<script>
				alert('Error: La sesion ha Expirado, vuelva a iniciar sesion');
				 window.location='index.php?menu=default';
			</script>");
		exit();
	}

}
?>