<?php
include_once('Conexion.php');
include_once('People.php');

	$resultado=array();
	$firstName=$_GET["nombre"];
	$lastName=$_GET["apellido"];
	$dni=$_GET["dni"];
	if($_GET["dni"]=="")
		$dni="NULL";
	if($_GET["nombre"]=="")
		$nombre="NULL";
	if($_GET["apellido"]=="")
		$apellido="NULL";
	//$persona = new People(null,"26899902",null,$lastName,$firstName);	
	$persona = new People(null,null,null,"julio",null);	
	//$persona = new People(null,$dni);	
	$buscar_persona= $persona->search();
	
	while($fila = mysqli_fetch_array($buscar_persona)) 
	{ 
    			$id=$fila['people_id'];
    			$nombre=$fila['firstName'];
    			$apellido=$fila['lastName'];
    			$dni=$fila['dni'];
				$telefono=$fila['telephone'];
 				
    			$resultado[] = array('id'=> $id, 'nombre'=> $nombre, 'apellido'=> $apellido, 'dni'=> $dni, 'telefono'=> $telefono); 
	}
	$json_string = json_encode($resultado);
	echo $json_string;	
?>