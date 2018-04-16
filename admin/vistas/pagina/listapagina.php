<!-- Listar páginas -->
<?php 
	include(LISTAPAGINACONTROL);
?>

<div class="card">
	<div class="card-header">
		Páginas
	</div>
	<div class="card-body">
		<a href="<?php echo '?mod=pagina&accion=crear'; ?>" class="btn btn-primary .btn-sm" role="button">Nuevo</a>
		<br>
		<br>
		<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th scope="col">Título</th>
					<th scope="col">Contenido</th>
					<th scope="col">Menú</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach ($paginas as $pagina) {
					echo "<tr>".
					"<td>". $pagina['titulo'] ."</td>".
					"<td>". $pagina['contenido'] ."</td>".
					"<td>". $pagina['menu'] ."</td>".
					"<td>". 
					"<a href='?mod=".PAGINA."&accion=editar&id=".$pagina['id']."' class='btn btn-success .btn-sm' role='button'>Modificar</a>&nbsp;".
					"<a href='?mod=".PAGINA."&accion=eliminar&id=".$pagina['id']."' class='btn btn-danger .btn-sm' role='button'>Eliminar</a>".
					"</td>".
					"</tr>";
				}
				?>
			</tbody>
		</table>
	</div>
</div>