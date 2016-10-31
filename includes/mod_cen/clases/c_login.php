<?php
include_once("c_conexion.php");
include_once("c_persona.php");

class Login
{
	private $persona_id;	
	private $username;
	private $password;
	private $conexion;	

function __construct($persona_id=null, $username=null, $password=null, $conexion=null)
{
	$this->persona_id=$persona_id;
	$this->username=$username;
	$this->password=$password;
	$this->conexion=$conexion;
}

public function iniciarSesion()
{
	$nuevaConexion= new Conexion();
	$conexion=$nuevaConexion->getConexion();
	$pmd5=md5($this->password);
	$consulta="SELECT * FROM usuarios WHERE username='".$this->username."' && password='".$pmd5."'";
	if($resultado=$conexion->query($consulta)) 
	{
		$elemento=mysqli_fetch_object($resultado);
		//iniciamos session
		//session_start();
		//cargamos valores session
		$_SESSION["username"]=$elemento->username;
		$persona= new Persona($elemento->persona_id);
		$buscar_nombre=$persona->buscar();
		$dato_persona=mysqli_fetch_object($buscar_nombre);
		$_SESSION["nombre"]=$dato_persona->nombre;
		$_SESSION["tipo"]=$dato_persona->tipo;
		
		//$_SESSION["tipo"]=$referente->getTipo();
		/*$persona="SELECT referent_es.referenteId,personas.nombre,personas.apellido,personas.personaId FROM referentes inner join personas on referentes.personaId=personas.personaId WHERE referenteId=".$elemento->referenteId."";	
		$result=$conexion->query($persona);
		$dato=mysqli_fetch_object($result);	
		$_SESSION["nombre"]=$dato->nombre;
		$_SESSION["personaId"]=$dato->personaId;*/				
	}else {
		return "error";
	}		
}

public function passActual() 
	{
		$nuevaConexion= new Conexion();
		$conexion=$nuevaConexion->getConexion();
		$consulta="SELECT * FROM usuarios WHERE username='".$this->username."'";
		$hacer_consulta=$conexion->query($consulta);		
		$actual=mysqli_fetch_object($hacer_consulta);		
		$this->password=$actual->password;
		return $this;
	}
	
public function cambioPass() {
	$nuevaconexion=new Conexion();
	$conexion=$nuevaconexion->getConexion();
	$pmd5=md5($this->password);
	$sentencia="UPDATE usuarios SET password='$pmd5' WHERE username='$this->username'" ;	
	if ($conexion->query($sentencia)) {
			return 1;
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
}

public function getUsername()
{
	return $this->username;
}
	
public function getPassword()
{
	return $this->password;
}
public function getConexion()
{
	return $this->conexion;	
}
}
