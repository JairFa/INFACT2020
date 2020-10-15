<script>alert("Ingresando a Facturas");</script>
<?php
#Aqui se llama la conexion a la base de datos para acceder a la tabla admin y mostrar el contenido
	include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT *FROM tblfactura WHERE EstadoFactura="ingresado" ORDER BY IDFactura DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();	
	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM tblfactura WHERE IDFactura  LIKE :campo OR IDVendedor  LIKE :campo OR CodigoProducto  LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Index Factura</title>
	<!--link rel="stylesheet" href="csss/estilos.css"-->
	<link rel="stylesheet" href="../vistas/css/estilosIndexEmpleado.css">
</head>
<hr>
<body>
<div id=img> 
	    <img class="img" src="../media/logo.JPEG" alt="Logo de la página" width="200" height="200">
</div>
	<table>
		<!--se muestra informacion de la tabla, logo y las opciones de busqueda, ingresar nuevo y regresar a la pagina principal del usuario logueado-->
		<div class="facturas">
			<h2>Registros Facturas</h2>
			<br>
			<div class="barra__buscador">
				<form action="" class="formulario" method="post">
					<input type="text" name="buscar" placeholder="buscar factura, vendedor o producto" 
					value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
					<input type="submit" class="btn" name="btn_buscar" value="Buscar">
					<br>
					<br>
					<a href="insert.php" class="btn btn__nuevo">Nuevo</a>
					<a href="../crudVendedor/panelVendedor.php" class="btn btn__nuevo">Volver</a>
			
			
				</form>
			</div>
			<br>
				<!--Encabezado de la tabla-->
				<tr class="head">
					<td>IdFactura</td>
					<td>IdVendedor</td>
					<td>CodProducto</td>
					<td>CantidadProducto</td>
					<td>ValorUnidad</td>
					<td>ValorTotal</td>
					<td>Fecha</td>
					<td colspan="2">Acción</td>
				</tr>
				
				<?php foreach($resultado as $fila):?>
			<!--Se muestra el contenido de la tabla persona"-->
					<tr>
						<td><?php echo $fila['IDFactura'];?></td>
						<td><?php echo $fila['IDVendedor'];?></td>
						<td><?php echo $fila['CodigoProducto']; ?></td>
						<td><?php echo $fila['CantidadProducto']; ?></td>
						<td><?php echo $fila['ValorUnidad']; ?></td>
						<td><?php echo $fila['Valortotal']; ?></td>
						<td><?php echo $fila['Fecha']; ?></td>
						<td><a href="update.php?IDFactura=<?php echo $fila['IDFactura']; ?>"  class="btn__update" >  Editar  </a></td>
						<td><a href="delete.php?IDFactura=<?php echo $fila['IDFactura']; ?>" class="btn__delete">Eliminar</a></td>
					</tr>
				<?php endforeach ?>
		</div>
	</table>
</body>
</html>