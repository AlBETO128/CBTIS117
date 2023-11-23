<?php

    session_start();

    if(isset($_SESSION['registro'])){
        header("location: ../index.php");
    }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Inicio de Sesion</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" href="css.css"/>
  </head>
  <body>

  

<div class="container">
<a href=../../Main/index.php><div class="brand-logo"></div></a>
  <div class="brand-title">CBTIS117</div>
  <form  class="inputs" action="php/ingresar.php" method="POST">
    <label>E-mail</label>
	<input type="email" placeholder="Correo Electronico" name="correo" autocomplete="off">
    <label>Contraseña</label>
	<input type="password" placeholder="Contraseña" name="contrasena" autocomplete="off">
	<button>Entrar</button>
  </div>
</div>

</form>

    </body>
</html>