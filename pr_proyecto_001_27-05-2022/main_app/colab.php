<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 2){
            header('location: login.php');
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>USUARIO!</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="u_style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand"><img class="userimg" src="C:\xampp\htdocs\Pagina_SENATI\galeria\user.ico"  width="35" height="35"></a>

      <div class="dropdown">
        <button
          class="btn btn-secondary dropdown-toggle"
          type="button"
          id="dropdownMenu2"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          MENU
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <li><button class="dropdown-item" type="button">Cerrar Sesion</button></li>
        </ul>
      </div>
    </nav>
    <div
      class="cover d-flex justify-content-around align-items-center flex-column"
    >
      <h1>Usuario</h1>
      <p>Todas tus suscripciones en una sola página web</p>
      <a href="cerrar_sesion.php">cerrar sesion</a>
    </div>
    <header>
      <section>
        <div class="d-flex bd-highlight mb-3">
          <div id="list-example" class="list-group">
            <a
              class="list-group-item list-group-item-action"
              href="#list-item-1"
              >Usuario Opciones</a
            >
            <a
              class="list-group-item list-group-item-action"
              href="#list-item-2"
              >Agregar Suscripcion</a
            >
            <a
              class="list-group-item list-group-item-action"
              href="#list-item-3"
              >Quitar Suscripcion</a
            >
            <a
              class="list-group-item list-group-item-action"
              href="#list-item-4"
              >Editar Costo</a
            >
            <a
              class="list-group-item list-group-item-action"
              href="#list-item-4"
              >Consultas</a
            >
          </div>

          <div class="container-fluid mt-2">
            <div class="row row-cols-5 row-cols-lg-5 g-2 g-lg-3">
              <div class="col">
                <div class="p-3 border bg-light">Detalle Sub</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">Cant. Subs</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">Total Costo</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">Días Restantes</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">Semáforo</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">Netflix</div>
                <div class="p-3 border bg-light">DisneyPlus</div>
                <div class="p-3 border bg-light">AmazonPrime</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">1</div>
                <div class="p-3 border bg-light">1</div>
                <div class="p-3 border bg-light">1</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">30.50</div>
                <div class="p-3 border bg-light">20.50</div>
                <div class="p-3 border bg-light">25.50</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">5</div>
                <div class="p-3 border bg-light">1</div>
                <div class="p-3 border bg-light">-1</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">&#9989;</div>
              <div class="col">
                <div class="p-3 border bg-light">&#127773;</div>
                <div class="col">
                <div class="p-3 border bg-light">&#9940;</div>
              
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
  </body>
</html>