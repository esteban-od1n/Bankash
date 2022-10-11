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
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" class="rel">
    <link rel="stylesheet" href="../../assets/css/crud.css" class="rel">
    <title>CRUD</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="cold-md-3">
                <h1>Ingresar Datos</h1>
                <form action="insertar.php" method="POST"><!--en name es necesario colocar el mismo nombre que en la base de datos-->
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" required>
                    <input type="text" class="form-control mb-3" name="apellido_paterno" placeholder="Apellido paterno" required>
                    <input type="text" class="form-control mb-3" name="apellido_materno" placeholder="Apellido materno " required>
                    <input type="number" class="form-control mb-3" name="edad" placeholder="Edad" min="18" max="99"required>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" class="col-form-label">sexo</label>
                                <select class="form-control mb-3" name="genero" required>
                                <option></option>
                                <option>Masculino</option>
                                <option>Femenino</option>
                                </select>
                            </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" class="col-form-label">Estado</label>
                                <select class="form-control mb-3" name="estado" required>
                                    <option></option>
                                    <option>AGUASCALIENTES</option>
                                    <option>BAJA CALIFORNIA</option>
                                    <option>BAJA CALIFORNIA SUR</option>
                                    <option>CAMPECHE</option>
                                    <option>COAHUILA</option>
                                    <option>COLIMA</option>
                                    <option>CHIAPAS</option>
                                    <option>CHIHUAHUA</option>
                                    <option>DURANGO</option>
                                    <option>ESTADO DE MÉXICO</option>
                                    <option>GUANAJUATO</option>
                                    <option>GUERRERO</option>
                                    <option>HIDALGO</option>
                                    <option>JALISCO</option>
                                    <option>CIUDAD DE MÉXICO</option>
                                    <option>MICHOACÁN</option>
                                    <option>MORELOS</option>
                                    <option>NAYARIT</option>
                                    <option>NUEVO LEÓN</option>
                                    <option>OAXACA</option>
                                    <option>PUEBLA</option>
                                    <option>QUERÉTARO</option>
                                    <option>QUINTANA ROO</option>
                                    <option>SAN LUIS POTOSÍ</option>
                                    <option>SINALOA</option>
                                    <option>SONORA</option>
                                    <option>TABASCO</option>
                                    <option>TAMAULIPAS</option>
                                    <option>TLAXCALA</option>
                                    <option>VERACRUZ</option>
                                    <option>YUCATÁN</option>
                                    <option>ZACATECAS</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="text" class="form-control mb-3" name="curp" placeholder="Curp" minlength="18" maxlength="18" required>
                    <input type="text" class="form-control mb-3" name="colonia" placeholder="Colonia" required>
                    <input type="text" class="form-control mb-3" name="municipio" placeholder="Municipio" required>
                    <input type="email" class="form-control mb-3" name="email" placeholder="Gmail" required>

                    <input type="submit" class="btn btn-primary" name="enviar_datos">
                </form>
            </div>
        </div>
        <div class="tabla col-md-15">
            <table class="table">
             <thead class="table-dark">
                <tr>
                    <th>ID del cliente</th>
                    <th>Nombre</th>
                    <th>Apellid paterno</th>
                    <th>Apellido materno</th>
                    <th>Edad</th>
                    <th>sexo</th>
                    <th>CURP</th>
                    <th>Colonia</th>
                    <th>Estado</th>
                    <th>Municipio</th>
                    <th>Gmail</th>
                    <th></th>
                    <th></th>
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
                <th><?php echo $row['edad']?></th>
                <th><?php echo $row['genero']?></th>
                <th><?php echo $row['curp']?></th>
                <th><?php echo $row['colonia']?></th>
                <th><?php echo $row['estado']?></th>
                <th><?php echo $row['municipio']?></th>
                <th><?php echo $row['email']?></th>         <!-- en $row['id_cliente'] captura un valor todo lo que sea del codigo id_cliente-->
                <th> <a href="actualizar.php?id_cliente=<?php echo $row['id_cliente']?>" class="btn btn-info">Editar</a></th>
                <th><a href="delete.php?id_cliente=<?php echo $row['id_cliente'] ?>" class="btn btn-danger">Eliminar</a></th>
                </tr>
                <?php }?>
             </tbody>
            </table>
        </div>
    </div>
    <sript src="../assets/js/bootstrap.min.js"></sript>
</body>
</html>