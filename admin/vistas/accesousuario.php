<?php 
	session_start();
	// $usuario = $_GET['logueado'];//true;

	if(isset($_SESSION['usuario'])){
		echo "Ud está logueado";
	} else {
		echo "Oops!! hacking en camino!";
	}

 ?>