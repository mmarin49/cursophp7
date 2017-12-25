<?php

error_reporting(E_ALL);
ini_set('display_errors','1');

Class Producto
{
    private $nombre;
    private $qty;

    private $opciones=[];

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }




    public function __set($name, $value)
    {
        $this->opciones[$name]=$value;
    }
}

$producto= new Producto();
$producto->setNombre("Producto 1");
$producto->setQty("3");
$producto->precio=12.50;
var_dump($producto);