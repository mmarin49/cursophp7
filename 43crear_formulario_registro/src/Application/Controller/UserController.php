<?php
/**
 * Created by PhpStorm.
 * User: iparra
 * Date: 20/3/16
 * Time: 9:11
 */

namespace Application\Controller;

use Twig_Environment;

class UserController
{
    private $twig;

    public function __construct(Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function login()
    {
        echo $this->twig->render("login.twig");
    }

    public function registro()
    {
        echo $this->twig->render("registro.twig");
    }
}