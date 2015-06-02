<!-- Migas de pan -->
  <ul class="breadcrumb">
    <li><a href="?menu=home">HOME</a> <span class="divider">/</span></li>
    <li class="active">PROYECTOS NUEVOS<span class="divider">/</span></li>
 </ul>
<?PHP
#IMPRIMIR detalles del usuario
$re=mysql_query("
				SELECT
					usuario.id_usuario,
					usuario.telefono,
					usuario.img,
					CONCAT(usuario.nombre, ' ', usuario.apellido) AS user,
					usuario.fecha_reg,
					usuario.estatus,
					usuario.correo,
					empresa.emp_nombre,
					empresa.rfc,
					empresa.direccion
				FROM usuario
				JOIN empresa ON empresa.id_usuario=usuario.id_usuario
				WHERE usuario.id_usuario=".$_GET['id']."
				GROUP BY usuario.id_usuario
")or die(mysql_error());
$usuario=mysql_fetch_array($re);
?>
<legend>Detalles de la empresa: <span style="color:green;"><?php echo $usuario['emp_nombre'];?></span></legend>
<div class="row-fluid">
	<div class="span12">
		<div class="span2">
			<?php
				if($usuario["img"]==""){
  				echo '<img src="img/perfiles/default.jpg" width="200"/>';
				}else{
  				echo '<img src="img/perfiles/'.$usuario["img"].'" width="200" />';
				}
				?>
		</div>
		<div class="span5">
			<strong>Contacto: </strong><span style="color:green;"><?php echo $usuario['user'];?></span><br>
			<strong>Fecha de registro: </strong><span style="color:green;"><?php echo '<span style="font-size:13px;">'.date("d",strtotime($usuario["fecha_reg"])).'/'.mes(date("m",strtotime($usuario["fecha_reg"]))).'/'.date("Y",strtotime($usuario["fecha_reg"])).'</span>';?></span><br>
			<strong>Nombre de la empresa: </strong>
			<span style="color:green;"><?php echo $usuario['emp_nombre'];?></span><br>
			<strong>Tel&eacute;fono: </strong>
			<span style="color:green;"><?php echo $usuario['telefono'];?></span><br>
			<strong>RFC: </strong>
			<span style="color:green;"><?php echo $usuario['rfc'];?></span><br>
			<strong>Correo Electr&oacute;nico: </strong>
			<span style="color:green;"><?php echo $usuario['correo'];?></span><br>
			<strong>Estatus: </strong>
			<span style="color:green;"><?php echo $usuario['estatus'];?></span><br><br>

			<a class="btn btn-primary" style="color:white;" href="?menu_res=Empresas old">Regresar</a>
		</div>
	</div>
</div>
