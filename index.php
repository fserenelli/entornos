<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <title>Cursos Online</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="contenedor-principal">
      <div class="contenedor c-izquierda"></div>
      <div class="contenedor c-derecha">
        <form action="#" class="registro" method="post">
          <div class="nombre-sitio">
            <h1 class="nombre-sitio">Acceder</h1>
          </div>
          <div class="login">
            <div>  
              <div class="campo">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" placeholder="usuario@xxxx.com">
              </div>
              <div class="campo">
                <label for="pass">Contraseña:</label>
                <input type="text" id="pass" name="pass" placeholder="Contraseña">
              </div>
              <div class="forget-pass">
                <a href="#">Forget password?</a>
              </div>
            </div>
          </div>
          <div class="botones">
              <div class="iniciar-sesion">
                <input type="submit" id="btnIniciarSesion" class="btnIniciarSesion" value="Siguiente">
              </div>
              <div class="crear-cuenta">
                <input type="submit" id="btnCrearCuenta" class="btnCrearCuenta" value="Crear cuenta">
              </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>