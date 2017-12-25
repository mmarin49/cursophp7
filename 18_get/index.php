<?php
error_reporting(E_ALL);
ini_set('display_errors','1');

class Producto
{
    public $nombre;
    public $qty;

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

    /**
     * @param $name
     */
    public function __get($name)
    {
        if(!property_exists($this, $name))
        {
            die("La propiedad {$name} no existe en la classe ". __CLASS__);
        }
        return $this->{$name};
    }
}

$producto = new Producto();
$producto->setNombre("Producto1");
$producto->setQty("5");
echo $producto->getNombre();
echo "<BR>";
echo $producto->getQty();
echo "<BR>";
echo $producto->price;