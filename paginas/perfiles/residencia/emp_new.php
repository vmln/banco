<!-- Migas de pan -->
  <ul class="breadcrumb">
    <li><a href="?menu_res=home">HOME</a> <span class="divider">/</span></li>
    <li class="active">SOLICITUDES<span class="divider">/</span></li>
 </ul>
<?PHP
	$users=mysql_query("
		SELECT
			usuario.id_usuario,
			usuario.fecha_reg,
			usuario.correo,
			usuario.img,
			usuario.tipo_usuario,
			usuario.estatus,
			empresa.emp_nombre,
			empresa.rfc
		FROM usuario
		JOIN empresa ON usuario.id_usuario=empresa.id_usuario
		WHERE tipo_usuario='empresa' and estatus='nuevo'
	")or die(mysql_error());
if(mysql_num_rows($users)>0){
?>
<div id="div"></div>
<?PHP
	while($row=mysql_fetch_array($users)){
		?>
<div class="list_emp">
		<div class="row-fluid">
				<div class="span12">
					<a href="<?PHP echo '?menu_res=detalles&id='.$row["id_usuario"].'';?>" >
						<div class="span1" align="center">
							<label class="checkbox" style="margin-left: 10px;">
							  <input type="checkbox" value="">
							</label>
						</div>
						<div class="span1">
							<?php
							if($row["img"]==""){
				  				echo '<img src="img/perfiles/default.jpg" class="img-circle" width="30"/>';
							}else{
				  				echo '<img src="img/perfiles/'.$row["img"].'" class="img-circle" width="30"/>';
							}
							?>
						</div>
						<div class="span2">
							<strong><?PHP echo $row["emp_nombre"];?></strong><br>
						</div>
						<div class="span3">
							<strong><?PHP echo $row["correo"];?></strong>
						</div>
						<div class="span2">
							<small><?PHP echo $row["fecha_reg"];?></small>
						</div>
					</a>
					<div class="span3">
						<?php echo '<a href="?menu_res=aceptar&id='.$row["id_usuario"].'" class="btn btn-primary"><span>Validar</span></a>';?>
						<?php echo '<a href="?menu_res=rechazar&id='.$row["id_usuario"].'" class="btn btn-primary"><span>Rechazar</span></a>';?>
					</div>
				</div>
			</div>
	</div>
		<?php
	}
?>
<?PHP
}else{
	echo "<h3>No hay Solicitudes</h3>";
}?>