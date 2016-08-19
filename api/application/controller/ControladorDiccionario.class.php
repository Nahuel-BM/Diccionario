<?php

namespace core;

include_once "./api/application/class/mysql2json.class.php";
include_once "./api/application/class/Core.class.php";


/** 
* 
*/


class ControladorDiccionario extends Core{

		
	function __construct()	{
		parent::__construct();
	}


	public function buscarPalabra($palabra){
		
		$palabraFiltrada = parent::getDB()->real_escape_string($palabra);

		$SQL = "SELECT pal.nombre, sig.definicion FROM definicion_de_palabra AS defpal, definicion AS sig, palabra AS pal WHERE defpal.idDefinicion = sig.id AND pal.nombre = '".$palabraFiltrada."';";


			$result = parent::consulta($SQL);
			self::getJson($result);

}



	private function getJson($resultSql){

		$num = parent::num_rows($resultSql);

		if($num>0){
			$objJSON = new mysql2json();
			header('Content-Type: application/json; charset=UTF-8');
			print(trim($objJSON->getJSON($resultSql,$num)));
		}

	}

}
