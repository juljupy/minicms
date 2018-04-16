<?php
	require_once('datos.php');
	/**
	* Conexión a la base de datos con PDO
	*
	*/
	try {
		$conex = new PDO('mysql:host='. $servidor . ';dbname='. $db, $usuario, $clave);	
		$conex->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
 ?>