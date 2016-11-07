<?php
		include_once('includes/mod_cen/clases/People.php');
		date_default_timezone_set('America/Argentina/Salta');
		
		//Si este archivo carga por un Post verifica si existe nuevo.
		if(isset($_POST['newUser'])  ){
			
		var_dump($_POST);		
		
			if($_POST['peopleId']<>"") {
				$People= new People($_POST['peopleId'],"ALUMNO",$_POST['dni'],$_POST['cuil'],$_POST['apellido'],$_POST['nombre'],$_POST['fecha_nac'],$_POST['sexo'],$_POST['telefono'],$_POST['celular'],$_POST['direccion'],$_POST['email'],'2015-10-02');	
				$editar_People=$People->edit();
				if($editar_People==1) {
					echo "<b>editado con exito...</b>";						
				}	
			}else {
				$People= new People(null,$_POST['dni'],$_POST['cuil'],$_POST['lastName'],$_POST['firstName'],$_POST['birthDate'],$_POST['gender'],$_POST['address'],$_POST['telephone'],$_POST['cellPhone'],$_POST['email'],$_POST['dateUpdate'],$_POST['userUpdate']);
				$nuevo_People=$People->add();			
				if($nuevo_People==1) {
					echo "People agregado...";						
				}
			} 
		}	
		 //si por url trae variable peopleId 
		if(isset($_GET['peopleId']) ) {
			//if(isset($_GET['peopleId'])) {
		 		//creo objeto people con atributo peopleId que vino de url
				$people= new People($_GET['peopleId']);
			//}else{
			//	$People= new People();
			
			$search_people= $people->search();
			$info_people=mysqli_fetch_object($search_people);			
			include_once("includes/mod_cen/form/f_new_people.php");					
			//echo "llego peopleId";
		}else {		
			$info_people= new People();
			include_once("includes/mod_cen/form/f_new_people.php");	
		}	
?>
		