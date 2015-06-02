<legend>Detalles del proyecto</legend>
<?php
	$re=mysql_query("select *
			from proyecto
			where id_proyecto=".$_GET['id']
		)or die(mysql_error());
	$proyect=mysql_fetch_array($re);
?>
<div class="row-fluid">
	<div class="span12">
		<div class="span5">
			<?php
				if($proyect["p_img"]==""){
  				echo '<img src="img/proyectos/default.png" width="300"/>';
				}else{
  				echo '<img src="img/proyectos/'.$proyect["p_img"].'" width="250" />';
				}
				?>
		</div>
		<div class="span5">
			<span style="color:green; font-size:25px;"><?php echo $proyect['p_nombre'];?></span><br>
			<span style="color:black; font-size:12px;"><?php echo $proyect['p_fecha'];?></span><br>
			<strong>Duraci&oacute;n: </strong>
			<span><?php echo $proyect['p_duracion'];?></span><br>
			<strong>Carrera: </strong>
			<span><?php echo $proyect['p_clasificacion'];?></span><br><br>
			<strong>Descripci&oacute;n del proyecto: </strong><br>
			<p style="color:black; font-size:18px;" align="justify"><?php echo $proyect['p_descripcion'];?></p><br>
			<strong>Estatus: </strong>
			<span><?php echo $proyect['p_estatus'];?></span><br><br>
			<button class="btn btn-primary"><a style="color:white;" href="?menu_em=proyectos Todos">Regresar</a></button>
		</div>
	</div>
</div>
