<?php   
include_once('c_conexion.php');

class People
{
	private $peopleId;
 	private $dni;
 	private $cuil;
 	private $firstName;
 	private $lastName;
 	private $birthDate;
 	private $gender;
 	private $address;
	private $telephone;
	private $cellPhone;
 	private $email;
 	private $dateUpdate;
 	private $userUpdate;
 
 	function __construct($peopleId=NULL,$dni=NULL,$cuil=NULL,$firstName=NULL,$lastName=NULL,$birthDate=NULL,$gender=NULL,$address=NULL,$telephone=NULL,$cellPhone=NULL,$email=NULL,$dateUpdate=NULL,$userDate=NULL)
	{
			 //seteo los atributos
		 	$this->peopleId = $peopleId;
		 	$this->dni =$dni;
		 	$this->cuil =$cuil;		 	
		 	$this->firstName = $firstName;
		 	$this->lastName = $lastName;
		 	$this->birthDate = $birthDate;
		 	$this->gender = $gender;
			$this->address = $address;
			$this->telephone = $telephone;					 	
		 	$this->cellPhone = $cellPhone;
		 	$this->email = $email;
		 	$this->dateUpdate = $dateUpdate;
		 	$this->userUpdate = $userUpdate;		 	 
	}
	
	public function add()
	{
		
		$newConection=new Conexion();
		$conexion=$newConection->getConexion();

		$sentencia="INSERT INTO people (peopleId,dni,cuil,firstName,lastName,birthDate,gender,address,telephone,cellPhone,email,dateUpdate,userUpdate)
		VALUES (NULL,". $this->dni.",". $this->cuil.",'".$this->firstName."','".$this->lastName."','". $this->birthDate."','". $this->gender."','". $this->address."','". $this->telephone."','". $this->cellPhone."','". $this->email."','". $this->dateUpdate."',". $this->userUpdate.");";
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
		
		$sentencia="UPDATE people SET firstName = '$this->firstName', lastName = '$this->lastName', dni = $this->dni, cuil = '$this->cuil', birthDate = '$this->birthDate', gender = '$this->gender', address = '$this->address', telephone = '$this->telephone' , cellPhone = '$this->cellPhone', email = '$this->email', dateUpdate = '$this->dateUpdate', userUpdate = $this->userUpdate WHERE peopleId = $this->peopleId";
		//echo $sentencia;			
		if ($conexion->query($sentencia)) {
			return 1;
		}
	}

	public function delete() 
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="DELETE FROM people WHERE peopleId=".$this->peopleId;
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
		
		$sentencia="SELECT * FROM people";
		if($this->peopleId!=NULL || $this->firstName!=NULL || $this->lastName!=NULL || $this->dni!=NULL || $this->cuil!=NULL || $this->birthDate!=NULL || $this->gender!=NULL || $this->cellPhone=NULL || $this->email!=NULL || $this->dateUpdate!=NULL || $this->userUpdate!=NULL )
		{
			$sentencia.=" WHERE ";
		
		if($this->peopleId!=NULL)
		{
			$sentencia.=" peopleId=$this->peopleId && ";
		}
		
		
		if($this->firstName!=NULL)
		{
			$sentencia.=" firstName LIKE '%$this->firstName%' && ";
		}
		
		if($this->lastName!=NULL)
		{
			$sentencia.=" lastName LIKE '%$this->lastName%' && ";
		}
				
		if($this->dni!=NULL)
		{
			$sentencia.=" dni = $this->dni && ";
		}
		
		if($this->cuil!=NULL)
		{
			$sentencia.=" cuil LIKE '%$this->cuil%' && ";
		}
		
		if($this->birthDate!=NULL)
		{
			$sentencia.=" birthDate LIKE '%$this->birthDate%' && ";
		}
		
		if($this->gender!=NULL)
		{
			$sentencia.=" gender = '$this->gender' && ";
		}
		
		if($this->cellPhone!=NULL)
		{
			$sentencia.=" cellPhone LIKE '%$this->cellPhone%' && ";
		}
		
		if($this->email!=NULL)
		{
			$sentencia.=" email LIKE '%$this->email%' && ";
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
		
		$sentencia.="  ORDER BY lastName";	
		
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