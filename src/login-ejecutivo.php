<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
    die;
}
include("conexion.php");
$conn = Database::connect();

if (!empty($_POST['correo']) && !empty($_POST['contraseña'])) {
    $records = $conn->prepare('SELECT id_ejecutivo, correo, contraseña FROM registro_ejecutivo WHERE correo = :correo');
    $records->bindParam(':correo', $_POST['correo']);
    $records->execute();
    $results=$records->fetch(PDO::FETCH_ASSOC);


    $message = '';
       //if ($results && count($results) > 0 && password_verify($_POST['password'], $results['password']) (solo cuando hayas hasheado la password en el link viene que hasheo necesita)
    if ($results && count($results) > 0 ) {
    $_SESSION['user_id'] = $results['id_ejecutivo'];
    header('Location: ../pagina-ejecutivo.php');
    die; 
} 
    else {
        header('Location: ../index.php');
        die;
    }
} else {
    header("Location: ../index.php");
    die;
}
?>