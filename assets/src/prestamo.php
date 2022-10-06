<?php
require "conexion.php";
$con = Database::connect();

print_r($_POST);

$curp = $_POST['curp'];     //Leer curp
$res = $con -> query("select * from cliente where curp = $curp");       //Seleciona curp

 
header("Location: ../res-prestamo.html");

die;
?>  