<?php
include_once("c_conexion.php");
include_once("c_persona.php");

	$resultado=array();
	$nombre=$_GET["nombre"];
	$apellido=$_GET["apellido"];
	$dni=$_GET["dni"];
	$persona = new Persona(null,null,$dni,null,$apellido,$nombre);	
	$buscar_persona= $persona->buscar();
	
	while($fila = mysqli_fetch_array($buscar_persona)) 
	{ 
    			$id=$fila['persona_id'];
    			$nombre=$fila['nombre'];
    			$apellido=$fila['apellido'];
    			$dni=$fila['dni'];
				$telefono=$fila['telefono'];
 				
    			$resultado[] = array('id'=> $id, 'nombre'=> $nombre, 'apellido'=> $apellido, 'dni'=> $dni, 'telefono'=> $telefono); 
	}
	$json_string = json_encode($resultado);
	echo $json_string;	
?>