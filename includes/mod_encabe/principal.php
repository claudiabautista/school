<p><img src="img/iconos/logo.png" alt="soluciones educativas digitales">
<?php
	if(isset($_SESSION['username'])) {
		echo "Hola  ".$_SESSION['nombre']."&nbsp;&nbsp;&nbsp;";	
		echo "userId  ".$_SESSION['peopleId']."&nbsp;&nbsp;&nbsp;";	
		echo '<a href="index.php?men=login&id=2" >Cerrar Sesión</a> ';
	}else {
		echo '<a href="index.php?men=login&id=1" >Ingresar</a> ';
	}
?>
</p>

