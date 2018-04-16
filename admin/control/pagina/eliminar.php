<?php 
	require_once('../../../config/conexion.php');
	require_once('../../../config/admin.php');

	/**
	*
	* Variables formulario
	*/
	$id = $_POST['id'];
	
	try {
		$sql = "DELETE FROM pagina WHERE id = :id";
		$query = $conex->prepare($sql);
		$query->execute(['id' => $id]);

		notificar('exito', 'Registro eliminado con éxito', PAGINA);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
 ?>
