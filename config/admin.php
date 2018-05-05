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
	define('LAYOUTVISTA',VISTA.'/layout');
	define('INICIO', LAYOUTVISTA.'/inicio.php');
	define('ENCABEZADO', LAYOUTVISTA.'/encabezado.php');
	define('PIE', LAYOUTVISTA.'/pie.php');

	/**
	* Funcionalidad
	*
	*/
	// $moduloactual = INICIO; //Variable que define el módulo actual

	/**
	* 
	* Módulos
	*/
	// Raíz
	define('BASE', '../../');
	define('BASEINDEX', BASE.INDEX);
	// Login(inicio de sesión)
	define('AUTHVISTA', VISTA.'/auth');
	define('AUTHCONTROL', CONTROL.'/auth');
	define('LOGINFORM', AUTHVISTA.'/formlogin.php');
	define('LOGINCONTROL', AUTHCONTROL.'/login.php');
	define('LOGOUTCONTROL', AUTHCONTROL.'/logout.php');

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
	* Menú / Accesos
	*/
	define('LOGIN', 'login');
	define('LOGOUT', 'logout');
	define('INICIOADMIN', 'inicio');
	define('PAGINA', 'pagina');

	/**
	* 
	* Módulos
	*/
	$modulo = [
		'inicio' => INICIO,
		'login' => LOGINFORM,
		'logout' => LOGOUTCONTROL,
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
	function notificar($op, $msg, $mod, $act = ''){
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
		$ruta = ($act != '') ? "&action=".$op : "";
		header("Location: ".BASEINDEX."?mod=".$mod.$ruta);
	}

	$moduloactual = null;

	if(isset($_SESSION['login']) && $_SESSION['login'] === true){
		if(isset($_GET['mod']) && $_GET['mod'] !== ''){
			if(isset($_GET['accion']) && $_GET['accion'] !== null){
				$moduloactual = is_array($modulo[$_GET['mod']]) ? $modulo[$_GET['mod']]['accion'][$_GET['accion']] : $modulo[$_GET['mod']];
			} else {
				$moduloactual = $modulo[$_GET['mod']];
			}
		} else {
			$moduloactual = INICIO;
		}
	} else {
		$moduloactual = LOGINFORM;
	}
 ?>