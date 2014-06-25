<?
	session_start();
	if (!isset($_SESSION['id'])) {
		$_SESSION['id'] = 1;
	}
	
	if(!isset($_GET['buscar'])) {
		$buscar = NULL;
	} else {
		$buscar = $_GET['buscar'];
	}
?>
<DOCYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Datos de Clientes</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap.min.css">
</head>
<body>
	<section class="container">
		<nav class="col-lg-12">
			<ul class="nav nav-tabs nav-justified">
				<li><a href="registro.php">Ingresar Nuevo</a></li>
				<li><a href="destruir.php">Log Out</a></li>
				<li><a href="">Ordernar por nombre</a></li>
				<li><a href="index.php">Ver Todo</a></li>
				<li>
					<form action="index.php" method="GET" class="form-inline">
						<input type="search" name="buscar" class="form-control">
						<button class="btn btn-default">Buscar</button>
					</form>
				</li>
			</ul>
		</nav>
	</section>
	<section class="container">
		<article>
			<table class="table table-bordered">
				<tr>
					<th class="text-center text-info active">Id</th>
					<th class="text-center text-info active">Eliminar</th>
					<th class="text-center text-info active">Editar</th>
					<th class="text-center text-info active">Nombre</th>
					<th class="text-center text-info active">Apellido Paterno</th>
					<th class="text-center text-info active">Teléfono</th>
					<th class="text-center text-info active">Fecha de Nacimiento</th>
					<th class="text-center text-info active">Telefono</th>
					<th class="text-center text-info active">Domicilio</th>
					<th class="text-center text-info active">Sexo</th>
					<th class="text-center text-info active">Salario</th>
				</tr>
				
				<? if (empty($buscar)) { ?>
				<? foreach ($_SESSION as $campo) { ?>
					<? if($campo['id']){ ?>
					<tr>
						<td><?= $campo['id'] ?></td>
						<td><a href="eliminar.php?id=<?= $campo['id']; ?>">Eliminar</a></td>
						<td><a href="editar.php?id=<?= $campo['id']; ?>">Editar</a></td>
						<td><?= $campo['nombre'] ?></td>
						<td><?= $campo['paterno'] ?></td>
						<td><?= $campo['materno'] ?></td>
						<td><?= $campo['nacimiento'] ?></td>
						<td><?= $campo['telefono'] ?></td>
						<td><?= $campo['domicilio'] ?></td>
						<td><?= $campo['sexo'] ?></td>
						<td><?= $campo['salario'] ?></td>
					</tr>
					<? } ?>
				<? } ?>
				<? } else { ?>
					<? foreach ($_SESSION as $campo) { ?>
					<? if($campo['id']){ ?>
						<? if($campo['nombre'] == $buscar){ ?>
						<tr>
							<td><?= $campo['id'] ?></td>
							<td><a href="eliminar.php?id=<?= $campo['id']; ?>">Eliminar</a></td>
							<td><a href="editar.php?id=<?= $campo['id']; ?>">Editar</a></td>
							<td><?= $campo['nombre'] ?></td>
							<td><?= $campo['paterno'] ?></td>
							<td><?= $campo['materno'] ?></td>
							<td><?= $campo['nacimiento'] ?></td>
							<td><?= $campo['telefono'] ?></td>
							<td><?= $campo['domicilio'] ?></td>
							<td><?= $campo['sexo'] ?></td>
							<td><?= $campo['salario'] ?></td>
						</tr>
						<? } ?>
					<? } ?>
				<? } ?>
				<? } ?>
			</table>
		</article>
	</section>
</body>
</html>