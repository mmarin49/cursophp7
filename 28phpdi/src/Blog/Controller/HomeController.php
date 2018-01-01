<?php
namespace Blog\Controller;

class HomeController
{
    public function index()
    {
        echo "Hola desde " . __CLASS__;
    }

    public function hola($nombre)
    {
        echo "Hola " . $nombre;
    }
}