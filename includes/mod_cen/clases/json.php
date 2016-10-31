<?php
include_once("c_conexion.php");
include_once("c_persona.php");

$resultado=array();

//if(isset($_POST["apellido"])) {	
		$estado="sosa";
		$persona = new Persona(null,null,null,null,$estado);	
		$buscar_persona= $persona->buscar();
		$dato_persona=mysqli_fetch_object($buscar_persona);
		//include_once("c_persona.php");
		//$dato= new Persona();
		//$buscar_persona=$dato->buscar();
		$estado=mysqli_num_rows($buscar_persona);		
//		$estado=$dato_persona->nombre;
		echo $estado;	
		
		//$dato_persona=mysqli_fetch_array($buscar_persona);
		//$nombre=$dato_persona->nombre; 	
		/*if(mysqli_num_rows($buscar_persona)>0) {
			$dato_persona=mysqli_fetch_object($buscar_persona);
			$persona_id=$dato_persona->persona_id; 	
			$nombre=$dato_persona->nombre; 	
		}*/		
		$resultado=["nombre"=>$estado];
		//echo json_encode($resultado);
//}		

	/*$clientes = array();
	$nuevaConexion=new Conexion();
	$conexion=$nuevaConexion->getConexion();

	$persona=new Persona(null,null,null,null,"ariel");
	$buscar_persona=$persona->buscar();

	if(mysqli_num_rows($buscar_persona)>0) {
			while($fila = mysqli_fetch_array($buscar_persona)) 
			{ 
    			$id=$fila['persona_id'];
    			$nombre=$fila['nombre'];
    			$apellido=$fila['apellido'];
    			$dni=$fila['dni'];
 				
    			$clientes[] = array('id'=> $id, 'nombre'=> $nombre, 'apellido'=> $apellido, 'dni'=> $dni); 
			//}
			$json_string = json_encode($clientes);
			echo $json_string;*/
		
?>