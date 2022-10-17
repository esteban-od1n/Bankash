<?php
    require_once "../conexion.php";
    $con = Database::connect();
  
    $id_cliente = $_GET['id_cliente'];

    $sql ="SELECT * FROM cliente WHERE id_cliente='$id_cliente'";
    $query=$con->query($sql);

    $row=$query->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>     
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" class="rel">
    <title>Actualizar</title>
</head>
<body>
    <div class="container mt-5"> 
    <form action="update.php" method="POST"><!--en name es necesario colocar el mismo nombre que en la base de datos-->
                    <input type="hidden" name="id_cliente" value="<?php echo $row['id_cliente'] ?>">
                    <label for="exampleFormControlSelect1" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" required value="<?php echo $row['nombre'] ?>">
                    <label for="exampleFormControlSelect1" class="col-form-label">Apellido Paterno:</label>
                    <input type="text" class="form-control mb-3" name="apellido_paterno" placeholder="Apellido paterno" required value="<?php echo $row['apellido_paterno'] ?>">
                    <label for="exampleFormControlSelect1" class="col-form-label">Apellido Materno:</label>
                    <input type="text" class="form-control mb-3" name="apellido_materno" placeholder="Apellido materno " required value="<?php echo $row['apellido_materno'] ?>">
                    <label for="exampleFormControlSelect1" class="col-form-label">Edad:</label>
                    <input type="number" class="form-control mb-3" name="edad" placeholder="Edad" min="18" max="99" required value="<?php echo $row['edad'] ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" class="col-form-label">sexo:</label>
                                <select class="form-control mb-3" name="genero" required>
                                <option><?php echo $row['genero'] ?></option value="<?php echo $row['genero'] ?>">
                                <option value=""></option>
                                <option>Masculino</option>
                                <option>Femenino</option>
                                <option></option>
                                </select>
                            </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" class="col-form-label">Estado:</label>
                                <select class="form-control mb-3" name="estado" required>
                                    <option><?php echo $row['estado'] ?></option>
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
                    <label for="exampleFormControlSelect1" class="col-form-label">Curp:</label>
                    <input type="text" class="form-control mb-3" name="curp" placeholder="Curp" minlength="18" maxlength="18" required value="<?php echo $row['curp'] ?>">
                    <label for="exampleFormControlSelect1" class="col-form-label">Colonia:</label>
                    <input type="text" class="form-control mb-3" name="colonia" placeholder="Colonia" required value="<?php echo $row['colonia'] ?>">
                    <label for="exampleFormControlSelect1" class="col-form-label">Municipio:</label>
                    <input type="text" class="form-control mb-3" name="municipio" placeholder="Municipio" required value="<?php echo $row['municipio'] ?>">
                    <label for="exampleFormControlSelect1" class="col-form-label">Correo electronico:</label>
                    <input type="email" class="form-control mb-3" name="email" placeholder="Gmail" required value="<?php echo $row['email'] ?>">
                    <input type="submit" class="btn btn-primary" name="mod_datos">
                </form>
    </div>



<sript src="../assets/js/bootstrap.min.js"></sript>
</body>
</html>