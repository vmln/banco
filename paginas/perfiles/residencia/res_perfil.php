<!-- Migas de pan -->
  <ul class="breadcrumb">
    <li><a href="?menu_res=inicio">HOME</a> <span class="divider">/</span></li>
    <li class="active">EDITAR PERFIL<span class="divider">/</span></li>
 </ul>
<br>
<?PHP
	$info=mysql_query("
				SELECT *
				FROM usuario
        WHERE id_usuario=".$_SESSION["id_usuario"]."
	")or die(mysql_error());
	$user=mysql_fetch_array($info);
	?>
<?php
	if($user["img"]==""){
	?>
			<div class="span11">
		<legend align="center">Selecciona una imagen para continuar</legend>
		<form action="paginas/perfiles/residencia/acciones/img.php" method="post"  enctype="multipart/form-data" align="center" style="background-color: #f4f4f4;">
			<div class="row-fluid" align="center">
				<div class="span12">
					<div class="span3">&nbsp;</div>
					<div class="span6">
						<p>
				            <label for="img">Im&aacute;gen:</label>
				            <img class="img-circle" src="img/perfiles/<?php echo $user['img'];?>" width="100px"><br>
							<span class="btn btn-default fileinput-button">
								<i class="icon-plus icon-black"></i>
								<span>Seleccionar foto...</span>
								<input type="file" name="img" accept="image/*" required="required">
							</span><br><br>
				         <input class="btn btn-success" type="submit" name="Guardar" id="Guardar" value="Guardar">
				        </p>
					</div>
					<div class="span3">&nbsp;</div>
				</div>
			</div>
		</form>
	</div>
	<?php
	}else{
	?>
<div class="row-fluid">
	<div class="span11">
		<legend align="center">Editar Perfil: <span style="color:green;"><?php echo $user['nombre'];?></span></legend>
		<form action="paginas/perfiles/residencia/acciones/modificar_perfil.php" method="post"  enctype="multipart/form-data" align="center" style="background-color: #f4f4f4;">
			<div class="row-fluid" align="center">
				<div class="span12">
					<div class="span3">&nbsp;</div>
					<div class="span6">
						<p>
				            <label for="img">Im&aacute;gen:</label>
				            <img class="img-circle" src="img/perfiles/<?php echo $user['img'];?>" width="100px"><br>
				            [<a href="img/perfiles/<?PHP echo $user["img"];?>" target="_blank">Ver imagen de perfil</a>] <br>
							<span class="btn btn-default fileinput-button">
								<i class="icon-plus icon-black"></i>
								<span>Seleccionar foto...</span>
								<input type="file" name="img" accept="image/*">
							</span><br>
				        </p>
					</div>
					<div class="span3">&nbsp;</div>
				</div>
			</div>
			<div class="row-fluid" align="center">
				<div class="span12">
					<div class="span6">
					<p>
						<label class="control-label" for="nombre">Nombre:</label>
						<input name="nombre" type="text" class="input-xxlarge" value="<?PHP echo $user["nombre"];?>">
						<label class="control-label" for="apellido">Apellido: </label>
						<input name="apellido" type="text" class="input-xxlarge" value="<?PHP echo $user["apellido"];?>">
					</p>
					</div>
				</div>
			</div>
			<div class="row-fluid" align="center">
				<div class="span12">
					<div class="span6">
					<p>
						<label class="control-label" for="telefono">Tel&eacute;fono:</label>
						<input name="telefono" type="text" class="input-xxlarge" value="<?PHP echo $user["telefono"];?>">
					</p>
					</div>
				</div>
			</div>
			<div class="row-fluid" align="center">
				<div class="span12">
					<div class="span6">
					<p>
						<label class="control-label" for="correo">Correo:</label>
						<span class="input-xxlarge uneditable-input"><?PHP echo $user["correo"];?></span>
						<label class="control-label" for="usuario">Nombre de Usuario: </label>
						<span class="input-xxlarge uneditable-input"><?PHP echo $user["usuario"];?></span>
					</p>
					</div>
				</div>
			</div>
			<div class="row-fluid" align="center">
				<div class="span12">
					<div class="span6">
					<p>
						<label class="control-label" for="pass">Contrase&ntilde;a:</label>
						<input name="pass" type="password" class="input-xxlarge" value="<?PHP echo $user["contrasenia"];?>">
						<label class="control-label" for="pass2">Reperir Contrase&ntilde;a: </label>
						<input name="pass2" type="password" class="input-xxlarge" value="<?PHP echo $user["contrasenia"];?>">
					</p>
					</div>
				</div>
			</div>
			<input class="btn btn-success" type="submit" name="Guardar" id="Guardar" value="Guardar">
		</form>
	</div>
</div>
<?php
}
?>