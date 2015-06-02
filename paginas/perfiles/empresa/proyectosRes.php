<h3 class="titulo_pagina">Proyectos recientes</h3>
<section>
	<?php
		$p=mysql_query("
			select *
			FROM proyecto
			WHERE id_usuario=".$_SESSION["id_usuario"]." and p_estatus='Nuevo'
			")or die(mysql_error());
		while ($proyecto=mysql_fetch_array($p)) {
		?>
		<div class="row-fluid" align="center">
			<div class="span12" style="border:1px #C2B9B9 solid">
				<div class="span2">
					<?php
						if($proyecto["p_img"]==""){
	      				echo '<img src="img/proyectos/default.png" width="80" height="80" />';
	    			}else{
	      				echo '<img src="img/proyectos/'.$proyecto["p_img"].'" width="50" />';
	   				}
	   				?><br>
				</div>
				<div class="span2">
					<strong>Proyecto: </strong><br>
					<span><?php echo $proyecto['p_nombre'];?></span>
				</div>
				<div class="span2">
					<strong>Publicado el: </strong><br>
					<span><?php echo $proyecto['p_fecha'];?></span>
				</div>
				<div class="span2">
					<strong>Duraci&oacute;n: </strong><br>
					<span><?php echo $proyecto['p_duracion'];?></span>
				</div>
				<div class="span3">
					<button class="btn btn-primary">Ver mensaje</button>
				</div>
			</div><br>
		</div>
	<?php
		}
	?>
</section><br>