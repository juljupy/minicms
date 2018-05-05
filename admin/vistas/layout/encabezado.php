<?php 
	if (!isset($_SESSION)) session_start();
 ?>
<!--Encabezado y menú-->
<nav class="navbar navbar-expand navbar-dark bg-dark justify-content-between">
	<span class="navbar-brand">CMS / Administración</span>
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href="<?php echo INDEX?>">Inicio</a>
		</li>
		<?php 
			if(isset($_SESSION['login']) && $_SESSION['login'] === true){
		 ?>
		 	<li class="nav-item">
				<a class="nav-link" href="<?php echo '?mod='.PAGINA.'&accion=listar'; ?>">Páginas</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo '?mod='.LOGOUT; ?>">Salir</a>
			</li>
		<?php 
			} else {
		 ?>
		 	<li class="nav-item">
				<a class="nav-link" href="<?php echo '?mod='.LOGIN; ?>">Login</a>
			</li>
		<?php } ?>
	</ul>
</nav>
<br>