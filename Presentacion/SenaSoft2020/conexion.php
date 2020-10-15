<?php
#Conexion con la base de datos para acceder a la informacion de las tablas
	$database="infact2020";
	$user='root';
	$password='';
try {
	
	$con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);

} catch (PDOException $e) {
	echo "Error".$e->getMessage();
}

?>