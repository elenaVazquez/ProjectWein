<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class WineController extends CI_Controller {


	public function addWine(){
		//aquí s'ha de cridar a wine_model, a la llibreria de Vuforia per afegir el target i a una funció
		//que guardi la imtge en un directori en el propi servidor
	}

	public function editWine(){
		//enviar tots els elements excepte la imatge
	}

	public function deleteWine(){
		//clickes al botó delete i passem per post el id del vi, haurà de cridar a la funció de delete del model
		//a la de la llibreria vuforia i eliminar la imatge del directori
	}

	public function getWine(){
		//quan cliquem damunt d'un dels elemnts de la llista, passem per post el id del vi

	}

	public function getAllWines(){
		//passem per post el id del wineCellar i es fa un get de tots (aquí faria un get del id i del nom)

	}

	public function modifyImg(){
		//molt important!! ha de tornar a connectar-se amb la api de vuforia i validar nova imatge
	}


}

?>