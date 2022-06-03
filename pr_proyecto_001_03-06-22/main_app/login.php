<?php 
// session_start();
// if (@!$_SESSION['user']) {
// 	header("Location:login.php");
// } elseif ($_SESSION['rol'] == 2) {
// 	header("Location:pagUsuario.php");
// } elseif ($_SESSION['rol'] == 1) {
// 	header("Location:admin.php");
// }


?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/normalice.css">

	<title>LOGIN DE USUARIOS</title>
</head>
<body>
	

		<section>
      <div class="container">
        <div class="user signinBx">
          <div class="imgBx">
            <img
              src="https://raw.githubusercontent.com/WoojinFive/CSS_Playground/master/Responsive%20Login%20and%20Registration%20Form/img1.jpg"
              alt=""
            />
          </div>
          <div class="formBx">
            <form action="validar.php" method="POST">
              <h2>Iniciar Sesion</h2>
              <input type="text" name="mail" placeholder="email de usuario" />
              <input type="password" name="pass" placeholder="contraseña" />
              <input type="submit"  value="Iniciar" />
              <p class="signup">
                No tienes una cuenta?
                <a href="#" onclick="toggleForm();">Registrarse</a>
              </p>
            </form>
          </div>
        </div>
        <div class="user signupBx">
          <div class="formBx">
            <form action="" method="POST">
              <h2>Crear Cuenta</h2>
              <input type="text" name="realname" placeholder="Nombre de usuario" />
              <input type="email" name="nick" placeholder="direccion de Email" />
              
              
              <input type="password" name="pass" placeholder="Crear contraseña" />
              <input type="password" name="rpass" placeholder="confirmar contraseña" />
              <br>
              <input type="submit" name="registrarU" value="Registrarse" />
              <p class="signup">
                Tienes una cuenta?
                <a href="#" onclick="toggleForm();">Iniciar Sesion</a>
              </p>
            </form>
          </div>
          <div class="imgBx">
            <img
              src="https://raw.githubusercontent.com/WoojinFive/CSS_Playground/master/Responsive%20Login%20and%20Registration%20Form/img2.jpg"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <?php
		if(isset($_POST['registrarU'])){
			require("registro.php");
		}
	?>

    <script>
        const toggleForm = () => {
            const container = document.querySelector('.container');
            container.classList.toggle('active');
        };
    </script>

</body>
</html>