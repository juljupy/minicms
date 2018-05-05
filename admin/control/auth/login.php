<?php 
	require_once('../../../config/conexion.php');
	require_once('../../../config/admin.php');
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$modactual = LOGIN;

	$sql = "SELECT t1.*, t2.nombre AS perfil FROM usuario t1
			LEFT JOIN perfil t2
			ON t2.id = t1.id_perfil
			WHERE usuario = :usuario LIMIT 0,1";
	$query = $conex->prepare($sql);
	$query->execute([
		'usuario' => $usuario
	]);
	
	$usuarioenc = $query->fetch();

	if(password_verify($_POST['clave'], $usuarioenc['clave'])){
		if (!isset($_SESSION)) session_start();
		$_SESSION['login'] = true;
		$_SESSION['usuario'] = [
			'nombre' => $usuarioenc['nombre'],
			'perfil' => $usuarioenc['perfil']
		];
		
		$modactual = INICIOADMIN;
	}

	header("Location: ".BASEINDEX."?mod=". $modactual);
 ?>