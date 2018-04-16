<!-- formulario de edición de páginas -->
<?php 
	include_once(MUESTRAPAGINACONTROL);
 ?>
<div class="card">
	<div class="card-header bg-success text-light">
		Modificar página ID: <?php echo $id; ?>
	</div>
	<div class="card-body">
		<form action="<?php echo EDITAPAGINACONTROL;?>" method="POST" class="needs-validation" novalidate>
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="titulo">Título</label>
					<input type="text" class="form-control" id="titulo" placeholder="Título" name="titulo" value="<?php echo $pagina['titulo'];?>" required>
					<div class="invalid-feedback">
						Campo requerido
					</div>
				</div>
				<div class="form-group col-md-6">
					<label for="autor">Autor</label>
					<input type="text" class="form-control" id="autor" placeholder="Autor" name="autor" value="<?php echo $pagina['autor'];?>" required>
					<div class="invalid-feedback">
						Campo requerido
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="contenidp">Contenido</label>
				<textarea type="text" class="form-control" id="contenido" name="contenido" required><?php echo $pagina['contenido'];?></textarea>
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