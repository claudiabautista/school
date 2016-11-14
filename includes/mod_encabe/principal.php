<div class="col-md-12" style="border: 1px solid black">
	<div class="col-md-3"  style="border: 1px solid black"><img src="img/iconos/logo.png" alt="soluciones educativas digitales"></div>
	<div class="col-md-7" style="border: 1px solid black"></div>
	<div class="col-md-2" style="border: 1px solid black"> <p>
		<?php
	if(isset($_SESSION['username'])) {
		echo "Hola  ".$_SESSION['nombre']."&nbsp;&nbsp;&nbsp;";	
		echo "userId  ".$_SESSION['peopleId']."&nbsp;&nbsp;&nbsp;";	
		echo '<a href="index.php?men=login&id=2" >Cerrar Sesión</a> ';
	}else {
		echo '<a href="index.php?men=login&id=1" >Ingresar</a> ';
	}
	?></p>
	</div>
</div>
