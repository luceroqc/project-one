<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width-device-width">
   <link rel="stylesheet"  href="css/styles.css">

  <title>Registrate</title>
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

    <div class="enter_buttoms">
          <a href="../php/inicia-sesion.php">
            Inicia Sesión
          </a>
          <a href="../php/registrate.php">
            Registrate
          </a>
        </div>
      </header>



<button type="submit" name="facebook" >
<img src="../images/facebook.svg" height="50">
        Registrate con Facebook
</button><br><br>

<form action="complete.php" method="post">
      <input
        type="text"
        class="name"
        placeholder="correo electronico"><br><br>

      <input
        type="text"
        class="lastname"
        placeholder="Nombre completo"><br><br>

    <form action="save.php" method="post">
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


      <button type="submit" name="button">
        Registarme
      </button> <br><br><br>
    </form>

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
