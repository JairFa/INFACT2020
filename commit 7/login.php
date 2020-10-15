<script>alert("Pagina de Inicio de Sesión");</script>

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
  <div id="titulo2">
    <h1>Iniciar Sesión</h1><br><br>
  </div>
  <!--segundo bloque-->
  <form id="loginForm" action="validarCode.php" method="POST" role="form">
  <div class="bloques" id="correo">
    <h2>Usuario</h2><br>
    <input type="text" name="txtUsuario" class="input__text" id="Correo">
  </div><br>
  <!--tercer bloque-->
  <div class="bloques" id="contraseña">
      <h2>Contraseña</h2><br>
      <input type="password" name="txtPassword" id="password">
  </div><br>
  <div class="bloques" id="boton">
    <button type="submit" class="btn btn__tipo1" name="btnLogin"><b>INGRESAR</b></button>
  </div>
</form>

</body>
</html>
