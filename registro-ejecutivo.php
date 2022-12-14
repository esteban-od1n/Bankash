<?php 
    require_once "src/conexion.php";
    $con = Database::connect();
    
    $sql = "SELECT * FROM registro_ejecutivo";
    $query=$con->query($sql);
    $row=$query->fetch(PDO::FETCH_ASSOC); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/registro-ejecutivo.css" class="rel"> 
    <title>Registro Ejecutivo</title>
</head>
<body>
    <header class="header">
        <img class="logo" src="img/Logo1.png" alt="">
        <h1 class="titulo">Hola</h1>
        <a class="botones" href="index.php"><img src="img/cerrar-sesion.png" alt=""></a>
    </header>

    <div class="container__background-triangle">
        <div class="triangle triangle1"></div>
        <div class="triangle triangle2"></div>
        <div class="triangle triangle3"></div>
    </div>

    <div class="container__cards">
        <div class="card">
            <div class="cover__card">
                <form class="contenido" action="src/crud/insert_exec.php" method="POST">
                <label for="">Ingresa el la contraseña correcta:</label>
                            <input type="password" class="input1" name="token" placeholder="Contraseña" >
                    <label for="">Ingresa el nombre:</label>
                            <input type="text" class="input1" name="nombre" placeholder="Nombre" >
                    <label for="">Ingresa tu apellido paterno:</label>
                            <input type="text" class="input1" name="apellido_paterno" placeholder="Apellido paterno" >
                    <label for="">Ingresa tu apellido materno:</label>
                            <input type="text" class="input1" name="apellido_materno" placeholder="Apellido materno" >
                    <label for="">Ingresa tu edad:</label>
                            <input type="number" class="input1" name="edad" placeholder="Edad" min="18" max="99">          
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" class="col-form-label">Ingresa el nombre de la susursal:</label>
                                        <select class="input12" name="nombre_de_sucursal" >
                                        <option></option>
                                        <option>Bankash</option>
                                        <option>Otra</option>
                                        </select>
                                    </div>
                            </div>
                            </div> 
                    <label for="">Ingresa tu correo electronico:</label>
                            <input type="email" class="input1" name="correo" placeholder="Gmail" > 
                    <label for="">Ingresa tu contraseña:</label>
                            <input type="password" class="input1" name="contraseña" placeholder="Contraseña" >
                        <br> <input type="submit" class="button-15" name="enviar_inf"></br>    
                </form>
            </div>
        </div>
    </div>
</body>
</html>