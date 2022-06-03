<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:login.php");
} elseif ($_SESSION['rol'] == 2) {
	header("Location:pagUsuario.php");
}
require("connect_db.php");
?>
<html lang="en">

<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrador de Usuarios</title>

	<link rel="stylesheet" href="css/admstyle.css">
	<link rel="stylesheet" href="css/normalice.css">


</head>

<body>

	<header>
		<div class="container_head">
			<div class="head_left">
				<h2>Bienvenido <strong><?php echo $_SESSION['user']; ?></strong></h2>
			</div>
			<div class="head_center">
				<h1>ADMINISTRACION DE USUARIOS</h1>
			</div>
			<div class="head_right">
				<nav>
					<ul class="opciones">
						<li><a href="#">Pagina Principal</a></li>
						<li><a href="#">Pagina Usuarios</a></li>
						<li class="desplegable_vent">
							<div class="medida_logo">
								<a href="#" id="abrir"><img src="images/logo_user.jpg" alt="logo Usuario" /></a>
							</div>
							<ul class="opciones_users" id="miModal">

								<div class="ventana_1">
									<span class="close" id="close"><a href="#">X</a></span>
									<li class="logo_user_2">
										<img src="images/logo_user.jpg" alt="User" />
									</li>
									<li id="nom_usuario"><?php echo $_SESSION['user']; ?></li>
									<li id="correo_usuario">Correo Electronico</li>
								</div>
								<div class="ventana_2">
									<li><a class="botton" href="desconectar.php">Cerrar Sesion</a></li>
								</div>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>




	<main>
		<div class="side-bar">
			
			<ul class="nav-links">
				<li class="nav-tab active" data-view-name="create">
					<a href="#">
						<img src="https://cdn.icon-icons.com/icons2/37/PNG/512/home_house_3526.png" alt="">
						<span> Principal </span>
					</a>
				</li>
				<li class="nav-tab" data-view-name="list_usuarios">
					<a href="#">

						<span> Lista de Usuarios </span>
					</a>
				</li>
				<li class="nav-tab" data-view-name="settings">
					<a href="#">

						<span> Proveedores </span>
					</a>
				</li>
			</ul>
		</div>

		<div class="main-content">
			<div class="create" data-view-active="true">
				
				<div class="contenido_main" >
					<h1>Principal</h1>
					<div class="wrapper">

						<div class="card">
							<h2 class="card-title">Clientes</h2>
							<p class="card-content"><?php
													$datos = mysqli_query($mysqli, "SELECT * FROM login");
													$contar = $datos->num_rows;
													printf($contar);
													?></p>
							<button class="card-btn">mas informacion</button>
						</div>

						<div class="card">
							<h2 class="card-title">Clientes</h2>
							<p class="card-content"><?php
													$datos = mysqli_query($mysqli, "SELECT * FROM login");
													$contar = $datos->num_rows;
													printf($contar);
													?></p>
							<button class="card-btn">mas informacion</button>
						</div>
						<div class="card">
							<h2 class="card-title">Clientes</h2>
							<p class="card-content"><?php
													$datos = mysqli_query($mysqli, "SELECT * FROM login");
													$contar = $datos->num_rows;
													printf($contar);
													?></p>
							<button class="card-btn">mas informacion</button>
						</div>
						<div class="card">
							<h2 class="card-title">Clientes</h2>
							<p class="card-content"><?php
													$datos = mysqli_query($mysqli, "SELECT * FROM login");
													$contar = $datos->num_rows;
													printf($contar);
													?></p>
							<button class="card-btn">mas informacion</button>
						</div>
					</div>

					</div>


					<div class="table">
						<div clasS="title">
							<h1>Lista de Usuarios</h1>
						</div>
						<div clasS="options">
							<span>Usuarios</span>
							<input type="search" placeholder="buscar">
						</div>
						<div class="header">
							<div class="row">
								<?php

								$sql = ("SELECT * FROM login");
								$query = mysqli_query($mysqli, $sql);

								echo "<div>Id</div>";
								echo "<div>Usuario</div>";

								echo "<div>Correo</div>";

								echo "<div>Tiempo</div>";

								?>
							</div>
						</div>

						<div class="body">

							<?php
							function TiempoTranscurrido($fechadeR)
							{
								date_default_timezone_set("America/Lima");

								$fechaActual = date("Y-m-d H:i:s");
								$fechaRegistro = $fechadeR;
								$segundosFechaActual = strtotime($fechaActual);
								$segundosFechaRegistro = strtotime($fechaRegistro);
								$segundosTranscurridos = $segundosFechaActual - $segundosFechaRegistro;
								return $segundosTranscurridos;
							}







							while ($arreglo = mysqli_fetch_array($query)) {
								echo "<div class='row'>";
								echo "<div>$arreglo[0]</div>";
								echo "<div>$arreglo[1]</div>";
								echo "<div>$arreglo[3]</div>";
								echo "<div>" . TiempoTranscurrido($arreglo[6]) . "</div>";


								echo "</div>";
							}



							extract($_GET);
							if (@$idborrar == 2) {

								$sqlborrar = "DELETE FROM login WHERE id=$id";
								$resborrar = mysqli_query($mysqli, $sqlborrar);
								echo '<script>alert("REGISTRO ELIMINADO")</script> ';
								//header('Location: proyectos.php');
								echo "<script>location.href='admin.php'</script>";
							}

							?>


						</div>


					</div>
				</div>
			</div>
		</div>

		<div class="list_usuarios" data-view-active="false">


			<div class="main-content">
				<div class="create" data-view-active="true">
					
				<div class="contenido_main" >


					<div class="table_2">
						<div clasS="title">
							<h1>Lista de Usuarios</h1>
						</div>
						<div clasS="options">
							<span>Usuarios</span>
							<input type="search" placeholder="buscar">
						</div>
						<div class="header">
							<div class="row row_2">
								<?php

								$sql = ("SELECT * FROM login");
								$query = mysqli_query($mysqli, $sql);

								echo "<div>Id</div>";
								echo "<div>Usuario</div>";
								echo "<div>Password</div>";
								echo "<div>Correo</div>";
								echo "<div>PasswordAdmin</div>";
								echo "<div>Rol</div>";
								echo "<div>Tiempo</div>";

								echo "<div>Editar</div>";
								echo "<div>Eliminar</div>";
								
								?>
							</div>
						</div>

						<div class="body">

							<?php

							while ($arreglo = mysqli_fetch_array($query)) {
								echo "<div class='row row_2'>";
								echo "<div>$arreglo[0]</div>";
								echo "<div>$arreglo[1]</div>";
								echo "<div>$arreglo[2]</div>";
								echo "<div>$arreglo[3]</div>";
								echo "<div>$arreglo[4]</div>";
								echo "<div>$arreglo[5]</div>";
								echo "<div>" . TiempoTranscurrido($arreglo[6]) . "</div>";

								echo "<div><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></div>";
								echo "<div><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></div>";
								
								echo "</div>";
							}

							extract($_GET);
							if (@$idborrar == 2) {

								$sqlborrar = "DELETE FROM login WHERE id=$id";
								$resborrar = mysqli_query($mysqli, $sqlborrar);
								echo '<script>alert("REGISTRO ELIMINADO")</script> ';
								//header('Location: proyectos.php');
								echo "<script>location.href='admin.php'</script>";
							}

							?>


						</div>


					</div>
				</div>
				</div>
			</div>

		</div>

		<div class="settings" data-view-active="false">
			<h1>PROOVEDORES</h1>
		</div>
		</div>
	</main>

	<script>
		const navs = document.querySelectorAll(".side-bar > ul > li");

		navs.forEach((nav) => {
			nav.addEventListener("click", (e) => {
				document.querySelector(".nav-tab.active").classList.remove("active");
				nav.classList.add("active");

				// Hide active nav view
				document
					.querySelector('div[data-view-active="true"]')
					.setAttribute("data-view-active", false);

				const nav_view = nav.getAttribute("data-view-name");
				document
					.querySelector(`.${nav_view}`)
					.setAttribute("data-view-active", true);
			});
		});
	</script>

	<!-- lista de usuarios -->




	<script>
		let modal = document.getElementById('miModal');
		let flex = document.getElementById('flex');
		let abrir = document.getElementById('abrir');
		let cerrar = document.getElementById('close');

		abrir.addEventListener('click', function() {
			modal.style.display = 'flex';
		});

		cerrar.addEventListener('click', function() {
			modal.style.display = 'none';
		});

		window.addEventListener('click', function(e) {
			console.log(e.target);
			if (e.target == flex) {
				modal.style.display = 'none';
			}
		});
	</script>
</body>

</html>