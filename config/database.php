<?php
	
	/**
	 * 
	 * Conexion a la base de datos
	 * 
	*/

	class Conectar {
		
		public static function conexion(){
			$conexion = new mysqli(
				"localhost", 
				"root", 
				"", 
				"tiendaregalos"
			);
			return $conexion;
		}
	}
?>