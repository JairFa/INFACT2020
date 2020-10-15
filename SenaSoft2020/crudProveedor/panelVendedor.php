<script>alert("Panel de Vendedor");</script>

<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale-1.0, maximun-scale=3.0, minimun-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/panel-vendedor.css">
	<title>Panel Vendedor</title>
</head> 

<body>
    <br>
    <div id=img>
		<img class="img" src="../media/logo.JPEG" alt="Logo de la página" width="200" height="200">
    </div>

    <div>
		 <a id="Factura" href="../crudFactura/index.php" class="btn btn-primary btn-lg"><b>Factura</b></a>
		 </div>
		 <div>
		 <a id="Producto" href="../crudProducto/index.php" class="btn btn-primary btn-lg"><b>Producto</b></a>
		 </div>

		 <a id="Inventario" href="../crudInventario/index.php" class="btn btn-primary btn-lg"><b>Inventario</b></a>
	</div>

	<div class="block" id="cerrar">
		<a href="../cerrar-sesion.php" class="btn btn-primary btn-lg"><b>Cerrar Sesión</b></a>
	</div>


</div>

	<form>	</form>

</body>
</html>