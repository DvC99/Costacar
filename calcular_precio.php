<?php

include('includes/db.php');

function calculatiempo($fechainicio, $fechafin)
{
  $date1 = $fechainicio;
  $date2 = $fechafin;
  $diff = $date1->diff($date2);
  return $diff->days + 1;
}

if (isset($_POST['saldate'])) {
    $calcularsal = new DateTime($_POST['saldate']);
    $calcularreg = new DateTime($_POST['regdate']);
    $modeloauto = $_POST['carmodel'];
    $diasob = $calcularreg->diff($calcularsal);
    $dias=$diasob->days;
    $dias=$dias+1;
    $query_modelo = "SELECT * FROM carros WHERE carros.placa='$modeloauto'";
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
    $preciomon='$'.strval($precio);
    echo $preciomon;
} else {
    echo "yaper";
}
