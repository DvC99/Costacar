<?php 

include('includes/db.php');

if(isset($_POST['login'])){
    $usuario= $_POST['usuario'];
    $pass= $_POST['pass'];

    $query ="SELECT * FROM usuarios WHERE usuarios.usuario='$usuario' and usuarios.password='$pass'";
    $result=mysqli_query($conn,$query);
    if(!$result){
        $_SESSION['logfail']="Usuario o contraseña incorrectos";
    }
    if($result){
        $_SESSION['logwell']="Ingreso exitoso";
        $_SESSION['loguser']=$usuario;
    }
    header("Location: index.php");
}

?>