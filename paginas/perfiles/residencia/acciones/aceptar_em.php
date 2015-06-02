<?php

$idusuario=$_REQUEST['id'];

		$res=mysql_query("
				UPDATE usuario SET
					usuario.estatus='aceptado'
					WHERE usuario.id_usuario='".$idusuario."'
		")or die(mysql_error());
			// UPDATE  `canaco`.`servicios` SET  `respuesta` =  'Aceptado' WHERE  `servicios`.`idservicio` =25;
			if ($res) {
                        echo "
							<script>
								alert('Validado correctamente');
                                 window.location='?menu_res=Empresas new';
							</script>
                        ";
				}else{
						echo "
							<script>
								alert('NO SE HA PODIDO COMPLETAR LA SOLICITUD!!');
                                 window.location='?menu_res=Empresas new';
							</script>
                        ";

				}
?>