<!-- Pie de página-->
<?php
	if(isset($_SESSION['notif'])){
		echo '<script>toastr.'. $_SESSION['notif']['tipo'] .'("'. $_SESSION['notif']['msg'] .'");</script>';
		$_SESSION['notif'] = null;
	}
 ?>