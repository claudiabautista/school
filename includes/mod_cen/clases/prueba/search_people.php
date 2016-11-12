<?php
include_once('../Conexion.php');
include_once('../People.php');

	$persona = new People(null,"26899902");	
	//$persona = new People(null,$dni);	
	$buscar_persona= $persona->search();
	echo $buscar_persona->peopleId;
	/*while($fila = mysqli_fetch_array($buscar_persona)) 
	{ 
    			
	}*/
	
?>