<?php

class AdminController
{

    /**
     * 
     * Iniciar con el modelo
     * 
    */
    public function __construct()
    {
        require_once 'models/Productos.php';
    }

    /**
     * 
     * Vista principal del administrador
     * 
    */
    public function index()
    {
        $productos = new ProductosModel();
	    $data["productos"] = $productos->getProducts();
        require_once 'views/admin/home.php';
    }

    /**
     * 
     * Agregar nuevo producto
     * 
    */
    public function nuevo()
    {  
        require_once "views/admin/addproductos.php";
    }

    public function guardar()
    {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $piezas = $_POST['piezas'];
        $precio = $_POST['precio'];
        $tipo = $_POST['tipo'];

        $temp = $_FILES['imagen']['tmp_name'];
        $rutaServer = 'resources/';
        $image_name = $_FILES['imagen']['name'];

        date_default_timezone_set('UTC');
        $nameUnic = date('Y-m-d-h-i-s') . $image_name;

        $tipofoto = $_FILES['imagen']['type'];

        if ($tipofoto == "image/jpeg" or $tipofoto == "image/png" or $tipofoto == "image/gif" or $tipofoto == "image/jpg" or $image_name == "") {
            move_uploaded_file($temp, $rutaServer . $nameUnic);
        }

        $obj = new ProductosModel();
        $obj->addProduct(
            $nombre,
            $descripcion,
            $piezas,
            $precio,
            $rutaServer . $nameUnic,
            $tipo
        );
        $this->index();
    }

    /**
     * 
     * Borrar Producto
     * 
    */
    public function borrar()
    {
        $regalos = new ProductosModel();
		$data["regalos"] = $regalos->getProducts();
		require_once "views/admin/eliminar.php";
    }

    public function eliminar($id)
    {
        $regalos = new ProductosModel();
        $regalos->deleteProduct($id);
        $this->index();
    }

    /**
     * 
     * Modificar producto
     * 
    */
    public function modificar($id)
    {
        $productos = new ProductosModel();

        $data["id"] = $id;
        $data["productos"] = $productos->getProduct($id);
        $data["regalos"] = "Regalos";
        require_once "views/admin/actualizar.php";
    }
    public function actualizar()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $piezas = $_POST['piezas'];
        $precio = $_POST['precio'];
        $tipo = $_POST['tipo'];

        if(!isset($_POST['img']))
        {
            $img = ProductosModel::getImage($id);
            $productos = new ProductosModel();
            $productos->updateProduct($id, $nombre, $descripcion, $piezas, $precio, $img, $tipo);
        }else{
            $img = $_POST['img'];
            $temp = $_FILES['imagen']['tmp_name'];
            $rutaServer = 'resources/';
            $image_name = $_FILES['imagen']['name'];

            date_default_timezone_set('UTC');
            $nameUnic = date('Y-m-d-h-i-s') . $image_name;

            $tipofoto = $_FILES['imagen']['type'];

            if ($tipofoto == "image/jpeg" or $tipofoto == "image/png" or $tipofoto == "image/gif" or $tipofoto == "image/jpg" or $image_name == "") {
                move_uploaded_file($temp, $rutaServer . $nameUnic);
            }
            $productos = new ProductosModel();
            $productos->updateProduct($id, $nombre, $descripcion, $piezas, $precio, $img, $tipo);
        }
        $this->index();
    }
}