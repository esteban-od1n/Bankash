<?php
include("src/conexion.php");
$conn = Database::connect();
session_start();
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/user-page.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab:wght@300&display=swap"
        rel="stylesheet">
    <title>Pagina de Cliente</title>
</head>

<body>
    <main>
        <header class="header">
            <img class="logo" src="img/Logo1.png" alt="">
            <h1 class="titulo">Hola usuario (name)</h1>
            <div class="botones">
                <a href="src/logout.php"><img src="img/regreso.png" alt=""></a>
            </div>
        </header>

    <div class="contenido">
        <a href="">    
            <button class="opcion1">Mi tarjeta
                <img src="img/img-user/tarjeta-de-debito.png" alt="">
            </button>
        </a>
        <a href="">
            <button class="opcion2">Revisar saldo
                <img src="img/img-user/saldo-de-gastos.png" alt="">
            </button>
        </a>
        <a href="">
            <button class="opcion3">Revisar prestamo
                <img src="img/img-user/prestamo.png" alt="">
            </button>
        </a>
        <a href="">
            <button class="opcion4">Realizar abonos
                <img src="img/img-user/pedir-prestado.png" alt="">
            </button>
        </a>
    </div>

    <footer>
        <img class="redsocial" src="img/facebook.png" alt="">
    </footer>
    </main>
</body>
</html>