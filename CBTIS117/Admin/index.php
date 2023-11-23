<?php

    session_start();
    if(!isset($_SESSION['registro'])){
        echo '<script>
                alert("Por favor debes iniciar sesion")
                window.location = "php/index.php"
            </script>';
            session_destroy();
            die();
    }

?>


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
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
        <a class="navbar-brand" href="../Main/index.php" ><img src="../Img/logo.png" height="65wx"><span class="fw-bolder text-primary">  CBTIS 117</span></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-sm-start text-center" aria-current="page" href="php/php/cerrar_sesion.php">Cerrar Sesion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary ms-md-4 text-white" href="php/index.php">Iniciar Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <!-- form tambah alumno -->
        <div class="card mb-5">
            <!-- <div class="card-header">
                Latihan CRUD PHP & MySQL
            </div> -->
            <!-- tambah data -->
            <div class="card-body">
                <h3 class="card-title">Administrador</h3>
                <p class="card-text">Registros de Administrador</p>

                <!-- tampilkan pesan sukses ditambah -->
                <?php if (isset($_GET['status'])) : ?>
                    <?php
                    if ($_GET['status'] == 'sukses')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Sukses!</strong> Se envio Con exito!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Fracaso!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="tambah.php" method="POST">

                    <div class="col-12">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="col-md-4">
                        <label for="ApellidoP" class="form-label">Apellido Paterno</label>
                        <input type="text" name="ApellidoP" class="form-control" placeholder="Apellido Paterno" required>
                    </div>
                    <div class="col-md-4">
                        <label for="ApellidoM" class="form-label">Apellido Materno</label>
                        <input type="text" name="ApellidoM" class="form-control" placeholder="Apellido Materno" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Fecha" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" name="Fecha" class="form-control" placeholder="dd/mm/aaaa" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Especialidad" class="form-label">Especialidad</label>
                        <select class="form-select" name="Especialidad" aria-label="Default select example">
                                    <option value="Programacion">Programacion</option>
                                    <option value="Mantenimiento">Mantenimiento</option>
                                    <option value="Gericultura">Gericultura</option>
                                    <option value="Recursos Humanos">Recursos Humanos</option>
                                    <option value="Biologia">Biologia</option>
                                    <option value="Quimica">Quimica</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="tittle" class="form-label">Sexo
                        </label>
                        <div class="col-md-12">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="Sexo">masculino</label>
                                <input class="form-check-input" type="radio" name="Sexo" value="masculino">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="Sexo">Femenino</label>
                                <input class="form-check-input" type="radio" name="Sexo" value="Femenino">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="Correo" class="form-label">Correo</label>
                        <input type="text" name="Correo" class="form-control" placeholder="correo@gmail.com" required>
                    </div>

                    <div class="col-md-6">
                        <label for="CURP" class="form-label">CURP</label>
                        <input type="text" name="CURP" class="form-control" placeholder="CURP" required>
                    </div>

                    <div class="col-md-6">
                        <label for="Direccion" class="form-label">Direccion</label>
                        <input type="text" step=1.0 name="Direccion" class=" form-control" placeholder="Direccion" required>
                    </div>

                    <div class="col-md-6">
                        <label for="Telefono" class="form-label">Telefono</label>
                        <input type="text" step=1 name="Telefono" class=" form-control" placeholder="(656)XXX-XXXX" required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="daftar" name="tambah"><i class="fa fa-plus"></i><span class="ms-2">Enviar</span></button>
                    </div>
                </form>
            </div>
        </div>


        <!-- judul tabel -->
        <h5 class="mb-3">Tablas</h5>

        <div class="row my-3">
            <div class="col-md-2 mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Mostrar Registros</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="col-md-3 ms-auto">
                <div class="input-group mb-3 ms-auto">
                    <input type="text" class="form-control" placeholder="Buscar..." aria-label="cari" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <!-- tampilkan pesan sukses dihapus -->
        <?php if (isset($_GET['hapus'])) : ?>
            <?php
            if ($_GET['hapus'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Sukses!</strong> Se borro!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> No se borro!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tampilkan pesan sukses di edit -->
        <?php if (isset($_GET['update'])) : ?>
            <?php
            if ($_GET['update'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Sukses!</strong> Actualizado con exito!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Actualizado con fracaso!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>ID</th>";
            echo "<th scope='col'>nombre</th>";
            echo "<th scope='col'>Apellido Paterno</th>";
            echo "<th scope='col'>Apellido Materno</th>";
            echo "<th scope='col'>Fecha de Nacimiento</th>";
            echo "<th scope='col'>Sexo</th>";
            echo "<th scope='col'>CURP</th>";
            echo "<th scope='col'>Correo</th>";
            echo "<th scope='col'>Especialidad</th>";
            echo "<th scope='col'>Direccion</th>";
            echo "<th scope='col'>Telefono</th>";
            echo "<th scope='col' class='text-center'>Opciones</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $batas = 10;
            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $data = mysqli_query($db, "SELECT * FROM alumno");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);

            $data_mhs = mysqli_query($db, "SELECT * FROM alumno LIMIT $halaman_awal, $batas");
            $no = $halaman_awal + 1;

            // $sql = "SELECT * FROM alumno";
            // $query = mysqli_query($db, $sql);




            while ($alumno = mysqli_fetch_array($data_mhs)) {
                echo "<tr>";
                echo "<td style='display:none'>" . $alumno['id'] . "</td>";
                echo "<td class='text-center'>" . $no++ . "</td>";
                echo "<td>" . $alumno['nombre'] . "</td>";
                echo "<td>" . $alumno['ApellidoP'] . "</td>";
                echo "<td>" . $alumno['ApellidoM'] . "</td>";
                echo "<td>" . $alumno['Fecha'] . "</td>";
                echo "<td>" . $alumno['Sexo'] . "</td>";
                echo "<td>" . $alumno['CURP'] . "</td>";
                echo "<td>" . $alumno['Correo'] . "</td>";
                echo "<td>" . $alumno['Especialidad'] . "</td>";
                echo "<td>" . $alumno['Direccion'] . "</td>";
                echo "<td>" . $alumno['Telefono'] . "</td>";

                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary editButton pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                // tombol hapus
                echo "
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($jumlah_data == 0) {
                echo "<p class='text-center'>Tabla Vacia</p>";
            } else {
                echo "<p>Total $jumlah_data entrada</p>";
            }

            echo "</div>";
            ?>
        </div>

        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman > 1) ? "href='?halaman=$previous'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman < $total_halaman) ? "href='?halaman=$next'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Modal Edit-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Edit Data alumno</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM alumno";
                    $query = mysqli_query($db, $sql);
                    $alumno = mysqli_fetch_array($query);
                    ?>

                    <form action='edit.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='edit_id' id='edit_id'>

                            <div class="col-12 mb-3">
                                <label for="edit_nombre" class="form-label">nombre</label>
                                <input type="text" name="edit_nombre" id="edit_nombre" class="form-control" placeholder="Nombre Completo" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_ApellidoP" class="form-label">Apellido Paterno</label>
                                <input type="text" name="edit_ApellidoP" id="edit_ApellidoP" class="form-control" placeholder="G64190021" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_ApellidoM" class="form-label">Apellido Materno</label>
                                <input type="text" name="edit_ApellidoM" id="edit_ApellidoM" class="form-control" placeholder="G64190021" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_Fecha" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" name="edit_Fecha" id="edit_Fecha" class="form-control" placeholder="G64190021" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_Especialidad" class="form-label">Especialidad</label>
                                <select class="form-select" name="edit_Especialidad" id="edit_Especialidad" aria-label="Default select example">
                                    <option value="Programacion">Programacion</option>
                                    <option value="Mantenimiento">Mantenimiento</option>
                                    <option value="Gericultura">Gericultura</option>
                                    <option value="Recursos Humanos">Recursos Humanos</option>
                                    <option value="Biologia">Biologia</option>
                                    <option value="Quimica">Quimica</option>
                                </select>
                            </div>


                            <div class="col-12 mb-3">
                                <label for="edit_Sexo" class="form-label">Sexo</label>
                                <div class="col-md-12" id="gender">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="Sexo">
                                            <input class="form-check-input" type="radio" name="edit_Sexo" value="masculino" id="cowok">masculino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="Sexo">
                                            <input class="form-check-input" type="radio" name="edit_Sexo" value="Sexo" id="cewek">Femenino</label>
                                    </div>
                                </div>
                            </div>



                            <div class="col-12 mb-3">
                                <label for="edit_urusan" class="form-label">CURP</label>
                                <input type="text" name="edit_CURP" class="form-control" id="edit_CURP" placeholder="Ilmu Komputer" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_urusan" class="form-label">Correo</label>
                                <input type="text" name="edit_Correo" class="form-control" id="edit_Correo" placeholder="Ilmu Komputer" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_Direccion" class="form-label">Direccion</label>
                                <input type="text" step=1.0 name="edit_Direccion" id="edit_Direccion" class=" form-control" placeholder="3.52" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_Telefono" class="form-label">Telefono</label>
                                <input type="text" step=1 name="edit_Telefono" id="edit_Telefono" class=" form-control" placeholder="100" required>
                            </div>

                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='edit_data' class='btn btn-primary'>Subir</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal Delete-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirmacion</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='hapus.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='delete_id' id='delete_id'>
                            <p>Desea Borrar?
                            </p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='deletedata' class='btn btn-primary'>Confirmar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#edit_id').val(data[0]);
                // gak dipake, karena cuma increment number
                // $('#no').val(data[1]);
                $('#edit_nombre').val(data[2]);
                $('#edit_ApellidoP').val(data[3]);
                $('#edit_ApellidoM').val(data[4]);
                $('#edit_Fecha').val(data[5]);
                $('#gender').val(data[6]);
                // Via de administracion checked
                if (data[4] == "masculino") {
                    $("#cowok").prop("checked", true);
                } else {
                    $("#cewek").prop("checked", true);
                }

                $('#edit_CURP').val(data[7]);
                $('#edit_Correo').val(data[8]);
                $('#edit_Especialidad').val(data[9]);
                $('#edit_Direccion').val(data[10]);
                $('#edit_Telefono').val(data[11]);
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#delete_id').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>

    
<footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0" ><a data-linkz-ai-ignore href="https://github.com/AlBETO128">Copyright &copy; Alberto Carbajal Vazquez 2023</a></div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacidad</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terminos</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contacto</a>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>