<?php

include('includes/db.php');

if(isset($_POST['user_reg'])){
    $usuario= $_POST['usuario'];
    $pass= $_POST['pass'];
    $nombres= $_POST['nombres'];
    $apellidos= $_POST['apellidos'];
    $correo= $_POST['correo'];
    
    $query= "INSERT INTO usuarios(usuario,password,nombre,apellido,correo) 
    VALUES ('$usuario','$pass','$nombres','$apellidos','$correo')";
    $result=mysqli_query($conn,$query);
    if (!$result){
        $repetido= "SELECT * FROM usuarios WHERE usuarios.usuario='$usuario'";
        $abr=mysqli_query($conn,$repetido);
        $repetido2= "SELECT * FROM usuarios WHERE usuarios.usuario='$usuario'";
        $abr2=mysqli_query($conn,$repetido);
        if($abr){
            $_SESSION['user_rep'] = 'El usuario ya esta en uso';
        }
        if($abr2){
            $_SESSION['correo_rep'] = 'El Correo electronico ya esta en uso';
        }

    }
    header("Location: index.php");

}

?>