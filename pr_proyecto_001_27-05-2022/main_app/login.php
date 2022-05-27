<?php

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/normalice.css">
    <link rel="stylesheet" href="../css/login_style.css">
    <title>Login</title>

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
            <form action="loginn.php" method="POST">
              <h2>Iniciar Sesion</h2>
              <input type="text" name="username" placeholder="Nombre de usuario" />
              <input type="password" name="password" placeholder="contraseña" />
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
            <form action="register.php" method="POST">
              <h2>Crear Cuenta</h2>
              <input type="text" name="username" placeholder="Nombre de usuario" />
              <input type="email" name="email" placeholder="direccion de Email" />
              
              
              <input type="password" name="password" placeholder="Crear contraseña" />
              
              <input type="submit" name="" value="Registrarse" />
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


    <script>
        const toggleForm = () => {
            const container = document.querySelector('.container');
            container.classList.toggle('active');
        };
    </script>
</body>

</html>