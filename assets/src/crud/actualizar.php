<?php
    include("../conexion.php");
    $conexion=conectar();
  
    $id_cliente = $_GET['id_cliente'];

    $con ="SELECT * FROM cliente WHERE id_cleinte='$id_cliente'";
    $query=mysqli_connect($conexion,$con);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    
</body>
</html>