<?php   
include_once('c_conexion.php');
//include_once("includes/mod_cen/clases/maestro.php");

class Inventario
{
	private $inventario_id;
 	private $codigo;
 	private $nombre;
 	private $descripcion;
 	private $precio_unitario;
 	private $cantidad;
 	private $total;
 	private $estado;
 	private $observacion;
 	 
 	function __construct($inventario_id=NULL,$codigo=NULL,$nombre=NULL,$descripcion=NULL,$precio_unitario=NULL,$cantidad=NULL,$total=NULL,$estado=NULL,$observacion=NULL)
	{
			 //seteo los atributos
		 	$this->inventario_id = $inventario_id;
		 	$this->codigo = $codigo;
			$this->nombre =$nombre;
		 	$this->descripcion =$descripcion;		 	
		 	$this->precio_unitario = $precio_unitario;
		 	$this->cantidad = $cantidad;
		 	$this->total = $total;
		 	$this->estado=$estado;
		 	$this->observacion = $observacion;
				 
	}
	
	public function agregar()
	{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		$sentencia="INSERT INTO inventario (inventario_id,codigo,nombre,descripcion,precio_unitario,cantidad,total,estado,observacion)
		VALUES (NULL,NULL,'". $this->nombre."','". $this->descripcion."',".$this->precio_unitario.",".$this->cantidad.",". $this->total.",'". $this->estado."','". $this->observacion."');";
		//echo $sentencia;
		if ($conexion->query($sentencia)) {
			return 1;
		
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
	}
		 
	public function editar()
	{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="UPDATE inventario SET codigo='$this->codigo', nombre ='$this->nombre', descripcion = '$this->descripcion',precio_unitario = $this->precio_unitario, cantidad = $this->cantidad, total = $this->total,estado = $this->estado, observacion = '$this->observacion' WHERE inventario_id = $this->inventario_id";
		//echo $sentencia;			
		if ($conexion->query($sentencia)) {
			return 1;
		}/*else
		{
			$consulta="SELECT * FROM inventarios WHERE inventario_id<>'$this->inventario_id' AND nombre='$this->nombre'";
							
			if (mysqli_num_rows($conexion->query($consulta))>0)
			{
				echo "El nombre, ingresado ya existe"."<br><br>";
				echo "<a href='?men=inventarios&id=3&inventario_id=".$this->inventario_id."'>Regresar</a>";	
					
			}
			$consulta="SELECT * FROM inventarios WHERE inventario_id<>'$this->inventario_id' AND descripcion='$this->descripcion'";
			$resultado=$conexion->query($consulta);
			if (mysqli_num_rows($conexion->query($consulta))>0)
			{
				echo "El descripcion, ingresado ya existe"."<br><br>";
				echo "<a href='?men=inventarios&id=3&inventario_id=".$this->inventario_id."'>Regresar</a>";		
			}	
			//return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}*/
	}

	public function eliminar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="DELETE FROM inventarios WHERE inventario_id=".$this->inventario_id;
		if ($conexion->query($sentencia)) {
			header("Location:index.php?id=1");
			
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
	
	}
	
	public static function camposet($campo,$tabla){
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		$sentencia="SHOW COLUMNS FROM $tabla LIKE '$campo'";
		$query=$conexion->query($sentencia);
		$result = mysqli_fetch_assoc($query);
		$result=$result['Type'];
		$result=substr($result, 5, strlen($result)-5);
		$result=substr($result, 0, strlen($result)-2);
		$result = explode("','",$result);
		return $result;
	}

	public function buscar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM inventario";
		if($this->inventario_id!=NULL || $this->precio_unitario!=NULL || $this->nombre!=NULL || $this->nombre!=NULL || $this->descripcion!=NULL || $this->total!=NULL || $this->observacion!=NULL || $this->direccion=NULL || $this->email!=NULL || $this->fecha_mod!=NULL )
		{
			$sentencia.=" WHERE ";
		
		if($this->inventario_id!=NULL)
		{
			$sentencia.=" inventario_id=$this->inventario_id && ";
		}
		
		
		if($this->precio_unitario!=NULL)
		{
			$sentencia.=" precio_unitario LIKE '%$this->precio_unitario%' && ";
		}
		
		if($this->nombre!=NULL)
		{
			$sentencia.=" nombre LIKE '%$this->nombre%' && ";
		}
				
		if($this->nombre!=NULL)
		{
			$sentencia.=" nombre LIKE '%$this->nombre%' && ";
		}
		
		if($this->descripcion!=NULL)
		{
			$sentencia.=" descripcion LIKE '%$this->descripcion%' && ";
		}
		
		if($this->total!=NULL)
		{
			$sentencia.=" total LIKE '%$this->total%' && ";
		}
		
		if($this->observacion!=NULL)
		{
			$sentencia.=" observacion LIKE '%$this->observacion%' && ";
		}
		
		if($this->direccion!=NULL)
		{
			$sentencia.=" direccion LIKE '%$this->direccion%' && ";
		}
		
		if($this->email!=NULL)
		{
			$sentencia.=" email LIKE '%$this->email%' && ";
		}
		
		if($this->fecha_mod!=NULL)
		{
			$sentencia.=" fecha_mod LIKE '%$this->fecha_mod%' && ";
		}
		
		
		
		$sentencia=substr($sentencia,0,strlen($sentencia)-3);	
		
		}
		
		$sentencia.="  ORDER BY precio_unitario,nombre";	
		
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

