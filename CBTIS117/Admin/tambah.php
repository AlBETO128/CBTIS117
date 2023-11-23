<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['tambah'])) {
    // ambil data dari form
    $nombre = $_POST['nombre'];
    $ApellidoP = $_POST['ApellidoP'];
    $ApellidoM = $_POST['ApellidoM'];    
    $Fecha = $_POST['Fecha'];
    $Sexo = $_POST['Sexo'];
    $CURP = $_POST['CURP'];
    $Correo = $_POST['Correo'];
    $Especialidad = $_POST['Especialidad'];
    $Direccion = $_POST['Direccion'];
    $Telefono = $_POST['Telefono'];

    // query
    $sql = "INSERT INTO alumno(nombre, ApellidoP, ApellidoM, Fecha, Sexo, CURP,Correo, Especialidad, Direccion, Telefono)
    VALUES('$nombre', '$ApellidoP', '$ApellidoM', '$Fecha', '$Sexo', '$CURP','$Correo', '$Especialidad', '$Direccion','$Telefono')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("No cargo");

    