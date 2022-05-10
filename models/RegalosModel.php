<?php

	class tiendaRegalos_model {
		private $db;
		private $regalos;
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->regalos = array();
		}

        public function get_regalos()
		{
			$sql = "SELECT * FROM productos";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->regalos[] = $row;
			}
			return $this->regalos;
		}

		public function eliminar($id){
			$link = $this->db->query("SELECT img FROM productos WHERE ID = '$id'");
			$result = $link->fetch_assoc()['img'];
			unlink($result);
			$resultado = $this->db->query("DELETE FROM productos WHERE ID = '$id'");

		}
	}
?>