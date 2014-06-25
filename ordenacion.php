<?php
session_start();

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
echo '<br><br>';
?>
<? asort($_SESSION); ?>
<? //var_dump($a) ?>
<? foreach ($_SESSION as $campo) { ?>
<? if($campo['id']){ ?>
<tr>
	<td><?= $campo['id'] ?></td>
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