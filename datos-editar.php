<?
session_start();

$id = $_GET['id'];

function editar($id){
	$nombre 	= $_POST['nombre'];
	$paterno 	= $_POST['paterno'];
	$materno 	= $_POST['materno'];
	$nacimiento = $_POST['nacimiento'];
	$telefono 	= $_POST['telefono'];
	$domicilio 	= $_POST['domicilio'];
	$sexo 		= $_POST['sexo'];
	$salario 	= $_POST['salario'];


	$datos = array('id' 		=> $id,
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



$_SESSION['persona'.$id] = NULL;

$_SESSION['persona'.$id] = editar($id);

header('Location: index.php')

?>