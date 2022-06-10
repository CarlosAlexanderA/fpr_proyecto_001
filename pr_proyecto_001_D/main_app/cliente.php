<?php
session_start();
require("connect_db.php");
?>

<div class="clientes">
  <h1>Clientes</h1>
  <div class="primera_parte">

    <div clasS="title title_clientes">
      <h3>Registro de clientes</h3>
    </div>
  </div>
</div>
<div class="table">
  <div clasS="options">
    <span>Usuarios</span> 
    <a href="agregarC.php">Agregar Clientes</a>
    <input type="search" placeholder="buscar">
  </div>
  <div class="header">
    <div class="row row2">
      <?php

      $sql = ("SELECT lg.id,lg.nombre,lg.apellido,lg.telefono,cli.estado FROM login as lg INNER JOIN cliente as cli on lg.id=cli.id_login;");
      $query = mysqli_query($mysqli, $sql);

      echo "<div>Id</div>";
      echo "<div>Nombre</div>";

      echo "<div>Apellido</div>";

      echo "<div>Telefono</div>";
      echo "<div>Estado</div>";
      echo "<div>Acciones</div>";

      ?>
    </div>
  </div>

  <div class="body">

    <?php
    // function TiempoTranscurrido($fechadeR)
    // {
    //     date_default_timezone_set("America/Lima");

    //     $fechaActual = date("Y-m-d H:i:s");
    //     $fechaRegistro = $fechadeR;
    //     $segundosFechaActual = strtotime($fechaActual);
    //     $segundosFechaRegistro = strtotime($fechaRegistro);
    //     $segundosTranscurridos = $segundosFechaActual - $segundosFechaRegistro;
    //     return $segundosTranscurridos;
    // }

    while ($arreglo = mysqli_fetch_array($query)) {
      echo "<div class='row row2'>";
      echo "<div>$arreglo[0]</div>";
      echo "<div>$arreglo[1]</div>";
      echo "<div>$arreglo[2]</div>";
      echo "<div>$arreglo[3]</div>";
      if ($arreglo[4]) {
        echo '<div>Activo</div>';
      } else {
        echo '<div>Inactivo</div>';
      }


      echo "<div><a href='actualizar.php?id_get=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></a>
      <a href='eliminar.php?id=$arreglo[0]&idborrar=2' ><img src='images/eliminar.png' class='img-rounded'/></a></div>";


      echo "</div>";
    }
    // extract($_GET);
		// 						if (@$idborrar == 2) {

		// 							$sqlborrar = "DELETE FROM login WHERE id=$id";
		// 							$resborrar = mysqli_query($mysqli, $sqlborrar);
		// 							echo '<script>alert("REGISTRO ELIMINADO")</script> ';
		// 							//header('Location: proyectos.php');
		// 							echo "<script>location.href='admin.php'</script>";
		// 						}
    ?>

  </div>
  


</div>

</div>
<script>
  const open = document.getElementById('open');
  const modal_container = document.getElementById('modal_container');
  const close = document.getElementById('close');

  open.addEventListener('click', () => {
    modal_container.classList.add('show');
  });

  close.addEventListener('click', () => {
    modal_container.classList.remove('show');
  });
</script>