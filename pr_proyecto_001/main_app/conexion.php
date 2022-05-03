<?php 
	$mysqli = new mysqli('localhost','root','','login');
	console.log("conexxion buena");
	if ($mysqli -> connect_error):
		echo "error al conectarse con MySQL debido al error ".$mysqli -> connect_error;
		console.log("conexxion mala");
	endif;
	
	
 ?>