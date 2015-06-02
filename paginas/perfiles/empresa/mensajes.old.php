<?PHP
	include("includes/lib.php");
	$comentario=mysql_query("
					SELECT *
					FROM proyecto
					WHERE id_usuario=".$_SESSION["id_usuario"]."
	")or die(mysql_error());
	if(mysql_num_rows($comentario)>0){
?>
<div id="inicio">
<h2>Respuesta del proyecto</h2>
<div id="div"></div>
<table width="578" border="0" cellpadding="8">
	<?PHP
		$cont=1;
		while($row=mysql_fetch_array($comentario)){
			#IMPRIMIR COMENTARIOS DE LAS PROMOCIONES
			$promocion=mysql_query("
							SELECT
								mensaje.id_mensaje,
								mensaje.texto_mensaje,
								mensaje.fecha,
								CONCAT(usuario.nombre, ' ', usuario.apellido) AS user,
								usuario.img
							FROM usuario
							JOIN mensaje ON usuario.id_usuario=mensaje.id_usuario
							WHERE mensaje.id_proyecto=".$row["id_proyecto"]."
							GROUP BY mensaje.id_mensaje
			")or die(mysql_error());
			?>
            	<script language="javascript">
					$(document).ready(function(){
						$("input[name='Responder<?PHP echo $cont?>']").bind("click",function(){
							comentarPromo(<?PHP echo $row["id_proyecto"];?>);
						});
					});
				</script>
            <?PHP
			echo '<tr>
				<td width="59" valign="top" align="center">
				<img src="img/proyectos/'.$row["p_img"].'" width="50"/></td>
				<td width="175">
					<b style="text-transform:uppercase;">'.$row["p_nombre"].'</b><br/>
					'.$row["p_descripcion"].'<br/>
					<span style="font-size:13px;">'.date("d",strtotime($row["p_fecha"])).'/'.mes(date("m",strtotime($row["p_fecha"]))).'/'.date("Y",strtotime($row["p_fecha"])).'</span><br/><br/>';
					if(mysql_num_rows($promocion)>0){
						echo '<b>Comentarios</b><br><hr/>
						<table width="100%" border="0" align="right">';
						while($rowcoment=mysql_fetch_array($promocion)){
							echo $rowComent["id_mensaje"];
							#VERIFICAR SI ES EL MISMO USUARIO
							if($rowcoment["id_usuario"]==$_SESSION["id_usuario"]){
								$user="Yo";
								$action='<a href="#" name="dropComent'.$rowcoment["id_mensaje"].'"><img src="img/action/delete.png"/></a>';
							?>
								<script language="javascript">
        //                             $(document).ready(function(){
        //                                 $("a[name='dropComent<?PHP echo $rowcoment["idcomentario"];?>']").bind("click",function(){
        //                                     var x=confirm("¿Esta seguro de eliminar su comentario?");
        //                                     if(x){
        //                                         $.ajax({
        //                                             url:"paginas/registro/eliminarComentario.php",
        //                                             data:"idcomentario="+<?PHP echo $rowcoment["idcomentario"];?>,
        //                                             type:"POST",
        //                                             success: function(data){
        //                                                 if(data!=1){
        //                                                     alert(data);
        //                                                 }else{
        //                                                     location.reload();
        //                                                 }
        //                                             }
        //                                         });
        //                                     }
        //                                 });
        //                             });
                             </script>
                            <?PHP
							}else{
								$user=$rowcoment["user"];
								$action="&nbsp;";
							}
							echo '
								<tr>
									<td width="4%">'.$action.'</td>
									<td width="10%">
										<img src="img/perfiles/'.$rowcoment["img"].'" width="30"/>
									</td>
									<td width="86%" align="left">
										<b>'.$user.'</b><br/>
									'.$rowcoment["texto_mensaje"].'<br/>
									<span style="font-size:13px;">'.date("d",strtotime($rowcoment["fecha"])).'/'.mes(date("m",strtotime($rowcoment["fecha"]))).'/'.date("Y",strtotime($rowcoment["fecha"])).'</span></td>
								</tr>

							';
						}

						echo '
							<tr>
								<td colspan="2"><input type="button" name="Responder'.$cont.'" value="Responder" class="comentar"/></td>
							</tr>
							</table>';
					}
				echo '</td>
			</tr>
			';
			$cont++;
		}

    ?>
</table>
<?PHP
	}else{
		echo 'No hay publicaciones registradas';
	}
?>
</div>
<div id="comentario">
</div>
