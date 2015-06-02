<h3 class="titulo_pagina">Calificar proyectos terminados</h3>
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
				<div class="span3">
					<strong>Proyecto: </strong><br>
					<span><?php echo $proyecto['p_nombre'];?></span>
				</div>
				<div class="span3">
					<strong>Calificaci&oacute;n: </strong><br>
					<img src="img/rating.png" width="100">
				</div>
				<div class="span3">
					<button class="btn btn-primary">Calificar</button>
				</div>
			</div>
		</div>
	<?php
		}
	?>
</section><br>