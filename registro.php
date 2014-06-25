<?
	session_start();

?>
<DOCYPE html>
<html>
<head>
	<title>Datos de Clientes</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap.min.css">

</head>
<body>
	<article class="container">
		<section class="col-lg-4">
		<h2 class="text-info">Registro de datos</h2>
		<form action="datos.php" method="POST" class="form-horizontal well" role="form">

			<label for="nombre">Nombre</label>
			<div class="input-group">
				<input type="text" name="nombre" class="form-control">
			</div>

			<label for="paterno">Apellido Paterno</label>
			<section class="input-group">
				<input type="text" name="paterno" class="form-control">
			</section>

			<label for="materno">Apellido Materno</label>
			<section class="input-group">
				<input type="text" name="materno" class="form-control">
			</section>

			<label for="nacimiento">Fecha de Nacimiento</label>
			<section class="input-group">
				<input type="date" name="nacimiento" class="form-control">
			</section>

			<label for="telefono">Telefono</label>
			<section class="input-group">
				<input type="tel" name="telefono" class="form-control">
			</section class="input-group">

			<label for="domicilio">Domicilio</label>
			<section class="input-group">
				<input type="text" name="domicilio" class="form-control">
			</section class="input-group">

			<label for="sexo">Sexo</label>
			<section>
				<select name="sexo" id="sexo" class="form-control">
					<option value="Masculino">Masculino</option>
					<option value="Femenino">Femenino</option>
				</select>
			</section>

			<label for="salario">Salario</label>
			<section class="input-group">
				<input type="number" name="salario" class="form-control">
			</section class="input-group">

			<section style="margin-top:30px;">
				<button type="submit" class="btn btn-info">Guardar</button>
				<a href="index.php" class="btn btn-danger">Regresar</a>
			</section>

		</form>
		</section>
	</article>
</body>
</html>
