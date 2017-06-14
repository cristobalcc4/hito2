<?php
abstract class Conectar{

	private $mysqli;

	public function conectar(){
		$this->mysqli = mysqli_connect("localhost","root","","fisdb");
		return $this->mysqli;
	}

	public function setNames(){

		return $this->mysqli->query("SET NAMES 'utf8'");
	}


}


?>







