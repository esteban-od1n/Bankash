<?php
    require_once "../conexion.php";
    $con = Database::connect();
  
    $id_cliente = $_GET['id_cliente'];

    $sql ="SELECT * FROM cliente WHERE id_cleinte='$id_cliente'";
    $query=$con->query($sql);

    $row=$query->fetch(PDO::FETCH_ASSOC);
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