<?php
		include_once('includes/mod_cen/clases/People.php');
		
		if(isset($_POST['nuevo'])  ){
			
		//var_dump($_POST);		
		
			if($_POST['peopleId']<>'') {
				$People= new People($_POST['peopleId'],"ALUMNO",$_POST['dni'],$_POST['cuil'],$_POST['apellido'],$_POST['nombre'],$_POST['fecha_nac'],$_POST['sexo'],$_POST['telefono'],$_POST['celular'],$_POST['direccion'],$_POST['email'],'2015-10-02');	
				$editar_People=$People->editar();
				if($editar_People==1) {
					echo "<b>editado con exito...</b>";						
				}	
			}else {
				$People= new People(null,3,$_POST['dni'],$_POST['cuil'],$_POST['apellido'],$_POST['nombre'],$_POST['fecha_nac'],$_POST['sexo'],$_POST['telefono'],$_POST['celular'],$_POST['direccion'],$_POST['email'],'2015-10-02');
				$nuevo_People=$People->agregar();			
				if($nuevo_People==1) {
					echo "People agregado...";						
				}
			} 
		}	
		 if(isset($_GET['peopleId']) ) {
			//if(isset($_GET['peopleId'])) {
				$people= new People($_GET['peopleId']);
			//}else{
			//	$People= new People();
			}
			$search_people= $people->search();
			$info_people=mysqli_fetch_object($search_people);			
			include_once("includes/mod_cen/form/f_new_people.php");					
			//echo "llego peopleId";
		}else {		
			$info_people= new People();
			include_once("includes/mod_cen/form/f_new_people.php");	
		}	
?>
		