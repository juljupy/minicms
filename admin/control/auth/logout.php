<?php
	require_once('../config/admin.php');
	if (!isset($_SESSION)) session_start();
	session_destroy();
	header("Location: ".INDEX."?mod=". LOGIN);
 ?>