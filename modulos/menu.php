	<?php 
	   if(isset($_SESSION["tipo"]))
		{		
		switch ($_SESSION['tipo']) { 			
			case "admin": 
				include("includes/mod_men/admin.php"); 
				break;			
			} 
		}
			else {
			include("includes/mod_men/principal.php"); 
			}
	?>
