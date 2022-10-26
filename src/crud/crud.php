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
<!--    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" class="rel"> -->
    <link rel="stylesheet" href="../../assets/css/crud.css" class="rel">
    <link rel="stylesheet" href="cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
    <title>Modificar, dar de alta y baja una cuenta</title>
</head>
<body>

    <header class="header" >
        <img class="logo" src="../../img/Logo1.png" alt="">
        <h1 class="titulo">Agregar, modificar y eliminar usuarios</h1>
        <a class="botones" href="../../pagina-ejecutivo.php"><img src="../../img/regresar.png" alt=""></a>
    </header>

    <div class="container__background-triangle">
        <div class="triangle triangle1"></div>
        <div class="triangle triangle2"></div>
        <div class="triangle triangle3"></div>
    </div>

    <div class="container__cards">
        <div class="card">
            <div class="cover__card">
                <h1 class="subtitulo">Ingresar datos del cliente</h1>
                <form class="contenido" action="insertar.php" method="POST"><!--en name es necesario colocar el mismo nombre que en la base de datos-->
                    <label for="">Ingresa el nombre:</label>
                    <input type="text" class="input1" name="nombre" placeholder="Nombre" required>
                    <label for="">Ingresa el apellido paterno:</label>
                    <input type="text" class="input1" name="apellido_paterno" placeholder="Apellido paterno" required>
                    <label for="">Ingresa el apellido materno:</label>
                    <input type="text" class="input1" name="apellido_materno" placeholder="Apellido materno " required>
                    <label for="">Ingresa la fecha de nacimiento del cliente: </label>
                    <input type="date" class="input1" name="fecha_nac" placeholder="fecha de nacimiento" required   >
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" class="col-form-label">Ingresa el sexo:</label>
                                <select class="input12" name="genero" required>
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
                                <label for="exampleFormControlSelect1" class="col-form-label">Ingresa el estado:</label>
                                <select class="input12" name="estado" required>
                                    <option></option>
                                    <option>Aguscalientes</option>
                                    <option>Baja California</option>
                                    <option>Baja California Sur</option>
                                    <option>Campeche</option>
                                    <option>Coahuila</option>
                                    <option>Colima</option>
                                    <option>Chiapas</option>
                                    <option>Chihuahua</option>
                                    <option>Durango</option>
                                    <option>Estado De México</option>
                                    <option>Guanajuato</option>
                                    <option>Guerrero</option>
                                    <option>Hidalgo</option>
                                    <option>Jalisco</option>
                                    <option>Ciudad De México</option>
                                    <option>Michoacán</option>
                                    <option>Morelos</option>
                                    <option>Nayarit</option>
                                    <option>Nuevo León</option>
                                    <option>Oaxaca</option>
                                    <option>Puebla</option>
                                    <option>Querétaro</option>
                                    <option>Quintana Roo</option>
                                    <option>San Luis Potosí</option>
                                    <option>Sinaloa</option>
                                    <option>Sonora</option>
                                    <option>Tabasco</option>
                                    <option>Tamaulipas</option>
                                    <option>Tlaxcala</option>
                                    <option>Veracruz</option>
                                    <option>Yucatán</option>
                                    <option>Zacatecas   </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <label for="">Ingresa la CURP del cliente:</label>
                    <input type="text" class="input1" name="curp" placeholder="Curp" minlength="18" maxlength="18" required>
                    <label for="">Ingresa la colonia del cliente:</label>
                    <input type="text" class="input1" name="colonia" placeholder="Colonia" required>
                    <label for="">Ingresa el municipio del cliente: </label>
                    <input type="text" class="input1" name="municipio" placeholder="Municipio" required>
                    <label for="">Ingresa el email del cliente:</label>
                    <input type="email" class="input1" name="email" placeholder="Gmail" required>
                    <label for="">Ingresa tu contraseña (el cliente debe rellenar este campo):</label>
                    <input type="password" class="input1" name="password" placeholder="Contraseña" required>
                    <input type="submit" class="button-15" name="enviar_datos">
                </form>
            </div>
        </div>
        </div>
    </div>
    <sript src="../assets/js/bootstrap.min.js"></sript>
</body>
</html