<?php


		$mysqli = new MySQLi("localhost", "root","", "base_dato");
		if ($mysqli -> connect_errno) {
			printf("Conexion fallida: %s\n", mysqli_connect_error());
        	exit();
			// die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
			// 	. ") " . $mysqli -> mysqli_connect_error());
		}
		// else
			//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
?>