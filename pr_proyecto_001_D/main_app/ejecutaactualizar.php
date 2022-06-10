<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	if($_POST['volver']){
		echo "<script>location.href='admin.php'</script>";
	}

	$sentencia="update cliente inner join login on login.id=cliente.id_login set login.nombre='$nombre',login.apellido='$apellido', login.telefono='$telefono', cliente.estado='$estado' where cliente.id='$id'";
	//cli.id,lg.nombre,lg.apellido,lg.telefono,cli.estado FROM login as lg INNER JOIN cliente as cli on lg.id=cli.id_login
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
?>