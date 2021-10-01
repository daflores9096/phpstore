<?php
class Producto {

    public $codigo;
    public $producto;
    public $pcompra;
    public $pventa;

    public function __construct($codigo, $producto, $pcompra, $pventa){
        $this->codigo = $codigo;
        $this->producto = $producto;
        $this->pcompra = $pcompra;
        $this->pventa = $pventa;
    }

    public static function listar(){

        $listaProductos = [];
        $conexion = BD::crearInstancia();
        $sql = $conexion->query("SELECT * FROM productos ORDER BY id DESC");

        foreach ($sql->fetchAll() as $producto){

            $listaProductos[] = new Producto($producto['codigo'],$producto['producto'],$producto['pcompra'],$producto['pventa']);
        }

        return $listaProductos;
    }

    public static function crear($codigo, $producto, $pcompra, $pventa){

        $conexion = BD::crearInstancia();
        $sql = $conexion->prepare("INSERT INTO productos (codigo, producto, pcompra, pventa) VALUES (?,?,?,?)");
        $sql->execute(array($codigo, $producto, $pcompra, $pventa));
    }

    public static function borrar($codigo){
        $conexion = BD::crearInstancia();
        $sql = $conexion->prepare("DELETE FROM productos WHERE codigo=?");
        $sql->execute(array($codigo));
    }

    public static function buscar($codigo){
        $conexion = BD::crearInstancia();
        $sql = $conexion->prepare("SELECT * FROM productos WHERE codigo=?");
        $sql->execute(array($codigo));
        $producto = $sql->fetch();
        return new Producto($producto['codigo'],$producto['producto'],$producto['pcompra'],$producto['pventa']);
    }

    public static function editar($codigo, $producto, $pcompra, $pventa){
        $conexion = BD::crearInstancia();
        $sql = $conexion->prepare("UPDATE productos SET codigo=?, producto=?, pcompra=?, pventa=? WHERE codigo=?");
        $sql->execute(array($codigo, $producto, $pcompra, $pventa, $codigo));
    }
}

?>