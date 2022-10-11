<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?= base_url('css/inicio.css');?>" rel="stylesheet">
		<title>Lista de usuarios</title>
		<link href="<?= base_url('css/style.css'); ?>" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-grid-only@1.0.0/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
	</head>
	<body>

	<nav>
  <ul>
  	<li>
      <a href="<?php echo base_url("/inicio")?>">Inicio</a>
    </li>
    <li>
      <a href="<?php echo base_url("/user")?>">Trabajadores</a>
    </li>
    <li>
      <a href="<?php echo base_url("/celu")?>">Celulares</a>
    </li>
    <li>
      <a href="<?php echo base_url("/")?>">Salir</a>
    </li>
  </ul>
</nav>

		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="card">
						<div class="head">
							<h1>Lista de usuarios</h1>
							<a href="<?= base_url('usuario');?>">Nuevo</a>
						</div>
						<table id="table_id" class="lt-table">
							<thead>
								<tr>
									<th>Id</th>
									<th>Nombres</th>
									<th>Apellidos</th>
									<th>DPI</th>
									<th>Telefono</th>
									<th>Correo</th>
									<th>Direccion</th>
									<th>Puesto</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($users as $user):?>
									<tr>
										<td><?= $user['id'];?></td>
										<td><?= $user['nombres'];?></td>
										<td><?= $user['apellidos'];?></td>
										<td><?= $user['dpi'];?></td>
										<td><?= $user['telefono'];?></td>
										<td><?= $user['correo'];?></td>
										<td><?= $user['direccion'];?></td>
										<td><?= $user['puesto'];?></td>
										<td><a href="<?= base_url('usuario/'.$user['id']);?>"><img width="20" height="20" class="edit" src="<?= base_url('img/edit.svg');?>"></a><a href="<?= base_url('usuario/delete/'.$user['id']);?>"><img width="20" height="20" class="delete" src="<?= base_url('img/delete.svg');?>"></a></td>
									</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		<?php if(session("success")):?>
			Swal.fire({
				position: 'top-end',
				icon: 'success',
				title: 'Success',
				text: '<?= session("success");?>',
				showConfirmButton: false,
				timer: 1500
			})
		<?php endif; ?>
	</script>
</html>