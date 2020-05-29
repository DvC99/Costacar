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

    }
    header("Location: index.php");

}

?>