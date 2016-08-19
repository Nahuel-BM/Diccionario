<?php
namespace core;

include_once "./api/application/config/config.php";



/**
* 
*/
class Core {

private $_DB;

	
	function __construct()	{
			$this->_DB = $this::conectarDB();
	}

	private function conectarDB(){
		if(!isset($this->conexion)){  
			$conexion = mysqli_connect(SERVER, USER,PASSWORD, DB) or die("Error de conexion a la base de datos.");

				return $conexion;	
		}
	}

	public function consulta($consultaFiltrada){  
	
	
if (!$this->_DB->set_charset('utf8')) {
    die("Error cargando el conjunto de caracteres utf8: ". $mysqli->error);
    exit;
}

	$resultado = mysqli_query($this->_DB, $consultaFiltrada);  
			if(!$resultado){  
				echo 'MySQL Error: ' . mysqli_error($this->_DB).'<br>'.$consulta;  
				exit;  
			}  
		return $resultado;   
	}  

	public function fetch_array($consulta){   
		return mysqli_fetch_assoc($consulta);  
	}  

	public function num_rows($consulta){   
		return mysqli_num_rows($consulta);  
	}  

	public function close(){ 
		if ($this->_DB){ 
			return mysqli_close($this->_DB); 
		} 
	}  

	public function getDB(){   
		return $this->_DB;  
	}

}


