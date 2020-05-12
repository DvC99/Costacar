<?php

include('includes/db.php');



if (isset($_POST['rentar_auto'])) {
    $fechaini = $_POST['fechasalida'];
    $fechafin = $_POST['fecharegreso'];
    $placa = $_POST['modeloauto'];
    $usuario = $_POST['usuario'];

    $calcularsal = new DateTime($_POST['fechasalida']);
    $calcularreg = new DateTime($_POST['fecharegreso']);
    $diasob = $calcularreg->diff($calcularsal);
    $dias = $diasob->days;
    $dias = $dias + 1;
    $query_modelo = "SELECT * FROM carros WHERE carros.placa='$placa'";
    $precio_modelo_query = mysqli_query($conn, $query_modelo);
    $row = mysqli_fetch_array($precio_modelo_query);
    $precio_modelo = $row['precio'];
    if ($dias >= 30) {
        $precio = $precio_modelo * $dias * 0.8;
    } else {
        if ($dias >= 15) {
            $precio = $precio_modelo * $dias * 0.9;
        } else {
            if ($dias >= 7) {
                $precio = $precio_modelo * $dias * 0.95;
            } else {
                if ($dias <= 0) {
                    $precio = 0;
                } else {
                    $precio = $precio_modelo * $dias;
                }
            }
        }
    }
    $valor=$precio;

    $query = "INSERT INTO rentas(usuario,placa,fechaini,fechafin,valor) 
    VALUES ('$usuario','$placa','$fechaini','$fechafin','$valor')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Error inesperado";
    } else {
        header("Location: index.php");
    }
}
