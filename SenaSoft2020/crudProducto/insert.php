	<?php 
  #Aqui se llama la conexion a la base de datos para acceder a la tabla admin y mostrar el contenido
	include_once 'conexion.php';
	
	if(isset($_POST['guardar'])){
		$idA=$_POST['idA'];
		$estadoA=$_POST['estadoA'];
		
		if(!empty($idA) && !empty($estadoA) ){
		#Aqui se buscan los campos para insertar
				$consulta_insert=$con->prepare('INSERT INTO admin(idA,estadoA) VALUES(:idA,:estadoA)');
				$consulta_insert->execute(array(
					':idA' =>$idA,
					':estadoA' =>$estadoA
				));
				header('Location: index.php');
			
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
	}	}

	


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevos Productos</title>
  <h1>Dotaciones</h1>
  <!--link rel="stylesheet" href="csss/estilos.css"-->
  <link rel="stylesheet" href="../vistas/css/estilosInsertEmpleado.css">
</head>
<hr>
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
	<div class="contenedorInsertE">
    <!--Se miestra el logo, el titulo del proceso y los campos para llenar: id y estado, tambien los botones de guardar/cancelar-->
    <img class="img" src="../vistas/Media/logo.png" alt="Logo de la página" width="150" height="150">
    
    <h2>Registrar Admin</h2>
    <br>
		<form action="" method="post">
			<div class="form-group">
				    <select name="idA">
                 <option value="0">Admin</option>
                <?php
                 $query = $con -> prepare ("SELECT * FROM usuarios");
                 $query->execute();
                foreach ($query as $valores) {
                  echo '<option value="'.$valores[idU].'">'.$valores[nombreU].'</option>';
                }
                ?>
            </select>
				    <select name="estadoA" id="estadoA" class="input"> 
                    <option value="">Estado</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option> 
            </select>
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
