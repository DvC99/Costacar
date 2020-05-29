<?php

include('includes/db.php');
$vacio = "";
if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $repetido = "SELECT usuario FROM usuarios WHERE usuarios.usuario='$usuario'";
    $abr = mysqli_query($conn, $repetido);
    $row = mysqli_fetch_row($abr);
    $usuariorep = $row[0];
    if (strcmp($vacio, $usuario) === 0) {
    } else {
        if (strcmp($usuariorep, $usuario) === 0) {
            echo "El nombre de usuario ya se encuentra en uso";
        } else {
            echo "";
        }
    }
}

if (isset($_POST['email'])){
    $email=$_POST['email'];
    $repetido = "SELECT correo FROM usuarios WHERE usuarios.correo='$email'";
    $abr = mysqli_query($conn, $repetido);
    $row = mysqli_fetch_row($abr);
    $emailrep = $row[0];
    if (strcmp($vacio, $email) === 0) {
    } else {
        if (strcmp($emailrep, $email) === 0) {
            echo "Esta direccion de correo ya se cencuentra en uso";
        } else {
            echo "";
        }
    }
}

if (isset($_POST['pass'])){
    $pass=$_POST['pass'];
    $user=$_POST['user'];
    $query = "SELECT usuario FROM usuarios WHERE usuarios.usuario='$user' and usuarios.password='$pass'";
    $abr = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($abr);
    $existe = $row[0];
    if (strcmp($vacio, $existe) === 0) {
        echo "Usuario o contreseña incorrectos";
    }
}


