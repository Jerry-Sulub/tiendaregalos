<?php

class HomeController {

    public function __construct()
    {
        require_once "models/RegalosModel.php";
    }

    public function index()
    {
			$regalos = new tiendaRegalos_model();
			$data["regalos"] = $regalos->get_regalos();
			require_once "views/public/eliminar.php";
    }

    public function eliminar($id){
        $regalos = new tiendaRegalos_model();
        $regalos->eliminar($id);
        $this->index();
    }

}
?>
