<?php
include_once("includes/mod_cen/clases/Login.php");
if(isset($_POST['ingreso'])) {
	$login= new Login($_POST['username'],$_POST['password']);
	$buscar_usuario= $login->startSesion();
	if(isset($_SESSION['username'])) {
		 echo "ingreso con exito";	
		 echo '<script type="text/javascript">';
	echo 'function redireccion(){';
	echo 'window.location="index.php"};';
	echo 'setTimeout ("redireccion()", 0); //el tiempo expresado en milisegundos';
	echo '</script>';
	}else {
	$pmd5=md5($_POST['password']);
	echo $pmd5;
	echo "usuario o contraseña incorrecto";	
	}
}
if(isset($_SESSION['username'])) {
		echo "Sessión iniciada...".$_SESSION['username'];	
	}else {
    include("includes/mod_cen/form/f_login_ingresar.php");
}?>
