<form action="paginas/acciones/reg_empresa_save.php" method="post" enctype="multipart/form-data" name="form">
	<div class="row-fluid" >
    <!-- Migas de pan -->
          <ul class="breadcrumb">
            <li><a href="?menu=home">HOME</a> <span class="divider">/</span></li>
            <li class="active">Registro empresa<span class="divider">/</span></li>
         </ul>
		<div class="span12">
			<div class="span2">&nbsp;</div>
			<div class="span7" style="background-color: #f4f4f4;">
				<div class="row-fluid">
					<div class="span9">
						<legend align="left" style="margin-left:10px; width:90%;">Datos de la empresa</legend>
						<p>
							<label class="control-label" for="nombre_emp">Nombre de la empresa:</label>
							<input class="input-xxlarge" type="text" name="nombre_emp" id="nombre_emp" required="required">
						</p>
						<p>
							<label class="control-label" for="correo_emp">Correo Electr&oacute;nico:</label>
							<input class="input-xxlarge" type="text" name="correo_emp" id="correo_emp" required="required">
						</p>
						<p>
							<label class="control-label" for="usuario">Nombre de usuario:</label>
							<input  class="input-xxlarge"type="text" name="usuario" id="usuario" required="required">
						</p>
						<p>
							<label class="control-label" for="contrasenia">Contrase&ntilde;a:</label>
							<input  class="input-xxlarge"type="password" name="contrasenia" id="contrasenia" required="required">
						</p>
						<p>
							<label class="control-label" for="re_contrasenia">Confirmar Contrase&ntilde;a:</label>
							<input  class="input-xxlarge"type="password" name="re_contrasenia" id="re_contrasenia" required="required">
						</p>
						<p>
							<label class="control-label" for="direccion">Direcci&oacute;n:</label>
							<input  class="input-xxlarge"type="text" name="direccion" id="direccion" required="required">
						</p>
						<p>
							<label class="control-label" for="rfc">RFC:</label>
							<input  class="input-xxlarge"type="text" name="rfc" id="rfc" required="required">
						</p>
						<p>
							<label class="control-label" for="telefono">Tel&eacute;fono:</label>
							<input  class="input-xxlarge"type="text" name="telefono" id="telefono" required="required">
						</p>
						<legend align="left">Datos del encargado de la empresa</legend>
						<p>
							<label class="control-label" for="contacto">Nombre del encargado:</label>
							<input  class="input-xxlarge"type="text" name="contacto" id="contacto" required="required">
						</p>
						<p>
							<label class="control-label" for="apellido">Apellido del encargado:</label>
							<input  class="input-xxlarge"type="text" name="apellido" id="apellido" required="required">
						</p>
					</div>
				</div>
				</div>
				<div class="row-fluid">
					<div class="span11" align="center">
						<input class="btn btn-success" type="button" onClick="registrar()"; value="Guardar" align="center">
					</div>
				</div>
			</div>
		</div>
</form>