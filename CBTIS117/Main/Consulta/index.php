
<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <title>Data alumno</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>


<body class="bg-light">
    
        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php

            //Almacena en variables los valores
            $CURP = $_POST['CURP'];
            
            
            //Revisa registros de  la base de datos 
            $validacion = mysqli_query($db, "SELECT * FROM alumno WHERE CURP='$CURP'");
            
            //Validacion de usuario
            if(mysqli_num_rows($validacion) > 0){
                $_SESSION['alumno'] = $CURP;
            }
            
            
            else {
                echo '<script>
                    alert("No existe el Alumno, compruebe la curp")
                    window.location = "../Consulta/consulta.php";
                </script> ';
                exit();
            }


            $batas = 10;
            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $data = mysqli_query($db, "SELECT * FROM alumno WHERE CURP= '$CURP'");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);

            $data_mhs = mysqli_query($db, "SELECT * FROM alumno  WHERE CURP= '$CURP'");
            $no = $halaman_awal + 1;

            // $sql = "SELECT * FROM alumno";
            // $query = mysqli_query($db, $sql);


            


            while ($alumno = mysqli_fetch_array($data_mhs)) {

                
                echo "<tr>";
                echo "<td style='display:none'> Id de Usuario: " . $alumno['id'] . $alumno['id']+18 . $alumno['id']+29 . "</td><br>";
                echo "<td class='text-center'> Numero de Ficha: " . $no++ . "</td><br>";
                echo "<td> Nombre: " . $alumno['nombre'] ." ". $alumno['ApellidoP']." ". $alumno['ApellidoM'] . "</td><br>";
                echo "<td> Fecha de Nacimiento: " . $alumno['Fecha'] . "</td><br>";
                echo "<td> Sexo: " . $alumno['Sexo'] . "</td><br>";
                echo "<td> CURP: " . $alumno['CURP'] . "</td><br>";
                echo "<td> Correo:" . $alumno['Correo'] . "</td><br>";
                echo "<td> Especialidad:" . $alumno['Especialidad'] . "</td><br>";
                echo "<td> Calle: " . $alumno['Direccion'] . "</td><br>";
                echo "<td> Telefono: " . $alumno['Telefono'] . "</td><br>";
            }

            echo "</tbody>";
            echo "</table>";
            echo "</div>";
            ?>
        </div>

        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>
</html>