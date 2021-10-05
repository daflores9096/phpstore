<?php
include_once "models/producto.php";
include_once "conexion.php";

BD::crearInstancia();

class ProductsController {
    public function lista(){
        $productos = Producto::listar();
        include_once "views/products/lista.php";
    }

    public function crear(){
        if ($_POST){
            //print_r($_POST);
            $codigo = $_POST['codigo'];
            $producto = $_POST['producto'];
            $pcompra = $_POST['pcompra'];
            $pventa = $_POST['pventa'];

            Producto::crear($codigo, $producto, $pcompra, $pventa);
            header('Location:?controller=products&action=lista');
        }
        include_once "views/products/crear.php";

    }

    public function borrar(){
        $codigo = $_GET['codigo'];
        Producto::borrar($codigo);
        header('Location:?controller=products&action=lista');
    }

    public function editar(){
        $codigo = $_GET['codigo'];
        $producto = Producto::buscar($codigo);

        if ($_POST){
            $codigo = $_POST['codigo'];
            $producto = $_POST['producto'];
            $pcompra = $_POST['pcompra'];
            $pventa = $_POST['pventa'];

            Producto::editar($codigo, $producto, $pcompra, $pventa);
            //header('Location:?controller=products&action=editar&codigo='.$codigo);//quedarse en el form de editar
            header('Location:?controller=products&action=lista');//redireccionar a la lista
        }

        include_once "views/products/editar.php";
    }


}