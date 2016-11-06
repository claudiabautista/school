	<?php 
		if (isset($_GET['id']))
		{
			$id=$_GET['id'];
			$men=$_GET['men']; 
			switch ($men){
				case "people":
					switch ($id) { 
						case 1: 
							include("includes/mod_cen/persona/s_people_new_and_update.php"); 
							break;
						case 2: 
							include("includes/mod_cen/persona/s_persona_buscar.php"); 
							break;	
					}
					break;
				case "inventario":
						switch ($id) {
							case 1:
								include("includes/mod_cen/inventario/s_inventario_nuevo_modificar.php");
								break;
							case 2:
								include("includes/mod_cen/inventario/s_inventario_buscar.php");
								break;
						}
						break;
				case "login":
					switch ($id) { 
						case 1: 
							include("includes/mod_cen/login/s_login_ingresar.php"); 

							break;
						case 2: 
							include("includes/mod_cen/login/s_login_cerrar.php"); 
							break;	
					}	
			} 
		}else {
		include("includes/mod_cen/principal.php"); 
			//echo "modulo principal de contenidos";
		}
	?>
