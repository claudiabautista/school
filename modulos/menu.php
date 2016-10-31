	<?php 
	   if(isset($_SESSION["tipo"]))
		{		
		switch ($_SESSION['tipo']) { 
			case "ETT": 
				include("includes/mod_men/ett.php"); 
				break;
			case "ETJ": 
				include("includes/mod_men/etj.php"); 
				break;
			case "ADMIN": 
				include("includes/mod_men/admin.php"); 
				break;
			case "Coordinador": 
				include("includes/mod_men/coordinador.php"); 
				break;
			case "Primaria": 
				include("includes/mod_men/primaria.php"); 
				break;	
			} 
		}
			else {
			include("includes/mod_men/principal.php"); 
			}
	?>
