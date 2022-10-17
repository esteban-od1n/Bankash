<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de usuario</title>
    <link rel="stylesheet" href="assets/css/pagina-ejecutivo.css">
</head>
<body>
    <header class="header" >
        <img class="logo" src="img/Logo1.png" alt="">
        <h1 class="titulo">Hola usuario</h1>
        <a class="botones1" href="src/logout.php"><img src="img/cerrar-sesion.png" alt=""></a>
    </header>

    <div class="container__background-triangle">
        <div class="triangle triangle1"></div>
        <div class="triangle triangle2"></div>
        <div class="triangle triangle3"></div>
    </div>

<!--    <h1 class="tituloprincipal">Pagina principal de ejecutivo</h1> -->

    <div class="container__cards">
        <a href="pattern/tarjeta.html">
            <div class="card">
                <div class="cover__card">
                    <img src="img/img-user/tarjeta-de-debito.png" alt="">
                </div>
                <h2>Mi tarjeta</h2>
                <p>Puedes checar los datos importantes de tu tarjeta.</p>
                <hr>
                <div class="footer__card">
                    <h3 class="user__name">Mamie Barnett</h3>
                    <i>08 Marzo</i>
                </div>
            </div>
        </a>
        <a href="pattern/versaldo.html">
            <div class="card">
                <div class="cover__card">
                    <img src="img/img-user/saldo-de-gastos.png" alt="">
                </div>
                <h2>Revisar saldo</h2>
                <p>Puedes revisar tu dinero dentro de tu tarjeta.</p>
                <hr>
                <div class="footer__card">
                    <h3 class="user__name">Mamie Barnett</h3>
                    <i>08 Marzo</i>
                </div>
            </div>
        </a>
        <a href="">
            <div class="card">
                <div class="cover__card">
                    <img src="img/img-user/prestamo.png" alt="">
                </div>
                <h2>Revisar prestamo</h2>
                <p>Puedes revisar tus prestamos solicitados.</p>
                <hr>
                <div class="footer__card">
                    <h3 class="user__name">Mamie Barnett</h3>
                    <i>08 Marzo</i>
                </div>
            </div>
        </a>
        <a href="">
            <div class="card">
                <div class="cover__card">
                    <img src="img/img-user/pedir-prestado.png" alt="">
                </div>
                <h2>Revisar abono</h2>
                <p>Puedes revisar tus abonos realizados.</p>
                <hr>
                <div class="footer__card">
                    <h3 class="user__name">Mamie Barnett</h3>
                    <i>08 Marzo</i>
                </div>
            </div>
        </a>
    </div>
    
</body>
</html>