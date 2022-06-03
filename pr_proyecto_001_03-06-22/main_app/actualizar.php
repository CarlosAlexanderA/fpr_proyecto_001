<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:login.php");
}
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Pagina de Edicion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">

</head>

<body>

	<div class="container">

		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
			<li><a href="">Bienvenido <strong><?php echo $_SESSION['user']; ?></strong> </a></li>
			<li><a href="desconectar.php"> Cerrar Cesión </a></li>
		</ul>

	</div>

			<div class="caption">

				<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
				<h2> Administración de usuarios registrados</h2>
				<div>
					<br/>
					<h4>Edición de usuarios</h4>
					<div>
						<?php
						extract($_GET);
						require("connect_db.php");
						$sql = "SELECT * FROM login WHERE id=$id";
						//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
						$ressql = mysqli_query($mysqli, $sql);
						while ($row = mysqli_fetch_row($ressql)) {
							$id = $row[0];
							$user = $row[1];
							$pass = $row[2];
							$email = $row[3];
							$pasadmin = $row[4];
						}
						?>
						<form action="ejecutaactualizar.php" method="post">

							Id<br><input type="text" name="id" value="<?php echo $id ?>" readonly="readonly"><br>
							Usuario<br> <input type="text" name="user" value="<?php echo $user ?>"><br>
							Password usuario<br> <input type="text" name="pass" value="<?php echo $pass ?>"><br>
							Correo usuario<br> <input type="text" name="email" value="<?php echo $email ?>"><br>
							Pssword administrador<br> <input type="text" name="pasadmin" value="<?php echo $pasadmin ?>"><br>

							<br>
							<input type="submit" value="Guardar" >
						</form>
					</div>
				</div>

			</div>

</body>

</html>