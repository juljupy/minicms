<?php 
require_once('web/listar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?php 
			echo $titulo;
		?>
	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-4.0.0/css/bootstrap.min.css">
</head>
<body>
	<!--menu páginas-->
	<nav class="navbar navbar-expand navbar-dark bg-primary justify-content-between">
		<span class="navbar-brand">Clase PHP</span>
		<div class="justify-content-end">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Pricing</a>
				</li>
			</ul>
		</div>
	</nav>
	<br>
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<div class="col">
				<h1>
					<?php echo $titulo;?></h1>
				<p>
					<?php echo $contenido;?>
				</p>
			</div>
		</div>  
	</div>
</body>
</html>