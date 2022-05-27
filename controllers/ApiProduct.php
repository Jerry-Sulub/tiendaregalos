<?php

class ApiProductController
{

    public function __construct()
    {
        require_once 'models/Productos.php';
    }

    public function index()
    {
        header('Content-Type: application/json');
        switch($_SERVER['REQUEST_METHOD'])
        {
            case 'GET' :
                if(isset($_GET['id']))
                {
                    $this->getProduct($_GET['id']);
                }else{
                    $this->getProducts();
                }
                break;
            case 'POST' :
                $this->addProduct();
                break;
            case 'PUT' :
                $this->updateProduct($_GET['id']);
                break;
            case 'DELETE' :
                $this->deleteProduct($_GET['id']);
                break;
        }


    }

    /**
     *
     * @requestMethod GET
     * @return void
     */
    public function getProducts()
    {
        $products = new ProductosModel();
        $data = $products->getProducts();
        header("HTTP/1.1 200 OK");
        echo json_encode($data);
    }

    /**
     *
     * @requestMethod GET
     * @param $id
     * @return void
    */
    public function getProduct($id)
    {
        $products = new ProductosModel();
        $data = $products->getProduct($id);
        header("HTTP/1.1 200 OK");
        echo json_encode($data);
    }

    /**
     * @requestMethod POST
     * @return void
     */
    public function addProduct()
    {
        $product = new ProductosModel();
        $_POST=json_decode(file_get_contents('php://input'),true);
        $status = $product->addProduct(
            nombre: $_POST['nombre'],
            descripcion: $_POST['descripcion'],
            piezas: $_POST['piezas'],
            precio: $_POST['precio'],
            img: $_POST['img'],
            tipo: $_POST['tipo']
        );
        $msg = $status ? 'Guardado de manera satisfactoria': 'Error al guardar';
        $dat = [
            'msg' => $msg
        ];
        header("HTTP/1.1 200 OK");
        echo json_encode($dat);
    }

    /**
     * @requestMethod PUT
     * @param $id
     * @return void
     */
    public function updateProduct($id)
    {
        $product = new ProductosModel();
        $_PUT=json_decode(file_get_contents('php://input'),true);
        $status = $product->updateProduct(
            id: $id,
            nombre: $_PUT['nombre'],
            descripcion: $_PUT['descripcion'],
            piezas: $_PUT['piezas'],
            precio: $_PUT['precio'],
            img: $_PUT['img'],
            tipo: $_PUT['tipo']
        );
        $msg = $status ? 'Actualización satisfactoria': 'Error al actualizar';
        $dat = [
            'msg' => $msg
        ];
        header("HTTP/1.1 200 OK");
        echo json_encode($dat);
    }

    /**
     * @requestMethod DELETE
     * @param $id
     * @return void
     */
    public function deleteProduct($id)
    {
        $product = new ProductosModel();
        $status = $product->deleteProduct($id);
        $msg = $status ? 'Borrado satisfactoriamente': 'Error al borrar';
        $dat = [
            'msg' => $msg
        ];
        header("HTTP/1.1 200 OK");
        echo json_encode($dat);
    }
}