<?php 
session_start();

	include("main_app/database.php");
	include("main_app/functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="copyrright" content="">
  <meta name="robots" content="index, follow">
  <meta name="keywords" content="ejemplo, sitio">
  <title>Login de Suscripciones</title>
  <link rel="stylesheet" href="css/normalice.css">
  <link rel="stylesheet" href="css/style1.css">

  <script src="scripts/jquery-3.6.0.min.js"></script>
  <script src="scripts/main.js"></script>
  <script src="scripts/show_container.js">

  </script>
</head>

<body class="Body_login">
  
  <header>
    <nav id="h_navbar">
      <div class="logo_pag">
        <img class="logo_principal" src="css/galeria/businessapplication_distributor_report_document_negocio_2319.png" alt="logo de suscripciones">
        <div class="txt_logo">SERVICIO DE ADMINISTRACION PARA SUSCRIPCIONES</div>
      </div>
      <div class="left_bar" >
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Servicios</a></li>
          <li><a href="#">Metodos</a></li>
          <li><a href="main_app/login.php"><?php
          if(empty($username)){
           echo $user_data['username'];
            //header("Location: main_app/admin.php");
          } else{
            echo "Inciar Sesion";
          }
          ?></a></li>
        </ul>
      </div >
    </nav>
    
  </header>
  
  <div class="img_title">

  </div>
  <main>
    <section class="servicios">
      <div class="title_001">
        <h2 class="h2_ttl">¿Sabes por donde empezar?</h2>
        <h4>Te asesoramos en los mejores sitios de suscripcion</h4>
      </div>

      <div class="container">

        <div class="card">
          <div class="slide slide1">
            <div class="content">
              <div class="icon">
                <img class="logo_netflix" src="css/galeria/netflix_logo.png" alt="Netflix">

              </div>
            </div>
          </div>
          <div class="slide slide2">
            <div class="content">
              <p> Es un servicio de transmisión o 'streaming' que permite ver una gran variedad de series, documentales y películas en cualquier dispositivo con acceso a internet.</p>
              <p>La membresía es una suscripción mes a mes sin contratos ni cargos por cancelación</p>
              <span><a href="">ir a netflix</a></span>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="slide slide1">
            <div class="content">
              <div class="icon">
                <img src="css/galeria/prime-video.png" alt="prime video">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="slide slide2">
            <div class="content">
              <p> Es un servicio de transmisión o 'streaming' que permite ver una gran variedad de series, documentales y películas en cualquier dispositivo con acceso a internet.</p>
              <p>La membresía es una suscripción mes a mes sin contratos ni cargos por cancelación</p>
              <span><a href="">ir a netflix</a></span>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="slide slide1">
            <div class="content">
              <div class="icon">
                <img src="css/galeria/hbo-max.png" alt="Hbo-max">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="slide slide2">
            <div class="content">
              <p> Es un servicio de transmisión o 'streaming' que permite ver una gran variedad de series, documentales y películas en cualquier dispositivo con acceso a internet.</p>
              <p>La membresía es una suscripción mes a mes sin contratos ni cargos por cancelación</p>
              <span><a href="">ir a netflix</a></span>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="slide slide1">
            <div class="content">
              <div class="icon">
                <img src="css/galeria/disney-plus-logo-4.png" alt="Disney-plus">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="slide slide2">
            <div class="content">
              <p> Es un servicio de transmisión o 'streaming' que permite ver una gran variedad de series, documentales y películas en cualquier dispositivo con acceso a internet.</p>
              <p>La membresía es una suscripción mes a mes sin contratos ni cargos por cancelación</p>
              <span><a href="">ir a netflix</a></span>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="slide slide1">
            <div class="content">
              <div class="icon">
                <img src="css/galeria/paramount.png" alt="Paramount+">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="slide slide2">
            <div class="content">
              <p> Es un servicio de transmisión o 'streaming' que permite ver una gran variedad de series, documentales y películas en cualquier dispositivo con acceso a internet.</p>
              <p>La membresía es una suscripción mes a mes sin contratos ni cargos por cancelación</p>
              <span><a href="">ir a netflix</a></span>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="slide slide1">
            <div class="content">
              <div class="icon">
                <img src="css/galeria/spotify.png" alt="Sputify">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="slide slide2">
            <div class="content">
              <p> Es un servicio de transmisión o 'streaming' que permite ver una gran variedad de series, documentales y películas en cualquier dispositivo con acceso a internet.</p>
              <p>La membresía es una suscripción mes a mes sin contratos ni cargos por cancelación</p>
              <span><a href="">ir a netflix</a></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="guia">
      <div class="title_002">

        <h3>¿Porque elegirnos a nosotros?</h3>
        <p>Dos simples y importantes aspectos</p>
      </div>
      <div class="guia_down">
        <div class="img_center">
          <img class="img_guia guia_d-2" src="css/galeria/bg_ahorro_tiempo.png">
        </div>
        <div class="guia_description guia_d-1">
          <img src="">
          <h4>¡Ahorro de Tiempo!</h4>
          <p>Se trata de conseguir administrar tus servicios en menos tiempo y sin que análises los datos manualmente</p>
        </div>

        <div class="guia_description guia_d-3">
          <img src="">
          <h4>¡Es simple!</h4>
          <p>Es fácil de entender porque se acomoda a las preferencias del usuario y puede ser usado con un mínimo de fatiga</p>
        </div>
      </div>
    </section>

    <section class="metodologia">

      <div class="metodologia_linea">
        <div class="title003">
          <h3>Nuestra metodología en 3 pasos</h3>
          <p>Te mostramos nuestra fórmula para tener más clientes.</p>
        </div>
        <div class="lineaT">
          <div class="bloque_linea">
            <div class="cabezera_linea">
              <h3>----------1----------</h3>
            </div>
            <div class="cuerpo_linea">
              <h4>Planifica</h4>
              <p>Te ayudamos a definir dónde estás, donde quieres llegar y con qué cuentas para llegar y juntos armamos el plan.</p>
            </div>
          </div>
          <div class="bloque_linea">
            <div class="cabezera_linea">
              <h3>----------2----------</h3>
            </div>
            <div class="cuerpo_linea">
              <h4>Que te encuentren</h4>
              <p>Quizás tengas la mejor idea de negocio, pero si nadie lo sabe ¿de qué sirve? Hacemos que quienes ya tienen el problema, te encuentren como solución.</p>
            </div>
          </div>
          <div class="bloque_linea">
            <div class="cabezera_linea">
              <h3>----------3----------</h3>
            </div>
            <div class="cuerpo_linea">

              <h4>Que te busquen</h4>
              <p>No hacemos que necesiten lo que vendes, hacemos que te necesiten a ti.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contadores">

      <div class="cont_card red">
        <div class="parte_1">
          <img src="css/galeria/click_img.png" class="icono">
        </div>
        <div class="parte_2">
          <span>Con mas de </span><span class="contador" data-ceil="10">10</span> <span>proveedores</span>
          <div class="space_2"><span>que confian en nosotros</span></div>
        </div>
      </div>
      <div class="cont_card blue">
        <div class="parte_1">
          <img src="css/galeria/click_img.png" class="icono">
        </div>
        <div class="parte_2">
          <span>Mas de </span><span class="contador" data-ceil="6">6</span><span>M</span> <span> de personas</span>
          <div class="space_2"><span>suscritas a estos servicios</span></div>
        </div>
      </div>
      <div class="cont_card orange">
        <div class="parte_1">
          <img src="css/galeria/click_img.png" class="icono">
        </div>
        <div class="parte_2">
          <span>Con mas de </span><span class="contador" data-ceil="5000">5000</span> <span>minutos</span>
          <div class="space_2"><span>desarrollando el proyecto</span></div>
        </div>
      </div>
      <script type="text/javascript" src="scripts/contadores.js"></script>
    </section>
  </main>

  <footer>

  </footer>
  
  <!-- script de header de scroll -->
  <script>
        let ubicacion_p = window.pageYOffset;
        window.onscroll = function(){
          let desplazamiento_actual = window.pageYOffset;
          if(ubicacion_p >= desplazamiento_actual){
            document.getElementById('h_navbar').style.top = '0';
          }
          else{
            document.getElementById('h_navbar').style.top = '-100px';
            
          }
          ubicacion_p = desplazamiento_actual;
        }
        
      </script>
</body>

</html>