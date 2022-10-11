<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Listado de Celulares</title>
		<link href="<?= base_url('css/style.css'); ?>" rel="stylesheet">
		<link href="<?= base_url('css/inicio.css');?>" rel="stylesheet">
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

		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="card">
						<div class="head">
							<h1>Listado información de Celulares</h1>
							<a href="<?= base_url('celular');?>">Nuevo</a>
						</div>
						<table id="table_id" class="lt-table">
							<thead>
								<tr>
									<th>Id</th>
									<th>Marca</th>
									<th>Modelo</th>
									<th>Serie</th>
									<th>Almacenamiento</th>
									<th>RAM</th>
									<th>Procesador</th>
									<th>Comentario</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($celulares as $celular):?>
									<tr>
										<td><?= $celular['id'];?></td>
										<td><?= $celular['marca'];?></td>
										<td><?= $celular['modelo'];?></td>
										<td><?= $celular['serie'];?></td>
										<td><?= $celular['almacenamiento'];?></td>
										<td><?= $celular['ram'];?></td>
										<td><?= $celular['procesador'];?></td>
										<td><?= $celular['comentario'];?></td>
										<td><a href="<?= base_url('celular/'.$celular['id']);?>"><img width="20" height="20" class="edit" src="<?= base_url('img/edit.svg');?>"></a><a href="<?= base_url('celular/delete/'.$celular['id']);?>"><img width="20" height="20" class="delete" src="<?= base_url('img/delete.svg');?>"></a></td>
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