	<?php
		$p=mysql_query("
			select *
			FROM proyecto
			WHERE id_usuario=".$_SESSION["id_usuario"]." and p_estatus='Nuevo'
			")or die(mysql_error());
		while ($proyecto=mysql_fetch_array($p)) {
		?>
<div class="row-fluid">
	<button class="span12">
		<a href="?menu_em=det.mensaje&id=<?php echo $proyecto['id_proyecto'];?>">
			<div class="span1">
				<?php
				if($proyecto["p_img"]==""){
	      			echo '<img src="img/proyectos/default.png" width="50" height="60" />';
	    		}else{
	      			echo '<img src="img/proyectos/'.$proyecto["p_img"].'" width="50" />';
	   			}?>
			</div>
			<div class="span3"><strong><?php echo $proyecto['p_nombre'];?></strong></div>
			<div class="span3 visible-desktop"><?php echo $proyecto['p_clasificacion'];?></div>
			<div class="span3"><?php echo $proyecto['p_fecha'];?></div>
			<div class="span2 visible-desktop"><?php echo $proyecto['p_duracion'];?></div>
		</a>
	</button>
</div>
	<?php
		}
	?>
<br>