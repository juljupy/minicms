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
	$id = $_POST['id'];
	
	try {
		$sql = "UPDATE pagina SET titulo = :titulo, contenido = :contenido, autor = :autor WHERE id = :id";
		$query = $conex->prepare($sql);
		$query->execute(['titulo' => $titulo, 'contenido' => $contenido, 'autor' => $autor, 'id' => $id]);

		notificar('exito', 'Registro actualizado con éxito', PAGINA);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
 ?>
