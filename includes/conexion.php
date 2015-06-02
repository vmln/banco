<?php
	$server= "localhost"; //tipo de servidor
	$username= "root"; //tipo de usuario
	$password= ""; //contraseña mysql
	$db= "proyectos"; //nombre de la base de datos

	//conexion a la base de datos
	$c_db = mysql_connect($server, $username, $password) or die("No ha sido posible conectarse: " . mysql_error());
	mysql_select_db($db);

	session_start();
?>