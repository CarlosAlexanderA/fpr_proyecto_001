<?php
echo " ";
  include_once("database.php") ;
  

	
  
    session_start();

    

    


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA ADMIN</title>
    <link rel="stylesheet" href="../css/adm_style.css">
    <link rel="stylesheet" href="../css/normalice.css">
    <script src="../../scripts/show_container.js"></script>
</head><body class="body_adm">
    <header>
      <div class="container_head">
        <div class="head_left">
          <h2>Bienvenido admin <span id="Usuario_nom"> <?php echo $user_data['username']; ?></span></h2>
          <?php 
          echo ucwords($_SESSION['username']); ?>
        </div>
        <div class="head_center">
          <h1>ADMINISTRACION DE USUARIOS</h1>
        </div>
        <div class="head_right">
          <nav>
            <ul class="opciones">
              <li><a href="../index.php">Pagina Principal</a></li>
              <li><a href="#">Pagina Cliente</a></li>
              <li class="desplegable_vent">
                <div class="medida_logo">
                  <a href="#" id="abrir"><img src="../css/galeria/logo_user.jpg" alt="logo Usuario"
                  /></a>
                </div>
                <ul class="opciones_users" id="miModal" >
                  
                  <div class="ventana_1">
                    <span class="close" id="close"><a href="#">X</a></span>
                    <li class="logo_user_2">
                      <img src="../css/galeria/logo_user.jpg" alt="User" />
                    </li>
                    <li id="nom_usuario">Carlos Acero</li>
                    <li id="correo_usuario">Correo Electronico</li>
                  </div>
                  <div class="ventana_2">
                    <li><a class="botton" href="cerrar_sesion.php">Cerrar Sesion</a></li>
                  </div>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    
    <aside>
      <div class="options_square">
        <ul>
          <a href="#" onclick="ShowHomepage();"><li>Página Principal</li></a>
          <a href="#" onclick="ShowList();"><li>Lista de Usuarios</li></a>
          <a href="#"><li>Agregar Usuarios</li></a>
          <a href="#"><li>Eliminar Usuarios</li></a>
          <a href="#"><li>Editar Usuarios</li></a>
          <a href="#"><li>Recordar Suscripciones</li></a>
          <a href="#"><li>Ver Proveedores</li></a>
        </ul>
      </div>
    </aside>
    <main>
      <div class="squre_container">
        <div class="homepage" id="show_homepage"></div>
        <div class="list_user" id="show_list">
          <div class="table_user">
            <div class="tbl_head">ID</div>
            <div class="tbl_head">NOMBRE</div>
            <div class="tbl_head">TIEMPO RESTANTE</div>
            <div class="tbl_head">PROVEEDORES</div>
            <div class="tbl_head">ESTADO</div>

            <div class="IdUser">asdasgdas</div>
            <div class="NameUser">asdasgdas</div>
            <div class="TimeUser">asdasgdas</div>
            <div class="ProveedorUser">asdasgdas</div>
            <div class="ConditionUser">asdasgdas</div>

          </div>
        </div>
        <div class="add_user"></div>
        <div class="delete_user"></div>
        <div class="update_user"></div>
        <div class="recordar_sus"></div>
        <div class="see_proveedores"></div>
      </div>
    </main>
    
    <script>

      let modal = document.getElementById('miModal');
      let flex = document.getElementById('flex');
      let abrir = document.getElementById('abrir');
      let cerrar = document.getElementById('close');

      abrir.addEventListener('click', function(){
          modal.style.display = 'flex';
      });

      cerrar.addEventListener('click', function(){
          modal.style.display = 'none';
      });

      window.addEventListener('click', function(e){
          console.log(e.target);
          if(e.target == flex){
              modal.style.display = 'none';
          }
      });
    </script>
  </body>
</html>