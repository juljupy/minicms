<?php 
require_once('../config/conexion.php');

	/**
	* Variables globales
	*
	*/
	// $paginas = [];

	/**
	* Condición preparada (prepared statement)
	*
	*/
	// $autor = 'Julio';
	// $sql = "SELECT * FROM pagina WHERE autor = '". $autor . "'"; // Inseguro

	// Parámetro posicional
	// $sql = "SELECT * FROM pagina WHERE autor = ?";

	// Parámetro nombrado
	// $sql = "SELECT * FROM pagina WHERE autor = :autor";	
	$sql = "SELECT t1.*, t2.nombre as autor FROM pagina t1
			LEFT JOIN autor t2
			ON t2.id = t1.id_autor;";	
	$query = $conex->prepare($sql);
	// $query->execute(['autor' => $autor]);
	$query->execute();
	$paginas = $query->fetchAll();

	?>