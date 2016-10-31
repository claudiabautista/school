<?php   
include_once('Conexion.php');

class Users
{
	private $userId;
 	private $userName;
 	private $password;
 	private $userType;
 	private $peopleId; 	
 	private $dateUpdate;
 	private $userUpdate;
 
 	function __construct($userId=NULL,$userName=NULL,$password=NULL,$userType=NULL,$peopleId=NULL,$dateUpdate=NULL,$userDate=NULL)
	{
			 //seteo los atributos
		 	$this->userId = $userId;
		 	$this->userName =$userName;
		 	$this->password =$password;		 	
		 	$this->userType = $userType;
		 	$this->peopleId = $peopleId;		 	
		 	$this->dateUpdate = $dateUpdate;
		 	$this->userUpdate = $userUpdate;		 	 
	}
	
	public function add()
	{
		
		$newConection=new Conexion();
		$conexion=$newConection->getConexion();

		$sentencia="INSERT INTO users (userId,userName,password,userType,peopleId,dateUpdate,userUpdate)
		VALUES (NULL,". $this->userName.",". $this->password.",'".$this->userType."','".$this->peopleId."','". $this->dateUpdate."',". $this->userUpdate.");";
		//echo $sentencia;
		if ($conexion->query($sentencia)) {
			return 1;
		
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
	}
		 
	public function edit()
	{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="UPDATE users SET userType = '$this->userType', peopleId = '$this->peopleId', userName = $this->userName, password = '$this->password', dateUpdate = '$this->dateUpdate', userUpdate = $this->userUpdate WHERE userId = $this->userId";
		//echo $sentencia;			
		if ($conexion->query($sentencia)) {
			return 1;
		}
	}

	public function delete() 
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="DELETE FROM users WHERE userId=".$this->userId;
		if ($conexion->query($sentencia)) 
		{
			return 1;
			
		}else{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
	
	}

	public function search()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM users";
		if($this->userId!=NULL || $this->userType!=NULL || $this->peopleId!=NULL || $this->userName!=NULL || $this->password!=NULL || $this->dateUpdate!=NULL || $this->userUpdate!=NULL )
		{
			$sentencia.=" WHERE ";
		
		if($this->userId!=NULL)
		{
			$sentencia.=" userId=$this->userId && ";
		}
		
		if($this->userName!=NULL)
		{
			$sentencia.=" userName = $this->userName && ";
		}

		if($this->password!=NULL)
		{
			$sentencia.=" password LIKE '%$this->password%' && ";
		}
		
		if($this->userType!=NULL)
		{
			$sentencia.=" userType LIKE '%$this->userType%' && ";
		}
		
		if($this->peopleId!=NULL)
		{
			$sentencia.=" peopleId LIKE '%$this->peopleId%' && ";
		}	
		
		if($this->dateUpdate!=NULL)
		{
			$sentencia.=" dateUpdate LIKE '%$this->dateUpdate%' && ";
		}

		if($this->userUpdate!=NULL)
		{
			$sentencia.=" userUpdate = $this->userUpdate && ";
		}
		
		
		
		$sentencia=substr($sentencia,0,strlen($sentencia)-3);	
		
		}
		
		$sentencia.="  ORDER BY userName";	
		
		//echo $sentencia;

		return $conexion->query($sentencia);
			
	}
	
	   	
	public function __get($var)
    {
		return $this->$var;
	
	}
	
	public function __set($var,$valor)
	{
		$this->$var=$valor;
	}
}