<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nuevo Celular</title>
		<link href="<?= base_url('css/style.css');?>" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-grid-only@1.0.0/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-10">
					<?= form_open('celular/save');?>
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
							<h1>Nuevo Celular</h1>
							<a class="back" href="<?= base_url('celulares');?>">volver</a>
						</div>
						<div class="col-lg-6">
							<div class="f-group">
								<label>Marca</label>
								<input class="<?= validate("marca") ? 'is-invalid' : null;?>" type="text" name="marca" placeholder="Ingresa tus nombres" value="<?= old('marca');?>">
								<div class="invalid"><?= validate("marca");?></div>
							</div>
							<div class="f-group">
								<label>Modelo</label>
								<input class="<?= validate("modelo") ? 'is-invalid' : null;?>" type="text" name="modelo" placeholder="Ingresa tus apellidos" value="<?= old('modelo');?>">
								<div class="invalid"><?= validate("modelo");?></div>
							</div>
                            <div class="f-group">
								<label>S/N</label>
								<input class="<?= validate("serie") ? 'is-invalid' : null;?>" type="text" name="serie" placeholder="0000 00000 0000" value="<?= old('serie');?>">
								<div class="invalid"><?= validate("serie");?></div>
							</div>
                            <div class="f-group">
								<label>Almacenamiento</label>
								<input class="<?= validate("almacenamiento") ? 'is-invalid' : null;?>" type="text" name="almacenamiento" placeholder="12345678" value="<?= old('almacenamiento');?>">
								<div class="invalid"><?= validate("almacenamiento");?></div>
							</div>

                            <div class="f-group">
								<label>RAM</label>
								<input class="<?= validate("ram") ? 'is-invalid' : null;?>" type="text" name="ram" placeholder="ejemploprueba@gmail.com" value="<?= old('ram');?>">
								<div class="invalid"><?= validate("ram");?></div>
							</div>

                            <div class="f-group">
								<label>Procesador</label>
								<input class="<?= validate("procesador") ? 'is-invalid' : null;?>" type="text" name="procesador" placeholder="Puesto actual en la empresa" value="<?= old('procesador');?>">
								<div class="invalid"><?= validate("procesador");?></div>
							</div>

						</div>
						<div class="col-lg-6">
							<div class="f-group">
								<label>Comentario</label>
								<textarea class="<?= validate("comentario") ? 'is-invalid' : null;?>" name="comentario" placeholder="Ejemplo: 0 calle 2-23 zona 0 Quetzaltenango <"><?= old('comentario');?></textarea>
								<div class="invalid"><?= validate("comentario");?></div>
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