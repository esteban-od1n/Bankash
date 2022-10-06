<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: /index.html');
    die;
}
include("conexion.php");
$conn = Database::connect();

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id_cliente, email, password FROM cliente WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results=$records->fetch(PDO::FETCH_ASSOC);


    $message = '';

    if ($results && count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id_cliente'];
    header('Location: ../executive-page.html');
    die; 
} 
    else {
        header('Location: ../index.html');
        die;
    }
} else {
    header("Location: ../index.html");
    die;
}
?>