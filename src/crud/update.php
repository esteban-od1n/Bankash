<?php
    require "conexion.php";
    $con = Database::connect();

    $id_cliente = (isset($_POST['id_cliente'])) ? $_POST['id_cliente'] : '';
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
    $apellido_paterno =  (isset($_POST['apellido_paterno'])) ? $_POST['apellido_paterno'] : '';;
    $apellido_materno =  (isset($_POST['apellido_materno'])) ? $_POST['apellido_materno'] : '';
    $edad =  (isset($_POST['edad'])) ? $_POST['edad'] : '';;
    $genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';
    $curp =  (isset($_POST['curp'])) ? $_POST['curp'] : '';
    $colonia =  (isset($_POST['colonia'])) ? $_POST['colonia'] : '';
    $estado =  (isset($_POST['estado'])) ? $_POST['estado'] : '';
    $municipio =  (isset($_POST['municipio'])) ? $_POST['municipio'] : '';
    $email =  (isset($_POST['email'])) ? $_POST['email'] : '';
        //UPDATE es para editar en los campos de la base de datos que donde (WHERE) estan el id seleccionado
    $sql="UPDATE cliente SET apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno', edad='$edad', genero='$genero', 
    curp='$curp', colonia='$colonia', estado='$estado', municipio='$municipio', email='$email' WHERE id_cliente='$id_cliente'";
    $query=mysqli_query($conexion,$sql);

    if($query){
        header("crud.php");
    }
?>