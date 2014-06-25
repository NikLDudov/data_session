<?
session_start();


function guardar(){
	$nombre 	= $_POST['nombre'];
	$paterno 	= $_POST['paterno'];
	$materno 	= $_POST['materno'];
	$nacimiento = $_POST['nacimiento'];
	$telefono 	= $_POST['telefono'];
	$domicilio 	= $_POST['domicilio'];
	$sexo 		= $_POST['sexo'];
	$salario 	= $_POST['salario'];


	$datos = array('id' 		=> $_SESSION['id'],
				 'nombre' 		=> $nombre,
				 'paterno'  	=> $paterno, 
				 'materno'  	=> $materno, 
				 'nacimiento' 	=> $nacimiento, 
				 'telefono' 	=> $telefono,
				 'domicilio'	=> $domicilio,
				 'sexo' 		=> $sexo,
				 'salario'		=> $salario
				 );

	return $datos;
}


$persona = $_SESSION['id'];

$_SESSION['persona'.$persona] = guardar();

$_SESSION['id'] += 1;

header('Location: index.php')
?>