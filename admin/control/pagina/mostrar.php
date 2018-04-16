<?php 
	require_once('../config/conexion.php');

	$id = $_GET['id'];

	$sql = "SELECT * FROM pagina WHERE id = :id";	
	$query = $conex->prepare($sql);
	$query->execute(['id' => $id]);
	$pagina = $query->fetch();
 ?>