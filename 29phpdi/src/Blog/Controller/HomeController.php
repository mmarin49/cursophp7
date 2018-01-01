<?php
namespace Blog\Controller;

use Blog\Model\ArticleRepository;
use Twig_Environment;

class HomeController
{
    private $repository;

    private $twig;

    public function __construct(ArticleRepository $articleRepository, Twig_Environment $twig)
    {

    }
    public function index()
    {
        echo "Hola desde ".__CLASS__;
    }
    public function hola($nombre)
    {
        echo "Hola ".$nombre;
    }
}