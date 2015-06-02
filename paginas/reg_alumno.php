    <!-- Migas de pan -->
          <ul class="breadcrumb">
            <li><a href="?menu=home">HOME</a> <span class="divider">/</span></li>
            <li class="active">Registro Alumno<span class="divider">/</span></li>
         </ul>
<form action="paginas/acciones/reg_alumno_save.php" method="post" enctype="multipart/form-data" name="proyecto" id="proyecto" class="formRegistro">
	<div class="row-fluid">
		<div class="span12">
			<div class="span2">&nbsp;</div>
			<div class="span8" style="background-color: #f4f4f4;">
				<legend align="left" style="margin-left:10px; width:90%;">Reg&iacute;stro de alumnos</legend>
				<div class="row-fluid">
					<div class="span6">
						<p>
							<label class="control-label" for="nombre">Nombre(s):</label>
						<input type="text" name="nombre" id="nombre" class="input-xlarge" required="required">
						</p>
					</div>
					<div class="span6">
						<p>
							<label class="control-label" for="apellido">Apellido(s):</label>
							<input class="input-xlarge" type="text" name="apellido" id="apellido" required="required">
						</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<p>
							<label class="control-label" for="correo">N&uacute;mero de control:</label>
							<input type="text" name="correo" id="correo" class="input-small"required="required" minlength="8" maxlength="8"> + <span class="input-medium uneditable-input">@itscarrillopuerto.edu.mx</span>
						</p>
					</div>
					<div class="span6">
						<p>
							<label class="control-label" for="carrera">Carrera:</label>
							<select name="carrera" id="carrera">
							  <option value="1">Ing. Sistemas Computacionales</option>
							  <option value="4">Ing. Gesti&oacute;n Empresarial</option>
							  <option value="3">Ing. Industrias Alimentarias</option>
							  <option value="5">Ing. Industrial</option>
							  <option value="2">Ing. Administraci&oacute;n</option>
							</select>
						</p>
					</div>
				</div>
			</div>
			<div class="row-fluid">
					<div class="span12" align="center">
						<input class="btn btn-success" type="submit" name="Guardar" id="Guardar" value="Guardar" align="center">
					</div>
				</div>
			<div class="span2">&nbsp;</div>
		</div>
	</div>
</form>