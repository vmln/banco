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
                      <li  class="active"><a href="?menu=inicio">INICIO</a></li>
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
  <!-- migas de pan -->
    <ul class="breadcrumb">
      <li class="active">HOME<span class="divider">/</span></li>
    </ul>
<!-- Inicio slider de imagenes==================================== -->
    <div class="slider" style="width:90%;">
       <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="img/slider/bootstrap-mdo-sfmoma-01.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Primera Imagen</h4>
                      <p>Esta es la primera imagen del slider.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/slider/bootstrap-mdo-sfmoma-02.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Segunda Imagen</h4>
                      <p>Esta es la Segunda imagen del slider.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/slider/bootstrap-mdo-sfmoma-03.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Tercera Imagen</h4>
                      <p>Esta es la tercera imagen del slider.</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
              </div>
    </div>

  <!-- seccion de noticias -->
  <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
            <div class="colIzquierda">
              <div class="contenidos_articulos">
                <h2>NOTICIAS</h2>
                  <?php
                      $re=mysql_query("select * from noticias")or die(mysql_error());
                      while ($f=mysql_fetch_array($re)) {
                    ?>
                  <article class="articulos">
                    <h1 class="articulo-titulo"><a><?php echo $f['titulo'];?></a></h1>
                    <div class="etiqueta"><?php echo $f['fecha'];?></div>
                      <a href="#" class="img-rounded imagen"><img src="img/prueba/info/<?php echo $f['img_noticia'];?>"></a>
                      <p><?php echo $f['noticia'];?></p>
                      <p><a title="" href="#" class="button red normal">LEER M&Aacute;S...</a></p>
                  </article>
                    <?php
                      }
                    ?>
              </div>
            </div>
          <div class="colDerecha" class="span5">
            <aside class="MODULOS" style="margin-left:1em;">
                    <div class="modulos-modulo modulos">
                        <a  href="#"><img src="img/prueba/info/1.png" class="img-rounded imagen"></a>
                    </div>
                    <div class="modulos-modulo modulos">
                        <a href="#" target="_blank"><img src="img/prueba/info/2.png"></a>
                    </div>
                    <div class="modulos-modulo modulos">
                        <a href="#"><img src="img/prueba/info/3.png"></a>
                    </div>
            </aside>
          </div>
        </div>
</div>
</div>