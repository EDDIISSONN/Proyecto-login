<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Debes iniciar sesion");
                window.location="index.php";
            </script>
        ';
        session_destroy();
        die();
    }


?>

