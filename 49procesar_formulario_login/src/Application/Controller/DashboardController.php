<?php
/**
 * Created by PhpStorm.
 * User: Manel
 * Date: 10/02/2018
 * Time: 20:52
 */

namespace Application\Controller;

use Twig_Environment;

class DashboardController
{
    private $twig;

    public function __construct(Twig_Environment $twig)
    {
        if(!isset($_SESSION["email"]))
        {
            header("Location: http://localhost:9000/login");
        }
        $this->twig = $twig;
    }
    public function index()
    {
        echo $this->twig->render("dashboard.twig", ["session"=>$_SESSION]);
    }
}