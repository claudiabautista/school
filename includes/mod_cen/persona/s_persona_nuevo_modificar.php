<?php
		include_once('includes/mod_cen/clases/c_persona.php');
		
		if(isset($_POST['nuevo'])  ){
			
		//var_dump($_POST);		
		
			if($_POST['persona_id']<>'') {
				$persona= new Persona($_POST['persona_id'],"ALUMNO",$_POST['dni'],$_POST['cuil'],$_POST['apellido'],$_POST['nombre'],$_POST['fecha_nac'],$_POST['sexo'],$_POST['telefono'],$_POST['celular'],$_POST['direccion'],$_POST['email'],'2015-10-02');	
				$editar_persona=$persona->editar();
				if($editar_persona==1) {
					echo "<b>editado con exito...</b>";						
				}	
			}else {
				$persona= new Persona(null,3,$_POST['dni'],$_POST['cuil'],$_POST['apellido'],$_POST['nombre'],$_POST['fecha_nac'],$_POST['sexo'],$_POST['telefono'],$_POST['celular'],$_POST['direccion'],$_POST['email'],'2015-10-02');
				$nuevo_persona=$persona->agregar();			
				if($nuevo_persona==1) {
					echo "persona agregado...";						
				}
			} 
		}	
		 if(isset($_GET['persona_id']) ) {
			if(isset($_GET['persona_id'])) {
				$persona= new Persona($_GET['persona_id']);
			}else{
				$persona= new Persona();
			}
			$buscar_persona= $persona->buscar();
			$dato_persona=mysqli_fetch_object($buscar_persona);			
			include_once("includes/mod_cen/formularios/f_persona_nuevo.php");					
			//echo "llego persona_id";
		}else {		
			$dato_persona= new Persona();
			include_once("includes/mod_cen/formularios/f_persona_nuevo.php");		
		}	
?>
		