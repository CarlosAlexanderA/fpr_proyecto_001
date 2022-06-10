<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['email']) {
	header("Location:login.php");
}
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Pagina de Edicion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<link rel="stylesheet" href="css/actualizar.css">

</head>

<body>

	<!-- <div class="container">

		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
			<li><a href="">Bienvenido <strong><?php echo $_SESSION['email']; ?></strong> </a></li>
			<li><a href="desconectar.php"> Cerrar Cesión </a></li>
		</ul>

	</div> -->

	<div class="caption">

		<!-- ///////////////////////////////////////////////////Empieza cuerpo del documento interno//////////////////////////////////////////// -->
		<h2> Edición de Proveedores</h2>
		<div>
			<div>
				<?php
				
				extract($_GET);
				require("connect_db.php");

				$sql1 = "SELECT * FROM proveedor WHERE id=$id_get;";
				//$sql1 = "SELECT lg.id,lg.nombre,lg.apellido,lg.telefono,cli.estado FROM login as lg INNER JOIN cliente as cli on lg.id=cli.id_login WHERE cli.id=$id;";
				//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$ressql = mysqli_query($mysqli, $sql1);
						while ($row = mysqli_fetch_array($ressql)) {
							$id = $row[0];
							$cuenta = $row[1];
							$nombre = $row[2];
							$descripcion = $row[3];
							$estado = $row[4];
						}

				?>
				<div id="contact-form">
		<div>
			<h1>Edición de Proveedores</h1>
			<h4></h4>
		</div>
		<form action="ejecutaactualizar2.php" method="post">
			<div>
				<label for="name">
					<span class="required">Id :</span>
					<input type="text" name="id" value="<?php echo $id; ?>" readonly="readonly">
				</label>
			</div>
			<div>
				<label for="name">
					<span class="required">Cuenta: </span>
					<input type="text" name="cuenta" value="<?php echo $cuenta; ?>"> </label>
			</div>
			<div>
				<label for="lastname">
					<span class="required">Nombre: </span>
					<input type="text" name="nombre" value="<?php echo $nombre ?>"> </label>
			</div>
			<div>
				<label for="email">
					<span class="required">Descripcion: </span>
					<input type="text" name="descripcion" value="<?php echo $descripcion ?>"> </label>
			</div>
			<!-- <div>
				<label for="email">
					<span class="required">Email: </span>
					<input type="text" name="email" value="<?php //echo $email ?>"> </label>
			</div> -->
			<div>
				<label for="subject">
					<span>Estado: </span>
					<select id="subject" name="estado" tabindex="4">
						<?php 
							
							if($estado){
								echo "<option value='1'>Activo</option>";
								echo "<option value='0'>Inactivo</option>";
							}else{
								echo "<option value='0'>Inactivo</option>";
								echo "<option value='1'>Activo</option>";
								
							}
						 ?>
					</select>
				</label>
			</div>
			
			<div>
				<input name="submit" type="submit" value="Actualizar"id="submit"></input>
				<input name="volver" type="submit"  value="Volver"id="submit"></input>
				
			</div>
		</form>

	</div>
			</div>
		</div>

	</div>

	
</body>

</html>