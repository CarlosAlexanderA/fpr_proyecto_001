<?php

	$nombreU=$_POST['nombre'];
	$apellidoU=$_POST['apellido'];
	$mail=$_POST['email'];
	$telefono=$_POST['telefono'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	date_default_timezone_set("America/Lima");
				
	$fechaActual = date("Y-m-d H:i:s");
	require("connect_db.php");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");

	$tbl_clientes=mysqli_query($mysqli,"SELECT * FROM cliente ");
	//id_c,nombre_c,apellido_c, telefono_c,email_c,id_login
	//as cl join login as lg on cl.id_login = lg.id;
	$check_mail=mysqli_num_rows($checkemail);

		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");

				mysqli_query($mysqli,"INSERT INTO login VALUES('','$nombreU','$apellidoU','$telefono','$mail','$pass','','2','$fechaActual')");

				$id_login=mysqli_query($mysqli, "SELECT id_c FROM login WHERE email='$mail'");
				$arreglo_id = mysqli_fetch_array($id_login);
				//echo $arreglo_id[0];
				mysqli_query($mysqli,"INSERT INTO cliente VALUES('','$nombreU','$apellidoU','$telefono','$mail','','','echo $arreglo_id[0];')");
				// //echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>