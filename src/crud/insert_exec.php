<?php 
    require "../conexion.php";
    $con = Database::connect();
    $contr = 'Admin123%';

    if($_POST['token']==strip_tags($contr)){
    if(isset($_POST['enviar_inf'])){
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
    $apellido_paterno =  (isset($_POST['apellido_paterno'])) ? $_POST['apellido_paterno'] : '';
    $apellido_materno =  (isset($_POST['apellido_materno'])) ? $_POST['apellido_materno'] : '';
    $edad =  (isset($_POST['edad'])) ? $_POST['edad'] : '';
    $nombre_de_sucursal =  (isset($_POST['nombre_de_sucursal'])) ? $_POST['nombre_de_sucursal'] : '';
    $correo = (isset($_POST['correo'])) ? $_POST['correo'] : '';
    $contraseña = strip_tags($_POST['contraseña']);
    $contraseña =password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
    $sql="INSERT INTO registro_ejecutivo(nombre, apellido_paterno, apellido_materno, edad, nombre_de_sucursal, correo, contraseña) VALUES ('$nombre','$apellido_paterno','$apellido_materno','$edad','$nombre_de_sucursal','$correo','$contraseña')"; //capturar valores
    $query= $con->query($sql);  //revisa lo que estoy pidiendo
    if($query){
        echo '
        <script type="text/javascript">
            alert("Registro de ejecutivo exitoso");
            window.location = "../../index.php";
        </script>
        ';
    }else{
        echo'error';
    }
}else {
    echo 'error xd';
}
}else{
echo '
<script type="text/javascript">
    alert("Contraseña incorrecta");
    window.location = "../../index.php";
</script>
';
    }