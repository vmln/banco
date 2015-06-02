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
                      <li><a href="?menu=contacto">CONTACTO</a></li>
                    </ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div><!-- /navbar -->
    <!-- Migas de pan -->
      <ul class="breadcrumb">
        <li><a href="?menu=home">HOME</a> <span class="divider">/</span></li>
        <li class="active">RESULTADOS DE BUSQUEDA<span class="divider">/</span></li>
     </ul>
<?php
  $busca="";
  $busca=$_POST['buscar'];
  if($busca!=""){
  $busqueda=mysql_query("SELECT * FROM proyecto WHERE p_nombre LIKE '%".$busca."%' AND p_estatus!='Guardado'");//cambiar nombre de la tabla de busqueda
  while ( $proyecto = mysql_fetch_array($busqueda)) {
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
}
?>