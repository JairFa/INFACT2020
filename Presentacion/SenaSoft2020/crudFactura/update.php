<?php
	include_once 'conexion.php';

	if(isset($_GET['IDFactura'])){
		$IDFactura=(int) $_GET['IDFactura'];

		$buscar_IDFactura=$con->prepare('SELECT * FROM tblfactura WHERE IDFactura=:IDFactura LIMIT 1');
		$buscar_IDFactura->execute(array(
			':IDFactura'=>$IDFactura  
		));
		$resultado=$buscar_IDFactura->fetch();
	}else{
		header('Location: index.php');
	}

	if(isset($_POST['guardar'])){
			$IDVendedor=$_POST['IDVendedor'];
			$CodigoProducto=$_POST['CodigoProducto'];
			$CantidadProducto=$_POST['CantidadProducto'];
			$ValorUnidad=$_POST['ValorUnidad'];
			$Valortotal=$_POST['Valortotal'];
			$Fecha=$_POST['Fecha'];
			$EstadoFactura=$_POST['EstadoFactura'];

			$IDFactura=(int) $_GET['IDFactura'];

		if(!empty($IDFactura) && !empty($IDVendedor) && !empty($CodigoProducto) && !empty($CantidadProducto) && !empty($ValorUnidad) && !empty($Valortotal) && !empty($Fecha) && !empty($EstadoFactura) ){

				$consulta_update=$con->prepare(' UPDATE tblfactura SET  
					IDVendedor=:IDVendedor,
					CodigoProducto=:CodigoProducto,
					CantidadProducto=:CantidadProducto,
					ValorUnidad=:ValorUnidad,
					Valortotal=:Valortotal,
					Fecha=:Fecha,
					EstadoFactura=:EstadoFactura
					WHERE IDFactura=:IDFactura;'
				);
				$consulta_update->execute(array(
					':IDVendedor' =>$IDVendedor,
					':CodigoProducto' =>$CodigoProducto,
					':CantidadProducto' =>$CantidadProducto,
					':ValorUnidad' =>$ValorUnidad,
					':Valortotal' =>$Valortotal,
					':Fecha' =>$Fecha,
					':EstadoFactura' =>$EstadoFactura,
					':IDFactura' =>$IDFactura
				));
				header('Location: index.php');
			
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Factura</title>
	<!--link rel="stylesheet" href="csss/estilos.css"-->
	<link rel="stylesheet" href="../vistas/css/estilosInsertEmpleado.css">
</head>
<body>
	<script>
        // Funcion para limitar el numero de caracteres de un textarea o input
        // Tiene que recibir el evento, valor y número máximo de caracteres
        function limitar(e, contenido, caracteres)
        {
            // obtenemos la tecla pulsada
            var unicode=e.keyCode? e.keyCode : e.charCode;
 
            // Permitimos las siguientes teclas:
            // 8 backspace
            // 46 suprimir
            // 13 enter
            // 9 tabulador
            // 37 izquierda
            // 39 derecha
            // 38 subir
            // 40 bajar
            if(unicode==8 || unicode==46 || unicode==13 || unicode==9 || unicode==37 || unicode==39 || unicode==38 || unicode==40)
                return true;
 
            // Si ha superado el limite de caracteres devolvemos false
            if(contenido.length>=caracteres)
                return false;
 
            return true;
        }
   

  

         function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }



        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }



    function validarNumero(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true; 
    patron =/[0-9]/;
    te = String.fromCharCode(tecla); 
    return patron.test(te); 
}
 
    </script>

	<div class="Modificar">
    <div id=img> 
	    <img class="img" src="../media/logo.JPEG" alt="Logo de la página" width="200" height="200">
	</div>
    <h2>Modificar Factura</h2>
		<br>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="IDVendedor" value="<?php if($resultado) echo $resultado['IDVendedor']; ?>" class="input__text">
				<input type="text" name="CodigoProducto" value="<?php if($resultado) echo $resultado['CodigoProducto']; ?>" class="input__text">
				<input type="text" name="CantidadProducto" value="<?php if($resultado) echo $resultado['CantidadProducto']; ?>" class="input__text">
				<input type="text" name="ValorUnidad" value="<?php if($resultado) echo $resultado['ValorUnidad']; ?>" class="input__text">
				<input type="text" name="Valortotal" value="<?php if($resultado) echo $resultado['Valortotal']; ?>" class="input__text">
				<input type="text" name="Fecha" value="<?php if($resultado) echo $resultado['Fecha']; ?>" class="input__text">
				<input type="text" name="EstadoFactura" value="<?php if($resultado) echo $resultado['EstadoFactura']; ?>" class="input__text">
			</div>
			<br>		
			<div class="btn__group">
				<a href="index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
