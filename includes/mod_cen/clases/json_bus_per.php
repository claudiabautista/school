<?php
include_once("Conexion.php");
include_once("People.php");

	$resultado=array();
	$firstName=$_GET["nombre"];
	$lastName=$_GET["apellido"];
	$dni=$_GET["dni"];
	$persona = new People(null,$dni,null,$lastName,$firstName);	
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