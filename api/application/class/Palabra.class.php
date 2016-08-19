<?php

namespace core;

include_once "Core.class.php";



/**
* 
*/

spl_autoload_register(function ($nombre) {
    include_once $nombre.".class.php";
});


class Palabra extends Core{

	private $_id;
	private $_nombre;
	private $_significado;

	
	function __construct()	{
      parent::__construct();
    }


	public function get_Nombre(){
		return $this->_nombre;
	}

	public function get_Id(){
		return $this->_id;
	}

	public function get_Significado(){
		return $this->_significado;
	}
}

