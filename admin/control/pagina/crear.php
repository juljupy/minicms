<?php 
	require_once('../../../config/conexion.php');
	require_once('../../../config/admin.php');

	/**
	*
	* Variables formulario
	*/

	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$contenido = $_POST['contenido'];
	
	try {
		$sql = "INSERT INTO pagina (titulo, contenido, autor) VALUES (:titulo, :contenido, :autor)";
		$query = $conex->prepare($sql);
		$query->execute(['titulo' => $titulo, 'contenido' => $contenido, 'autor' => $autor]);

		notificar('exito', 'Registro guardado con éxito', PAGINA, 'listar');
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
 ?>
