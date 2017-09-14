<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de Registro</title>
  </head>
  <body>
  <header class="cabecera">
   <div class="nombre_logo">
      <img src="images/estrella.jpg" width="50px">
      <h3 class="marca"> nuestro nombre </h3>
    </div>
    </header>


    <form action="save.php" method="post">
      <input
        type="text"
        class="name"
        placeholder="Nombre de usuario"><br><br>

      <input
        type="text"
        class="lastname"
        placeholder="Contraseña"><br><br>

    

      <button type="submit" name="button">
        Entrar
      </button>
    </form>

        <footer>
      <div class="barra_info">
        <li>
          <a href="">
            Contacto
          </a>
        </li>
        <li>
          <a href="ayuda.html">
            Ayuda
          </a>
        </li>       
        <li>
          <a href="terminos_y_condiciones.html">
            Terminos y Condiciones
          </a>
        </li>
      </div>
    </footer> 

  </body>
</html>
