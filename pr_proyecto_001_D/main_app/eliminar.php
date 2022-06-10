<?php
session_start();
if (@!$_SESSION['email']) {
    header("Location:login.php");
}
extract($_GET);
require("connect_db.php");

if (@$idborrar == 2) {

    $sqlborrar = "DELETE FROM cliente WHERE id_c=$id";
    $resborrar = mysqli_query($mysqli, $sqlborrar);
    echo '<script>alert("REGISTRO ELIMINADO")</script> ';
    //header('Location: proyectos.php');
    echo "<script>location.href='admin.php'</script>";
}
