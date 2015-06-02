<div class="row-fluid">
	<div class="span11">
	<form action="paginas/perfiles/empresa/acciones/save.proyect.php" method="post" enctype="multipart/form-data" name="form" style="background-color: #f4f4f4;">
	<div class="row-fluid">
		<div class="span4">
			<p>
				<label class="control-label" for="nombre_pro">Nombre del Proyecto:</label>
			</p>
		</div>
		<div class="span4">
			<p>
				<input type="text" name="nombre_pro" id="nombre_pro" required="required">
			</p>

		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<p>
				<label class="control-label" for="descripcion">Descripci&oacute;n del Proyecto:</label>
			</p>
		</div>
		<div class="span4">
			<p>
				<textarea rows="5" name="descripcion" id="descripcion" required="required"></textarea>
			</p>
		</div>
	</div>
<!-- 	<div class="row-fluid">
		<div class="span4">
			<label class="control-label" for="archivo">Subir archivo del proyecto</label>
		</div>
		<div class="span4">
			<input type="file" name="archivo" />
		</div>
	</div> -->
	<div class="row-fluid">
		<div class="span4">
			<p>
				<label class="control-label" for="duracion">Duraci&oacute;n del Proyecto:</label>
			</p>
		</div>
		<div class="span4">
			<p>
				<input type="text" name="duracion" id="duracion" required="required">
			</p>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<p>
				<label class="control-label" for="apoyo">Apoyo Ofrecido:</label>
			</p>
		</div>
		<div class="span4">
			<p>
				<input type="text" name="apoyo" id="apoyo" required="required">
			</p>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<p>
				<label class="control-label" for="conocimiento">Conocimiento y habilidades Requeridas:</label>
			</p>
		</div>
		<div class="span4">
			<p>
				<textarea rows="5" name="conocimiento" id="conocimiento" required="required"></textarea>
			</p>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<p>
				<label class="control-label" for="carrera">Carrera:</label>
			</p>
		</div>
		<div class="span4">
			<p>
				<select name="carrera" id="carrera">
			  <option value="Ing. Sistemas Computacionales">Ing. Sistemas Computacionales</option>
			  <option value="Ing. Gestion Empresarial">Ing. Gesti&oacute;n Empresarial</option>
			  <option value="Ing. Industrias Alimentarias">Ing. Industrias Alimentarias</option>
			  <option value="Ing. Industrial">Ing. Industrial</option>
			  <option value="Ing. Administracion">Ing. Administraci&oacute;n</option>
			</select>
			</p>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span3"></div>
		<div class="span6">
			<button class="btn btn-success"><a style="color:white;" href="?menu_em=default">Cancelar</a></button>
			<button class="btn btn-success"><a style="color:white;" href="?menu_em=default">Guardar</a></button>
			<input class="btn btn-success" type="submit" name="Enviar" id="Enviar" value="Enviar" align="center">
		</div>
	</div>
	</form>
	</div>
</div>