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
        <a class="navbar-brand" href="../../Main/index.php" ><img src="../../Img/logo.png" height="65wx"><span class="fw-bolder text-primary">  CBTIS 117</span></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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