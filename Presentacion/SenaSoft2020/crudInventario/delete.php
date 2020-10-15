<?php 
#Procedimiento para eliminado logico, es decir lo pasa de un estado activo a un estado inactivo
	include_once 'conexion.php';
	if(isset($_GET['IDFactura'])){
		$IDFactura=(int) $_GET['IDFactura'];
		$delete=$con->prepare('UPDATE tblfactura SET EstadoFactura="Gestionado" WHERE IDFactura = :IDFactura');
		$delete->execute(array(
			':IDFactura'=>$IDFactura
		));
		header('Location: index.php');
	}else{
		header('Location: index.php');
	}
 ?>

 <!--$query_delete = mysquli_query($conexion,"UPDATE admin SET estadoA='Inactivo' WHERE codA = :codA");-->