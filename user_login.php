<?php 

include('includes/db.php');

if(isset($_POST['login'])){
    $usuario= $_POST['usuario'];
    $pass= $_POST['pass'];
    $vacio="";
    $queryuser ="SELECT usuario FROM usuarios WHERE usuarios.usuario='$usuario' and usuarios.password='$pass'";
    $queryuser ="SELECT 'password' FROM usuarios WHERE usuarios.usuario='$usuario' and usuarios.password='$pass'";
    $resultuser=mysqli_query($conn,$queryuser);
    $rowuser = mysqli_fetch_row($resultuser);
    $existe=$rowuser[0];
    if(strcmp($vacio,$existe) ===0){
        $_SESSION['logfail']="Usuario o contraseña incorrectos";
    }else{
        $_SESSION['logwell']="Ingreso exitoso";
        $_SESSION['loguser']=$usuario;
    }
    header("Location: index.php");
}

?>