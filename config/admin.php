<?php 
	session_start();
	/**
	*
	* Constantes administrativas
	*/
	define('ADMIN', '.');
	define('CONTROL',ADMIN.'/control'); //Controladores
	define('VISTA', ADMIN.'/vistas'); //Vistas

	/**
	* 
	* CRUD (Create, Read, Update, Delete) (Crear, Leer, Actualizar, Eliminar)
	*/
	define('CREARPAGINA', CONTROL.'/crear.php');
	define('LEERPAGINA', CONTROL.'/leer.php');
	define('EDITARPAGINA', CONTROL.'/modificar.php');
	define('ELIMINARPAGINA', CONTROL.'/eliminar.php');

	/**
	*
	* VISTAS (Formularios, listas, etc)
	*/
	define('INDEX', 'index.php');
	define('INICIO', VISTA.'/inicio.php');
	define('ENCABEZADO', VISTA.'/encabezado.php');
	define('PIE', VISTA.'/pie.php');

	/**
	* Funcionalidad
	*
	*/
	// $moduloactual = INICIO; //Variable que define el módulo actual

	/**
	* 
	* Módulos
	*/
	// Páginas
	define('PAGINAVISTA', VISTA.'/pagina');
	define('PAGINACONTROL', CONTROL.'/pagina');
	define('LISTAPAGINA', PAGINAVISTA.'/listapagina.php');
	define('CREAPAGINAFORM',PAGINAVISTA.'/creapaginaform.php');
	define('EDITAPAGINAFORM',PAGINAVISTA.'/editapaginaform.php');
	define('ELIMINAPAGINAFORM',PAGINAVISTA.'/eliminapaginaform.php');
	define('MUESTRAPAGINACONTROL', PAGINACONTROL.'/mostrar.php');
	define('LISTAPAGINACONTROL', PAGINACONTROL.'/listar.php');
	define('CREAPAGINACONTROL', PAGINACONTROL.'/crear.php');
	define('EDITAPAGINACONTROL', PAGINACONTROL.'/editar.php');
	define('ELIMINAPAGINACONTROL', PAGINACONTROL.'/eliminar.php');

	/**
	*
	* Menú
	*/
	define('PAGINA', 'pagina');

	/**
	* 
	* Módulos
	*/
	$modulo = [
		'inicio' => INICIO,
		'pagina' => [
			'accion' => [
				'listar' => LISTAPAGINA,
				'crear' => CREAPAGINAFORM,
				'editar' => EDITAPAGINAFORM,
				'eliminar' => ELIMINAPAGINAFORM
			]
		]
	];

	/**
	* Función que notifica el resultado del query y redirecciona al listado
	* @parámetro $op que define el estado de la transacción
	* @parámetro $op que define el mensaje a mostrar en la notificación
	* @parámetro $mod que asigna el módulo actual
	*/
	function notificar($op, $msg, $mod){
		if (!isset($_SESSION)) session_start();
		$tipo = '';
		switch ($op) {
			case 'exito':
				$tipo = 'success';
				break;
			
			case 'error':
				$tipo = 'error';
				break;
		}

		$_SESSION['notif'] = [
			'tipo' => $tipo,
			'msg' => $msg
		];
		
		$moduloactual = $mod;
		echo "<script>window.location.href = '../../".INDEX."?mod=".$mod."&accion=listar';</script>";
	}
	
	$moduloactual = isset($_GET['mod']) && $_GET['mod'] !== '' ? $modulo[$_GET['mod']]['accion'][$_GET['accion']] : INICIO;
 ?>