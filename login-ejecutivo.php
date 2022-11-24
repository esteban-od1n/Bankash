<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/pagina-ejecutivo.css">
    <title>Bankash</title>
  </head>
  <body>
    <header>
    <img src="img/Logo1.png" class="image" alt="" />
    </header>
    <main>
    <div class="container__background-triangle">
        <div class="triangle triangle1"></div>
        <div class="triangle triangle2"></div>
        <div class="triangle triangle3"></div>
        <div class="triangle triangle4"></div>
        <div class="triangle triangle5"></div>
        <div class="triangle triangle6"></div>
    </div>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="src/login-ejecutivo.php" method="POST" class="sign-in-form">
            <h2 class="title">Inicia sesión ejecutivo</h2>
            <div class="input-field">
              <i class="fa-regular fa-user"></i>
              <input type="text" name="correo" placeholder="Gmail" />
            </div>
            <div class="input-field">
              <i class="fa-solid fa-key"></i>
              <input type="password" name="contraseña" placeholder="Contraseña" />
            </div>
            <input type="submit" value="Iniciar sesión" class="btn solid" />
            <div class="social-media">
              <a href="index.php" class="social-icon">
                <i class="fa-solid fa-house"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
  </main>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/all.js"></script>
  </body>
</html>