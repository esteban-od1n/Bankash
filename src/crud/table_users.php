<?php require_once "../conexion.php";
$con = Database::connect();


    $sql = "SELECT * FROM cliente";
    $query=$con->query($sql);
    $row=$query->fetch(PDO::FETCH_ASSOC); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
        <div class="tabla col-md-5">
             <thead class="propifecha_natabla">
                <tr>
                    <th>ID del cliente</th>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>fecha de nacimineto</th>
                    <th>sexo</th>
                    <th>CURP</th>
                    <th>Colonia</th>
                    <th>Estado</th>
                    <th>Municipio</th>
                    <th>Gmail</th>
                    <th>Opción</th>
                    <th>Opción</th>
                </tr>
             </thead>
             <tbody>
                <?php 
                //consulta y genere cada uno de los campos
                while($row=$query->fetch(PDO::FETCH_ASSOC)){ 
                ?>
                <tr>
                <th><?php echo $row['id_cliente']?></th>
                <th><?php echo $row['nombre']?></th>
                <th><?php echo $row['apellido_paterno']?></th>
                <th><?php echo $row['apellido_materno']?></th>
                <th><?php echo $row['fecha_nac']?></th>
                <th><?php echo $row['genero']?></th>
                <th><?php echo $row['curp']?></th>
                <th><?php echo $row['colonia']?></th>
                <th><?php echo $row['estado']?></th>
                <th><?php echo $row['municipio']?></th>
                <th><?php echo $row['email']?></th>       <!-- en $row['id_cliente'] captura un valor todo lo que sea del codigo id_cliente-->
                <th> <a href="actualizar.php?id_cliente=<?php echo $row['id_cliente']?>" class="btn btn-info">Editar</a></th>
                <th><a href="delete.php?id_cliente=<?php echo $row['id_cliente'] ?>" class="btn btn-danger">Eliminar</a></th>
                </tr>
                <?php }?>
             </tbody>
            </table>
</body>
</html>