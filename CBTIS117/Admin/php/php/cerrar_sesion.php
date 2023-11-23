 
<?php
//Cerrar Sesion
    session_start();
    session_destroy();
    header("location: ../../../Main/index.php");
?>