<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: bienvenida.php");
    }
?>




<!DOCTYPE html>
  <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - REGISTRO (PROYECTO)</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

    <main>

        <div class="contenedor__todo">

           <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Ya tienes cuenta?</h3>
                    <p>Inicia sesion para entrar a tu pagina</p>
                    <button id="btn__iniciar-sesion">Inicia Sesion</button>
                </div> 
                <div class="caja__trasera-register">
                <h3>Aun no tienes cuenta?</h3>
                <p>Registrate para poder acceder</p>
                <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--Formulario de inicio de sesion-->
            <div class="contenedor__login-register">
            <!--Login-->
                <form action="php/login_usuario_be.php" method="POST" 
                class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text"placeholder="Correo Electronico" name="correo">
                    <input type="password"placeholder="Contrasena" name="contrasena">
                    <button>Entrar</button>

                </form> 
            <!--Registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contrasena" name="contrasena">
                    <button>Registrarse</button>
                </form>

            </div>
        </div>    
    </main>
    <script src="assets/js/script.js"></script>
</body>
  </html>