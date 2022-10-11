<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nuevo usuario</title>
		<link href="<?= base_url('css/style.css');?>" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-grid-only@1.0.0/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-10">
					<?= form_open('usuario/save');?>
					<?php 
						function validate(string $key) {
							if (session('_ci_validation_errors')) {
								$value = unserialize(session('_ci_validation_errors'));
								if (isset($value[$key])){
									return $value[$key];
								}
							}
						}
					?>

					<div class="card">
						<div class="head">
							<h1>Nuevo usuario</h1>
							<a class="back" href="<?= base_url('usuarios');?>">volver</a>
						</div>
						<div class="col-lg-6">
							<div class="f-group">
								<label>Nombres</label>
								<input class="<?= validate("nombres") ? 'is-invalid' : null;?>" type="text" name="nombres" placeholder="Ingresa tus nombres" value="<?= old('nombres');?>">
								<div class="invalid"><?= validate("nombres");?></div>
							</div>
							<div class="f-group">
								<label>Apellidos</label>
								<input class="<?= validate("apellidos") ? 'is-invalid' : null;?>" type="text" name="apellidos" placeholder="Ingresa tus apellidos" value="<?= old('apellidos');?>">
								<div class="invalid"><?= validate("apellidos");?></div>
							</div>
                            <div class="f-group">
								<label>DPI</label>
								<input class="<?= validate("dpi") ? 'is-invalid' : null;?>" type="text" name="dpi" placeholder="0000 00000 0000" value="<?= old('dpi');?>">
								<div class="invalid"><?= validate("dpi");?></div>
							</div>
                            <div class="f-group">
								<label>Telefono</label>
								<input class="<?= validate("telefono") ? 'is-invalid' : null;?>" type="text" name="telefono" placeholder="12345678" value="<?= old('telefono');?>">
								<div class="invalid"><?= validate("telefono");?></div>
							</div>

                            <div class="f-group">
								<label>Correo</label>
								<input class="<?= validate("correo") ? 'is-invalid' : null;?>" type="text" name="correo" placeholder="ejemploprueba@gmail.com" value="<?= old('correo');?>">
								<div class="invalid"><?= validate("correo");?></div>
							</div>

                            <div class="f-group">
								<label>Puesto</label>
								<input class="<?= validate("puesto") ? 'is-invalid' : null;?>" type="text" name="puesto" placeholder="Puesto actual en la empresa" value="<?= old('puesto');?>">
								<div class="invalid"><?= validate("puesto");?></div>
							</div>

						</div>
						<div class="col-lg-6">
							<div class="f-group">
								<label>Dirección</label>
								<textarea class="<?= validate("direccion") ? 'is-invalid' : null;?>" name="direccion" placeholder="Ejemplo: 0 calle 2-23 zona 0 Quetzaltenango <"><?= old('direccion');?></textarea>
								<div class="invalid"><?= validate("direccion");?></div>
							</div>
							<div class="text-end">
								<button type="submit">Guardar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>