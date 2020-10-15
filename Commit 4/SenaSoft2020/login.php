<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale-1.0, maximun-scale=3.0, minimun-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../SenaSoft2020/css/estilo-login.css">
    <!--link rel="stylesheet" href="../css/estilo-menu-principal.css"-->
    <title>Iniciar Sesión</title>
</head>

<body>
  <!-- primer bloque   / <div class="panel panel-default">  <div class="panel-body">    <div class="form-group">-->
  <div class="block">
    <div id=img>
            <img class="img" src="../SenaSoft2020/media/logo.JPEG" alt="Logo de la página" width="200" height="200">
    </div>
  </div>
  <div id="titulo">
    <h1>Iniciar Sesión</h1>
  </div>
  <!--segundo bloque-->
  <form id="loginForm" action="validarCode.php" method="POST" role="form">
  <div class="bloques" id="correo">
    <h4>Correo Electrónico</h4>
    <input type="text" name="txtUsuario" class="input__text" id="Correo">
  </div>
  <!--tercer bloque-->
  <div class="bloques" id="contraseña">
      <h4>Contraseña</h4>
      <input type="password" name="txtPassword" id="password">
  </div><br>
  <hr>
  <!--cuarto bloque-->
  <div class="bloques" id="check">
    <h3>
    <input type="checkbox" id="novedades" name="novedades" value="novedades"> Recordar contraseña
    <!--<label for="condiciones"><a class="link" href="registro.php">Olvide mi contraseña<a></label><br><br> -->
    </h3>
  </div>
  <div class="bloques" id="boton">
    <button type="submit" class="btn btn__tipo1" name="btnLogin"><b>INGRESAR</b></button>
  </div>
</form>

</body>
</html>
