<!-- formulario de creación de páginas -->
<div class="card">
	<div class="card-header">
		Inicio de sesión
	</div>
	<div class="card-body">
		<form action="<?php echo LOGINCONTROL;?>" method="POST" class="needs-validation" novalidate>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="titulo">Usuario</label>
					<input type="text" class="form-control" id="titulo" placeholder="Usuario" name="usuario" required>
					<div class="invalid-feedback">
						Campo requerido
					</div>
				</div>
				<div class="form-group col-md-6">
					<label for="autor">Clave</label>
					<input type="password" class="form-control" id="Clave" placeholder="Clave" name="clave" required>
					<div class="invalid-feedback">
						Campo requerido
					</div>
				</div>
			</div>
			<div class="float-right">
				<button type="submit" class="btn btn-success">Entrar</button>
			</div>
		</form>
	</div>
</div>