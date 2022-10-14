<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Bankash</title>
  </head>
  <body>
    <header>

    </header>
    <main>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="src/login-ejecutivo.php" method="POST" class="sign-in-form">
            <h2 class="title">Inicia sesión</h2>
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

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿Qué es Bankash?</h3>
            <p>
              Bankash es una aplicación web que sirve para tener una cuenta de
              tarjeta, podras solicitar un prestamo y transferir dinero a otro usuario o 
              realizar pagos sobre el prestamo.
            </p>
          </div>
          <img src="img/Logo1.png" class="image" alt="" />
        </div>
      </form>
        </div>
      </div>
    </div>
  </main>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/all.js"></script>
  </body>
</html>