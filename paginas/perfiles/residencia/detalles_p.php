<?php
	$re=mysql_query("select *
			from proyecto
			where id_proyecto=".$_GET['id_proyecto']
		)or die(mysql_error());
	$proyect=mysql_fetch_array($re);
?>
<legend style="color:blue;"><?php echo $proyect['p_nombre'];?></legend>
<div class="row-fluid">
	<div class="span12">
		<div class="span1">&nbsp;</div>
		<div class="span3">
			<strong>Nombre del proyecto:</strong>
		</div>
		<div class="span4">
			<button><span><?php echo $proyect['p_nombre'];?></span></button>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="span1">&nbsp;</div>
		<div class="span3">
			<strong>Carrera:</strong>
		</div>
		<div class="span4">
			<button><span><?php echo $proyect['p_clasificacion'];?></span></button>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="span1">&nbsp;</div>
		<div class="span3">
			<strong>Duraci&oacute;n:</strong>
		</div>
		<div class="span4">
			<button><span><?php echo $proyect['p_duracion'];?></span></button>
		</div>
	</div>
</div>
<!-- encontramos a usuarios interesados en el proyecto mediante su numero de control -->
<div class="row-fluid">
	<div class="span12">
		<div class="span1">&nbsp;</div>
		<div class="span3">
			<label class="control-label" for="interesados"><strong>Alumnos Interesados:</strong></label>
		</div>
			<?php
					$solicitud=mysql_query("
					SELECT
						solicitud.id_solicitud,
						solicitud.id_proyecto,
						solicitud.id_usuario,
						CONCAT(usuario.nombre, ' ', usuario.apellido) AS user,
						usuario.usuario
					FROM usuario
					JOIN solicitud ON usuario.id_usuario=solicitud.id_usuario
					WHERE solicitud.id_proyecto=".$proyect["id_proyecto"]."
					")or die(mysql_error());
				?>
		<div class="span4">
			<select name="carrera" id="carrera">
				<?php
					while ($sol=mysql_fetch_array($solicitud)) {
				?>
			  <option value="<?php echo $sol['usuario'];?>"><?php echo $sol['usuario'];?></option>
		<?php
		}
	?>
			</select>
		</div>
	</div>
</div>
<hr>
<form action="paginas/perfiles/residencia/acciones/asignacion.php" method="post" enctype="multipart/form-data" name="asignacion">
	<div class="row-fluid">
	<div class="span12">
		<div class="span1">&nbsp;</div>
		<div class="span2">
			<label class="control-label" for="estatus">Estatus:</label>
		</div>
		<div class="span3">
			<select name="carrera" id="carrera">
			  <option value="disponible">Disponible</option>
			  <option value="no disponible">No disponible</option>
			</select>
		</div>
	</div>
</div>
	<div class="row-fluid">
	<div class="span12">
		<div class="span1">&nbsp;</div>
		<div class="span5">
			<label class="control-label" for="inicio">Fecha de inicio:</label>
			<input type="text" name="inicio" class="tcal" value="" placeholder="Seleccione fecha:"/><br>
		</div>
		<div class="span5">
			<label class="control-label" for="final">Fecha de Terminaci&oacute;n:</label>
			<input type="text" name="final" class="tcal" value="" placeholder="Seleccione fecha:"/><br>
		</div>

	</div>
</div>
<div class="row-fluid">
	<div class="span11" align="center">
		<button class="btn btn-default"><a href="?menu_res=proyectos"style="color:black;">Cerrar</a></button>
		<input class="btn btn-default" type="submit" name="Guardar" id="Guardar" value="Guardar" >
	</div>
</div>
</form>