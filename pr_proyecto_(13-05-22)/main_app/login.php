
<?php
include_once 'database.php';

session_start();

if(isset($_GET['cerrar_sesion'])){
    session_unset(); 

    // destroy the session 
    session_destroy(); 
}

if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 1:
            header('location: admin.php');
        break;

        // case 2:
        // header('location: colab.php');
        // break;

        default:
    }
}

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new Database();
    $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE username = :username AND password = :password');
    $query->execute(['username' => $username, 'password' => $password]);

    $row = $query->fetch(PDO::FETCH_NUM);
    
    if($row == true){
        $rol = $row[3];
        
        $_SESSION['rol'] = $rol;
        switch($rol){
            case 1:
                header('location: admin.php');
            break;

            // case 2:
            // header('location: colab.php');
            // break;

            default:
        }
    }else{
        // no existe el usuario
        echo "Nombre de usuario o contraseña incorrecto";
    }
    

}

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

    <main>
        <div class="part_1">
            <img src="../css/galeria/logo_login.png" alt="">
        </div> 
        <div class="part_2">

            <form class="main" method="POST">
                <div class="input_form">
                    <input type="text" placeholder="Nombre de Usuario" name="username" class="txt"><br>
                    <input type="password" placeholder="Contraseña" name="password" class="txt"><br>
                    <input type="submit" value="Iniciar sesión" class="login-btn"><br>
                </div>
            <div class="ca">
                <a href="" class="pca">Registrarse</a>
            </div>
            </form>
        </div>
    </main>
</body>
</html>