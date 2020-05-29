<?php
/*session_start();

$conn= mysqli_connect(
    'localhost',
    'root',
    '',
    'costacar'
);*/
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = "sql111.epizy.com";
$username = "epiz_25759738";
$password = "GK7yjk7ymhRHPV";
$db ="epiz_25759738_databasecostacar";

$conn = new mysqli($server, $username, $password, $db);
?>
