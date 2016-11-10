<?php
include_once('Conexion.php');
include_once('People.php');

	$persona = new People(null,null,null,"julio",null);	
	//$persona = new People(null,$dni);	
	$buscar_persona= $persona->search();
	$dato=mysqli_fetch_object($buscar_persona);
	//mysqli_fetch_object($search_people);			
	echo "<br>".$dato->peopleId;
	/*while($fila = mysqli_fetch_array($buscar_persona)) 
	{ 
    			
	}*/
	
?>