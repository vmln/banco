     <!-- Migas de pan -->
          <ul class="breadcrumb">
            <li><a href="?menu_res=home">HOME</a> <span class="divider">/</span></li>
            <li><a href="?menu_res=no aceptadas">NO ACEPTADAS</a> <span class="divider">/</span></li>
            <li class="active">EDITAR EMPRESA<span class="divider">/</span></li>
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
<div class="detalles_cont">
<div class="row-fluid">
	<legend>Detalles de la empresa: <span style="color:green;"><?php echo $usuario['emp_nombre'];?></span></legend>
	<div class="span12">
		<div class="span3" align="center">
			<?php
				if($usuario["img"]==""){
  				echo '<img src="img/perfiles/default.jpg" class="img-circle"/>';
				}else{
  				echo '<img src="img/perfiles/'.$usuario["img"].'" class="img-circle"/>';
				}
				?><br>
				<span style="font-size:20px;"><?php echo $usuario['user'];?></span><br><span><?php echo '<span style="font-size:13px;">'.date("d",strtotime($usuario["fecha_reg"])).'/'.mes(date("m",strtotime($usuario["fecha_reg"]))).'/'.date("Y",strtotime($usuario["fecha_reg"])).'</span>';?></span><br>
		</div>
		<div class="span6" style="font-size:18px;">
			<strong>Nombre de la empresa: </strong>
			<span><?php echo $usuario['emp_nombre'];?></span><br>
			<strong>Tel&eacute;fono: </strong>
			<span><?php echo $usuario['telefono'];?></span><br>
			<strong>RFC: </strong>
			<span><?php echo $usuario['rfc'];?></span><br>
			<strong>Correo Electr&oacute;nico: </strong>
			<span><?php echo $usuario['correo'];?></span><br>
			<strong>Estatus: </strong>
			<span><?php echo $usuario['estatus'];?></span><br><br>

			<a class="btn btn-primary" style="color:white;" href="?menu_res=no aceptadas">Regresar</a>
			<a class="btn btn-primary" style="color:white;" href="?menu_res=no aceptadas">Aceptar Empresa</a>
		</div>
	</div>
	</div>
</div><br>
