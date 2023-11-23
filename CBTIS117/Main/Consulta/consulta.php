<?php

    session_start();

    if(isset($_SESSION['registro'])){
        header("location: ../index.php");
    }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Consulta</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" href="css.css"/>
  </head>
  <body>

  

<div class="container">
<a href=../../Main/index.php><div class="brand-logo"></div></a>
  <div class="brand-title">CBTIS117</div>
  <form  class="inputs" action="index.php" method="POST">
    <label>CURP</label>
	<input type="text" placeholder="CURP" name="CURP" id="CURP" autocomplete="off">
	<button>Consultar</button>
  </div>
</div>

</form>

    </body>
</html>