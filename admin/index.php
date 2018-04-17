<?php 
	include_once('../config/admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CMS Administración</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../plugins/toastr/toastr.min.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../css/bootstrap-4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../plugins/toastr/toastr.min.js"></script>
	<script type="text/javascript" src="../plugins/tinymce/js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="../plugins/tinymce/js/tinymce/langs/es.js"></script>
	<script type="text/javascript" src="../js/scripts.js"></script>
</head>
<body>
	<?php  
		include_once(ENCABEZADO);
	?>
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<div class="col">
				<?php include($moduloactual); ?>
			</div>
		</div>
	</div>
	<?php 
		include_once(PIE);
	 ?>
</body>
</html>