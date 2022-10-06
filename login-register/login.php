<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: index.html');
}else {
    echo 'error';
}
include("conex.php");

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id_cliente, email, password FROM cliente WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results=$records->fetch(PDO::FETCH_ASSOC);


    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id_cliente'];
    header('Location: ../executive-page.html');  
} 
    else {
    $message='ver_articulo.php';
}
}else {
    echo 'error';
}
?>