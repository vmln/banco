<table border=1>
	<tr>
		<?php
		$consultacat=mysql_query("SELECT p_clasificacion, clasificacion FROM p_clasificacion");
while ($categorias=mysql_fetch_array($consultacat)) {
	echo "<td><a href='?menu_res=recientes&categoria=$categorias[p_clasificacion]'>$categorias[clasificacion]</a></td>";
}
		 ?>
	</tr>
</table>
<?php
if (isset($_GET["categoria"])) {
	$consulta = mysql_query("SELECT proyecto.p_clasificacion, proyecto.p_nombre FROM proyecto WHERE (proyecto.p_clasificacion = '$_GET[categoria]')");
	echo "<table border=1>";
	while ( $proyecto = mysql_fetch_array($consulta)) {
		echo "<tr><td>$proyecto[p_nombre]</td><td>$proyecto[p_clasificacion]</td></tr>";
	}
	echo "</table>";
}
 ?>