<?php
		include_once('includes/mod_cen/clases/c_inventario.php');
		
		if(isset($_POST['nuevo'])  ){
			//var_dump($_POST);		
			if($_POST['inventario_id']<>'') {
				$inventario= new Inventario($_POST['inventario_id'],"NULL",$_POST['nombre'],$_POST['descripcion'],$_POST['precio_unitario'],$_POST['cantidad'],$_POST['total'],$_POST['estado'],$_POST['observacion']);	
				$editar_inventario=$inventario->editar();
				if($editar_inventario==1) {
					echo "<b>editado con exito...</b>";						
				}
					
			}else {
				$inventario= new Inventario(null,null,$_POST['nombre'],$_POST['descripcion'],$_POST['precio_unitario'],$_POST['cantidad'],$_POST['total'],$_POST['estado'],$_POST['observacion']);
				$nuevo_inventario=$inventario->agregar();			
				if($nuevo_inventario==1) {
					echo "inventario agregado...";						
				}else{
					
					echo $nuevo_inventario;
				}
			} 
		}	
		 if(isset($_GET['inventario_id']) ) {
			if(isset($_GET['inventario_id'])) {
				$inventario= new Inventario($_GET['inventario_id']);
			}else{
				$inventario= new Inventario();
			}
			$buscar_inventario= $inventario->buscar();
			$dato_inventario=mysqli_fetch_object($buscar_inventario);			
			include_once("includes/mod_cen/formularios/f_inventario_nuevo.php");					
			//echo "llego inventario_id";
		}else {		
			$dato_inventario= new Inventario();
			include_once("includes/mod_cen/formularios/f_inventario_nuevo.php");		
		}	
?>
		