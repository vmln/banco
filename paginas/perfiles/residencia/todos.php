<?php
	$consulta = mysql_query("SELECT * FROM proyecto WHERE (p_estatus != 'Guardado')");
?>
	<div class="row-fluid">
		<div class="span12">
				<?php
				while ( $proyecto = mysql_fetch_array($consulta)) {
					?>
					<div class="span3" align="center" style="margin-left: 1%;">
						<a href="" style="text-decoration:none;">
						<div class="well well-large" style="height:120px">
						<?php
							if($proyecto["p_img"]==""){
			  				echo '<img src="img/proyectos/default.png" class="img-circle" width="70"/>';
							}else{
			  				echo '<img src="img/proyectos/'.$proyecto["p_img"].'" class="img-circle" width="50"/>';
							}
						?><br>
						  <span style="font-size:14px"><?php echo "$proyecto[p_nombre]";?></span><br>
						  <small style="font-size:10px"><?php echo ''.date("d",strtotime($proyecto["p_fecha"])).'/'.mes(date("m",strtotime($proyecto["p_fecha"]))).'/'.date("Y",strtotime($proyecto["p_fecha"])).'';?></small><br>
						  <span style="font-size:8px"><?php echo "$proyecto[p_estatus]";?></span>
						</div>
						</a>
					</div>
					<?php
			}
		 ?>
 	</div>
 </div>