<?PHP
	$users=mysql_query("
		SELECT
			usuario.id_usuario,
			usuario.fecha_reg,
			usuario.tipo_usuario,
			usuario.estatus,
			empresa.emp_nombre,
			empresa.rfc
		FROM usuario
		JOIN empresa ON usuario.id_usuario=empresa.id_usuario
		WHERE tipo_usuario='empresa' and estatus='aceptado'
	")or die(mysql_error());
if(mysql_num_rows($users)>0){
?>
<h2>Empresas validadas</h2>
<div id="div"></div>

			<div class="row-fluid" align="center">
				<div class="span12">
					<?PHP
					while($row=mysql_fetch_array($users)){
						?>
					<div class="span2">
						<a href="<?PHP echo '?menu_res=detalles_true&id='.$row["id_usuario"].'';?>" class="btn btn-default"><strong><?PHP echo $row["emp_nombre"];?></strong><br><small><?PHP echo $row["fecha_reg"];?></small>
						</a>
					</div>
					<?php
						}
					?>
				</div>
			</div><br>
<?PHP
}else{
	echo "<h3>No hay Empresas Validadas</h3>";
}?>