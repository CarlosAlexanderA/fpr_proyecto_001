<?php 
session_start();
require("connect_db.php");
?>
<div class="contenido_main princip">
    <h1>Principal</h1>
    <div class="primera_parte">

        <div class="card">
            <h2 class="card-title">Clientes</h2>
            <p class="card-content"><?php
                                    $datos = mysqli_query($mysqli, "SELECT * FROM cliente");
                                    $contar = $datos->num_rows;
                                    printf($contar);
                                    ?></p>
            <button class="card-btn">mas informacion</button>
        </div>
        <div class="card">
            <h2 class="card-title">Suscripciones</h2>
            <p class="card-content"><?php
                                    $datos = mysqli_query($mysqli, "SELECT * FROM suscripciones");
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

            $sql = ("SELECT lg.id,lg.nombre,lg.apellido,prov.nombre,prov.descripcion,lg.email,lg.fecha_registro FROM login as lg INNER JOIN proveedor as prov on lg.id=prov.id_login;");
            $query = mysqli_query($mysqli, $sql);

            echo "<div>Id</div>";
            echo "<div>Cliente</div>";

            echo "<div>Cuenta</div>";

            echo "<div>Correo</div>";
            echo "<div> </div>";

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
            $minutosTranscurridos = $segundosTranscurridos / 60;
            return (int)$minutosTranscurridos;
        }


        while ($arreglo = mysqli_fetch_array($query)) {
            echo "<div class='row'>";
            echo "<div>$arreglo[0]</div>";
            echo "<div>$arreglo[1] $arreglo[2]</div>";
            echo "<div>$arreglo[3]-$arreglo[4]</div>";
            echo "<div>$arreglo[5]</div>";
            echo "<div>hace " . TiempoTranscurrido($arreglo[6]) . " minutos</div>";
            
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