<?php
    require "../conexion.php";
    include "crud.php";
    $con = Database::connect();

    if(isset($_POST['mod_datos'])){
        $id_cliente = (isset($_POST['id_cliente'])) ? $_POST['id_cliente'] : '';
        $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';

        $apellido_paterno =  (isset($_POST['apellido_paterno'])) ? $_POST['apellido_paterno'] : '';

        $apellido_materno =  (isset($_POST['apellido_materno'])) ? $_POST['apellido_materno'] : '';
        
        $fecha_nac =  (isset($_POST['fecha_nac'])) ? $_POST['fecha_nac'] : '';

        $genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';

        $curp =  (isset($_POST['curp'])) ? $_POST['curp'] : '';

        $colonia =  (isset($_POST['colonia'])) ? $_POST['colonia'] : '';

        $estado =  (isset($_POST['estado'])) ? $_POST['estado'] : '';

        $municipio =  (isset($_POST['municipio'])) ? $_POST['municipio'] : '';

        $email =  (isset($_POST['email'])) ? $_POST['email'] : '';
        
        $saldo =  (isset($_POST['saldo'])) ? $_POST['saldo'] : '';
        //UPDATE es para editar en los campos de la base de datos que donde (WHERE) estan el id seleccionado en la parte de fecha_na no es necesario agregar las comillas simplre ya que es un valor entero 
        $actualizar="UPDATE cliente SET nombre='$nombre', apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno', fecha_nac='$fecha_nac', genero='$genero', 
        curp='$curp', colonia='$colonia', estado='$estado', municipio='$municipio', email='$email', saldo='$saldo' WHERE id_cliente='$id_cliente'";
    
    $query=$con->query($actualizar);

}
?>