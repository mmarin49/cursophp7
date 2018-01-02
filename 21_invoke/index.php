<?php
class Blog
{
    public function __invoke($nombre)
    {
        echo "El nombre del blog de la classe ".__CLASS__." es ".$nombre;
    }
}

$blog= new Blog();
$blog("Super Application");
var_dump(is_callable($blog));