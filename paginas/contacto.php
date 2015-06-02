 <!-- inicio barra de menus =========================================-->
            <div class="navbar">
              <div class="navbar-inner">
                <div class="container">
                   <span class="brand" style="font-size:15px;">Banco de Proyectos ITSFCP</span>
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
                      <li><a href="?menu=inicio">INICIO</a></li>
                      <li><a href="?menu=conocenos">CON&Oacute;CENOS</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROYECTOS<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="?menu=n_proyectos">PROYECTOS NUEVOS</a></li>
                          <li><a href="?menu=p_proyectos">PROYECTOS EN PROCESO</a></li>
                          <li><a href="?menu=t_proyectos">PROYECTOS TERMINADOS</a></li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">EMPRESAS<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="?menu=t_empresas">TODAS</a></li>
                          <li><a href="?menu=r_empresas">RECIENTES</a></li>
                          <li><a href="?menu=u_empresas">&Uacute;LTIMAS</a></li>
                        </ul>
                      </li>
                      <li class="active"><a href="?menu=contacto">CONTACTO</a></li>
                    </ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div><!-- /navbar -->
      <!-- Breadcrumbs -->
          <ul class="breadcrumb">
            <li><a href="?menu=home">HOME</a> <span class="divider">/</span></li>
            <li class="active">CONTACTO<span class="divider">/</span></li>
         </ul>
<!-- menu -->
<h3 class="titulo_pagina">Contactos</h3>
<div class="hero-unit">
    <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#direct" data-toggle="tab">Directorio</a></li>
              <li><a href="#direccion" data-toggle="tab">Direcci&oacute;n</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="direct">
              <div class="container-fluid">
                  <?php
                    $aca=mysql_query("
                      select *
                      FROM usuario
                      WHERE tipo_usuario='academia'
                      ")or die(mysql_error());
                    while ($academia=mysql_fetch_array($aca)) {
                    ?>
                <div class="row-fluid">
                  <div class="span12">
                    <div class="span2">
                      <img src="img/perfiles/img.png" width="100px">
                    </div>
                    <div class="span6">
                      <strong>Nombre: </strong><?php echo $academia['nombre'];?><br>
                        <strong>Apellido: </strong><?php echo $academia['apellido'];?><br>
                        <strong>&Aacute;rea o Carrera: </strong><?php echo $academia[''];?><br>
                        <strong>Correo Electr&oacute;nico: </strong><?php echo $academia['correo'];?><br>
                        <strong>Tel&eacute;fono: </strong><?php echo $academia['telefono'];?>
                    </div>
                  </div>
                </div>
  <?php
    }
  ?>
            </div>
          </div>
              <div class="tab-pane fade" id="direccion">
                <div class="container-fluid">
                <div class="row-fluid">
                 <div class="span12">
                    <div class="span5" align="center" style="color:green;">
                        <h2 style="color:black;">&iquest;Como llegar?</h2><br>
                        <p>Instituto Tecnol&oacute;gico Superior de Felipe Carrillo Puerto</p>
                        <p>Carretera Vigia Chico Kil&oacute;metro 1.5 Centro</p>
                        <p>77200 Felipe Carrillo Puerto Q.R M&eacute;xico</p>
                        <p>019838340051</p>
                        <p>itscarrillopuerto.edu.mx</p>
                    </div>
                <div class="span7">
                  <img src="img/ubicacionitsfcp.jpg">
                </div>
                <br>
                <div class="row-fluid">
                  <div class="span12">
                    <div class="span3">&nbsp;</div>
                    <div class="span7" style="background-color: #f4f4f4;">
                      <legend>Contacto</legend>
                      <form action="paginas/acciones/save.contacto.php" method="post" enctype="multipart/form-data" name="form">
                        <p>
                          <label class="control-label" for="nombre">Nombre:</label>
                          <input  class="input-xxlarge"type="text" name="nombre" id="nombre" required="required">
                        </p>
                        <p>
                          <label class="control-label" for="apellido">Apellido:</label>
                          <input  class="input-xxlarge"type="text" name="apellido" id="apellido" required="required">
                        </p>
                        <p>
                          <label class="control-label" for="correo">Correo Electr&oacute;nico:</label>
                          <input  class="input-xxlarge"type="text" name="correo" id="correo" required="required">
                        </p>
                        <p>
                          <label class="control-label" for="telefono">Tel&eacute;fono:</label>
                          <input  class="input-xxlarge"type="text" name="telefono" id="telefono" required="required">
                        </p>
                        <p>
                          <label class="control-label" for="comentario">Comentario:</label>
                          <textarea class="input-xxlarge" rows="5" name="comentario" id="comentario" required="required"></textarea>
                        </p>

                        <div class="span11" align="center">
                          <input class="btn btn-success" type="button" onClick="contacto()"; value="Guardar" align="center">
                        </div>
                      </form>
                    </div>
                    <div class="span3">&nbsp;</div>
                  </div>
                </div>
                </div>
            </div>
          </div>

</div>
</div>
</div>