<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de ejecutivo</title>
    <link rel="stylesheet" href="assets/css/pagina-ejecutivo.css">
</head>
<body>
    <header class="header">
        <img class="logo" src="img/Logo1.png" alt="">
        <h1 class="titulo">Hola ejecutivo</h1>
        <a class="botones" href="src/logout.php"><img src="img/cerrar-sesion.png" alt=""></a>
    </header>

    <div class="container__background-triangle">
        <div class="triangle triangle1"></div>
        <div class="triangle triangle2"></div>
        <div class="triangle triangle3"></div>
    </div>

    <div class="container__cards">
        <a href="src/crud/crud.php">
            <div class="card">
                <div class="cover__card">
                    <img class="imgapartado" src="img/img-executive/objetivo.png" alt="">
                </div>
                <h2>Agregar, modificar y eliminar usuarios</h2>
                <p>Da de alta a usuarios nuevos</p>
                <hr>
                <div class="footer__card">
                    <h3 class="user__name">Bankash</h3>
                    <i>0000</i>
                </div>
            </div>
        </a>
        <a href="pattern/tabladeusuarios.php">
            <div class="card">
                <div class="cover__card">
                    <img class="imgapartado" src="img/img-executive/mesa.png" alt="">
                </div>
                <h2>Ver tabla de usuarios registrados</h2>
                <p>Puede ver, modificar o eliminar usuarios que estan en el sistema</p>
                <hr>
                <div class="footer__card">
                    <h3 class="user__name">Bankash</h3>
                    <i>0000</i>
                </div>
            </div>
        </a>
        <a href="pattern/prestamo1.php">
            <div class="card">
                <div class="cover__card">
                    <img class="imgapartado" src="img/img-executive/prestamo.png" alt="">
                </div>
                <h2>Generar nuevo prestamo</h2>
                <p>Puedes generar un nuevo prestamo al un cliente</p>
                <hr>
                <div class="footer__card">
                    <h3 class="user__name">Bankash</h3>
                    <i>0000</i>
                </div>
            </div>
        </a>
        <a href="pattern/verprestamo1.php">
            <div class="card">
                <div class="cover__card">
                    <img class="imgapartado" src="img/img-executive/retorno-de-la-inversion.png" alt="">
                </div>
                <h2>Ver prestamos</h2>
                <p>Puedes ver los prestamos que han solicitado los usuarios</p>
                <hr>
                <div class="footer__card">
                    <h3 class="user__name">Bankash</h3>
                    <i>0000</i>
                </div>
            </div>
        </a>
        <a href="pattern/pagos.html">
            <div class="card">
                <div class="cover__card">
                    <img class="imgapartado" src="img/img-executive/metodo-de-pago.png" alt="">
                </div>
                <h2>Validar pagos</h2>
                <p>Se pueden validar los pagos de un cliente</p>
                <hr>
                <div class="footer__card">
                    <h3 class="user__name">Bankash</h3>
                    <i>0000</i>
                </div>
            </div>
        </a>
        <a href="pattern/deposito.html">
            <div class="card">
                <div class="cover__card">
                    <img class="imgapartado" src="img/img-executive/depositar.png" alt="">
                </div>
                <h2>Validar depositos y retiro de cuenta</h2>
                <p>Se pueden valir los pagos de un cliente</p>
                <hr>
                <div class="footer__card">
                    <h3 class="user__name">Bankash</h3>
                    <i>0000</i>
                </div>
            </div>
        </a>
    </div>
</body>
</html>