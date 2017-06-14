<?php
require_once ("conectar.php");

class Usuarios extends conectar{

	private $db;

	public function __construct(){

		$this->db=parent::conectar();
		parent::setNames();
	}

	public function getDatosG(){

		$sql="
			select
			Descripcion,id_gym,Imagen,Nombre
			from
			gym
		";

		$datos = $this->db->query($sql);
		$arreglo = array();

		while ($reg=$datos->fetch_object()){

			$arreglo[] = $reg;

		}
		return $arreglo;
	}
	public function getDatosC(){

		$sql="
			select
			id_cancha,id_gym,Nombre,Precio
			from
			canchas
		";

		$datos = $this->db->query($sql);
		$arreglo = array();

		while ($reg=$datos->fetch_object()){

			$arreglo[] = $reg;

		}
		return $arreglo;
	}
}
?>