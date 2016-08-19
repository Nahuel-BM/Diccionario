<?php
namespace core;

include_once "./api/application/controller/ControladorDiccionario.class.php";


$PalabraBuscada = substr(filter_input(INPUT_GET, 'p', FILTER_SANITIZE_STRING),0,32);



if(isset($PalabraBuscada)){
//Si se esta accediendo a la api..
	if(is_string($PalabraBuscada)){
		$ControladorDiccionario = new ControladorDiccionario();
		$ControladorDiccionario->buscarPalabra($PalabraBuscada);	
	}

}else{
//Info del "Proyecto". (Landing Page)..
}
