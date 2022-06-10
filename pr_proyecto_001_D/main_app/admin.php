<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['email']) {
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
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/admstyle.css">
	<link rel="stylesheet" href="css/normalice.css">


</head>

<body>

	<header>
		<div class="container_head">
			<div class="head_center">
				<h1 class="titulo">ADMINISTRACION DE USUARIOS</h1>
			</div>
			<div class="head_right">
				<nav>
					<ul class="opciones">
						<li><a href="../index.php">Pagina Principal</a></li>
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
									<li id="nom_usuario"><?php echo $_SESSION['email']; ?></li>
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

	<aside class="wrapper">
		<div class="wrapper_inner">
			<div class="vertical_wrap">
				<div class="backdrop"></div>
				<div class="vertical_bar">
					<div class="profile_info">
						<h2 class="logo_letra">SubsSoft</h2>
						<p class="title">BIENVENIDO <?php echo $_SESSION['email']; ?></p>
					</div>
					<ul class="menu">
						<li><a href="#">
								<span class="icon"><i class="fas fa-home"></i></span>
								<span class="text" id="principal">Principal</span>
							</a></li>
						<li><a href="#" class="active">
								<span class="icon"><i class="fas fa-file-alt"></i></span>
								<span class="text" id="clientes">Clientes</span>
							</a></li>
						<li><a href="#">
								<span class="icon"><i class="fas fa-chart-pie"></i></span>
								<span class="text" id="proveedores">Proveedores</span>
							</a></li>
						<li><a href="#">
								<span class="icon"><i class="fas fa-chart-pie"></i></span>
								<span class="text" id="planes">Planes</span>
							</a></li>

					</ul>

					<ul class="social">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="side_container">
				<div class="top_bar">
					<div class="hamburger">
						<i class="fas fa-bars"></i>
					</div>
					<div class="logo">

					</div>
				</div>


			</div>
		</div>
	</aside>
	<script>
		$(document).ready(function() {
			$('#principal').click(function() {
				$("#contenido").load("principal.php");
			});

			$('#clientes').click(function() {
				$("#contenido").load("cliente.php");
			});
			$('#proveedores').click(function() {
				$("#contenido").load("proveedores.php");
			});
			$('#planes').click(function() {
				$("#contenido").load("planes.php");
			});
		});
	</script>

	<main id="contenido">
		<!-- contenido de las tablas-->
		<script>
			$(document).ready($("#contenido").load("principal.php"));
		
		</script>

	</main>

	<script>
		var hamburger = document.querySelector(".hamburger");
		var wrapper = document.querySelector(".wrapper");
		var backdrop = document.querySelector(".backdrop");

		hamburger.addEventListener("click", function() {
			wrapper.classList.add("active");
		})

		backdrop.addEventListener("click", function() {
			wrapper.classList.remove("active");
		})
	</script>

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