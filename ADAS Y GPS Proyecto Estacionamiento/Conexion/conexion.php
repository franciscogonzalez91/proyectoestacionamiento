<?php
/**
 * Clase Conexion
 */
 class Conexion
 {
 	private $mysqliCon;
 	private $strConexion = array('127.0.0.1', 'sa', 'myadminadministrador', 'estacionamiento'); 

 	function __construct(){
 		$this->conectar();
 	}

 	public function __clone(){ }

 	public static function getInstance(){

 	}

 	private function conectar(){
 		$this->mysqliCon = mysqli_connect($this->strConexion[0], $this->strConexion[1], $this->strConexion[2], $this->strConexion[3]);
 		if (!$this->mysqliCon) {
 			echo 'Error: ' . mysqli_connect_error();
 		}
 	}

 	private public function ejecutarQuery($query){
 		
 	} 
?>