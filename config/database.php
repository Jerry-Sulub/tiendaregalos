<?php
	
	/**
	 * 
	 * Conexion a la base de datos
	 * 
	*/

	class Conectar {
	
		public static function conexion(){
			
			$conexion = new mysqli("localhost", "root", "", "anadru");
			return $conexion;
			
			if(!$conexion){
				echo'
				<script>
					alert("Error al conectar a la base de datos");
					window.history.go(-1);
				</script>
				';
				}
		}
	}
?>