<?php 
    require "../conexion.php";
    $con = Database::connect();

    if(isset($_POST['enviar_datos'])){
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
    $apellido_paterno =  (isset($_POST['apellido_paterno'])) ? $_POST['apellido_paterno'] : '';
    $apellido_materno =  (isset($_POST['apellido_materno'])) ? $_POST['apellido_materno'] : '';
    $fecha_nac =  (isset($_POST['fecha_nac'])) ? $_POST['fecha_nac'] : '';
    $genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';
    $curp =  (isset($_POST['curp'])) ? $_POST['curp'] : '';
    $colonia =  (isset($_POST['colonia'])) ? $_POST['colonia'] : '';
    $estado =  (isset($_POST['estado'])) ? $_POST['estado'] : '';
    $municipio =  (isset($_POST['municipio'])) ? $_POST['municipio'] : '';
    $email =  (isset($_POST['email'])) ? $_POST['email'] : ''; //le creaamos variables $(el nombre que deseas) y es necesario ponerle el mismo nombre que en la base de datos en los corchetes
    $password = strip_tags($_POST['password']);
    $password =password_hash($_POST['password'], PASSWORD_BCRYPT);
    $saldo =  (isset($_POST['saldo'])) ? $_POST['saldo'] : '';
    $sql="INSERT INTO cliente(nombre, apellido_paterno, apellido_materno, fecha_nac, genero, curp, colonia, estado, municipio, email,password, saldo) VALUES ('$nombre','$apellido_paterno','$apellido_materno','$fecha_nac','$genero','$curp','$colonia','$estado','$municipio','$email','$password','$saldo')"; //capturar valores
    $query= $con->query($sql);  //revisa lo que estoy pidiendo

    if($query){
        header('Location: table_users.php');
    }else{
        echo'error';
    }
}else {
    echo 'error';
}
?>




