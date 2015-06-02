<?php
	$re=mysql_query("select *
			from proyecto
			where id_proyecto=".$_GET['id']
		)or die(mysql_error());
	$proyect=mysql_fetch_array($re);
?>
<div class="row-fluid">
	<div class="span12">
		<div class="span3">
			<?php
				if($proyect["p_img"]==""){
  				echo '<img src="img/proyectos/default.png" width="200"/>';
				}else{
  				echo '<img src="img/proyectos/'.$proyect["p_img"].'" width="200" />';
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
			<p style="color:black; font-size:18px;" align="justify"><?php echo $proyect['p_descripcion'];?></p>
		</div>
	</div>
</div>
<?PHP
			#IMPRIMIR MENSAJES DEL PROYECTO
			$inbox=mysql_query("
							SELECT
								mensaje.id_mensaje,
								mensaje.texto_mensaje,
								CONCAT(usuario.nombre, ' ', usuario.apellido) AS user,
								usuario.img,
								usuario.id_usuario,
								mensaje.fecha
							FROM usuario
							JOIN mensaje ON usuario.id_usuario=mensaje.id_usuario
							WHERE mensaje.id_proyecto=".$proyect["id_proyecto"]."
							GROUP BY mensaje.id_mensaje
			")or die(mysql_error());
			$pro=mysql_fetch_array($inbox);
			?>
<legend style="color:blue;">Mensajes</legend>
<div class="row-fluid">
	<div class="span12">
		<div class="span2">&nbsp;</div>
		<div class="span9">
		  <div class="media">
              <a class="pull-left" href="#">
              	<?php echo '<img class="media-object" src="img/perfiles/'.$pro["img"].'" />';?>
              </a>
              <div class="media-body">
                <h4 class="media-heading"><?php echo $pro['user'];?></h4>
                <?php echo $pro['texto_mensaje'];?>
              </div>
            </div>
        </div>
	</div>
</div>
<button class="btn btn-primary"><a style="color:white;" href="?menu_em=mensajes">Regresar</a></button>
