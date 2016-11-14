<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>School Manager</title>   	
   	<meta charset="utf-8" />
   	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   	<meta name="description" content="School Manager">
   	<meta name="keywords" content="School Manager">   	
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   	<script src="jquery/jquery-1.6.2.min.js"></script>
  	<script src="jquery/jquery.lightbox-0.5.min.js"></script>
	</head>
	<body>
		<div class="row">			
			<div class="row">
      <header>
            <?php		
					if (file_exists($path_modulo6))
		       		include ($path_modulo6);
					else
		       		die ('error al cargar el modulo');
      			?>
      	</header>		
      </div>
         <nav class="navbar navbar-default">
                <?php		
                if (file_exists($path_modulo2))
		       		include ($path_modulo2);
                else
		       		die ('error al cargar el modulosssss');
      			?>
         </nav>

         <section>
         	<article>
         		<?php
	   	 			if (file_exists($path_modulo7))
		   	    		include ($path_modulo7);
		   			else
		       			die ('error al cargar el modulo');
      			?>
      		</article>	
			</section>	
    		
        	<footer>
        		<?php
       			if (file_exists($path_modulo5))
	       			include ($path_modulo5);
	 				else
	       			die ('error al cargar el modulo');
      		?>
			</footer>		
		</div>
	</body>

</html>
