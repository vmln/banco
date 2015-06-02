<!-- Migas de pan -->
  <ul class="breadcrumb">
    <li><a href="?menu_res=inicio">HOME</a> <span class="divider">/</span></li>
    <li class="active">RESULTADOS DE B&Uacute;SQUEDA<span class="divider">/</span></li>
 </ul>
<?php
  $busca="";
  $busca=$_POST['search'];
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