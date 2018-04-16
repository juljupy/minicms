<!-- formulario de creación de páginas -->
<div class="card">
	<div class="card-header">
		Crear página
	</div>
	<div class="card-body">
		<form action="<?php echo CREAPAGINACONTROL;?>" method="POST" class="needs-validation" novalidate>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="titulo">Título</label>
					<input type="text" class="form-control" id="titulo" placeholder="Título" name="titulo" required>
					<div class="invalid-feedback">
						Campo requerido
					</div>
				</div>
				<div class="form-group col-md-6">
					<label for="autor">Autor</label>
					<input type="text" class="form-control" id="autor" placeholder="Autor" name="autor" required>
					<div class="invalid-feedback">
						Campo requerido
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="contenidp">Contenido</label>
				<textarea type="text" class="form-control" id="contenido" name="contenido" required></textarea>
				<div class="invalid-feedback">
					Campo requerido
				</div>
			</div>
			<div class="float-right">
				<button type="submit" class="btn btn-success">Guardar</button>
				<a href="<?php echo '?mod='.PAGINA.'&accion=listar'; ?>" class="btn btn-danger" role="button">Cancelar</a>
			</div>
		</form>
	</div>
</div>