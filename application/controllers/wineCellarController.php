<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class WineCellarController extends CI_Controller {

	
	public function editWineCellar(){
		//si es modifica algun element si la imatge s'ha canviat s'ha de substituir al directori
	}

	public function addWineCellar(){
		//només un celler per usuari, per tan només la primera vegada podrà insertar el celler, després
		//només podrà editar-lo, és condició necessària que primer inserti el celler i després els vins i events
		//l'aplicació no deixarà insertar vins ni events sense el celler
	}

	public function getWineCellar(){
		//passem el id d'usuari per a que retorni el celler
	}

	


}

?>