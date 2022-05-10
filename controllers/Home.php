<?php

class HomeController {

    public function __construct()
    {
        //Agregar el archivo de modelo
        require_once "models/Productos.php";
    }

    public function index()
    {
        $productos = new ProductosModel();
	    $data["productos"] = $productos->getProductos();

        require_once "views/public/home.php";
    }
    public function panel()
    {
        $productos = new Productosmodel();
	    $data["productos"] = $productos->getProductos();

        require_once "views/admin/panel.php";
    }

    /* Vista */
    public function nuevo()
    {
        require_once "views/admin/addproductos.php";
    }
   /*  public function buscar()
    {
        $productos = new Anadru_model();
        $data["productos"] = $productos->search_producto($busqueda);
        if(isset($_GET['enviar'])){
            $busqueda = $_GET['buscador'];
        }
        require_once "views/public/home.php";
    } */

    public function guardar()
    {
        /**Entrada de datos */
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $piezas = $_POST['piezas'];
        $precio = $_POST['precio'];
        $tipo = $_POST['tipo'];

        $temp = $_FILES['imagen']['tmp_name'];
        $rutaServer = 'resources/';
        $image_name = $_FILES['imagen']['name'];

        date_default_timezone_set('UTC');
        $nameUnic = date('Y-m-d-h-i-s').$image_name;

        $tipofoto = $_FILES['imagen']['type'];

        if($tipofoto == "image/jpeg" or $tipofoto == "image/png" or $tipofoto == "image/gif" or $tipofoto == "image/jpg" or $image_name == "") {
            move_uploaded_file ($temp, $rutaServer.$nameUnic);
        }

        $obj = new ProductosModel();
        $obj->addProduct(
            $nombre,
            $descripcion,
            $piezas,
            $precio,
            $rutaServer.$nameUnic,
            $tipo
        );
    }

    public function delete()
    {
        $regalos = new ProductosModel();
		$data["regalos"] = $regalos->getProductos();
		require_once "views/admin/eliminar.php";
    }

    public function eliminar($id){
        $regalos = new ProductosModel();
        $regalos->delete($id);
        $this->index();
    }
}

