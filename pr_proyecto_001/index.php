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
    <script>
        function IniciarSesion(){
            document.getElementById("c_vent").style.display="flex";
        }
        function CerrarIS(){
            document.getElementById("c_vent").style.display="none";
        }
    </script>
</head>
<body class="Body_login">
    <div class="centrar_ventana" id="c_vent">

        <div class="ventana Iniciar_section" id="IS_vent"  >

            <div class="cerrar" id="CerrarIS"><a href="javascript:CerrarIS()"><img src="css/galeria/letra_x.png"></a></div>

            <div class="login" >
                <form action="#" id="formlg">
                    <img src="css/galeria/person-circle-sharp.svg" alt="icono de usuario">
                    <label>Usuario</label>
                    <input type="text" name="usuariolg" placeholder="Usuario" required >
                    <label>Contrseña</label>
                    <input type="password" name="passlg" placeholder="Contraseña" required>
                    
                    <input type="submit" name="botonlg" value="Iniciar Sesion" >
                    <button>REGISTRARSE</button>
                </form>
            </div>
        </div>
    </div>
    <header>
            <div class="logo_pag">
                <img class="logo_principal" src="css/galeria/businessapplication_distributor_report_document_negocio_2319.png" alt="logo de suscripciones">
                <h1>SUSCRIPCIONES</h1>
            </div>      
                 <nav>                
                    <a href="#">Inicio</a>
                    <a href="#">Servicios</a>
                    <a href="#">Metodos</a>
                    <a href="javascript:IniciarSesion()">Inciar Sesion</a>
                </nav> 
            
        
    </header>
        <div class="img_title">

        </div>  
    <main>
        <div class="container_001">

            <div class="servicios">
                <div class="title_001">
                <h3>¿Sabes por donde empezar?</h3>
                <h5>Te asesoramos en los mejores sitios de suscripcion</h5>
                </div>
                <div class="servicios_capa">
                    <div class="box_aplication" id="netflix_sqr">
                        <img class="logo_netflix"src="css/galeria/netflix_logo.png" alt="Netflix">
                        <h4>Netflix</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        </p>
                    </div>
                    <div class="box_aplication">
                        <img src="" alt="Netflix">
                        <h4>Netflix</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        </p>
                    </div>
                    <div class="box_aplication">
                        <img src="" alt="Netflix">
                        <h4>Netflix</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, similique fugiat minima harum ad officia corporis eius</p>
                    </div>
                    <div class="box_aplication">
                        <img src="" alt="Netflix">
                        <h4>Netflix</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, similique fugiat minima harum ad officia corporis eius</p>
                    </div>
                    <div class="box_aplication" id="netflix">
                        <img src="" alt="Netflix">
                        <h4>Netflix</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, similique fugiat minima harum ad officia corporis eius</p>
                    </div>
                    <div class="box_aplication">
                        <img src="" alt="Netflix">
                        <h4>Netflix</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, similique fugiat minima harum ad officia corporis eius</p>
                    </div>
                </div>
            </div>
            <div class="guia">
                <div class="title_002">
                    
                    <h3>¿Prefieres que te guiemos?</h3>
                    <p>Dos tipos de estrategias para suscribirse</p>
                </div>
                <div class="guia_down">
                    <div class="guia_description">
                        <img src="">
                        <h4>Mas clientes</h4>
                        <p>Te conseguimos más clientes y hacemos que te compren más veces</p>
                    </div>
                    <img class="img_guia" src="css/galeria/monkey_guia.png">
                    <div class="guia_description">
                        <img src="">
                        <h4>¡Más valor!</h4>
                        <p>Te ayudamos a subir tus precios mejorando la percepción de tu marca.</p>
                    </div>
                </div>  
            </div>
            <div class="metodologia">
                
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
            </div>
            <section>
                <div class="counters">
                    
                    div.

                </div>
            </section>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>