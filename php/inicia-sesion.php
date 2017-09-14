<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width-device-width">
   <link rel="stylesheet"  href="css/styles.css">

  <title>Inicia-Sesión</title>
</head>
<body>
  <header class="cabecera">
<div class="nombre_logo">
 <a href="../html/index.html">
   <img src="../images/logo.png" width=14% class="logo-index">
 </a>
 <a href="../html/index.html">
   <h3 class="marca"> Boomerang </h3>
 </a>
 </div>
 </header>
 <br>
 <br>

      <form action="registros.php" method="post">
      <input
        type="text"
        class="name"
        placeholder="Nombre de usuario"><br><br>

      <input
        type="text"
        class="lastname"
        placeholder="Contraseña"><br><br>
        Recordarme
      <input
      type="checkbox"
      class="remember" alt="" value="1" /><br><br>

      <button type="submit" name="facebook" >
<img src="../images/facebook.svg" height="50">
        Inicia sesión con Facebook
</button><br><br>
    <a href="recover.php">¿Olvidaste tu contraseña?</a>
    <br><br>

      <button type="submit" name="button">
        Entrar
      </button>
    </form> <br><br>

     <footer>
      <div class="barra_info">
      <li>
        <a href="contacto.php">
            Contacto1
          </a>
        </li>

        </li>
          <a href="mailto:nuestro-nombre@mail.com">
            Contacto2
          </a>
        </li>
        <li>
          <a href="../html/ayuda.html">
            Ayuda
          </a>
        </li>
        <li>
          <a href="../html/terminos_y_condiciones.html">
            Terminos y Condiciones
          </a>
        </li>
      </div>
    </footer>

  </body>
</html>
