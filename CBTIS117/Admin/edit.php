<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $id = $_POST['edit_id'];
    $nombre = $_POST['edit_nombre'];
    $ApellidoP = $_POST['edit_ApellidoP'];
    $ApellidoM = $_POST['edit_ApellidoM'];
    $Fecha = $_POST['edit_Fecha'];
    $Sexo = $_POST['edit_Sexo'];
    $CURP = $_POST['edit_CURP'];
    $Correo = $_POST['edit_Correo'];
    $Especialidad = $_POST['edit_Especialidad'];
    $Direccion = $_POST['edit_Direccion'];
    $Telefono = $_POST['edit_Telefono'];


    // query
    $sql = "UPDATE Alumno SET nombre='$nombre', ApellidoP='$ApellidoP', ApellidoM='$ApellidoM', Fecha='$Fecha', Sexo='$Sexo', CURP='$CURP', Correo='$Correo', Especialidad='$Especialidad', Direccion='$Direccion', Telefono='$Telefono' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("No se pudo...");
