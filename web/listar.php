<?php 
	require_once('config/conexion.php');
	/**
	* Variable globales
	*
	*/
	$titulo = '';
	$contenido = '';
	$menu = [];

	/**
	* Listar páginas
	*
	*/

	// PDO Query
	$query = $conex->query('SELECT * FROM pagina');

	while ($pagina = $query->fetch(PDO::FETCH_ASSOC)) {
		$titulo = $pagina['titulo'];
		$contenido = $pagina['contenido'];
		$menu = $pagina['menu'];
	}

	// Declaraciones (prepare y execute)

	// Parámetros posicionales
 ?>