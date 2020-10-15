
<!-- En este bloque se realiza el cierre de sesión y envia al usuario a la pagina de login  -->

<?php

	session_start(); //Revisa que haya una sesión iniciada

	session_destroy();//El destructor de sesión
	session_unset();
	
	//Envia al usuario al login
	header("location:login.php");
