<?PHP
#IMPRIMIR todos los proyectos
$re=mysql_query("
				SELECT
					proyecto.id_proyecto,
					proyecto.p_nombre,
					proyecto.p_duracion
				FROM proyecto
")or die(mysql_error());
?>
<legend style="color:blue;">Todos los proyectos</legend>
<?PHP
	while($proyecto=mysql_fetch_array($re)){
?>
<div class="row-fluid">
	<div class="span12">
		<div class="span2"></div>
		<div class="span3"><strong>Nombre del Proyecto: </strong></div>
		<div class="span3" align="center">
			<span><a href="<?PHP echo '?menu_res=detalles_p&id_proyecto='.$proyecto["id_proyecto"].'';?>" class="btn btn-default"><?PHP echo $proyecto["p_nombre"];?></a></span>
		</div>
	</div>
</div>
<?PHP
	}
?>